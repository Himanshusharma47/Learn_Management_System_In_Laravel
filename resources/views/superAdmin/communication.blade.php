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
                <h1>
                {{ session('success') }}
                </h1>
                @endif
                @if (Session('error'))
                <h1>
                    {{ session('error') }}
                </h1>
                @endif

                <h2 class="mt-4">Communication</h2>
                <div class="row mt-4">
                    <!-- Message Box Column -->
                    <div class="col-md-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Send Message to Teacher</h5>
                                <!-- Communication Form -->
                                <form method="post" action="{{ route('message.send')}}" >
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
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Add logic to fetch and display messages from the database -->
                                        <tr>
                                            <td>Sender 1</td>
                                            <td>Message 1</td>
                                            <td>
                                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#replyModal">Reply</button>
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sender 2</td>
                                            <td>Message 2</td>
                                            <td>
                                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#replyModal">Reply</button>
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </td>
                                        </tr>
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

<!-- Reply Message Modal -->
<div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="replyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="replyModalLabel">Reply to Sender</h5>
            </div>
            <div class="modal-body">
                <!-- Add logic to display sender name and time -->
                <p>Sender: Sender Name</p>
                <p>Time: Message Time</p>
                <div class="form-group">
                    <label for="replyMessageTextarea">Reply Message</label>
                    <textarea class="form-control" id="replyMessageTextarea" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send Reply</button>
            </div>
        </div>
    </div>
</div>

<!-- Add this script at the end of your HTML body or in a separate JavaScript file -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
