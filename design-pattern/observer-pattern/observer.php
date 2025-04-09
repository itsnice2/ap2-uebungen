<?php

// Erstellt mit Hilfe von ChatGPT

// Interface Abonnent
interface Abonnent {
    public function neueNachricht($nachricht);
}

// Klasse Spiegel_de, die die Abonnenten verwaltet
class Spiegel_de {
    private $abonnenten = []; // Array, um Abonnenten zu speichern

    // Methode, um einen neuen Abonnenten hinzuzufügen
    public function neuer_abonnent(Abonnent $neuer_abonnent) {
        $this->abonnenten[] = $neuer_abonnent; // Neuen Abonnenten zum Array hinzufügen
    }

    // Methode, um einen Abonnenten zu löschen
    public function loeschen_abonnent(Abonnent $del_abonnent) {
        // Entfernen des Abonnenten aus dem Array
        foreach ($this->abonnenten as $key => $abonnent) {
            if ($abonnent === $del_abonnent) {
                unset($this->abonnenten[$key]);
            }
        }
    }

    // Methode, um eine Nachricht an alle Abonnenten zu senden
    public function neueNachrichtEingetroffen($nachricht) {
        foreach ($this->abonnenten as $ab) {
            $ab->neueNachricht($nachricht); // Aufruf der neuenNachricht Methode für jeden Abonnenten
        }
    }
}

// Klasse User, die das Interface Abonnent implementiert
class User implements Abonnent {
    public function neueNachricht($nachricht) {
        // Nachricht empfangen und anzeigen
        echo "User hat eine neue Nachricht: " . $nachricht . "<br>";
    }
}

// Klasse LokalZeitung, die das Interface Abonnent implementiert
class LokalZeitung implements Abonnent {
    public function neueNachricht($nachricht) {
        // Nachricht empfangen und anzeigen
        echo "LokalZeitung hat eine neue Nachricht: " . $nachricht . "<br>";
    }
}

// Hauptprogramm
$spiegel = new Spiegel_de();
$user1 = new User();
$lokal1 = new LokalZeitung();

// Hinzufügen der Abonnenten
$spiegel->neuer_abonnent($user1);
$spiegel->neuer_abonnent($lokal1);

// Eine neue Nachricht wird an alle Abonnenten gesendet
$spiegel->neueNachrichtEingetroffen("Hallo Welt");

?>
