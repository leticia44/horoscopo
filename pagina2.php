<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Verificador de Signo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h1>HORÓSCOPO</h1>
    <form action="pagina2.php" method="get">
        <br><label for="lblData">Escolha uma data: </label>
        <input type="date" name="data">
        <input type="submit">
    

    <?php
        if(isset($_GET["data"])){
            $data = date_parse($_GET["data"]);
            $signo = getSigno($data["month"], $data["day"]);
            echo "<p>Seu signo é: $signo</p>";
        }

        function getSigno($mes, $dia){
            switch($mes){
                case 1:
                    if($dia >= 20){
                        echo "<img src='img/aquario.jpg'>";
                    } else{
                        echo "<img src='img/capricornio.jpg'>";
                    }
                    break;
                case 2:
                    if($dia >= 19){
                        echo "<img src='img/peixes.jpg'>";
                    } else{
                        echo "<img src='img/aquario.jpg'>";
                    }
                    break;
                case 3:
                    if($dia >= 21){
                        echo "<img src='img/aries.jpg'>";
                    } else{
                        echo "<img src='img/peixes.jpg'>";
                    }
                    break;
                case 4:
                    if($dia >= 20){
                        echo "<img src='img/touro.jpg'>";
                    } else{
                        echo "<img src='img/aries.jpg'>";
                    }
                    break;
                case 5:
                    if($dia >= 21){
                        echo "<img src='img/gemeos.jpg'>";
                    } else{
                        echo "<img src='img/touro.jpg'>";
                    }
                    break;
                case 6:
                    if($dia >= 21){
                        echo "<img src='img/cancer.jpg'>";
                    } else{
                        echo "<img src='img/gemeos.jpg'>";
                    }
                    break;
                case 7:
                    if($dia >= 23){
                        echo "<img src='img/leao.jpg'>";
                    } else{
                        echo "<img src='img/cancer.jpg'>";
                    }
                    break;
                case 8:
                    if($dia >= 23){
                        echo "<img src='img/virgem.jpg'>";
                    } else{
                        echo "<img src='img/leao.jpg'>";
                    }
                    break;
                case 9:
                    if($dia >= 23){
                        echo "<img src='img/libra.jpg'>";
                    } else{
                        echo "<img src='img/virgem.jpg'>";
                    }
                    break;
                case 10:
                    if($dia >= 23){
                        echo "<img src='img/escorpiao.jpg'>";
                    } else{
                        echo "<img src='img/libra.jpg'>";
                    }
                    break;
                case 11:
                    if($dia >= 22){
                        echo "<img src='img/sagitario.jpg'>";
                    } else{
                        echo "<img src='img/escorpiao.jpg'>";
                    }
                    break;
                case 12:
                    if($dia >= 22){
                        echo "<img src='img/capricornio.jpg'>";
                    } else{
                       echo "<img src='img/sagitario.jpg'>";
                    }
                    break;
                default:
                    return "Data incorreta!";
            }
        }
    ?>
</body>
</html>