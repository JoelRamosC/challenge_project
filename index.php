<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="PT">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Voxy</title>
    
    </head>

    <style>
        .center {
            margin: 0;
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translate(-50%, 0%)
        }
    </style>

    <body>
        <td>
        <div class="center">
        <center>
        <img src="voxy.png" width="90" height="90">
        <p style="font-family:open sans;font-size:14pt">Voxy Code Challenge:</p> 
        
        <form method ="POST">
        <div class="form-group">
        <p style="font-family:open sans;font-size:14pt">Digite o seu texto:</p>
        <textarea  name="txt_texto" class="form-control" style="width:500px; height:200px; font-size:14pt" ></textarea><br><br>
        <input type="submit" onclick="textFunction()"  value="Contar Palavras" style="height:35px;font-size:14pt;font-family:open sans"><br>
        </div>
        </form>
        
        <script>
            function textFunction()
            {
                text_input = document.querySelector('textarea').value;
                if ( text_input == '')
                {
                    alert("Por favor, digite o seu texto.");
                }
            }
        </script>

        <p style="font-family:open sans;font-size:14pt"> Número de Palavras no Texto:</p>
        <br>

        <?php
        if(isset($_POST["txt_texto"])) {
            $texto_entrada =  $_POST["txt_texto"] ; 
            //Separa as palavras
            $palavras_texto_entrada = explode(" ", $texto_entrada);
            //Retira a pontuação
            $pontuacao = array("?", "!", ".","-","_",","," ");
            $palavras_texto_entrada_limpo = str_replace($pontuacao, "", $palavras_texto_entrada);
            $n_palavras_texto_entrada= count($palavras_texto_entrada_limpo);
            //Apresenta a contagem se o número de palavrar for maior ou igual a 1
            if ( $_POST["txt_texto"] != ''){
                echo $n_palavras_texto_entrada;
            }   
        } 
        ?>  
        </center>
        </div>
        </td>
    </body>
</html>