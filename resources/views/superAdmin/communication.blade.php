@extends('superAdmin.layouts.main')

@section('communication-section')

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">

        @include('superAdmin.layouts.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Communication</h1>
            </div>

            <!-- Discussion Forum -->
            <div class="card mb-4">
                <div class="card-header">
                    Discussion Forum
                </div>
                <div class="card-body">
                    <!-- Add content for the Discussion Forum -->
                    <div id="discussion-forum">
                        <!-- Forum threads go here -->
                    </div>

                    <!-- Add new thread button -->
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newThreadModal">
                        Start New Thread
                    </button>
                </div>
            </div>

            <!-- Message Center -->
            <div class="card mb-4">
                <div class="card-header">
                    Message Center
                </div>
                <div class="card-body">
                    <!-- Add content for the Message Center -->
                    <div id="message-center">
                        <!-- Messages go here -->
                    </div>

                    <!-- Add new message button -->
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newMessageModal">
                        New Message
                    </button>
                </div>
            </div>

            <!-- New Thread Modal -->
            <div class="modal fade" id="newThreadModal" tabindex="-1" aria-labelledby="newThreadModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="newThreadModalLabel">Start New Thread</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Add form for starting a new thread -->
                            <form>
                                <div class="mb-3">
                                    <label for="threadTitle" class="form-label">Thread Title</label>
                                    <input type="text" class="form-control" id="threadTitle" required>
                                </div>
                                <div class="mb-3">
                                    <label for="threadContent" class="form-label">Thread Content</label>
                                    <textarea class="form-control" id="threadContent" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Post Thread</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New Message Modal -->
            <div class="modal fade" id="newMessageModal" tabindex="-1" aria-labelledby="newMessageModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="newMessageModalLabel">New Message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Add form for sending a new message -->
                            <form>
                                <div class="mb-3">
                                    <label for="messageRecipient" class="form-label">Recipient</label>
                                    <input type="text" class="form-control" id="messageRecipient" required>
                                </div>
                                <div class="mb-3">
                                    <label for="messageContent" class="form-label">Message Content</label>
                                    <textarea class="form-control" id="messageContent" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>

<!-- Add this script at the end of your HTML body or in a separate JavaScript file -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Dummy data for discussion forum and message center
    const discussionForumData = [
        { title: 'Thread 1', content: 'Content of thread 1' },
        { title: 'Thread 2', content: 'Content of thread 2' },
    ];

    const messageCenterData = [
        { sender: 'Teacher A', content: 'Message content from Teacher A' },
        { sender: 'Teacher B', content: 'Message content from Teacher B' },
    ];

    // Function to update discussion forum content
    function updateDiscussionForum() {
        const forumContainer = $('#discussion-forum');
        forumContainer.empty();

        discussionForumData.forEach(thread => {
            const threadElement = $('<div class="mb-3"><strong>' + thread.title + '</strong><p>' + thread.content + '</p></div>');
            forumContainer.append(threadElement);
        });
    }

    // Function to update message center content
    function updateMessageCenter() {
        const messageContainer = $('#message-center');
        messageContainer.empty();

        messageCenterData.forEach(message => {
            const messageElement = $('<div class="mb-3"><strong>' + message.sender + '</strong><p>' + message.content + '</p></div>');
            messageContainer.append(messageElement);
        });
    }

    // Event listener for new thread button click
    $('#newThreadBtn').click(function () {
        // Show the new thread modal
        $('#newThreadModal').modal('show');
    });

    // Event listener for new message button click
    $('#newMessageBtn').click(function () {
        // Show the new message modal
        $('#newMessageModal').modal('show');
    });

    // Event listener for new thread form submission
    $('#newThreadModal form').submit(function (event) {
        event.preventDefault();

        const threadTitle = $('#threadTitle').val();
        const threadContent = $('#threadContent').val();

        discussionForumData.push({ title: threadTitle, content: threadContent });
        updateDiscussionForum();

        // Close the modal
        $('#newThreadModal').modal('hide');
    });

    // Event listener for new message form submission
    $('#newMessageModal form').submit(function (event) {
        event.preventDefault();

        const messageRecipient = $('#messageRecipient').val();
        const messageContent = $('#messageContent').val();

        messageCenterData.push({ sender: messageRecipient, content: messageContent });
        updateMessageCenter();

        // Close the modal
        $('#newMessageModal').modal('hide');
    });

    // Initial update to display existing data
    updateDiscussionForum();
    updateMessageCenter();
</script>


@endsection
