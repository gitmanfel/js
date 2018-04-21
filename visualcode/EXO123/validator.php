<?php
class Validator{
    public function validate_string($string){
return filter_var($string,FILTER_SANITIZE_STRING);


    }
}







?>