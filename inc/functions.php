<?php
$valueBudget = $_POST['budget'];
if (isset($valueBudget)) {

    $valueStorage = 100;

    if($valueBudget >= 1 && $valueBudget <= 500){
        $valueAssociation = 5;
    }else if($valueBudget > 500 && $valueBudget <= 1000){
        $valueAssociation = 10;
    }else if($valueBudget > 1000 && $valueBudget <= 3000){
        $valueAssociation = 15;
    }else{
        $valueAssociation = 20;
    }

    $valueMaximumVehicleamount = $valueBudget - $valueAssociation - $valueStorage;

    $valueBasic = $valueMaximumVehicleamount * 0.1;
    $valueBasic = $valueBasic > 25 ? 50 : 10;
    $valueMaximumVehicleamount = $valueMaximumVehicleamount - $valueBasic;

    $valueSpecial = $valueMaximumVehicleamount * 0.02;
    $valueSpecial = $valueSpecial < 0 ? 0 : $valueSpecial;
    $valueMaximumVehicleamount = $valueMaximumVehicleamount - $valueSpecial;
    
    $valueBudget = $valueMaximumVehicleamount + $valueBasic + $valueSpecial + $valueAssociation + $valueStorage;
    $valueMaximumVehicleamount = $valueMaximumVehicleamount < 0 ? 0 : $valueMaximumVehicleamount;

    $result = [
        'success' => 1,
        'valueBudget' => formatNumber($valueBudget),
        'valueMaximumVehicleAmount' => formatNumber($valueMaximumVehicleamount),
        'valueBasic' => formatNumber($valueBasic),
        'valueSpecial' => formatNumber($valueSpecial),
        'valueAssociation' => formatNumber($valueAssociation),
        'valueStorage' => formatNumber($valueStorage),
    ];
    echo json_encode($result);
} else {
    echo json_encode(array('success' => 0));
}

function formatNumber($value){
    return number_format($value, 2, '.', '');
}
?>