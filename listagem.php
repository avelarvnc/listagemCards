<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        include_once("class/Item.php");
        $item = new Item();

            $lista = $item->listarItem();

            if ($lista != 0)
            {
              
                foreach($lista as $i)
                {

                    $caminho = $i["caminho"];
                    $titulo = $i["titulo"];
                    $descricao = $i["descricao"];

                    // echo "
                    //     <div>
                    //         <img src='" . $i["caminho"] ."'
                    //     </div>"
                    
                    echo "
                        <div class='card'>
                            <img class='thumb' src='$caminho' alt='$titulo'>
                            <p class='titulo-produto'>$titulo</p> 
                            <p>$descricao</p>
                        </div>
                    ";
                }

            }

    ?>
    
</body>
</html>