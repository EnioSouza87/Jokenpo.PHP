<?php

$opcao=$_POST["opcao"];
$computador = rand(1,3);

if($opcao==1 && $computador ==2){
    echo "<script> alert('jo')</script>";
    echo "<script> alert('ken')</script>";
    echo "<script> alert('po')</script>";
    echo "<script> alert('Computador escolheu: PAPEL')</script>";
    echo "VOCÊ PERDEU!";
}else if($opcao==1 && $computador==1){
    echo "<script> alert('jo')</script>";
    echo "<script> alert('ken')</script>";
    echo "<script> alert('po')</script>";
    echo "<script> alert('computador escolheu: PEDRA')</script>";
    echo "EMPATOU";
}else if($opcao==1 && $computador==3){
    echo "<script> alert('jo')</script>";
    echo "<script> alert('ken')</script>";
    echo "<script> alert('po')</script>";
    echo "<script> alert('computador escolheu: TESOURA')</script>";
    echo "VOCÊ GANHOU!";
}else if($opcao==2 && $computador==1){
    echo "<script> alert('jo')</script>";
    echo "<script> alert('ken')</script>";
    echo "<script> alert('po')</script>";
    echo "<script> alert('computador escolheu: PEDRA')</script>";
    echo "VOCÊ GANHOU!";
}else if($opcao==2 && $computador==2){
    echo "<script> alert('jo')</script>";
    echo "<script> alert('ken')</script>";
    echo "<script> alert('po')</script>";
    echo "<script> alert('Computador escolheu: PAPEL')</script>";
    echo "EMPATOU";
}else if($opcao==2 && $computador==3){
    echo "<script> alert('jo')</script>";
    echo "<script> alert('ken')</script>";
    echo "<script> alert('po')</script>";
    echo "<script> alert('computador escolheu: TESOURA')</script>";
    echo "VOCÊ PERDEU!";
}else if($opcao==3 && $computador==1){
    echo "<script> alert('jo')</script>";
    echo "<script> alert('ken')</script>";
    echo "<script> alert('po')</script>";
    echo "<script> alert('computador escolheu: PEDRA')</script>";
    echo "VOCÊ PERDEU!";
}else if($opcao==3 && $computador==2){
    echo "<script> alert('jo')</script>";
    echo "<script> alert('ken')</script>";
    echo "<script> alert('po')</script>";
    echo "<script> alert('Computador escolheu: PAPEL')</script>";
    echo "VOCÊ GANHOU!";
}else if($opcao==3 && $computador==3){
    echo "<script> alert('jo')</script>";
    echo "<script> alert('ken')</script>";
    echo "<script> alert('po')</script>";
    echo "<script> alert('computador escolheu: TESOURA')</script>";
    echo "EMPATOU";
}



?>