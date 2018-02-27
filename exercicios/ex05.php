<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercício 5</title>
    </head>
    <body>
        <?php
            class Pneu {
                private $dura;
                
                public function __construct($dura)
                {
                    $this->dura = $dura;
                }
                
                public function usar()
                {
                    $this->dura = $this->dura - 10;
                }
                
                public function getDura()
                {
                    return $this->dura;
                }
            }
            
            class Carro {
                private $marca, $pneu1, $pneu2, $pneu3, $pneu4;
                
                public function __construct($marca, Pneu $pneu1, Pneu $pneu2, Pneu $pneu3, Pneu $pneu4)
                {
                    $this->marca = $marca;
                    
                    $this->pneu1 = $pneu1;
                    $this->pneu2 = $pneu2;
                    $this->pneu3 = $pneu3;
                    $this->pneu4 = $pneu4;
                }
                
                public function acelerar()
                {
                    echo "<p>Pneu 1: ".$this->pneu1->getDura()."</p>";
                    echo "<p>Pneu 2: ".$this->pneu2->getDura()."</p>";
                    echo "<p>Pneu 3: ".$this->pneu3->getDura()."</p>";
                    echo "<p>Pneu 4: ".$this->pneu4->getDura()."</p>";
                    if ($this->pneu1->getDura() < 1 || $this->pneu2->getDura() < 1 || $this->pneu3->getDura() < 1 || $this->pneu4->getDura() < 1) {
                        echo "<p>A durabilidade de algum pneu é insuficiente.</p>";
                    } else {
                        echo "<p>VRUMMM!!!</p>";
                        $this->pneu1->usar();
                        $this->pneu2->usar();
                        $this->pneu3->usar();
                        $this->pneu4->usar();
                    }
                }
                
                public function trocarPneu1($dura)
                {
                    $this->pneu1 = new Pneu($dura);
                }
                
                public function trocarPneu2($dura)
                {
                    $this->pneu2 = new Pneu($dura);
                }
                
                public function trocarPneu3($dura)
                {
                    $this->pneu3 = new Pneu($dura);
                }
                
                public function trocarPneu4($dura)
                {
                    $this->pneu4 = new Pneu($dura);
                }
            }
            
            $p1 = new Pneu(50);
            $p2 = new Pneu(50);
            $p3 = new Pneu(50);
            $p4 = new Pneu(50);
            $carro = new Carro('Fusca', $p1, $p2, $p3, $p4);
            $carro->acelerar();
            $carro->acelerar();
            $carro->acelerar();
            $carro->trocarPneu2(100);
            $carro->trocarPneu4(100);
            $carro->acelerar();
            $carro->acelerar();
            $carro->trocarPneu1(100);
            $carro->trocarPneu3(100);
            $carro->acelerar();
        ?>
    </body>
</html>