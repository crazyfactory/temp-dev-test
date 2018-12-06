<!DOCTYPE html>
<html>
<head>
    <title>Money Change Calculator</title>
</head>
<body>

<form method = "post">
    BUY: <input type="number" name="buy" required> 
    PAY: <input type="number" name="paid" required>  
<input type="hidden" name = "change" value = "1">
<input type="submit" value="Calculate" />

</form>

<br><br>

<?php

function money_check($value, $money_value){
    if($value > $money_value){
        return floor($value/$money_value);
    }else{
        return 0; 
    }
}

if ($_POST['change'] == "1") {

    $buy = $_POST['buy'];
    $paid = $_POST['paid'];

    $money_change = $paid-$buy; 
	
    echo "Change is $money_change THB.</br>";
    
    $money_for_change = $money_change;
    
    $p1000 = money_check($money_for_change, '1000');  
    echo '1000 x '.$p1000.'<br>';
    
    $money_for_change = $money_for_change - ($p1000 * 1000);
    
    $p500 = money_check($money_for_change, '500');   
    echo '500 x '.$p500.'<br>';
    
    $money_for_change = $money_for_change - ($p500 * 500);
    
    $p100 = money_check($money_for_change, '100');   
    echo '100 x '.$p100.'<br>';
    
    $money_for_change = $money_for_change - ($p100 * 100);
    
    $p50 = money_check($money_for_change, '50');  
    echo '50 x '.$p50.'<br>';
    
    $money_for_change = $money_for_change - ($p50 * 50);
    
    $p20 = money_check($money_for_change, '20');  
    echo '20 x '.$p20.'<br>';
    
    $money_for_change = $money_for_change - ($p20 * 20);
    
    $p10 = money_check($money_for_change, '10');  
    echo '10 x '.$p10.'<br>';
    
    $money_for_change = $money_for_change - ($p10 * 10);
    
    $p5 = money_check($money_for_change, '5');  
    echo '5 x '.$p5.'<br>';
    
    $money_for_change = $money_for_change - ($p5 * 5);
    
    $p1 = money_check($money_for_change, '1');  
    echo '1 x '.$p1.'<br>';
    

}


?>

</body>
</html>