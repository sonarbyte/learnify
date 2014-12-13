<script type="text/javascript" src="./tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
selector: "textarea",
theme: "modern",
plugins: [
"advlist autolink lists link image charmap print preview hr anchor pagebreak",
"searchreplace wordcount visualblocks visualchars code fullscreen",
"insertdatetime media nonbreaking save table contextmenu directionality",
"emoticons template paste textcolor colorpicker textpattern"
],
toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
toolbar2: "print preview media | forecolor backcolor emoticons",
image_advtab: true,
templates: [
{title: 'Test template 1', content: 'Test 1'},
{title: 'Test template 2', content: 'Test 2'}
]
});
</script>
<div class="form-group">
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title"><h3><i class="glyphicon glyphicon-plus"></i> Create Learnifyer</h3>   </h3>
  </div>
<form method="post" action="somepage">
<textarea name="content" style="width:100%; height:220px"></textarea>
</form>
</div>
</div>
