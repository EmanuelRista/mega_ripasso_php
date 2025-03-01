<?php 

interface Person {
    public function getName(): string;
    public function getAge(): int;
    public function getGender(): string;
    public function mostraDettagli(): string;
}

class Worker implements Person {
    private string $name;
    private int $age;
    private string $gender;

    public function __construct(string $name, int $age, string $gender) {
        
        if (empty($name)) {
            throw new InvalidArgumentException("Il nome non può essere vuoto");
        }
        if ($age < 0) {
            throw new InvalidArgumentException("L'età non può essere negativa");
        }
        if ($gender !== 'Maschio' && $gender !== 'Femmina') {
            throw new InvalidArgumentException("Il sesso può essere solo Maschio o Femmina");
        } //MAGA!
        
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function getGender(): string {
        return $this->gender;
    }

    public function mostraDettagli(): string {
        return "Nome: $this->name, Età: $this->age, Sesso: $this->gender\n";
    }

}

try {
    $worker1 = new Worker('John', 25, 'Maschio');
    echo $worker1->mostraDettagli() . "\n"; // Output: Nome: John, Età: 25, Sesso: Maschio
} catch (InvalidArgumentException $e) {
    echo "Errore: " . $e->getMessage();
}

echo '<br>';

class Macchina {
    
    private string $colore;
    private static int $totaleMacchine = 0;
    
    public function __construct(string $colore) {
        $this->colore = $colore; //si riferisce all'oggetto corrente
        self::$totaleMacchine++; //si riferisce alla classe
    }

    public function getColore(): string {
        return $this->colore;
    }

    public static function getTotaleMacchine(): int {
        return self::$totaleMacchine;
    }

    public function cambiaColore(string $nuovoColore): void {
        $this->colore = $nuovoColore;
    }
}

$macchina1 = new Macchina('Rosso');
$macchina2 = new Macchina('Blu');
$macchina3 = new Macchina('Verde');
$macchina4 = new Macchina('Giallo');
$macchina5 = new Macchina('Nero');

echo $macchina1->getColore() . "<br>"; // Output: Rosso
echo $macchina2->getColore() . "<br>"; // Output: Blu
$macchina1->cambiaColore('Verde') . "<br>"; 
echo $macchina1->getColore() . "<br>"; // Output: Verde
echo Macchina::getTotaleMacchine();

echo '<br>';

abstract class Dolce {
    protected string $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    abstract public function getPrezzo(): float;
}

class Torta extends Dolce {
    private float $prezzo;

    public function __construct(string $nome, float $prezzo) {
        parent::__construct($nome);
        $this->prezzo = $prezzo;
    }

    public function getPrezzo(): float {
        return $this->prezzo;
    }
}

$torta = new Torta('Semifreddo', 5.50);
echo $torta->getNome() . "<br>"; // Output: Semifreddo
echo $torta->getPrezzo() . "<br>"; // Output: 5.5

echo '<br>';

class Studente {
    private static int $totaleStudenti = 0;
    protected string $nome;

    public function __construct($nome) {
        $this->nome = $nome;
        self::$totaleStudenti++;
    }

    public static function getTotaleStudenti(): int {
        return self::$totaleStudenti;
    }

    public function saluta(): string {
        return "Ciao, sono $this->nome!";
    }

    final public function regolaBase(): string {
        return "Tutti gli studenti devono studiare!";
    }
}

class StudenteSpeciale extends Studente {
    
    public function salutaSpeciale(): string {
        return "Salve! sono $this->nome, uno studente speciale!";
    }

   /*  public function regolaBase() {
        return "Tutti gli studenti speciali devono studiare!";
    } */ //non posso fare l'override perchè il metodo è final
}

$studente1 = new Studente("Luca");
$studente2 = new Studente("Sara");
$studente3 = new StudenteSpeciale("Marco");

echo $studente1->saluta() . "<br>"; // Output: Ciao, sono Luca!
echo $studente3->salutaSpeciale() . "<br>"; 
echo "Totale studenti: " . Studente::getTotaleStudenti() . "<br>"; //metodi statici  si sano senza oggetti
echo "Totale (via oggetto): " . $studente1::getTotaleStudenti() . "<br>"; //molto raro, metodo statico da n oggetto, in genere non si usa

echo '<br>';

class Biblioteca {

    public const MAX_LIBRI = 5;
    protected const ORARIO_APERTURA = '08:00';

    private const CODICE_SEGRETO = '1234';

    protected $utente;

    public function __construct($utente) {
        $this->utente = $utente;
    }

    public function prestaLibro($numeroLibri) {
        if($numeroLibri <= self::MAX_LIBRI) {
            return "$this->utente può prendere $numeroLibri libri";
        } else {
            return "Errore: $this->utente può prendere al massimo " . self::MAX_LIBRI . " libri";
        }
    }

    public function getOrarioApertura() {
        return self::ORARIO_APERTURA;
    }

    public function getSegreto() {
        return self::CODICE_SEGRETO;
    }

}

$biblioteca = new Biblioteca('Luca');
echo "Orario di apertura: " . $biblioteca->getOrarioApertura() . "<br>"; // Output: 08:00
echo "Massimo libri: " . Biblioteca::MAX_LIBRI . "<br>"; // Output: 5
echo $biblioteca->getSegreto() . "<br>"; // Output: 1234
//echo Biblioteca::CODICE_SEGRETO . "<br>"; // cannot access private const

echo '<br>';

/* class Animale {

    public string $nome;
    public string $tipo;

    public function __construct(string $nome, string $tipo) {
        $this->nome = $nome;
        $this->tipo = $tipo;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getTipo(): string {
        return $this->tipo;
    }

    public function __toString() {
        return "Nome: $this->nome, Tipo: $this->tipo";
    }

} */

class Animale {

    public function __construct(  
        private string $nome,
        private string $tipo
    ) {
      
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getTipo(): string {
        return $this->tipo;
    }
}

$gatto = new Animale('Felix', 'Gatto');
echo $gatto->getNome() . "<br>"; // Output: Felix
echo $gatto->getTipo() . "<br>"; // Output: Gatto

echo '<br>';

class User {
    readonly public string $name;
    readonly private int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getAge(): int {
        return $this->age;
    }

}

$utente = new User('Luca', 30);
echo $utente->name . "<br>"; // Output: Luca
echo $utente->getAge() . "<br>"; // Output: 30
//$utente->name = 'Marco'; // Cannot modify readonly property

//8.2+

class User2 {

    public function __construct(
        public readonly string $name,
        public readonly int $age
    ) {
      
    }

    public function getAge(): int {
        return $this->age;
    }
}

$utente2 = new User('Giuseppe', 36);
echo $utente2->name . "<br>"; // Output: Giuseppe
echo $utente2->getAge() . "<br>"; // Output: 36
//$utente->name = 'Marco'; // Cannot modify readonly property

echo '<br>';

$persona = null;
$nome = $persona?->getName();
echo $nome; // Output: null

echo '<br>';

class Indirizzo {
    public $via = "Via Roma";
}

class Utente {
    public $indirizzo;

    public function __construct($indirizzo = null) {
        $this->indirizzo = $indirizzo;
    }
}


$utente76 = new Utente();
$via = $utente76->indirizzo?->via;
echo $via; // Output: null

echo '<br>';

trait Volare {
    public function vola() {
        return "Sto volando!";
    }
}

trait Parlare {
    public function parla() {
        return "Sto parlando!";
    }
}

trait Salutare {
    public function saluta() {
        return "Ciao!";
    }
}

class Uccello {

    use Volare;
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}


class Supereroe {

    use Volare, Parlare, Salutare {
        //Parlare::saluta insteadof Volare; //se Volare e Parlare hanno entrambe un metodo "saluta" uso il metodo di Parlare
        Salutare::saluta as salutoParlante;
    }

    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

$uccello = new Uccello('Pappagallo');
echo $uccello->vola() . "<br>"; // Output: Sto volando!

echo $uccello->nome . ": " . $uccello->vola() . "<br>"; // Output: Pappagallo: Sto volando!
$superEroe = new Supereroe('Superman');
echo $superEroe->saluta() . "<br>"; // Output: Ciao!
echo $superEroe->salutoParlante() . "<br>"; // Output: Ciao!