<?php
 
$_SESSION['i'] = 1;

if ($_POST) {

    $val = array_pop($_POST);

    switch($val){
        case '.':
            if($_SESSION['aux'] != 1 ){
                $_SESSION['aux'] = 1;
                $rez = '.';
            }
            break;
        case 'C':
            $_SESSION = [];
            break;
        case '+':
            if($_SESSION['do'] == ''){
                $_SESSION['do'] = "+";
                $_SESSION['aux'] = 0;  
            } else{
                rezult();
            }       
            break;
        case '-':
            if($_SESSION['do'] == ''){
                $_SESSION['do'] = "-"; 
                $_SESSION['aux'] = 0;
            } else{
                rezult();
            }   
            break;    
        case '/':
            if($_SESSION['do'] == ''){
                $_SESSION['do'] = "/"; 
                $_SESSION['aux'] = 0;
            } else{
                rezult();
            }       
             break;
        case '*':
            if($_SESSION['do'] == ''){
                $_SESSION['do'] = "*";
                $_SESSION['aux'] = 0;   
            } else{
                rezult();
            }       
            break;        
        case '=':
            rezult();
            break;
        case 0:
            $rez ='0';
            break;    
        case 1:
            $rez ='1';
            break;
        case 2:
            $rez ='2';
            break;
        case 3:
            $rez ='3';
            break;
        case 4:
            $rez ='4';
            break;
        case 5:
            $rez ='5';
            break;    
        case 6:
            $rez ='6';
            break;    
        case 7:
            $rez ='7';
            break;    
        case 8:
            $rez ='8';
            break;
        case 9:
            $rez ='9';
            break;                
         
    }
    if($_SESSION['do']) {
        $_SESSION['i']++;       
    }
    
    $_SESSION['x'.$_SESSION['i']] = $_SESSION['x'.$_SESSION['i']].$rez;
}

function rezult(){
    if ($_SESSION['do'] === '+') {
        $_SESSION['x1'] = $_SESSION['x1'] + $_SESSION['x2'];  
    }
    if ($_SESSION['do'] === '-') {
        $_SESSION['x1'] = $_SESSION['x1'] - $_SESSION['x2'];  
    }  
    if ($_SESSION['do'] === '*') {
        $_SESSION['x1'] = $_SESSION['x1'] * $_SESSION['x2'];  
    }  
    if ($_SESSION['do'] === '/') {
        if ($_SESSION['x2'] === '0') {
            $_SESSION['x1'] = 'Ошибка!!!';
        } else {
            $_SESSION['x1'] = $_SESSION['x1'] / $_SESSION['x2'];
        }  
    }
    $_SESSION['do'] = '';
    $_SESSION['x2'] = '';
}