<?php

class Adressenmodel
{

    public function zeige_adressen(){
        $i = 0;
        if (($handle = fopen("adressen.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $adressen[$i]['nachname'] = $data[0];
                $adressen[$i]['vorname'] = $data[1];
                $adressen[$i]['geburtstag'] = $data[2];               
                $i++;
            }
            fclose($handle);
        }

        return $adressen;
    }


    public function speicher_adressen($daten){

    }

    public function neue_adressen($daten){

    }

    public function loesche_adressen($id){

    }


}

    