

<p>design and developed by <a href="https://milankundu-portfolio.netlify.app/">milan</a></p>
</main>
</div>
<script src="<?= base_url('admin_assets/script.js'); ?>"></script>
<script type="text/javascript">
$(function() {
    $("#field-service_title").on("input", function() {
        var slugtext = $(this).val();

        // Remove unwanted characters
        slugtext = slugtext.replace(/[?\/\\|@#!&%+\-\*]/g, '');

        // Replace spaces with hyphens and convert to lowercase
        var str = slugtext.replace(/\s+/g, '-').toLowerCase();

        $("#field-service_slug").val(str);
    });
});
</script>

<script type="text/javascript">
$(function() {
    $("#field-blog_title").on("input", function() {
        var slugtext = $(this).val();

        // Remove unwanted characters
        slugtext = slugtext.replace(/[?\/\\|@#!&%+\-\*]/g, '');

        // Replace spaces with hyphens and convert to lowercase
        var str = slugtext.replace(/\s+/g, '-').toLowerCase();

        $("#field-blog_slug").val(str);
    });
});
</script>
<script type="text/javascript">
$(function() {
    $("#field-title").on("input", function() {
        var slugtext = $(this).val();

        // Remove unwanted characters
        slugtext = slugtext.replace(/[?\/\\|@#!&%+\-\*]/g, '');

        // Replace spaces with hyphens and convert to lowercase
        var str = slugtext.replace(/\s+/g, '-').toLowerCase();

        $("#field-product_slug").val(str);
    });
});
</script>
</body>

</html>
