<form action="./save.php" method="POST">
<textarea name="editor" id="editor" style="height: 300px;"></textarea>
</form>
<script>
    CKEDITOR.replace( 'editor', {
    filebrowserUploadUrl: './upload.php'
    });
    CKEDITOR.config.codeSnippet_theme = 'monokai_sublime';
    CKEDITOR.config.extraPlugins='serverpreview';
    CKEDITOR.config.serverPreview_Url='preview.php';
    hljs.initHighlightingOnLoad();
</script>