<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>


<body>

    <div class="formul">
        <form action="exercicio.php" method="POST"> 
            <label for="horario" id="horario">Selecione o horario</label>
            <input type="time" name="horario"><br>
            <input type="submit" value="Enviar">
            <br>
        </form>


        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $horario = $_POST['horario'];
                echo "Horario selecionado: " . $horario, "<br>";
                
                if ($horario >= "06:00" && $horario < "12:00")
                    echo "Bom dia!";
                elseif ($horario >= "12:00" && $horario < "18:00")
                    echo "Boa tarde!";  
                elseif ($horario >= "18:00" && $horario < "24:00")
                    echo "Boa noite!";
                elseif ($horario >= "00:00"&& $horario < "06:00")
                    echo "Boa madrugada!";
                else
                    echo "Horario inválido!";
            }
?>
</div>


   
     
</body>
</html>