<?php 
//lsp

interface IDeployProyect{
    public function deploy();
}

interface IDeployAWS{
    public function deploy();
}

class DeployProyect implements IDeployAWS{
    public function deploy(){
        echo "AWS-Proyect deployed";
    }
}

class Proyect{
    public function create(){
        echo "Proyect created";
    }
    public function edit(){
        echo "Proyect edited";
    }
    public function delete(){
        echo "Proyect deleted";
    }
}
class ExternalProyect extends Proyect implements IDeployProyect{
    private IDeployAWS $AwsDeploy;
    public function __construct(IDeployAWS $_deploy){
        $this->AwsDeploy=$_deploy;
    }
    public function deploy(){
       $this->AwsDeploy->deploy();
    }
}


function send(IDeployProyect $proyect){
    $proyect->deploy();
}

$Deploy=new DeployProyect();
send(new ExternalProyect($Deploy));

?>