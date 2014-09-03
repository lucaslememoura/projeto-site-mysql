<?php

$dados_url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$rota = explode('/',$dados_url['path'],2);

function rotas( $param) {

    $rotasValidas = ["contato","empresa","produtos","servicos","home","submit",];

    if( in_array( $param[1], $rotasValidas)):
        return require_once('include/'.$param[1].".php");
    elseif ( $param[1] == ""):
        return require_once('include/home.php');
    else:
        return require_once('404.php');
    endif;
}
?>

<?php require_once("include/head.php");?>
<?php require_once("include/menu.php");?>
<?php $pagina = rotas($rota);?>
<?php require_once("include/footer.php");?>