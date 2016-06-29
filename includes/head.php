<!DOCTYPE html>

<html class="js">

<head>
	<title><?= title ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta http-equiv="pragma" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoSite ?>/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoSite ?>/css/simple-sidebar.css">
    <link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoSite ?>/css/style.css">
    <link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoSite ?>/plugins/sweetalert/sweetalert.css">
    <!-- <link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoSite ?>/fonts/glyphicons-halflings-regular.woff"> -->
    <!-- <link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoSite ?>/fonts/glyphicons-halflings-regular.woff2"> -->
    <link type="text/css" rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
    
    <!-- jQuery DataTable Style Sheet -->
    <link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoSite ?>/plugins/DataTables-1.10.12/media/css/jquery.dataTables.css">
    
    <!-- Font Awesome Icons Style Sheet -->
    <link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoSite ?>/plugins/font-awesome/css/font-awesome.min.css">
    
    <!-- iCheck Square Checkbox Style Sheet -->
    <link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoSite ?>/plugins/icheck/skins/square/square.css">
    
    <!-- LightBox Style Sheet -->
    <link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoSite ?>/plugins/lightbox2-master/dist/css/lightbox.min.css">

    <link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoSite ?>/plugins/inputfile/css/component.css">

    <link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoSite ?>/css/jquery-ui.min.css">

    <script type="text/javascript" src="<?= caminhoSite ?>/js/jquery-2.2.4.min.js"></script>    
    <script type="text/javascript" src="<?= caminhoSite ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= caminhoSite ?>/js/functions.js"></script>
    <script type="text/javascript" src="<?= caminhoSite ?>/plugins/dropzone.js"></script>
    <script type="text/javascript" src="<?= caminhoSite ?>/plugins/sweetalert/sweetalert.min.js"></script>

<!-- LightBox JavaScript Plugin -->
<script type="text/javascript" src="<?= caminhoSite ?>/plugins/lightbox2-master/dist/js/lightbox-plus-jquery.min.js"></script>

<!-- DataTable jQuery + DataTable JavaScript Plugin -->
<script type="text/javascript" src="<?= caminhoSite ?>/plugins/DataTables-1.10.12/media/js/jquery.js"></script>
<script type="text/javascript" src="<?= caminhoSite ?>/plugins/DataTables-1.10.12/media/js/jquery.dataTables.min.js"></script>

<!-- iCheck JavaScript Plugin -->
<script type="text/javascript" src="<?= caminhoSite ?>/plugins/icheck/icheck.min.js"></script>

<!-- TinyMCE JavaScript Plugin -->
<script type="text/javascript" src="<?= caminhoSite ?>/plugins/tinymce/js/tinymce/tinymce.min.js"></script>

<script type="text/javascript" src="<?= caminhoSite ?>/plugins/chartjs/chart.js"></script>

<script>
    $(document).ready(function(){
        $('input').iCheck({
            checkboxClass: 'icheckbox_square',
            radioClass: 'iradio_square',
            increaseArea: '20%' // optional
        });
        
        var table = $('#example').DataTable();
         
        $('#example tbody')
        .on( 'mouseenter', 'td', function () {
            var colIdx = table.cell(this).index().column;
 
            $( table.cells().nodes() ).removeClass( 'highlight' );
            $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
        });
        
        tinymce.init({
            selector: "textarea#inputConteudo",
            theme: "modern",
            width: '100%',
            height: 300,
            plugins: ["autoresize advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
            content_css: "<?= $caminhoSite ?>/plugins/tinymce/content.min.css",
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ]
        });
        
        $('#myArquivo').on('shown.bs.modal', function () {
          $('#myInput').focus()
        });    
    });
</script>
</head>