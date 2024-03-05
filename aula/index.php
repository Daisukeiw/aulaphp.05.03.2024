<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
        <?php
            if(isset($_GET['operacao'])){
                $x = $_GET ['x'];
                $y = $_GET ['y'];
                $result;

                if($_GET['operacao'] == "adicao"){
                    
                    $result = $x+$y;

                    echo $x ."+". $y. "=" . $result;
                }else if($_GET['operacao'] == "subtracao"){
                    
                    $result = $x-$y;

                    echo $x ."-". $y. "=" . $result;
                }else if($_GET['operacao'] == "multiplicacao"){
                    
                    $result = $x*$y;

                    echo $x ."*". $y. "=" . $result;
                }else if($_GET['operacao'] == "divisao"){
                    
                    $result = $x/$y;

                    echo $x ."/". $y. "=" . $result;
                }
            }
        
        ?>
</body>
</html>