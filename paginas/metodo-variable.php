

<?php
class Foo
{
    function Variable()
    {
        $nombre = 'Bar';
        $this->$nombre(); // Esto llama al método Bar()
    }
    
    function Bar()
    {
        echo "Esto es Bar";
    }
}

$foo = new Foo();
$nombrefunc = "Variable";
$foo->$nombrefunc();  // Esto llama a $foo->Variable()

?>







