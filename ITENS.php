<?php
if($gateSistema=="rs"){
    define("TAB_IXTENS","ITENS");

    define("COL_IXTE_CXODIGOINTERNO","ITE_CODIGOINTERNO"); 
    define("COL_IXTE_IXD","ITE_ID");
    define("COL_IXTE_IXDESPECIEDEEMBALAGEM","ITE_IDESPECIEDEEMBALAGEM");
    define("COL_IXTE_IXDGRUPO","ITE_IDGRUPO");
    define("COL_IXTE_IXDTIPODEOPERACAOSTATUS","ITE_IDTIPODEOPERACAOSTATUS");
    define("COL_IXTE_IXDTIPODOITEM","ITE_IDTIPODOITEM");
    define("COL_IXTE_QXUANTIDADEPORCAIXA","ITE_QUANTIDADEPORCAIXA");
    define("COL_IXTE_DXESCRICAOPRINCIPAL","ITE_DESCRICAOPRINCIPAL");
    define("COL_IXTE_PXESOLIQUIDO","ITE_PESOLIQUIDO"); 
    define("COL_IXTE_PXESOBRUTO","ITE_PESOBRUTO"); 
    define("COL_IXTE_CXODIGOGTIN","ITE_CODIGOGTIN"); 
    define("COL_IXTE_CXODIGODUN14","ITE_CODIGODUN14"); 
    define("COL_IXTE_IXDNCM","ITE_IDNCM");
    define("COL_IXTE_IXDUNIDADECOMPRA","ITE_IDUNIDADECOMPRA"); 
    define("COL_IXTE_VXOLUMES","ITE_VOLUME"); 
    define("COL_IXTE_CXODIGOGTIN_TRIB","ITE_CODIGOGTIN");
    define("COL_IXTE_DATA_INCLUSAO","G6_DATA_INCLUSAO");

    $COL_IXTE_IXDTIPODEOPERACAOSTATUS = array(
        140 => 140,
        144 => 144
    );

    $COL_IXTE_IXDTIPODOITEM = array(
        0 => 0,
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10,
        11 => 11 
    );
}else if($gateSistema=="petrus"){
    define("TAB_IXTENS","G6");

    define("COL_IXTE_CXODIGOINTERNO","G6_REFERENCIA");
    define("COL_IXTE_IXD","G6_ID");    
    define("COL_IXTE_IXDESPECIEDEEMBALAGEM","J26_ID");
    define("COL_IXTE_IXDGRUPO","G25_ID");
    define("COL_IXTE_IXDTIPODEOPERACAOSTATUS","G6_STATUS");// Ativo, Bloqueado e Inativo
    define("COL_IXTE_IXDTIPODOITEM","G6_TIPO");// É escrito ao invez de numerico
    define("COL_IXTE_QXUANTIDADEPORCAIXA","G6_QTD_EMB");
    define("COL_IXTE_DXESCRICAOPRINCIPAL","G6_DESCRICAO");
    define("COL_IXTE_EXSTOQUE","G6_ESTOQUE");
    define("COL_IXTE_PXESOLIQUIDO","G6_PESO_LIQUIDO"); 
    define("COL_IXTE_PXESOBRUTO","G6_PESO_BRUTO"); 
    define("COL_IXTE_CXODIGOGTIN","G6_EAN13_GTIN"); 
    define("COL_IXTE_CXODIGODUN14","G6_DUN14"); 
    define("COL_IXTE_IXDNCM","X8_ID"); 
    define("COL_IXTE_IXDUNIDADECOMPRA","G9_ID"); 
    define("COL_IXTE_IXDEMPRESA","S1_ID"); 
    define("COL_IXTE_VXOLUMES","G6_VOLUME"); 
    define("COL_IXTE_CXODIGOGTIN_TRIB","G6_EAN13_GTIN_TRIBUTAVEL");
    define("COL_IXTE_DATA_INCLUSAO","G6_DATA_INCLUSAO");

    $COL_IXTE_IXDTIPODEOPERACAOSTATUS = array(
        140 => "Ativo",
        144 => "Bloqueado"
    );

    $COL_IXTE_IXDTIPODOITEM = array(
        0 => "Mercadoria para Revenda",
        1 => "Materia Prima",
        2 => "Embalagem",
        3 => "Produto em Processo",
        4 => "Produto Acabado",
        5 => "SubProduto",
        6 => "Produto Intermediario",
        7 => "Material de Uso e Consumo",
        8 => "Ativo Imobilizado",
        9 => "Serviços",
        10 => "Outros Insumos",
        11 => "Outros"
    );

    $COL_IXTE_IXDTIPODOITEM_INVERSO = array(
        "Mercadoria para Revenda" => 0,
        "Materia Prima" => 1,
        "Embalagem" => 2,
        "Produto em Processo" => 3,
        "Produto Acabado" => 4,
        "SubProduto" => 5,
        "Produto Intermediario" => 6,
        "Material de Uso e Consumo" => 7,
        "Ativo Imobilizado" => 8,
        "Serviços" => 9,
        "Outros Insumos" => 10,
        "Outros" => 11
    );

    $COL_IXTE_IXDTIPODOITEM_INVERSO_PRODUTO_CAD = array(
        "Mercadoria para Revenda" => "R",
        "Materia Prima" => "M",
        "Embalagem" => "E",
        "Produto em Processo" => "S",
        "Produto Acabado" => "A",
        "SubProduto" => "K",
        "Produto Intermediario" => "ED",
        "Material de Uso e Consumo" => "C",
        "Ativo Imobilizado" => "K",
        "Serviços" => "K",
        "Outros Insumos" => "K",
        "Outros" => "K"
    );
}