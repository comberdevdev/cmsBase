<?php
/**
 * Created by PhpStorm.
 * User: leonardomello
 * Date: 24/06/16
 * Time: 2:45 AM
 */

// configuration

$url = $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$base = str_replace("/configuration", "", getcwd());
$config = $base . '/includes/config.php';
$index = $base . '/index.php';
$connection = $base . '/orm/Connection.php';

// check if form has been submitted
if (!empty($_POST))
{
    // save the text contents
    file_put_contents($config, $_POST['config']);
    file_put_contents($index, $_POST['index']);
    file_put_contents($connection, $_POST['conn']);

    // redirect to form again
    header(sprintf('Location: %s', $url));
    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
    exit();
}

// read the textfile
$config_text = file_get_contents($config);
$index_text = file_get_contents($index);
$conn_text = file_get_contents($connection);

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Configurar CMS</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <div class="navbar navbar-inverse">
        <a class="navbar-brand" href="#">CMS - Configurações</a>
<!--        <ul class="nav navbar-nav">-->
<!--            <li class="active">-->
<!--                <a href="#">Config.php</a>-->
<!--            </li>-->
<!--            <li>-->
<!--                <a href="#">Index.php</a>-->
<!--            </li>-->
<!--        </ul>-->
    </div>
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form action="" method="post">
                <div class="form-group">
                    <label for="arquivo" class="col-sm-2 control-label">Config</label>
                    <textarea id="arquivo" rows="40" class="form-control" name="config"><?php echo htmlspecialchars($config_text) ?></textarea>
                </div>

                <br>

                <div class="form-group">
                    <label for="index" class="col-sm-2 control-label">Index</label>
                    <textarea id="index" rows="40" class="form-control" name="index"><?php echo htmlspecialchars($index_text) ?></textarea>
                </div>

                <div class="form-group">
                    <label for="index" class="col-sm-2 control-label">Connection</label>
                    <textarea id="index" rows="10" class="form-control" name="connection"><?php echo htmlspecialchars($conn_text) ?></textarea>
                </div>

                <br>

                <div class="form-group">
                    <input type="submit" value="Salvar" class="btn btn-primary" />
                </div>
            </form>
        </div>

    </div>
</body>
</html>
<!-- HTML form -->
