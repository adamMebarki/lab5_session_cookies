<?php
/**
 * Created by PhpStorm.
 * User: 1606149
 * Date: 24/10/2016
 * Time: 15:57
 */

// Récupération des variables GET
$tabUrl = parse_url ( $_SERVER [ 'REQUEST_URI' ] ) ;
$listparam = explode ( "&amp;" , $tabUrl [ 'query' ] ) ;
$nb_param = count ( $listparam ) ;

// on associe les valeurs
for ( $i=0 ; $i<$nb_param ; $i++)  {
    $param = explode ( '=' , $listparam[$i] ) ;
    $paramname = $param[0];
    $paramvalue = $param[1];
    $$paramname = $paramvalue;
    echo $paramname;
}
?>