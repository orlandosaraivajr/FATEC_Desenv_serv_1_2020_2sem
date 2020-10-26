<HTML>
    <head>
        <title>Meu blog</title>
    </head>
    <body>
    <?php
        require_once('db.php');
        $conexao = new mysqli($servername, $username, $password, $dbname);

        if ($conexao->connect_error) {
            die("Deu Ruim: " . $conexao->connect_error);
        }
        $titulo = $_POST['titulo'];
        $noticia= $_POST['noticia'];
        
        $sql = "INSERT INTO noticias (titulo, noticia) VALUES ( '" . $titulo . "', '". $noticia ."')";

        if ($conexao->query($sql) === TRUE) {
            echo "Notícia cadastrada com sucesso";
        ?>
        <br><br>
        <a href="index.php"> Clique aqui para voltar</a>
        <?php   
        } else {
            echo "Error: " . $sql . "<br>" . $conexao->error;
        }
        $conexao->close();
        
    ?>
    </body>
</HTML>
