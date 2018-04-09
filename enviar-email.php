<?php
/**
 * Created by PhpStorm.
 * User: juda_
 * Date: 08/04/2018
 * Time: 22:16
 */
?>

<?php
  $nome = $_POST['nome'];
  $email= $_POST['email'];
  $mensagem= $_POST['mensagem'];
  $to = "juda_sales@hotmail.com";
  $assunto = "Mensagem de ".$email."com";
  mail($to,$assunto,$mensagem);
?>