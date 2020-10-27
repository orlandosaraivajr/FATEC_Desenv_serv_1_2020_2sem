<?php 

class Blog 
{ 
	private $conn; 
    private $servername = "127.0.0.1";
    private $username = "root";
    private $password = "123mudar";
    private $dbname="blog";
    
    public function __construct() 
	{ 
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Chora... " . $this->conn->connect_error);
        }
    }

    public function __destruct() 
	{ 
        print "<br><br><br>Conexão fechada com o banco de dados<br>\n"; 
        $this->conn->close();
    }
      
	public function getTodasNoticias() 
	{ 
        $sql = "SELECT titulo, noticia FROM noticias";
        $result = $this->conn->query($sql);
	    return $result; 
    }
    
    public function cadastroNoticia($titulo, $noticia) {

        $sql = "INSERT INTO noticias (titulo, noticia) VALUES ( '" . $titulo . "', '". $noticia ."')";

        if ($this->conn->query($sql) === TRUE) {
            return TRUE;
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            return FALSE;
        }
    }
} 
?>
