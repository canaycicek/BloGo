</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8Z
aIJVT8EE2iyI61OV8e6
M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bo
otstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhc
TNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="<?= $_ENV["URL_PREFIX"] ?>/assets/script.js"></script>
<script src="<?= $_ENV["URL_PREFIX"] ?>/tinymce/js/tinymce/tinymce.min.js"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
    tinymce.init({
        selector: 'textarea',
        branding: false,
        promotion: false,
        plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        images_upload_url: 'upload.php',
        images_upload_handler: function(blobInfo, success, failure){

        },
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',

    });
</script>
</body>

</html>