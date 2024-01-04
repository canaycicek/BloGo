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



<script>
    // Image upload handler callback function
    const image_upload_handler_callback = (blobInfo, progress) => new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', "upload.php");

        xhr.upload.onprogress = (e) => {
            progress(e.loaded / e.total * 100);
        };

        xhr.onload = () => {
            if(xhr.status === 403){
                reject({message: 'HTTP Error: ' + xhr.status, remove: true});
                return;
            }

            if(xhr.status < 200 || xhr.status >= 300){
                reject('HTTP Error: ' + xhr.status);
                return;
            }

            const json = JSON.parse(xhr.responseText);

            if(!json || typeof json.location != 'string'){
                reject('Invalit JSON: ' + xhr.responseText);
                return;
            }

            resolve(json.location);
        };
        xhr.onerror = () => {
            reject("Image upload failed due to a XHR Transport error. Code: " + xhr.status);
        };

        const formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());

        xhr.send(formData);

        
    });
    
    tinymce.init({
        selector: 'textarea',
        branding: false,
        promotion: false,
        plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        // images_upload_url: 'upload.php',
        images_reuse_filename: true,
        images_upload_handler: image_upload_handler_callback,
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
    });

</script>
</body>

</html>