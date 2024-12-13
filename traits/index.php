<?php 
//traits solve problem of multiple inheritance
// traits are like interfaces but can have implementation

trait traitName
{
    public function method1()
    {
        echo "Method 1";
    }
    public function method2()
    {
        echo "Method 2";
    }
}

//case of use on DB
trait DB
{
    public function connect()
    {
        echo "Connected to DB";
    }
    public function disconnect()
    {
        echo "Disconnected from DB";
    }
}

class ClassName
{
    // use the trait in the class  
    use traitName, DB;  // can use multiple traits separated by comma
}

//useful for code reuse and to avoid multiple inheritance

//Example of trait. LOG case
trait Log
{
    // using protected visibility to make the method accessible only to the class and its subclasses 
    // avoid miss call or codesmells.
    protected function log(string $_message, string $_filename)
    {
        //check if file exists
        if(!file_exists($_filename)) // ! means opoosite operator
        {
           // create file and adds content
            file_put_contents($_filename, $_message);
        }
        //obtains the content of the file
        $current= file_get_contents($_filename);
        // formats the message log 
        $current .= date('Y-m-d H:i:s'). " - ".$_message."\n";
        //writes the message log
        file_put_contents($_filename, $current);
    }
}// this trait can be used in any class that needs to log messages to a file

//use the trait in the class
class Invoice
{
    use Log; 

    public function create()
    {
        //send to console 
        echo "Invoice created \n";
        //create invoice
        $this->log("Invoice created \n", "log.txt");
    }
}

$invoice = new Invoice(); //instance of class Invoice
$invoice->create(); //call the method create

?>