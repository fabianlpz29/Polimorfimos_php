<?php
class Animal{
    public function roar(){
        echo "El ";
    }
}

class Gato extends Animal{
    public $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function roar()
    {
        echo $this->nombre . " miaguea, miau";
    }
}

class Perro extends Animal{
    public $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function roar()
    {
        echo $this->nombre . "ladra, wuau";
    }
}

class Vaca extends Animal{
    public $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function roar()
    {
        echo $this->nombre . "le hace muuu";
    }
}

class Mapache extends Animal{
    public $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function roar()
    {
       echo $this->nombre . "dice el abecedario: A, B, C, D, E, F, G, H, I, J, K, L, M, N, Ñ, O, P, Q, R, S, T, U, V, W, X, Y y Z";
    }
}

function roarAnimal(Animal $animal){
    $animal->roar();
}

$gato = new Gato("gato");
$perro = new Perro("perro");
$vaca = new Vaca("vaca");
$mapache = new Mapache("mapache");

if (isset($_POST['gato'])){
    ?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php roarAnimal($gato)?>");
        window.speechSynthesis.speak(msg)
    </script>
    <?php
}
else if(isset($_POST['perro'])){
    ?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php roarAnimal($perro)?>");
        window.speechSynthesis.speak(msg)
    </script>
    <?php
}
else if(isset($_POST['vaca'])){
    ?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php roarAnimal($vaca)?>");
        window.speechSynthesis.speak(msg)
    </script>
    <?php
}
else if(isset($_POST['mapache'])){
    ?>
    <script>
        var msg = new SpeechSynthesisUtterance("<?php roarAnimal($mapache)?>");
        window.speechSynthesis.speak(msg)
    </script>
    <?php
}


?>

