<?php 
//isp
interface ICrud{
    public function create();
    public function read();
    public function update();
    public function delete();
}
interface ICrudBase{
    public function create();
    public function read();
}
interface ICrudUpdate{
    public function update();
}
interface ICrudDelete{
    public function delete();
}

interface ICrudUser extends ICrudBase,ICrudUpdate,ICrudDelete
{   
}

class UserCrud implements ICrudUser{
    public function create(){
        echo "User created";
    }
    public function read(){
        echo "User read";
    }
    public function update(){
        echo "User updated";
    }
    public function delete(){
        echo "User deleted";
    }
}
class SaleCrud implements ICrudBase{
    public function create(){
        echo "Sale created";
    }
    public function read(){
        echo "Sale read";
    }
}

function general(ICrudUser $crud){
    $crud->update();
    $crud->delete();
    $crud->create();
    $crud->read();
}
general(new UserCrud());
//if we  inject salecrud it will give error does not implement ICrudUser

?>