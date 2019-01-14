<?php

require $_SERVER['DOCUMENT_ROOT'] . '/includes/init.php';
loggedin();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //save post

    //sql_insert

    redirect('/home', 'Posted');
}

page_header('Create Post');
?>

<link rel="stylesheet" href="https://cdn.lucacastelnuovo.nl/instakilo.lucacastelnuovo.nl/css/filepond.css">

<div class="row">
    <form method="POST" class="col s12">
        <h4>New Post</h4>
        <div class="row">
            <div class="input-field col s12 m8">
                <input type="file" name="post_img">
            </div>
            <div class="input-field col s12 m4">
                <div class="switch">
                    Comments
                    <label>
                        Off
                        <input type="checkbox" name="allow_comments" value="1" checked>
                        <span class="lever"></span>
                        On
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <label for="caption">Caption</label>
                <textarea id="caption" class="materialize-textarea counter" name="caption" data-length="200"></textarea>
            </div>
        </div>
        <div class="row">
            <button class="col s12 btn-large waves-effect blue accent-4" type="submit">
                Submit Post
            </button>
        </div>
    </form>
</div>

<?php

$extra = <<<HTML
    <!-- <script src="https://cdn.lucacastelnuovo.nl/instakilo.lucacastelnuovo.nl/js/filepond/polyfills.js"></script>
    <script src="https://cdn.lucacastelnuovo.nl/instakilo.lucacastelnuovo.nl/js/filepond/lib.js"></script>
    <script src="https://cdn.lucacastelnuovo.nl/instakilo.lucacastelnuovo.nl/js/filepond/plugins.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.6.15/browser-polyfill.min.js"></script>
    <script src="https://unpkg.com/filepond-polyfill/dist/filepond-polyfill.min.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.min.js"></script>


    <script src="https://cdn.lucacastelnuovo.nl/instakilo.lucacastelnuovo.nl/js/filepond/init.js"></script>
HTML;

page_footer($extra);

?>
