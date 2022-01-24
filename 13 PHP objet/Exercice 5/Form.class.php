<?php
// Personne.class.php
class Form
{
    private $html;
    private $text;
    function __construct()
    {
       setHtml();
    }   

    function setText($textArea=""){
        $text .="<textarea>".$textArea."</textarea>";
    }

    function setSubmit(){

    }

    function setHtml(){
        $html =
        "
        <form>
            <fieldset>
            ".$text."
            </filedset>
        </form>
        ";
    }

    function getForm(){
        return $this->html;
    }
}
?>