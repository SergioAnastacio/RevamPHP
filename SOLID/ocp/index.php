<?php 
//ocp
 interface IOp{
     public function calculate(float $a,float $b):float;
 }
 class Add implements IOp{
     public function calculate(float $a,float $b):float{
         return $a+$b;
     }
 }
 class Sub implements IOp{
     public function calculate(float $a,float $b):float{
         return $a-$b;
     }
 }
 class Mul implements IOp{
     public function calculate(float $a,float $b):float{
         return $a*$b;
     }
 }
 class Div implements IOp{
     public function calculate(float $a,float $b):float{
         return $a/$b;
     }
 }
    class Calculator{
        private IOp $op;
        public function __construct(IOp $_op){
            $this->op=$_op;
        }
        public function calculate(float $a,float $b):float{
            return $this->op->calculate($a,$b);
        }
    }
    // we can add new operation without changing the existing code
    $calculator=new Calculator(new Mul()); //new Sub(),new Mul(),new Div()
    echo $calculator->calculate(10,5);
?>