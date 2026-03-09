<?php
if($gateSistema=="rs"){
    define("TAB_CXARTEIRAS","CARTEIRAS");

    define("COL_CXAR_IXD","CAR_ID");
    define("COL_CXAR_NXOME","CAR_NOME"); 
}else if($gateSistema=="petrus"){
    define("TAB_CXARTEIRAS","N49");

    define("COL_CXAR_IXD","N49_ID");
    define("COL_CXAR_NXOME","N49_DESCRICAO"); 
}