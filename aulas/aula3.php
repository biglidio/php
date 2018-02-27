<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aula 3 - Overriding</title>
    </head>
    <body>
        <?php
            /*
                Definição: A sobrescrita é o ato de prover uma outra implementação
                para um método definido em uma superclasse.
            */
            
            // class Quadrilatero {
            //     protected $lado1;
                
            //     public function __construct($lado1)
            //     {
            //         $this->lado1 = $lado1;
            //     }
                
            //     public function area()
            //     {
            //         echo "AREA";
            //     }
                
            //     public function perimetro()
            //     {
            //         echo "PERIMETRO";
            //     }
            // }
            
            // class Retangulo extends Quadrilatero {
            //     private $lado2;
                
            //     public function __construct($lado1, $lado2)
            //     {
            //         parent::__construct($lado1);
            //         $this->lado2 = $lado2;
            //     }
                
            //     public function area()
            //     {
            //         return $this->lado1 * $this->lado2;
            //     }
                
            //     public function perimetro()
            //     {
            //         return $this->lado1 + $this->lado1 + $this->lado2 + $this->lado2;
            //     }
            // }
            
            // class Quadrado extends Quadrilatero {
                
            //     public function __construct($lado1)
            //     {
            //         parent::__construct($lado1);
            //     }
                
            //     public function area()
            //     {
            //         return $this->lado1 * $this->lado1;
            //     }
                
            //     public function perimetro()
            //     {
            //         return 4 * $this->lado1;
            //     }
            // }
            
            // $qd = new Quadrilatero(8);
            // echo $qd->area() . '<br>';
            
            // $ret = new Retangulo(8, 7);
            // echo $ret->area() . '<br>';
            
            // $qua = new Quadrado(8);
            // echo $qua->area() . '<br>';
            
            ////////////////////////////////////////////////////////////////////
            
            // class Personagem {
                
            //     public function ataca()
            //     {
            //         "Ataque genérico porque ainda não sou ninguém!<br>";
            //     }
                
            //     public function tomarPocao()
            //     {
            //         echo "GLUP! GLUP!<br>";
            //     }
            // }
            
            // class Retaliador {
                
            //     public function ataca()
            //     {
            //         echo "Corte incandecente!";
            //     }
            // }
            
            // class Mago {
                
            //     public function ataca()
            //     {
            //         echo "Bola de fogo!";
            //     }
            // }
            
            abstract class Produto {
                
                public abstract function desconto();
            }
            
            class Livro extends Produto {
                
                public function desconto()
                {
                    echo "5%";
                }
            }
            
            class Eletrodomestico extends Produto {
                
                public function desconto()
                {
                    echo "10%";
                }
            }
            
            class Computador extends Produto {
                
                public function desconto()
                {
                    echo "15%";
                }
            }
        ?>
    </body>
</html>