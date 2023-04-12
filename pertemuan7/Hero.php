<?php class Hero{
    // access modifier pada oop ada 3: public, private, protected

   


    //attribut / properti
    public $nama = "Alucard";
    public $health = 3200;
    public $damage = 200;
    public $level = 1;

     //constructor adalah method yang secara otomatis ketika objek di buat
     public function __construct($nama, $health, $damage)
     {
        $this->nama = $nama;
        $this->health = $health;
        $this->damage = $damage;
     }



    //method untuk menampilkan info dari hero
    public function getInfo(){
        echo "<br> Nama: " . $this->nama;
        echo "<br> HP: " . $this->health;
        echo "<br> Damage: " . $this->damage;
        echo "<br> Level: " . $this->level;
       }

       // method untuk naik 1 level
       public function levelUp($number){
        $this->level = $this->level + $number;
        $this->health = $this->health + (200 * $number);
        $this->damage = $this->damage + (50 * $number);
       }

}

// membuat objek dari class Hero
$hero1 = new Hero("Alucard", 3200, 700);


$hero2 = new Hero("Hanabi", 5200, 800);


$hero2->getInfo();

echo"<hr>";

$hero2->levelUp(14);

$hero2->getInfo();