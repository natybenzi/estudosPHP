<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div>
        <?php
            $re = isset($_GET["est"])?$_GET["est"]:"Não informado";
            switch($re){
                case "rs":
                case "pr":
                case "sc":
                    echo "Você mora na REGIÃO SUL";
                    break;
                case "sp":
                case "rj":
                case "es":
                case "mg":
                    echo "Você mora na REGIÃO SUDESTE";
                    break;
                case "ba":
                case "se":
                case "al":
                case "pe":
                case "pb":
                case "rn":
                case "ce":
                case "pi":
                case "ma":
                    echo "Você mora na REGIÃO NORDESTE";
                    break;
                case "ms":
                case "go":
                case "df":
                case "mt":
                    echo "Você mora na REGIÃO CENTRO-OESTE";
                    break;
                case "ro":
                case "to":
                case "ac":
                case "am":
                case "rr":
                case "ap":
                case "pa":
                    echo "Você mora na REGIÃO NORTE";
                    break;
            }
        ?>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>