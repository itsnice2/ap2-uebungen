<?php

interface SpiegelNachrichten{
    public function neueNachricht( $nachricht );
}

class User implements SpiegelNachrichten
{
    public function neueNachricht($nachricht){
        echo "Neue Nachricht für User: " . $nachricht;
    }
}

class LokalZeitung implements SpiegelNachrichten
{
    public function neueNachricht($nachricht){
        echo "Neue Nachricht für LokalZeitung: " . $nachricht;
    }
}

$user = new User();
$zeitung = new LokalZeitung();

$user->neueNachricht("Willkommen im System!");
echo "<br>";
$zeitung->neueNachricht("Breaking News: Neues Ereignis in der Stadt!");
?>