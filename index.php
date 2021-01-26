<?php

    $mes = [
        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro",
    ];
      
    
    $mes_selecionado = 2;

    if ($mes_selecionado >= 1 && $mes_selecionado <= 12 ) {
        echo $mes_selecionado;
    }else{
        echo "Mês é invalido!";
    }
?>