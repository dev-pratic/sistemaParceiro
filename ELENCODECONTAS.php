<?php
if($gateSistema=="rs"){
    define("TAB_EXLENCODECONTAS","ELENCODECONTAS");

    define("COL_EXLD_IXD","ELD_ID"); 
    define("COL_EXLD_CXONTA","ELD_CONTA"); 
    define("COL_EXLD_NXOME","ELD_NOME"); 
    define("COL_EXLD_IXDTIPODEOPERACAO","ELD_IDTIPODEOPERACAO");
    define("COL_EXLD_EMPRESA","ELD_IDEMPRESA"); 

    $COL_EXLD_IXDTIPODEOPERACAO = array(
        174 => 174,
        172 => 172
    );
}else if($gateSistema=="petrus"){
    define("TAB_EXLENCODECONTAS","L10");

    define("COL_EXLD_IXD","L10_ID"); 
    define("COL_EXLD_CXONTA","L10_CODIGO"); 
    define("COL_EXLD_NXOME","L10_DESCRICAO"); 
    define("COL_EXLD_IXDTIPODEOPERACAO","L10_MODELO");
    define("COL_EXLD_EMPRESA","S1_ID"); 

    $COL_EXLD_IXDTIPODEOPERACAO = array(
        174 => "Gerencial",
        172 => "Contabil"
    );
}