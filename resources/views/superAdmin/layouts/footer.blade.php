<!-- Add this at the end of your body tag -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
