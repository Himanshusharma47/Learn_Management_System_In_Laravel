@extends('superAdmin.layouts.main')

@section('communication-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('superAdmin.layouts.sidebar')

        <!-- Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <!-- Communication Form and Display Messages Table -->
            <div class="container-fluid">
                @if (Session('success'))
                    <h1>{{ session('success') }}</h1>
                @endif
                @if (Session('error'))
                    <h1>{{ session('error') }}</h1>
                @endif

                <h2 class="mt-4">Communication</h2>
                <div class="row mt-4">
                    <!-- Message Box Column -->
                    <div class="col-md-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Send Message to Teacher</h5>
                                <!-- Communication Form -->
                                <form method="post" action="{{ route('send.message') }}" >
                                    @csrf
                                    <input type="hidden" name="sender_id" value="{{ Auth::id() }}">
                                    <div class="form-group mb-3">
                                        <label for="teacherSelect">Recipient</label>
                                        <select name="receiver_id" class="form-control" id="teacherSelect">
                                            <option selected>Teachers</option>
                                            @foreach ($teacherData as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="messageTextarea">Message</label>
                                        <textarea class="form-control" name="content" id="messageTextarea" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>

                   <!-- Display Messages Table Column -->
                    <div class="col-md-8">
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
                                        <!-- Add logic to fetch and display messages from the database -->
                                        @foreach ($messages as $message)
                                            <tr>
                                                <td>{{ $message->sender->name }}</td>
                                                <td>{{ $message->message }}</td>
                                                <td> {{ $message->created_at->format('Y-m-d H:i:s') }}</td>
                                                <td>
                                                    <a href="{{ url('message-view/'.$message->sender->id) }}" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#replyModal{{ $message->id }}">View</a>

                                                    <button class="btn btn-danger btn-sm">Delete</button>
                                                </td>
                                            </tr>

                                            <!-- Reply Modal -->
                                            <div class="modal fade" id="replyModal{{ $message->id }}" tabindex="-1" role="dialog" aria-labelledby="replyModalLabel{{ $message->id }}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="replyModalLabel{{ $message->id }}">Chat with {{ $message->sender->name }}</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            @if (isset($userMessages))
                                                                @foreach ($userMessages as $msg)
                                                                <p><strong>{{ $msg->created_at->format('H:i') }}:</strong> {{ $msg->message }} </p>
                                                                @endforeach
                                                            @endif

                                                            <!-- Reply Form -->
                                                            <form method="post" action="{{ route('message.reply') }}">
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

@endsection
