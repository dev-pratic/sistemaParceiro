<?php
if($gateSistema=="rs"){
    define("TAB_EXSTADOS","ESTADOS");

    define("COL_EXST_ID","EST_ID"); 
    define("COL_EXST_UF","EST_UF"); 
}else if($gateSistema=="petrus"){
    define("TAB_EXSTADOS","X12");

    define("COL_EXST_ID","X12_ID"); 
    define("COL_EXST_UF","X12_SIGLA"); 
}