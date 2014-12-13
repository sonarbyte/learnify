<head>
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
</head>
<body>
 <div class="row">
<div class="col-md-7">
<form method="post" action="somepage">
<textarea name="content" style="width:100%"></textarea>
</form>
 </div>	
</div>
</body>
