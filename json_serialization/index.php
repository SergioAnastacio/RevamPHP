<?php 
//JSON Serialization
    class Product {
        public string $name;
        public float $price;
        public int $quantity;
        
        public function __construct(string $name, float $price, int $quantity) {
            $this->name = $name;
            $this->price = $price;
            $this->quantity = $quantity;
        }

    }
    $graphicsCard = new Product("Nvidia RTX4090", 48000.00, 50);
    $json_string = json_encode($graphicsCard);
    echo "<br> Json format: \n".$json_string;
    $json_obj= '{"name":"Nvidia RTX4090","price":48000,"quantity":50}';
    $obj_from_json = json_decode($json_obj);
    echo "<br> Object from json: \n".$obj_from_json->name."<br>";
    print_r($obj_from_json); // json to stdcalss object
    echo "<br>";
    // JSON Serialization with array
    $products = array();
    $products[] = new Product("Nvidia RTX4090", 48000.00, 50);
    $products[] = new Product("Nvidia RTX3080", 35000.00, 100);
    $products[] = new Product("Nvidia RTX2080", 25000.00, 200);
    $products_JSON = json_encode($products);
    echo "<br> Product Json format: \n".$products_JSON."<br>";

    // json to associative array
    $products_array = json_decode($products_JSON, true); // active flag  $associative
    echo "<br> Product array format: \n".$products_array[0]['name'];


?>
