<HTML>
    <head>
        <title>Meu blog</title>
    </head>
    <body>
        <h1>Olá, esse é meu blog</h1>
        <a href="inserir.php"> Cadastrar notícias</a>
        
        <?php
        require_once('blog.php');
        $obj = new Blog();
        
        $result = $obj->getTodasNoticias();
            
        print("<br>==========================================");
        if ($result->num_rows > 0) {
            print("<br>");
            while($row = $result->fetch_assoc()) {
                $titulo = $row["titulo"];
                $noticia = $row["noticia"];
                print("<h2>".$titulo."</h2>");
                print("<h3>".$noticia."</h3>");
                print("-------------------------------------------------------");
            }
        } else {
            echo "Sem notícias";
        }
?>
    </body>
</HTML>