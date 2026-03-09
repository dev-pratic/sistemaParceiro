<?php
if($gateSistema=="rs"){
    define("TAB_IXTENSGRUPOSUBGRUPO","ITENSGRUPOSUBGRUPO");

    define("COL_IXGS_IXD","IGS_ID");
    define("COL_IXGS_NXOME","IGS_NOME");
    define("COL_IXGS_CXODIGOINTERNO","IGS_CODIGOINTERNO");
}else if($gateSistema=="petrus"){
    define("TAB_IXTENSGRUPOSUBGRUPO","G25");

    define("COL_IXGS_IXD","G25_ID");
    define("COL_IXGS_NXOME","G25_DESCRICAO");
    define("COL_IXGS_CXODIGOINTERNO","G25_ID_1");
}