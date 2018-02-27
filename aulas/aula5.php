<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aula 5 - Has-A</title>
    </head>
    <body>
        <?php
            // RELAÇÃO HAS-A
            //
            // QUANDO UMA CLASSE A POSSUI UMA OU MAIS REFERÊNCIAS A UMA CLASSE B
            // -> A TEM UM ATRIBUTO DE B;
            // -> A TEM ALGUM PARÂMETRO B EM ALGUM MÉTODO;
            
            class Curso {
                private $nome, $duracao;
                
                public function __construct()
                {
                    
                }
            }
            
            class Aluno {
                // Aluno tem um curso;
                // O atributo curso será uma instância de curso;
                private $nome, $cidade, $curso;
                
                public function __construct($nome, $cidade, Curso $curso)
                {
                    $this->nome = $nome;
                    $this->cidade = $cidade;
                    $this->curso = $curso;
                }
                
                public function mostrarInfos()
                {
                    echo "<p>Nome: $this->nome</p>";
                    echo "<p>Cidade: $this->cidade</p>";
                    $this->curso->mostrarInfos();
                }
            }
            
            $curso = new Curso('Sistemas para Internet');
            $aluno = new Aluno('Lucas', 'Praia Grande', $curso);
        ?>
    </body>
</html>