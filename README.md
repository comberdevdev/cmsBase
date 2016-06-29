# CMS da Comberweb
### Respositório: https://github.com/comberdevdev/cmsBase

## Colaboradores:

* Elton Almeida ✓
* Nicolas Sampaio ✓
* Leonardo Mello ✓
* Paulo Netto ✓

## A Estrutura

A estrutura que proponho em nosso CMS e em nossos sites é essa. 

* css/
* js/
* fonts/
* images/
* includes/
  * config.php
    * Este arquivo contém algumas coisas básicas, como: Caminho Físico do Projeto para ser utilizado em includes ou require, Caminho do Site para fazer include de js/css ou imagens, e outras configurações pertinentes ao projeto. Exemplo:
    ```
	<?php 
		$caminhoSite = 'http://localhost/cmsComberweb/Lf9q3saa';
		$caminhoFisico = '/Library/WebServer/Documents/cmsComberweb/Lf9q3saa';

		$title = 'CMS Padrão';
	?>
    ```
  * head.php
  * header.php
  * footer.php
* index.php
  * Neste arquivo fazemos o primeiro include do config.php manualmente:
  ```
  require 'includes/config.php';
  ```
  * Logo após utilizamos as variáveis configuradas no config para fazer o require dos outros arquivos:
  ```
  require $caminhoFisico . '/includes/head.php';
  ```
  * E fazemos o require do conteudo daquele módulo chamando o arquivos conteudo.php dentro da pasta.
  ```
  require 'conteudo.php';
  ```
* conteudo.php
  * Este arquivo contém o conteúdo da página em questão.

###### © Comberweb 2016