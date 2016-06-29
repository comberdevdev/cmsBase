<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?= title ?></title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="<?= caminhoSite ?>/view/login/style.css">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<style type="text/css">
		body,td,th {
			color: #FFFFFF;
		}
body {
	background-color: #000000;
}
        </style>
	</head>
	<body onLoad="Focus();">
		<center><img src="http://www.chacaraparaiso.com.br/cms/images/logo/logo-peppers.png" class="img-responsive" style="padding-top:50px"></center>

		<div class="col-md-12">
                	<div class="col-md-4 col-md-offset-4">
                    	<?php
		        		if (!empty($_SESSION['erroLogin'])) {
						?>
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<strong>Erro no Login!</strong> Usuário\Senha incorretos!
								</div>
						<?php
							}
						?>
						<form id="formLogin" action="<?= caminhoSite ?>/usuarios/faz_login" method="post">
							<div class="form-login">
							<h4>Faça seu login</h4>		        
							<input type="email" name="email" class="form-control input-sm chat-input" placeholder="E-mail" />
							</br>
							<input type="password" name="senha" class="form-control input-sm chat-input" placeholder="Senha" />
							</br>
							<div class="wrapper">
							<span class="group-btn">     
								<a id="loginBtn" href="#" class="btn btn-primary btn-md">Entrar <i class="fa fa-sign-in"></i></a>
							</span>
							</div>
							</div>                        
						</form>
                    </div>
                </div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script>
 			$(document).ready(function() {
 				$('#loginBtn').click(function(event) {
 					event.preventDefault();
 					$('#formLogin').submit();
 				});	
 			});
			
			function Focus(){
				$("#loginBtn").focus();	
			}
 		</script>
	</body>
</html>