<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aula 1</title>
    </head>
    <body>
        <?php
        
            // Crie uma classe que module um retangulo, seu lados e que calcule 
            // o perimetro, a área e mostre seus lados
            
            // class Retangulo{
            //     public $x;
            //     public $y;
                
            //     public function mostrarLados()
            //     {
            //         return "<p>X = $this->x</p><p>Y = $this->y</p>";
            //     }
                
            //     public function calculaPerimetro()
            //     {
            //         $p = (2 * $this->x) + (2 * $this->y);
            //         return "<h1>Perímetro: $p</h1>";
            //     }
                
            //     public function calculaArea()
            //     {
            //         $a = $this->x * $this->y;
            //         return "<h1>Área: $a</h1>";
            //     }
            // }
            
            // $porta = new Retangulo();
            // $porta->x = $_GET['x'];
            // $porta->y = $_GET['y'];
            
            // echo $porta->mostrarLados();
            // echo $porta->calculaPerimetro();
            // echo $porta->calculaArea();
            
            // class Pistola {
                
            //     public $municao = 0;
                
            //     public function recarrega()
            //     {
            //         if ($this->municao < 5) {
            //             $this->municao++;
            //         } else {
            //             echo "<p>Arma carregada!</p>";
            //         }
            //     }
                
            //     public function atira()
            //     {
            //         if ($this->municao > 0) {
            //             $this->municao--;
            //             echo "<p>POW!</p>";
            //         } else {
            //             echo "<p>Arma descarregada!</p>";
            //         }
            //     }
                
            //     public function verPente()
            //     {
            //         echo '<p>Pente: ';
            //         for ($i = 0; $i < $this->municao; $i++) {
            //             echo ' &bullet;';
            //         }
            //         echo '</p>';
            //     }
            // }
            
            // $desert_eagle = new Pistola();
            // $desert_eagle->recarrega();
            // $desert_eagle->verPente();
            // $desert_eagle->recarrega();
            // $desert_eagle->verPente();
            // $desert_eagle->recarrega();
            // $desert_eagle->verPente();
            // $desert_eagle->recarrega();
            // $desert_eagle->verPente();
            // $desert_eagle->recarrega();
            // $desert_eagle->verPente();
            // $desert_eagle->recarrega();
            
            // $desert_eagle->atira();
            // $desert_eagle->verPente();
            // $desert_eagle->atira();
            // $desert_eagle->verPente();
            // $desert_eagle->atira();
            // $desert_eagle->verPente();
            
            class Carro {
                private $gasolina;
                
                public function abastece()
                {
                    $this->gasolina = '50';
                }
                
                public function acelera()
                {
                    if ($this->gasolina) {
                        echo "<p>VROOOM!</p>";
                        $this->gasolina -= 0.2;
                    } else {
                        echo "<p>Out of fuel modafoca!</p>";
                    }
                }
                
                public function freia()
                {
                    if ($this->gasolina) {
                        echo "<p>IÉÉÉ! SCREECH!</p>";
                        $this->gasolina -= 0.05;
                    } else {
                        echo "<p>Out of fuel modafoca!</p>";
                    }
                }
                
                public function verTanque()
                {
                    echo "<p>Tanque: $this->gasolina l</p>";
                }
            }
            
            $aventador = new Carro();
            $aventador->abastece();
            
            $aventador->acelera();
            $aventador->acelera();
            $aventador->acelera();
            $aventador->freia();
            
            $aventador->verTanque();
            
        ?>
    </body>
</html>