<?php
class Html{
    public function css($link){
        return '<link rel="stylesheet" type="text/css" href="'.$link.'">';


    }

    public function meta_charset(){
        return '<meta charset="UTF-8">';
    }

    public function image($src,$alt){

        return '<img src="'.$src.'" alt="'.$alt.'">';
    }

    public function link($hyperlink,$text){

    return '<a href="'.$hyperlink.'">"'.$text.'"</a>';
    }
}
?>