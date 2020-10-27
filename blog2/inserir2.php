<HTML>
    <head>
        <title>Meu blog</title>
    </head>
    <body>
    <?php
        require_once('blog.php');
        
        $obj = new Blog();
        $titulo = $_POST['titulo'];
        $noticia= $_POST['noticia'];
       
        if ($obj->cadastroNoticia($titulo, $noticia) === TRUE) {
            echo "Notícia cadastrada com sucesso";
        }
        ?>
        <br><br>
        <a href="index.php"> Clique aqui para voltar</a>
    </body>
</HTML>
