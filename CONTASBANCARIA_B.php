<?php
if($gateSistema=="rs"){
    define("TAB_CXONTASBANCARIA_B","CONTASBANCARIA");

    define("COL_CXTB_IXD_B","CTB_ID");
    define("COL_CXTB_IXDEMPRESA_B","CTB_IDEMPRESA");
    define("COL_CXTB_CONTA_B","CTB_CONTA");
    define("COL_CXTB_DXIGITOCONTA_B","CTB_DIGITOCONTA");
    define("COL_CXTB_DXESCRICAO_B","N49_DESCRICAO");
    define("COL_CXTB_IXDCONTABANCARIA_A","N90_ID");
    define("COL_CXTB_TIPO_B","N49_TIPO");
}else if($gateSistema=="petrus"){
    define("TAB_CXONTASBANCARIA_B","N49");

    define("COL_CXTB_IXD_B","N49_ID");
    define("COL_CXTB_IXDEMPRESA_B","S1_ID");
    define("COL_CXTB_CONTA_B","N49_CONTA");
    define("COL_CXTB_DXIGITOCONTA_B","N49_DV_CONTA");
    define("COL_CXTB_DXESCRICAO_B","N49_DESCRICAO");
    define("COL_CXTB_IXDCONTABANCARIA_A","N90_ID");
    define("COL_CXTB_TIPO_B","N49_TIPO");
}