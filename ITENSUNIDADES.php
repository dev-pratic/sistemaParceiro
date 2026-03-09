<?php
if($gateSistema=="rs"){
    define("TAB_IXTENSUNIDADES","ITENSUNIDADES");

    define("COL_IXUN_IXD","IUN_ID");
    define("COL_IXUN_SXIGLA","IUN_SIGLA");
}else if($gateSistema=="petrus"){
    define("TAB_IXTENSUNIDADES","G9");

    define("COL_IXUN_IXD","G9_ID"); 
    define("COL_IXUN_SXIGLA","G9_DESCRICAO");
}