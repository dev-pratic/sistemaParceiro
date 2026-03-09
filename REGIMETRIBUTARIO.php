<?php
if($gateSistema=="rs"){
    define("TAB_RXEGIMETRIBUTARIO","REGIMETRIBUTARIO");

    define("COL_CXRT_IXD","CRT_ID"); 
    define("COL_CXRT_NXOME","CRT_NOME"); 
}else if($gateSistema=="petrus"){
    define("TAB_RXEGIMETRIBUTARIO","X25");

    define("COL_CXRT_IXD","X25_ID"); 
    define("COL_CXRT_NXOME","X25_DESCRICAO"); 
}