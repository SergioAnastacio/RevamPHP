<?php 
//polimorfism is the ability of an object to take on many forms
// can use interfaces or abstract classes

//interface to save data
interface ISave
{
    public function save(); // method to save data
}

//class document implements ISave to save data
class Document implements ISave // similar to a contract
{
    public function save()
    {
        echo "Document saved";
    }
}
//class product implements ISave to save 
class ProductRepository implements ISave //same method but different implementation
{
    public function save()
    {
        echo "Product saved";
    }
}

//with polimorfism we can use overloading or overriding methods

class Discount
{
    protected float $discount;
    public function __construct(float $_discount)
    {
        $this->discount = $_discount;
    }
    public function getDiscount(int | float $_price): float
    {
        return ($_price * (1 - $this->discount)); // apply discount
    }
}

// SpecialDiscount for VIP customers
class SpecialDiscount extends Discount
{
    const  SPECIAL = 0.2; // 20% discount
    public function getDiscount(int | float $_price): float
    {
        return ($_price * (1 - ($this->discount+self::SPECIAL))); // apply discount
    }
}

$discount = new Discount(0.1); // Base Customer
$specialDiscount = new SpecialDiscount(0.1); // VIP Customer
echo "Base Customer \n".$discount->getDiscount(100)."\n <br>"; // output: 90
echo "VIP Customer \n".$specialDiscount->getDiscount(100)."\n <br>"; // output: 70

?>