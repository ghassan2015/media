<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>File manager and CKeditor</title>
</head>
<body>

<div class="container">
    <textarea name="editor" id="editor"></textarea>
</div>

{{--<script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>--}}
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.config.extraPlugins = 'embedbase';
    CKEDITOR.config.extraPlugins = 'embed';
    CKEDITOR.config.embed_provider = '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}'
   CKEDITOR.config.language = 'ar';

    CKEDITOR.replace( 'editor', {filebrowserImageBrowseUrl: ' file-manager/ckeditor'});
</script>
</body>
</html>
