<?php
if($gateSistema=="rs"){
    define("TAB_CXONTASBANCARIA","CONTASBANCARIA");

    define("COL_CXTB_IXD","CTB_ID");
    define("COL_CXTB_IXDEMPRESA","CTB_IDEMPRESA");
    define("COL_CXTB_CONTA","CTB_CONTA");
    define("COL_CXTB_DXIGITOCONTA","CTB_DIGITOCONTA");
}else if($gateSistema=="petrus"){
    define("TAB_CXONTASBANCARIA","N90");

    define("COL_CXTB_IXD","N90_ID");
    define("COL_CXTB_IXDEMPRESA","S1_ID");
    define("COL_CXTB_CONTA","N90_CONTA");
    define("COL_CXTB_DXIGITOCONTA","N90_DV_CONTA");
    define("COL_CXTB_DXESCRICAO","N90_DESCRICAO");
}