<?php 
//Interface + polimorfism + POO
interface IGetInfo
{
    public function getInfo():string;
}
// Class adress implements IGetInfo interface
class Adress implements IGetInfo
{
    protected string $adr_street;
    protected string $adr_number;
    protected string $adr_neiborhood;
    protected string $adr_city;
    protected string $adr_state;
    protected string $adr_zip;

    // TODO: Potentially CodeSmell: Constructor with too many parameters (6). Consider refactoring to reduce number of parameters.
    public function __construct(string $_street,string $_number,string $_neiborhood,string $_zip, string $_city, string $_state)
    {
        $this->adr_street = $_street;
        $this->adr_number= $_number;
        $this->adr_neiborhood = $_neiborhood;
        $this->adr_city = $_city;
        $this->adr_state = $_state;
        $this->adr_zip = $_zip;
    }
    public function getInfo():string
    {
        return "Adress: ".$this->adr_street." #".$this->adr_number.", ".$this->adr_neiborhood.", ".$this->adr_zip.", ".$this->adr_city.", ".$this->adr_state;
    }

}
//class website implements IGetInfo interface
class Website implements IGetInfo
{
    protected string $url;
    protected $options = [
        "http" => [
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36"
        ]
    ];

    public function __construct(string $_url)
    {
        $this->url = $_url;
    }
    public function getInfo():string
    {
        //create context
        $context = stream_context_create($this->options);
        //return content of the url
        $response = file_get_contents($this->url,false,$context);
        if($response === false) // check if response is false with strict comparison operator '==='
        {
            return "Error: Could not get content";
        }
        //return response as string
        return $response;

    }
}

//Function to print info of any object that implements IGetInfo
function printInfo(IGetInfo $_obj)
{
    echo $_obj->getInfo()."\n <br>";
}

$adr = new Adress("Av. Adolfo López Mateos Sur","1820","La Calma","44500", "Zapopan", "Jal");
$web = new Website("https://www.sergioanastacio.icu"); // this website is not a static website so it will return an error on console.
printInfo($adr);
printInfo($web);
?>