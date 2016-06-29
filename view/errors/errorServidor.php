<?php
    $e = $_SESSION['parametrosView'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Erro no Servidor</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body style="background-image: url('<?= caminhoSite ?>/view/errors/bg.jpg'); height: 100vh;">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Bangers);

        body {
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        .Branco {
            color: #fff !important;
        }

        .Bangers {
            font-family: 'Bangers', cursive;
        }

        #erro {
            font-size: 80px;
        }

        #centro {
            position: absolute;
            top: 25%;
            width:100%;
        }

        .btn-outline {
            background-image: none !important;
            background-color: transparent !important;
            color: inherit !important;
            transition: all .5s !important;
        }

        .btn-primary.btn-outline {
            color: #fff !important;
        }

        .btn-success.btn-outline {
            color: #5cb85c !important;
        }

        .btn-info.btn-outline {
            color: #5bc0de !important;
        }

        .btn-warning.btn-outline {
            color: #f0ad4e !important;
        }

        .btn-danger.btn-outline {
            color: #d9534f !important;
        }

        .btn-default.btn-outline {
            color: #fff !important;
        }

        .btn-primary.btn-outline:hover,
        .btn-success.btn-outline:hover,
        .btn-info.btn-outline:hover,
        .btn-warning.btn-outline:hover,
        .btn-default.btn-outline:hover,
        .btn-danger.btn-outline:hover {
            color: #000 !important;
        }
    </style>
    <div id="centro" class="container">
        <h1 class="text-center Branco Bangers" id="erro">ERRO</h1>
        <h1 class="text-center Branco Bangers">Ops! Temos um erro no nosso CMS!</h1>
        <h2 class="text-center Branco Bangers">Contate nosso suporte para resolver o problema!</h2>
        <p class="text-center Branco"><b>Pode informar o erro:</b> "<?= $e->getMessage() ?>"</p>
        <center>
            <a href="#" onclick="history.go(-1)" class="btn btn-default btn-outline Bangers" style="width: 300px; font-size: 18px">V o l t a r</a>
        </center>
    </div>


</body>
</html>