<?php 
//srp 
class order{
   private $items=[];
   private $total;
   public function addItem($description , $price){
    $this->items[]=['description'=>$description,'price'=>$price];
    $this->total+=$price;
   }
   public function CreateOrder(){
    $order=new stdClass();
    $order->items=$this->items;
    $order->total=$this->total;
    return $order;
   }
}
class EmailNotification{
    public function sendEmail(stdclass $order){
        echo "Email sent with order details";
    }
}
$order=new order();
$email=new EmailNotification();
$order->addItem('Shirt', 50);
$order->addItem('Pant', 100);
$format_order=$order->CreateOrder();
$email->sendEmail($format_order);
?>