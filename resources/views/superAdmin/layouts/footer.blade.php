<!-- Add this at the end of your body tag -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Bootstrap JS and dependencies (Popper.js and jQuery) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Call the showNotificationModal function when the "Notifications" link is clicked -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('notification-link').addEventListener('click', function () {
            showNotificationModal();
        });
    });
</script>

</body>
</html>
