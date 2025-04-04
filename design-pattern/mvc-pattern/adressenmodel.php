

<?php

class Adressenmodel{

    public static function zeige_adressen(){
        $i = 0;
        if (($handle = fopen("adressen.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $adressen[$i]['id'] = $data[0];
                $adressen[$i]['nachname'] = $data[1];
                $adressen[$i]['vorname'] = $data[2];
                $adressen[$i]['geburtstag'] = $data[3];
                $adressen[$i]['anschrift'] = $data[4];
                $adressen[$i]['plz_ort'] = $data[5];
                $adressen[$i]['telefon'] = $data[6];
                $adressen[$i]['email'] = $data[7];

                $i++;
            }
            fclose($handle);
        }

        return $adressen;
    }


    public static function speicher_adressen($daten){
        #...
    }

    public function neue_adressen($daten){
        #...
    }

    public function loesche_adressen($id){
        #...
    }


}

    