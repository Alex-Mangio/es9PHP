<?php
session_start();
if (!isset($_POST["nominativo"])) {
    header("Location:errore.php");
    exit();
}

if (!isset($_SESSION["scrutini"])) {
    $_SESSION["scrutini"] = [
        "nome" => array(),
        "debiti" => array()
    ];
}

$esito = 0;

$materie = [
    "Italiano" => $_POST["ita"],
    "Matematica" => $_POST["mate"],
    "Telecomunicazioni" => $_POST["tel"],
    "Informatica" => $_POST["info"]
];

if(!isset($_POST["ita"])){
    $_POST["ita"] = null;
}
if(!isset($_POST["mate"])){
    $_POST["mate"] = null;
}
if(!isset($_POST["tel"])){
    $_POST["tel"] = null;
}
if(!isset($_POST["info"])){
    $_POST["info"] = null;
}
function contaElementi($materie){
    $conta = 0;
    foreach($materie as $materia){
        $conta++;
    }
    return $conta;
}

array_push($_SESSION["scrutini"]["nome"],$_POST["nominativo"]);
array_push($_SESSION["scrutini"]["debiti"],contaElementi($materie));

foreach($_SESSION["scrutini"]["nome"] as $nomi ){

        if(contaElementi($materie) > 3){
            $esito = 1;
        }else if(contaElementi($materie) > 0 || contaElementi($materie) < 3){
            $esito = 2;
        }

        if($esito == 0){
            echo "Lo studente $nomi e' passato senza debiti";
        }else if($esito == 1){
            echo "Lo studente $nomi e' stato bocciato";
        }else if($esito == 2){
            echo "Lo studente $nomi e' passato con debiti in:";
            foreach($materie as $materia){
                if($materia =! null){
                    echo "$materia ";
                }
            }
        }
    }   




?>
