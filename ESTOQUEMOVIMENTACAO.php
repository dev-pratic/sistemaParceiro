<?php
if($gateSistema=="rs"){
    define("TAB_EXSTOQUEMOVIMENTACAO","ESTOQUEMOVIMENTACAO");

    define("COL_EXMV_IXD","EMV_ID");
    define("COL_EXMV_QXUANTIDADE","EMV_QUANTIDADE"); 
    define("COL_EXMV_IXDITEM","EMV_IDITEM"); 
    define("COL_EXMV_AXNULADA","EMV_ANULADA"); 
    define("COL_EXMV_DXATAMOVIMENTO","EMV_DATAMOVIMENTO"); 
    define("COL_EXMV_JXUSTIFICATIVADOMOVIMENTO","EMV_JUSTIFICATIVADOMOVIMENTO");
    define("COL_EXMV_TXIPOMOVIMENTO","EMV_TIPOMOVIMENTO");

    $COL_EXMV_TXIPOMOVIMENTO = array(
        0 => 0,
        1 => 1
    );
}else if($gateSistema=="petrus"){
    define("TAB_EXSTOQUEMOVIMENTACAO","G17");

    define("COL_EXMV_IXD","G17_ID");
    define("COL_EXMV_QXUANTIDADE","G17_QTD"); 
    define("COL_EXMV_IXDITEM","G6_ID"); 
    define("COL_EXMV_AXNULADA","G17_ESTORNADO"); 
    define("COL_EXMV_DXATAMOVIMENTO","G17_DATA"); 
    define("COL_EXMV_JXUSTIFICATIVADOMOVIMENTO","G17_DESCRICAO");
    define("COL_EXMV_TXIPOMOVIMENTO","G17_TIPO");

    $COL_EXMV_TXIPOMOVIMENTO = array(
        0 => "Entrada",
        1 => "Saida"
    );
}