<?php
if($gateSistema=="rs"){
    define("TAB_EXSPECIESDEEMBALAGEM","ESPECIESDEEMBALAGEM");

    define("COL_EXSP_AXLTURA","ESP_ALTURA");
    define("COL_EXSP_CXOMPRIMENTO","ESP_COMPRIMENTO");
    define("COL_EXSP_IXD","ESP_ID");
    define("COL_EXSP_LXARGURA","ESP_LARGURA");
}else if($gateSistema=="petrus"){
    define("TAB_EXSPECIESDEEMBALAGEM","J26");

    define("COL_EXSP_AXLTURA","J26_ALTURA");
    define("COL_EXSP_CXOMPRIMENTO","J26_COMPRIMENTO");
    define("COL_EXSP_IXD","J26_ID");
    define("COL_EXSP_LXARGURA","J26_LARGURA");
}