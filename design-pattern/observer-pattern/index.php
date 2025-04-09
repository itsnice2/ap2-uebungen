<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Observer | Design-Pattern</title>
    <link href="../../assets/ap2.css" rel="stylesheet">
    <link rel="icon" href="../../assets/icon.png">
</head>
<body>

    <h1>Observer-Design-Pattern</h2>
    <p>
        <a href="https://www.hsbi.de/elearning/data/FH-Bielefeld/lm_data/lm_1359639/pattern/observer.html" target="_blank">www.hsbi.de</a> | 
        <a href="https://www.philipphauer.de/study/se/design-pattern/observer.php" target="_blank">www.philipphauer.de</a> | 
        <a href="https://refactoring.guru/design-patterns/observer" target="_blank">refactoring.guru (EN)</a>
    </p>
    
    <p class="text">Observer ist ein Design-Pattern, mit dem man einen Abomechanismus definieren kann, um mehrere Objekte über Ereignisse zu benachrichtigen, die mit dem Objekt, das man beobachtet, geschehen.</p>

    <h2>Beispiel in C#</h2>
<pre>
using System;
using System.Collections.Generic;



class <b>Spiegel_de</b>
{
    List&lt;Abonnent&gt; abonnenten = new List&lt;Abonnent&gt;();

    public void <b>neuer_abonnent</b>(Abonnent neuer_abonnent)
    {
        this.abonnenten.Add(neuer_abonnent);
    }

    public void <b>loeschen_abonnent</b>(Abonnent del_abonnent)
    {
        this.abonnenten.Remove(del_abonnent);
    }

    public void <b>neueNachrichtEingetroffen</b>(string nachricht)
    {
        foreach(Abonnent ab in this.abonnenten)
        {
            ab.neueNachricht( nachricht );
        }
    }
}



interface <b>Abonnent</b>
{
    void <b>neueNachricht</b>(string nachricht);
}



class <b>User</b> : <b>Abonnent</b>
{
    public void <b>neueNachricht</b>( string nachricht )
    {
        Console.WriteLine("User hat eine neue Nachricht: " + nachricht);
    }
}



class <b>LokalZeitung</b> : <b>Abonnent</b>
{
    public void <b>neueNachricht</b>(string nachricht)
    {
        Console.WriteLine("LokalZeitung hat eine neue Nachricht: " + nachricht);
    }
}



class <b>Program</b>
{
    static void <b>Main</b>(string[] args)
    {
        Spiegel_de spiegel  = new Spiegel_de();
        User user1          = new User();
        LokalZeitung lokal1 = new LokalZeitung();

        spiegel.neuer_abonnent(user1);
        spiegel.neuer_abonnent(lokal1);

        spiegel.neueNachrichtEingetroffen("Hallo Welt");
    }
}
</pre>

    <h2><a href="observer.php">Beispiel in PHP</a></h2>

<pre>
interface <b>Abonnent</b> {
    public function neueNachricht($nachricht);
}



class <b>Spiegel_de</b> {
    private $abonnenten = []; // Array, um Abonnenten zu speichern


    public function <b>neuer_abonnent</b>(Abonnent $neuer_abonnent) {
        $this->abonnenten[] = $neuer_abonnent;
    }


    public function <b>loeschen_abonnent</b>(Abonnent $del_abonnent) {
        foreach ($this->abonnenten as $key => $abonnent) {
            if ($abonnent === $del_abonnent) {
                unset($this->abonnenten[$key]);
            }
        }
    }

    
    public function <b>neueNachrichtEingetroffen</b>($nachricht) {
        foreach ($this->abonnenten as $ab) {
            $ab->neueNachricht($nachricht);
        }
    }
}



class <b>User</b> implements <b>Abonnent</b> {
    public function <b>neueNachricht</b>($nachricht) {
        echo "User hat eine neue Nachricht: " . $nachricht . "&lt;br&gt;";
    }
}



class <b>LokalZeitung</b> implements <b>Abonnent</b> {
    public function <b>neueNachricht</b>($nachricht) {
        echo "LokalZeitung hat eine neue Nachricht: " . $nachricht . "&lt;br&gt;";
    }
}


$spiegel = new Spiegel_de();
$user1 = new User();
$lokal1 = new LokalZeitung();


$spiegel->neuer_abonnent($user1);
$spiegel->neuer_abonnent($lokal1);


$spiegel->neueNachrichtEingetroffen("Hallo Welt");

</pre>

<style>
    pre{
        width: 600px;
        text-align: left;
        position: relative;
        left: calc(50% - 300px);

        border: solid 1px lightgrey;
        border-radius: 10px;
        padding: 30px 30px;

    }
</style>

</body>
</html>