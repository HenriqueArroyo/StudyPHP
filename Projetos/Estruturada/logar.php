<?php



session_start();

$email = $_GET['email'];
$senha = $_GET['senha'];
$existeEmail = false;
$existeSenha = false;


try {
if (file_exists("usuarios.txt")) {
    $linhas = file("usuarios.txt");

    foreach ($linhas as $linha) {
        $dados = explode(";", trim($linha));

        if (isset($dados[1])&&$dados[1] === $email) {
            $existeEmail = true;
            $nomeUsuario = $dados[0];
            break;
        }
    }
} else {
    throw new Exception("Arquivo não localizado!");
}

if (file_exists("usuarios.txt")) {
    $linhas = file("usuarios.txt");

    foreach ($linhas as $linha) {
        $dados = explode(";", trim($linha));

        if (isset($dados[2])&&$dados[2] === $senha) {
            $existeSenha = true;
            break;
        }
    }
} else {
    throw new Exception("Arquivo não localizado!");
}




    if ($existeEmail&&$existeSenha) {
        $_SERVER["logado"] = true;
        setcookie(
            "usuario", 
            $nomeUsuario, 
            time() + 3600,    // expira em 1 hora
            "/",              // path
            "192.168.2.155"   // domínio/IP
        );
        header('Location: dashboard.php');
    }  elseif ($existeEmail==false || $existeSenha==false) {
        throw new Exception("Dados Inválidos!");
        
    } 
} catch (Exception $e) {
   echo "Erro: " . $e->getMessage();
}

