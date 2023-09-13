<?php
$hostname = "localhost";
$bancodedados = "cadastro";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($mysqli->connect_errno) {
    echo "falha ao conectar:(" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
} else {
    echo "Conectado ao Banco de Dados ";

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Obtém os dados do formulário
        $nome = $_GET["nome"];
        $email = $_GET["email"];
        $profissao = $_GET["profissao"];
        $empresa = $_GET["empresa"];
        $rua = $_GET["rua"];
        $numero = $_GET["numero"];
        $bairro = $_GET["bairro"];
        $cidade = $_GET["cidade"];
        $uf = $_GET["uf"];
        $celular = $_GET["celular"];
        $whatsapp = $_GET["whatsapp"];
        $linkedin = $_GET["linkedin"];
        $github = $_GET["github"];

        // Prepara a query de inserção
        $stmt = $mysqli->prepare("INSERT INTO formulario (nome, email, profissao, empresa, rua, numero, bairro, cidade, uf, celular, whatsapp, linkedin, github) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssssss", $nome, $email, $profissao, $empresa, $rua, $numero, $bairro, $cidade, $uf, $celular, $whatsapp, $linkedin, $github);

        // Executa a query
        if ($stmt->execute()) {
            echo "Dados inseridos com sucesso! <br />";
        } else {
            echo "Erro ao inserir os dados: " . $stmt->error;
        }

        $db = mysqli_select_db($mysqli, "cadastro");

        $sql = mysqli_query($mysqli, "SELECT * FROM formulario") or die( 
            mysqli_error($mysqli) //caso haja um erro na consulta 
          );
          

        $aux = mysqli_fetch_assoc($sql);

    foreach ($aux as $sql) {
        echo "<b>---------------------informações pessoais-----------------------</b><br />"; 
        echo "Nome:".$aux["nome"]."<br />"; 
        echo "Email:".$aux["email"]."<br /> <br /> "; 
      
        echo "<b>---------------------Empresa--------------------</b><br /> <br />"; 
        echo "Profissão:".$aux["profissao"]."<br />"; 
        echo "Empresa:".$aux["empresa"]."<br /> <br />"; 
      
        echo "<b>---------------------Endereço--------------------</b><br />"; 
        echo "Rua:".$aux["rua"]."<br />"; 
        echo "Numero:".$aux["numero"]."<br />";
        echo "Bairro:".$aux["bairro"]."<br />"; 
        echo "Cidade:".$aux["cidade"]."<br />"; 
        echo "UF:".$aux["uf"]."<br /> <br />"; 
      
        echo "<b>---------------------Informações de contato--------------------</b><br />"; 
        echo "Celular:".$aux["celular"]."<br />"; 
        echo "Whatsapp:".$aux["whatsapp"]."<br />"; 
        echo "Linkedin:".$aux["linkedin"]."<br />"; 
        echo "Github:".$aux["github"]."<br /> <br />";
        
        break;
      
    }
    $stmt->close();
    $mysqli->close();
    

        
          
    }
}
?>