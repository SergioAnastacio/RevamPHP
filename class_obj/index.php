<?php 
//Class and Objects
//declare strict types
declare(strict_types=1); // strict type declaration

//class sale
class Sale
{
    //properties
    private int|float $total;  //using union types , working with both int and float
    private $discount;
    private $tax;
    static $count; //static property shared by all instances of the class

    //construct  in php does not support overloaded constructors like c# or java
    public function __construct(int $total, float $discount, float $tax)
    {
        $this->total = $total;
        $this->discount = $discount;
        $this->tax = $tax;
        self::$count++; //increment the count of objects
    }
    //Destructor automatically invoked when object is destroyed or script ends
    public function __destruct()
    {
        echo "Object destroyed"; // usefull for closing connections or freeing resources
    }
    //static method to get the count of objects
    public static function getCount()
    {
        return self::$count;
    }
    //static method reset the count of objects
    public static function resetCount()
    {
        self::$count = 0;
    }
    //gets
    public function getTotal()
    {
        return $this->total;
    }
    public function getDiscount()
    {
        return $this->discount;
    }
    public function getTax()
    {
        return $this->tax;
    }
    //sets
    public function setTotal($total)
    {
        $this->total = $total;
    }
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
    public function setTax($tax)
    {
        $this->tax = $tax;
    }
    //calculate total
    public function calculateTotal()
    {
        return $this->total - $this->discount + $this->tax;
    }

}

$sale= new Sale(50, 0.10, 0.5); // create intance of class sale and pass params trhougth the construct
$saleInstance= new Sale(75, 0.10, 0.5); // create intance of class sale and pass params trhougth the construct
$saleInstance1= new Sale(95, 0.10, 0.5); // create intance of class sale and pass params trhougth the construct
$saleInstance2= new Sale(100, 0.10, 0.5); // create intance of class sale and pass params trhougth the construct
echo Sale::getCount(); //output: 4
?>