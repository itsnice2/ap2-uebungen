

<?php 

require_once("adressenmodel.php");

class Adressencontroller{

    public static function adressen_ausgeben(){
        $adressen = Adressenmodel::zeige_adressen();
        return $adressen;
    }
    
    public static function adresse_speichern($data){
        try{
            Adressenmodel::speicher_adressen($data);
            return true;
        }
        catch(Exception $e){
            return false;
        }
       
    }
}