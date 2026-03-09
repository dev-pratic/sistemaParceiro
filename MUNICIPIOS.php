<?php
if($gateSistema=="rs"){
    define("TAB_MXUNICIPIOS","MUNICIPIOS");

    define("COL_MXUN_IXD","MUN_ID"); 
    define("COL_MXUN_IXDESTADO","MUN_IDESTADO"); 
    define("COL_MXUN_NXOME","MUN_NOME"); 
}else if($gateSistema=="petrus"){
    define("TAB_MXUNICIPIOS","X4");

    define("COL_MXUN_IXD","X4_ID"); 
    define("COL_MXUN_IXDESTADO","X12_ID"); 
    define("COL_MXUN_NXOME","X4_NOME"); 
}