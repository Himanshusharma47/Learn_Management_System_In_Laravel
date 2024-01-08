<!-- Add this at the end of your body tag -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        var popup = $('#popup');

        popup.fadeIn();

        setTimeout(function() {
            popup.fadeOut();
        }, 2000);
    });
</script>

</body>
</html>
