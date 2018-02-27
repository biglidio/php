<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            class Bateria{
                private $carga;
                    
                    public function __construct($carga){
                        $this->carga = $carga;
                    }
                    
                    public function usar(){
                        if($this->carga>0){
                            $this->carga = $this->carga - 1;
                        }else{
                            echo "<p>Sem Carga</p>";
                        }
                    }
                    
                    public function carregar(){
                        for($i = $this->carga; $i<100; $i++){
                            $this->carga = $this->carga + 1;
                        }   
                    }
                    
                    public function mostrar(){
                        $barra = "";
                        for($i = 0; $i < $this->carga; $i++){
                          $barra = $barra . "| ";
                        }
                        return $barra;
                    }
            }
            
            $c1 = new Bateria(11);
            echo $c1->mostrar();
            
        ?>    
    </body>
</html>