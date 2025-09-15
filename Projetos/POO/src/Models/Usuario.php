<?php

class Usuario {
    private $usuario; 
    private $email; 
    private $senha;
    
    public function __construct($usuario, $email, $senha) {
        $this->usuario = $usuario;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function salvar() {
        $disponivel = true;

try {
    if (file_exists("usuarios.txt")) {
        $linhas = file("usuarios.txt");

        foreach ($linhas as $linha) {
            $dados = explode(";", trim($linha));
            if (isset($dados[1])&&$dados[1] === $email) {
                $disponivel = false;
                header('Location: cadastro.php?emailjáexiste');
                break;
            }
        }

        file_put_contents("usuarios.txt", $this->usuario . ";" . $this->email . ";" . $this->senha . ";\n", FILE_APPEND);
    }  else {
        throw new Exception("Arquivo não localizado!");
    }

    if ($disponivel) {
        fopen("usuarios.txt", "a");

        fwrite("usuarios.txt", "$nome;$email;$senha;\n");
        fclose("usuarios.txt");

        header('Location: index.php?cadastradocomsucesso');
    } else {
        throw new Exception("Ocorreu algum erro na solicitação");
    }

} catch (Exception $e) {
 echo "Erro: " . $e->getMessage();
}
      
    }


    public static function entrar($email, $senha) {
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

                    if (isset($dados[2])&&$dados[2] === $senha) {
                        $existeSenha = true;
                        break;
                    }
                }

            } else {
                throw new Exception("Arquivo não localizado!!");
            }

           

            if ($existeEmail&&$existeSenha) {
                $_SERVER["logado"] = true;
                setcookie("usuario", $nomeUsuario, time() + 3600, "/", "192.168.2.155");
                header('Location: dashboard.php');
            } elseif ($existeEmail==false || $existeSenha==false) {
                throw new Exception("Dados inválidos!");
            }
        } catch (Exception $e) {

            echo "Erro: " . $e->getMessage();
        }
    }



}



