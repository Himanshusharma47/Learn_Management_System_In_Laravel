@extends('teacher.layouts.main')

@section('message-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('teacher.layouts.sidebar')

           <!-- Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <!-- Communication Form -->
            <div class="container-fluid">
                <h2 class="mt-4">Message</h2>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Send Message</h5>
                                <!-- Communication Form -->
                                <form action="{{ route('teacher.sendMessage') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="sender_id" value="{{ Auth::id() }}">
                                    <div class="form-group mb-3">
                                        <label for="teacherSelect">Select Recipient</label>
                                        <select class="form-control" name="receiver_id" id="teacherSelect">
                                            @foreach ($data as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="messageTextarea">Message</label>
                                        <textarea class="form-control" name="message" id="messageTextarea" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Display Messages Table -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Received Messages</h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sender Name</th>
                                            <th scope="col">Message</th>
                                            <th scope="col">Date&Time</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messageData as $message)
                                            <tr>
                                                <td>{{ $message->sender->name }}</td>
                                                <td>{{ $message->message }}</td>
                                                <td> {{ $message->created_at->format('Y-m-d H:i:s') }}</td>
                                                <td>
                                                    {{-- <a href="{{ url('teacher-message-view/'.$message->sender->id) }}" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#replyModal{{ $message->id }}">View</a> --}}
                                                    <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#replyModal" data-user-id="{{ $message->sender->id }}">View</a>
                                                    <button class="btn btn-danger btn-sm">Delete</button>
                                                </td>
                                            </tr>

                                            {{-- <!-- Reply Modal -->
                                            <div class="modal fade" id="replyModal{{ $message->id }}" tabindex="-1" role="dialog" aria-labelledby="replyModalLabel{{ $message->id }}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="replyModalLabel{{ $message->id }}">Reply to {{ $message->sender->name }}</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                             <!-- Display Sender Name, Time, and Message -->
                                                             <p><strong>Sender:</strong> {{ $message->sender->name }}</p>
                                                             <p><strong>Time:</strong> {{ $message->created_at->format('Y-m-d H:i:s') }}</p>
                                                             @if (isset($userMessages))
                                                                 @foreach ($userMessages as $msg)
                                                                 <p><strong>{{ $msg->created_at->format('H:i') }}:</strong> {{ $msg->message }} </p>
                                                                 @endforeach
                                                             @endif

                                                             <!-- Reply Form -->
                                                             <form method="post" action="{{ route('teacher.message.reply') }}">
                                                                 @csrf
                                                                 <input type="hidden" name="sender_id" value="{{ Auth::id() }}">
                                                                 <input type="hidden" name="receiver_id" value="{{ $message->sender->id }}">
                                                                 <div class="form-group">
                                                                     <label for="replyMessage"><b>Reply</b> </label>
                                                                     <textarea class="form-control" name="message" id="replyMessage" rows="3"></textarea>
                                                                 </div><br>
                                                                 <button type="submit" class="btn btn-primary btn-sm">Reply</button>
                                                             </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}

                                             <!-- Reply Modal -->
                                             <div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="replyModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="replyModalLabel">Chat History</h5>
                                                        </div>
                                                        <div class="modal-body" id="replyModalBody">
                                                            <!-- Chat history and reply form will be dynamically added here -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<!-- Include jQuery (if not already included) -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
$(document).ready(function() {
    $('.btn-warning').on('click', function() {
        var userId = $(this).data('user-id');

        // Make an Ajax request
        $.ajax({
            url: '{{ route('teacher.message.view', ['userid' => 0]) }}'.replace('0', userId),
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                // Update modal content with chat history
                var modalBody = $('#replyModalBody');
                modalBody.empty(); 

                if (response.userMessages.length > 0) {
                    $.each(response.userMessages, function(index, message) {
                        var createdAt = new Date(message.created_at);
                        var formattedTime = createdAt.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                        var messageHtml = '<span>' + formattedTime+'</span><p><strong>' + ':</strong> ' + message.message + '</p>';
                        modalBody.append(messageHtml);
                    });
                } else {
                    modalBody.html('<p>No chat history available.</p>');
                }

                // Append the reply form
                var replyForm = `
                    <form method="post" action="{{ route('teacher.message.reply') }}">
                        @csrf
                        <input type="hidden" name="sender_id" value="{{ Auth::id() }}">
                        <input type="hidden" name="receiver_id" value="${userId}">
                        <div class="form-group">
                            <label for="replyMessage"><b>Reply</b></label>
                            <textarea class="form-control" name="message" id="replyMessage" rows="3"></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-sm">Reply</button>
                    </form>`;

                modalBody.append(replyForm);

                // Show the modal
                $('#replyModal').modal('show');
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
});
</script>

<!-- Add this script at the end of your HTML body or in a separate JavaScript file -->
{{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
