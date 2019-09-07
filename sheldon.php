<?php

$opcao2=$_POST["opcao2"];
$computador = rand(1,5);

if($opcao2==1 && $computador ==2){    
    echo "<script> alert('Computador escolheu: PAPEL')</script>";
    echo "VOCÊ PERDEU! <br>";
    echo "PAPEL COBRE A PEDRA";
}else if($opcao2==1 && $computador==1){   
    echo "<script> alert('computador escolheu: PEDRA')</script>";
    echo "EMPATOU";
    
}else if($opcao2==1 && $computador==3){
    echo "<script> alert('computador escolheu: TESOURA')</script>";
    echo "VOCÊ GANHOU! <br>";
    echo "PEDRA QUEBRA TESOURA";
}else if($opcao2==2 && $computador==1){
    echo "<script> alert('computador escolheu: PEDRA')</script>";
    echo "VOCÊ GANHOU! <br>";
    echo "PAPEL COBRE PEDRA";
}else if($opcao2==2 && $computador==2){
    echo "<script> alert('Computador escolheu: PAPEL')</script>";
    echo "EMPATOU";
}else if($opcao2==2 && $computador==3){
    echo "<script> alert('computador escolheu: TESOURA')</script>";
    echo "VOCÊ PERDEU! <br>";
    echo "TESOURA CORTA PAPEL";
}else if($opcao2==3 && $computador==1){
    echo "<script> alert('computador escolheu: PEDRA')</script>";
    echo "VOCÊ PERDEU! <br>";
    echo "PEDRA QUEBRA TESOURA";
}else if($opcao2==3 && $computador==2){
    echo "<script> alert('Computador escolheu: PAPEL')</script>";
    echo "VOCÊ GANHOU! <br>";
    echo "TESOURA CORTA PAPEL";
}else if($opcao2==3 && $computador==3){
    echo "<script> alert('computador escolheu: TESOURA')</script>";
    echo "EMPATOU";
}else if($opcao2==1 && $computador==4){
    echo "<script> alert('computador escolheu: SPOCK')</script>";
    echo "PERDEU! <br>";
    echo "SPOCK VAPORIZA PEDRA";
}else if($opcao2==1 && $computador==5){
    echo "<script> alert('computador escolheu: LAGARTO')</script>";
    echo "VENCEU! <br>";
    echo "PEDRA ESMAGA LAGARTO";
}else if($opcao2==2 && $computador==4){
    echo "<script> alert('computador escolheu: SPOCK')</script>";
    echo "VENCEU! <br>";
    echo "PAPEL REFUTA SPOCK";
}else if($opcao2==2 && $computador==5){
    echo "<script> alert('computador escolheu: LAGARTO')</script>";
    echo "PERDEU! <br>";
    echo "LAGARTO COME PAPEL";
}else if($opcao2==3 && $computador==4){
    echo "<script> alert('computador escolheu: SPOCK')</script>";
    echo "PERDEU! <br>";
    echo "SPOCK QUEBRA A TESOURA";
}else if($opcao2==3 && $computador==5){
    echo "<script> alert('computador escolheu: LAGARTO')</script>";
    echo "VENCEU! <br>";
    echo "TESOURA DECAPITA O LAGARTO";
}else if($opcao2==4 && $computador==1){
    echo "<script> alert('computador escolheu: PEDRA')</script>";
    echo "VENCEU! <br>";
    echo "SPOCK VAPORIZA PEDRA";
}else if($opcao2==4 && $computador==2){
    echo "<script> alert('computador escolheu: PAPEL')</script>";
    echo "PERDEU <br>";
    echo "PAPEL REFUTA SPOCK";
}else if($opcao2==4 && $computador==3){
    echo "<script> alert('computador escolheu: TESOURA')</script>";
    echo "VENCEU <br>";
    echo "SPOCK QUEBRA TESOURA";
}else if($opcao2==4 && $computador==4){
    echo "<script> alert('computador escolheu: SPOCK')</script>";
    echo "EMPATOU";
}else if($opcao2==4 && $computador==5){
    echo "<script> alert('computador escolheu: LAGARTO')</script>";
    echo "PERDEU <br>";
    echo "LAGARTO ENVENENA SPOCK";
}else if($opcao2==5 && $computador==1){
    echo "<script> alert('computador escolheu: PEDRA')</script>";
    echo "PERDEU <br>";
    echo "PEDRA ESMAGA LAGARTO";
}else if($opcao2==5 && $computador==2){
    echo "<script> alert('computador escolheu: PAPEL')</script>";
    echo "VENCEU <br>";
    echo "LAGARTO COME PAPEL";
}else if($opcao2==5 && $computador==3){
    echo "<script> alert('computador escolheu: TESOURA')</script>";
    echo "PERDEU <br>";
    echo "TESOURA DECAPITA LAGARTO";
}else if($opcao2==5 && $computador==4){
    echo "<script> alert('computador escolheu: SPOCK')</script>";
    echo "VENCEU <br>";
    echo "LAGARTO ENVENENA SPOCK";
}else if($opcao2==5 && $computador==5){
    echo "<script> alert('computador escolheu: LAGARTO')</script>";
    echo "EMPATOU";
}





?>