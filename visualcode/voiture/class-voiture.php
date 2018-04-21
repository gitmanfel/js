<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



    class Form {

      public function Header(){
        echo '<meta charset="utf-8">';
        echo '<title>Point denlevement </title>';
        echo '<body>';
    }


    public $img ='<img src="assets/mustang.jpg"  alt="mustang gt500">';
    public $nom = "<p>nom : ";
    public $name ='Mustang</p>';
    public $mod = "<p>modele : ";
    public $model='GT500</p>';
    public $imat="<p>immatriculation : ";
    public $ima="BE77";
    public $kilo ="<p>kilometrage : ";
    public $kma=750000;
    public $km=" km</p>";
    public $usage="<p>usure : ";
    public $mise="<p>mise en circulation : ";
    public $mec=1977;
    public $ag=" (Agée de ";
    public $age=" ans)</p>";
    public $po="poid : ";
    public $poids=1822;
    public $poi=" kg";
    public $et="<p>état : ";
    public $etat='Reserved</p>';
    public $br='<br/>';

        public function openForm($action) {
            echo '<form action="' . $action . '" method="POST">';
        }

        public function Title(){
          echo '<div class="Available cars"><h1>Cars</h1></div>';
      }

        
        public function select($modele) {
            echo '<select name="' . $modele . '">';
            echo '<option>Audi</option>';
            echo '<option>Renault</option>';
            echo '<option>Ford</option>';
            echo '<option>Porche</option>';
            echo '</select><br>';
        }
          public function submit() {
            echo '<p><button type="submit">Envoyer</button></p>';
        }

        public function closeForm() {
            echo '</form>';
        }
        public function Poids(){
          if ($this->poids<='3,5') {
            $etat="voiture privée";
          }else {
            $etat="voiture utilitaire";
          }
        }
        
          public function Kilo(){
            if($this->kma < 100000){
              echo "low</p>";
          }elseif($this->kma > 100000 && $this->kma < 200000){
                  echo "middle</p>";
          }else{
                  echo "high</p>";
          }
          }

        public function Plaque(){
          if(stristr($this->ima, 'FR') == true){
            echo " France</p>";}
            elseif(stristr($this->ima, 'BE') == true){
                echo " Belgique</p>";
              }elseif(stristr($this->ima, 'DE') == true){
                echo "Allemagne</p>";
            }}

            

        public function Age(){
          $datejour=date("Y");
          $ageauto=$datejour-$this->mec;
              echo $ageauto;
      }
      public function Drive(){
              $this->kma = 220000;
      }
     
        
        
    }

  


?>