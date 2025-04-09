<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linux-Befehle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="favicon.png">
</head>
<body>

<div class="kopfleiste">
    <h1 class="text-center">Linux auf der Konsole</h1></center>
    <hr>
</div>

<div class="container">

    <div class="row">

        <div class="col" style="max-width: 350px;">
            <h3>Inhalt</h3>
            <div>
                <ul>
                    <li class="li-bewegung" onclick="showElement('bewegung')">Bewegung durchs Dateisystem</li>
                    <li class="li-programme" onclick="showElement('programme')">Programme installieren und updaten</li>
                    <li class="li-dateiensuchenanzeigen" onclick="showElement('dateiensuchenanzeigen')">Dateien suchen und anzeigen</li>
                    <li class="li-dateienanlegenaendern" onclick="showElement('dateienanlegenaendern')">Dateien anlegen und ändern</li>
                    <li class="li-systemueberwachung" onclick="showElement('systemueberwachung')">System-Überwachung und Netzwerk</li>
                    <li class="li-benutzergruppen" onclick="showElement('benutzergruppen')">Benutzer und Gruppen</li>
                    <li class="li-rechte" onclick="showElement('rechte')">Rechte</li>
                    <li class="li-festplattenbelegung" onclick="showElement('festplattenbelegung')">Festplattenbelegung</li>
                    <li class="li-cronjobs" onclick="showElement('cronjobs')">Cron-Jobs</li>
                    <li class="li-shell" onclick="showElement('shell')">Shell anpassen</li>
                    <li class="li-ssh" onclick="showElement('ssh')">SSH</li>
                    <li class="li-git" onclick="showElement('git')">Git-Grundlagen</li>
                </ul>
            </div>
        </div>

        <div class="col">
            <div class="">
                <div class="row">
                    <div class="col"><h3 class="allgemeines">Allgemeines</h3></div>
                    <div class="col" style="text-align: end"><button class="info">I/O</button></div>
                </div>
                <div class="allgemeines">
                    <hr>
                    <p>Linux ist, was Datei- und Ordnernamen betrifft, kontextsensitiv. Das bedeutet, das die Dateien <code>test.txt</code>, <code>Test.txt</code> und <code>TEST.txt</code> unter Linux drei unterschiedliche Dateien sind. Unter Windows spricht man damit aber immer die gleiche Datei an.</p>
                    <p>Die TAB-Taste ist dein Freund. Sie hilft Eingaben automatisch zu vervollständigen. Willst du zum Beispiel ins Verzeichnis <code>Dokumente</code> wechseln, kannst du <code>cd Dok</code> eingeben, und die TAB-Taste drücken. Dann wird deine Eingabe automatisch zu <code>cd Dokumente/</code> vervollständigt. Gibt es allerdings eine Datei die genauso anfängt (zum Beispiel Dokumente und Downloads), dann passiert nichts. Aber dann kannst du die TAB-Taste nochmals drücken, und dir werden Vorschläge angezeigt. So kann man sich eine Menge Tipperei ersaren ;-)</p>
                    <p>Die meisten Programme kann man mit STRG+C oder STRG+X beenden. Funktioniert auch super wenn z.B. eine Ausgabe auf dem Bildschirm länger dauert, und man sie abbrechen möchte.</p>
                    <p>Auch wenn du einen langen Befehl eingegeben hast, und ihn doch nicht ausführen möchtest, kannst du STRG+C drücken.</p>
                    <p><b>Relative und absolute Pfade</b></p>
                    <p><em>Relative Pfade</em>: Sind immer abhängig davon, wo du dich befindest. Im Verzeichnis <code>/home/eduard</code> würde ein <code>cd Dokumente</code> einen Wechsel in das Verzeichnis <code>/home/eduard/Dokumente</code> bedeuten.</p>
                    <p><em>Absolute Pfade</em>: Beginnt eine Pfadangabe mit <code>/</code>, so ist es immer ein absoluter Pfad. Sprich: Der Pfad beginnt immer in der höchsten Verzeichnisebene. Willst du als in das Home-Verzeichnis eines Benutzers wechseln, kannst du das mit <code>cd /home/[BENUTZER]</code> tun. <code>/</code> ist vergleichbar mit <code>C:</code> unter Windows.</p>
                    <p><b>sudo</b></p>
                    <p>Es wird vorkommen, dass ein Befehl wegen mangelnden Benutzerrechten nicht ausgeführt werden kann. Wenn du weißt was du tust, kannst du mit diesem Befehl als Präfix deinen Befehl mit Administrator-Rechten ausführen. Vorraussetzung ist, dass dein Benutzer zur <code>sudo</code>-Gruppe gehört. Beispiel für die Verwendung: <code>sudo apt install neofetch</code> (installiert das Programm <em>neofetch</em>)</p>
                </div>

            </div>

            <div class="abschnittsblock-grau bewegung">
                <h3 id="bewegung">Bewegung durchs Dateisystem</h3>
                <hr>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Befehl</th>
                        <th>Erklärung</th>
                    </tr>
                    <tr>
                        <td><code>pwd</code></td>
                        <td>print working directory - Gibt das Verzeichnis aus, in dem du dich gerade befindest. Hilfreich, wenn du dir nicht sicher bist wo du dich befindest.</td>
                    </tr>
                    <tr>
                        <td><code>cd</code></td>
                        <td>change directory - Verzeichnis wechseln</td>
                    </tr>
                    <tr>
                        <td><code>cd ..</code></td>
                        <td>eine Verzeichnisebene höher gehen</td>
                    </tr>
                    <tr>
                        <td><code>cd Dokumente/Jahresbericht</code></td>
                        <td>Wechsel in das Verzeichnis Dokumente, und darin in das Verzeichnis Jahresbericht</td>
                    </tr>
                    <tr>
                        <td><code>cd ./Jahresbericht</code></td>
                        <td>Ein Punkt</td>
                    </tr>
                    <tr>
                        <td><code>cd ~</code></td>
                        <td>
                            Wechsel in das Home-Verzeichnis des angemeldeten Benutzers<br>
                            Für den Benutzer eduard wäre das dann gleichbedeutend mit <code>cd /home/eduard/</code>
                        </td>
                    </tr>
                    <tr>
                        <td><code>clear</code></td>
                        <td>Leert den Bildschirminhalt</td>
                    </tr>
                </table>
            </div>

            <div class="abschnittsblock-grau programme">
                <h3 id="programme">Programme installieren und updaten</h3>
                <hr>
                <p>Jedes Linux benutzt ein Paketprogramm, um Programme zu installieren und das System upzudaten. Ubuntu und andere Debian-Varianten nutzen dafür <code>apt</code> (Advanced Packaging Tool).</p>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Befehl</th>
                        <th>Erklärung</th>
                    </tr>
                    <tr>
                        <td><code>apt update</code></td>
                        <td>Aktualisiert die Paketquellen des Systems.</td>
                    </tr>
                    <tr>
                        <td><code>apt upgrade</code></td>
                        <td>Updatet installierte Programm, wenn Updates verfügbar sind.</td>
                    </tr>
                    <tr>
                        <td><code>apt install [PROGRAMM]</code></td>
                        <td>Installiert ein Programm. Wenn man ein -y anhängt, also <code>apt install [PROGRAMM] -y</code>, dann wird die Frage ob man es wirklich installieren möchte automatisch mit "ja" beantwortet. Man kann auch mehrere Programme installieren, indem man zwischen den Namen ein Leerzeichen lässt.</td>
                    </tr>
                    <tr>
                        <td><code>apt remove [PROGRAMM]</code></td>
                        <td>Deinstalliert Programme, aber nicht ihre Konfigurationsdateien.</td>
                    </tr>
                    <tr>
                        <td><code>apt purge [PROGRAMM]</code></td>
                        <td>Deinstalliert Programme, UND ihre Konfigurationsdateien.</td>
                    </tr>
                </table>
            </div>

            <div class="abschnittsblock-grau dateiensuchenanzeigen">
                <h3 id="dateiensuchenanzeigen">Dateien suchen und anzeigen</h3>
                <hr>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Befehl</th>
                        <th>Erklärung</th>
                    </tr>
                    <tr>
                        <td><code>find</code></td>
                        <td>Findet Dateien oder Ordner</td>
                    </tr>
                    <tr>
                        <td><code>find ORDNER/ -type f -newermt '2025-02-18 10:04' ! -newermt '2025-02-19 10:07'</code></td>
                        <td>Alle Dateien die älter als '2025-02-18 10:04', aber neuer als '2025-02-19 10:07'</td>
                    </tr>
                    <tr>
                        <td><code>ls</code></td>
                        <td>Listet den aktuellen Verzeichnisinhalt auf.</td>
                    </tr>
                    <tr>
                        <td><code>ls /var/www/html</code></td>
                        <td>Listet den Verzeichnisinhalt in <code>/var/www/html</code> auf.</td>
                    </tr>
                    <tr>
                        <td><code>ls -a -l</code></td>
                        <td>Die Auflistung gibt auch Zugriffsrechts, Benutzer, Gruppe und Erstellungsdatum aus.</td>
                    </tr>
                    <tr>
                        <td><code>ls -a -l -R ORDNER/ | grep 'Feb 18 10:0'</code></td>
                        <td>Alle Dateien die am 18. Februar um 10:0? geändert/erstellt wurden</td>
                    </tr>
                    <tr>
                        <td><code>grep -rnwi * -e '[SUCHBEGRIFF]'</code></td>
                        <td>Dateinhalte durchsuchen</td>
                    </tr>
                    <tr>
                        <td><code>cat [DATEI]</code></td>
                        <td>Gibt den Inhalt einer Datei aus.</td>
                    </tr>
                    <tr>
                        <td><code>tails [DATEI]</code></td>
                        <td>Die letzten Zeilen einer Datei ausgeben.</td>
                    </tr>
                    <tr>
                        <td><code>tails -2 [DATEI]</code></td>
                        <td>Die letzten zwei Zeilen einer Datei ausgeben.</td>
                    </tr>
                    <tr>
                        <td><code>|</code></td>
                        <td>Die Pipe. Mit ihr kann man Ergebnisse an andere Programme übergeben.</td>
                    </tr>
                    <tr>
                        <td><code>cat netzwerk.log | grep -i 'error'</code></td>
                        <td>Liste den Dateinhalt von <code>netzwerk.log</code> auf, aber nur die Zeilen wo "error" vorkommt. Der Parameter -i sorgt dafür, dass die Suche NICHT kontextsensitiv ist.</td>
                    </tr>
                    <tr>
                        <td><code> > </code></td>
                        <td>
                            Mit dieser Eingabe kann Ausgabe in eine Datei umgeleitet werden. Setzt man diesen Parameter, dann gibt es keine Bildschirmausgabe.<br>
                            <b>Achtung!</b> Es wird immer eine neue Datei angelegt, oder eine vorhandene überschrieben!<br>
                            Nutze <code> >> </code>, um Daten an eine Datei anzuhängen.
                        </td>
                    </tr>
                    <tr>
                        <td><code>ls /cat > liste.txt</code></td>
                        <td>Der Verzeichnisinhalt wird in die Datei <code>liste.txt</code> ausgegeben. Dabei wird die Datei erstellt, oder eine eventuell vorhandene Datei überschrieben!</td>
                    </tr>
                    <tr>
                        <td><code>ls /cat >> liste.txt</code></td>
                        <td>Der Verzeichnisinhalt wird an die Datei <code>liste.txt</code> angehängt. Eventuell schon vorhandener Inhalt wird nicht verändert.</td>
                    </tr>
                </table>
            </div>

            <div class="abschnittsblock-grau dateienanlegenaendern">
                <h3 id="dateienanlegenaendern">Dateien anlegen und ändern</h3>
                <hr>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Befehl</th>
                        <th>Erklärung</th>
                    </tr>
                    <tr>
                        <td><code>touch test.txt</code></td>
                        <td>Legt eine leere Datei namens <code>test.txt an.</code></td>
                    </tr>
                    <tr>
                        <td><code>mkdir [ORDNERNAME] / rmdir [ORDNERNAME]</code></td>
                        <td>Legt einen Ordner an, bzw. löscht einen Ordner.</td>
                    </tr>
                    <tr>
                        <td><code>cp [QUELLDATEI/QUELLORDNER] [ZIELDATEI/ZIELORDNER]</code></td>
                        <td>Kopiert eine Datei oder einen Ordner. Wenn man die Zieldatei/den Zielordner anders benannt haben möchte, kann man hier direkt den Namen angeben.</td>
                    </tr>
                    <tr>
                        <td><code>mv [QUELLDATEI/QUELLORDNER] [ZIELDATEI/ZIELORDNER]</code></td>
                        <td>Verschiebt eine Datei oder einen Ordner. Wenn man die Zieldatei/den Zielordner anders benannt haben möchte, kann man hier direkt den Namen angeben.</td>
                    </tr>
                    <tr>
                        <td><code>nano test.txt</code></td>
                        <td>
                            <p>Nano ist ein Editor für die Konsole. Startet man ihn mit einer Datei als Parameter, wird die Datei im Editor geöffnet, aber NOCH NICHT angelegt. Erst wenn man sie speichert.</p>
                            <p>Ein paar hilfreiche Befehle:</p>
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <td>STRG+S</td>
                                    <td>Speichern</td>
                                </tr>
                                <tr>
                                    <td>STRG+X</td>
                                    <td>Schließen</td>
                                </tr>
                                <tr>
                                    <td>STRG+K</td>
                                    <td>Zeile(n) ausschneiden</td>
                                </tr>
                                <tr>
                                    <td>STRG+U</td>
                                    <td>Zeile(n) einfügen</td>
                                </tr>
                                <tr>
                                    <td>STRG+W</td>
                                    <td>Nach einem Begriff suchen</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td><code>rm [-rf] [DATEI/ORDNER]</code></td>
                        <td>
                            <p>Löscht eine Datei oder einen Ordner. Bei einem Ordner sollte man allerdings <code>-r</code> als Parameter mitgeben, damit auch alle Inhalte rekursiv gelöscht werden. <code>-f</code> steht für Force, falls eine Datei noch irgendwo benutzt wird.</p>
                            <p style="background-color: orangered !important; color: white !important;"><b>VORSICHT:</b> Benutze diesen Befehl nur sehr vorsichtig, du könntest sonst versehentlich die ganze Festplatte löschen. Achte immer darauf, welchen Pfad du angegeben hast!</p>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="abschnittsblock-grau systemueberwachung">
                <h3 id="systemueberwachung">System-Überwachung und Netzwerk</h3>
                <hr>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Befehl</th>
                        <th>Erklärung</th>
                    </tr>
                    <tr>
                        <td><code>htop</code></td>
                        <td>Ein Taskmanager. Hier siehst du welche Prozesse laufen, und wie sehr das System ausgelastet ist. Du kannst die Spaltenüberschriften mit der Maus anklicken, um die Sortierung zu ändern.</td>
                    </tr>
                    <tr>
                        <td><code>nload</code></td>
                        <td>Zeigt den Netzwerkverkehr an. Eingehend und Ausgehend.</td>
                    </tr>
                    <tr>
                        <td><code>neofetch</code></td>
                        <td>Zeigt Informationen über das System an.</td>
                    </tr>
                    <tr>
                        <td>
                            <code>ping [ZIELADRESSE/ZIELRECHNER]</code> (für IPv4)
                            <hr>
                            <code>ping6 [ZIELADRESSE/ZIELRECHNER]</code> (für IPv6)
                        </td>
                        <td>
                            <p>Sendet pings an eine IP-Adresse (z.B. 192.168.0.142) oder eine Webseite (z.B. www.google.de)</p>
                            <p>Mit <code>ping -c 3 [ZIEL]</code> kann man die Anzahl der Pings festsetzen. Im Gegensatz zu Windows, werden sonst kontinuierlich Pings gesendet.</p>
                        </td>
                    </tr>
                    <tr>
                        <td><code>ip a</code></td>
                        <td>Zeigt alle Netzwerkgeräte und ihre IPs an.</td>
                    </tr>
                    <tr>
                        <td><code>systemctl [PARAMETER] [PROGRAMM]</code></td>
                        <td>
                            <p>Mögliche Parameter:</p>
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <td>status</td>
                                    <td>Zeigt den Status eines Programms an.</td>
                                </tr>
                                <tr>
                                    <td>stop</td>
                                    <td>Stoppt ein Programm.</td>
                                </tr>
                                <tr>
                                    <td>start</td>
                                    <td>Startet ein Programm.</td>
                                </tr>
                                <tr>
                                    <td>restart</td>
                                    <td>Startet ein Programm neu.</td>
                                </tr>
                                <tr>
                                    <td>reload</td>
                                    <td>Lädt ein Programm neu.</td>
                                </tr>
                                <tr>
                                    <td>enable</td>
                                    <td>Fügt ein Programm zum "Autostart" hinzu.</td>
                                </tr>
                                <tr>
                                    <td>disable</td>
                                    <td>Entfernt ein Programm aus dem "Autostart".</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="abschnittsblock-grau benutzergruppen">
                <h3 id="benutzergruppen">Benutzer und Gruppen</h3>
                <hr>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Befehl</th>
                        <th>Erklärung</th>
                    </tr>
                    <tr>
                        <td><code>sudo useradd -m [BENUTZERNAME]</code></td>
                        <td>Erstellt einen neuen Benutzer.</td>
                    </tr>
                    <tr>
                        <td><code>passwd [BENUTZER] [PASSWORT]</code></td>
                        <td>Passwort ändern/erstellen. Wenn kein Benutzer angegeben wird, bezieht sich dieser Befehl auf den zur Zeit angemeldeten Benutzer.</td>
                    </tr>
                    <tr>
                        <td><code>sudo deluser [BENUTZER] [GRUPPE]</code></td>
                        <td>
                            <p>Benutzer löschen, wenn keine Gruppe angegeben.</p>
                            <p>Wenn eine Gruppe angegeben ist, wird der Benutzer aus der Gruppe entfernt, aber <b>nicht gelöscht</b>.</p>
                        </td>
                    </tr>
                    <tr>
                        <td><code>sudo addgroup [GRUPPENNAME]</code></td>
                        <td>Eine Gruppe erstellen.</td>
                    </tr>
                    <tr>
                        <td><code>sudo usermod -aG [GRUPPE] [BENUTZER] </code></td>
                        <td>Benutzer zu einer Gruppe hinzufügen.</td>
                    </tr>
                </table>
            </div>

            <div class="abschnittsblock-grau rechte">
                <h3 id="rechte">Rechte</h3>
                <hr>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Befehl</th>
                        <th>Erklärung</th>
                    </tr>
                    <tr>
                        <td><code>sudo chown -c [BENUTZER] /media/VERZEICHNIS </code></td>
                        <td>Der Benutzer wird als dauerhafter Besitzer des Verzeichnisses <code>/media/VERZEICHNIS</code> eingestellt.</td>
                    </tr>
                    <tr>
                        <td><code>sudo chown -cR [BENUTZER]:[GRUPPE] /media/VERZEICHNIS </code></td>
                        <td>Der Benutzer und die Gruppe werden als Besitzer für das Verzeichnis <code>/media/VERZEICHNIS</code> mit allen Unterordnern und Dateien geändert.</td>
                    </tr>
                    <tr>
                        <td><code>chgrp -c -R musik /opt/musik/ </code></td>
                        <td>Beispiel: Der Benutzer ist in der Gruppe <em>musik</em> und ändert die Gruppenzuordnung des Verzeichnis <code>/opt/musik/</code> und seinem kompletten Inhalt zur Gruppe <em>musik</em></td>
                    </tr>
                    <tr>
                        <td><code>chmod +rwx datei</code></td>
                        <td>
                            <p>Zugriffsrechte ändern</p>
                            <p>Für eine detaillierte Beschreibung wie man verschiedene Rechte setzt, kann man sich hier informieren: <a href="https://www.freecodecamp.org/news/linux-chmod-chown-change-file-permissions/" target="_blank">https://www.freecodecamp.org</a> (englisch!)</p>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="abschnittsblock-grau festplattenbelegung">
                <h3 id="festplattenbelegung">Festplattenbelegung</h3>
                <hr>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Befehl</th>
                        <th>Erklärung</th>
                    </tr>
                    <tr>
                        <td><code>df -h</code></td>
                        <td>
                            freier Speicherplatze aller Dateisysteme<br>
                            <code>-h</code> = human readable/menschlesbar = Angabe in z.B. MB/GB
                        </td>
                    </tr>
                    <tr>
                        <td><code>df -hl</code></td>
                        <td>freier Speicherplatze aller lokaler Dateisysteme</td>
                    </tr>
                    <tr>
                        <td><code>df -Th</code></td>
                        <td>freier Speicherplatze aller Dateisysteme mit Dateisystemtyp</td>
                    </tr>
                    <tr>
                        <td><code>df -Thi</code></td>
                        <td>freier Speicherplatze aller Dateisysteme mit Dateisystemtyp und Inodes</td>
                    </tr>
                    <tr>
                        <td><code>du -h</code></td>
                        <td>belegter Speicherplatz, im menschenlesbaren Format</td>
                    </tr>
                    <tr>
                        <td><code>du -sh</code></td>
                        <td>gesamter belegter Speicherplatz (nur</td>
                    </tr>
                    <tr>
                        <td><code>du --exclude="*.bmp*" -sh media/ </code></td>
                        <td>belegter Speicherplatz des Ordners Media anzeigen, ohne *.bmp Dateien</td>
                    </tr>
                    <tr>
                        <td><code>du -h --threshold=1G</code></td>
                        <td>belegten Speicherplatz anzeigen, der größer als 1GB ist</td>
                    </tr>
                    <tr>
                        <td><code>du -h --threshold=1G | sort -h</code></td>
                        <td>belegten Speicherplatz anzeigen, der größer als 1GB ist, aufsteigend sortiert</td>
                    </tr>
                </table>
            </div>

            <div class="abschnittsblock-grau cronjobs">
                <h3 id="cronjobs">Cron-Jobs</h3>
                <hr>
                <p>Cron-Jobs sind Befehle, die regelmäßig ausgeführt werden. In einer eigenen Datei wird definiert zu welchen Zeiten, als welcher Benutzer (optional) und welcher Befehl ausgeführt wird. Richtig eingestellt, kannst du Befehle minutengenau regelmäßig ausführen lassen</p>
                <p>Probleme bei der Zeiteinstellung? Hier wird dir geholfen: <a href="https://crontab.guru" target="_blank">https://crontab.guru</a></p>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Befehl</th>
                        <th>Erklärung</th>
                    </tr>
                    <tr>
                        <td><code>nano /etc/crontab</code></td>
                        <td>Mit diesem Befehl öffnest du die systemweite Cron-Jobs-Datei.</td>
                    </tr>
                    <tr>
                        <td colspan="2">

                            <div class="row">
                                <div class="col">
                                    <p>Die Syntax für den Cron-Job:</p>
<div class="code"><label class="comment">
# ┌------------------------------- Minute
# |  ┌---------------------------- Stunde
# |  |   ┌------------------------ Tag
# |  |   |   ┌-------------------- Monat
# |  |   |   |   ┌---------------- Wochentag
# |  |   |   |   |   ┌------------ Benutzer
# |  |   |   |   |   |          ┌- Befehl
# |  |   |   |   |   |          |
</label>
<label class="command">
  *  *   *   *   *  [BENUTZER]  [BEFEHL]
</label>
<label class="comment">
# In der Datei durch einfache
# Leerzeichen getrennt
</label>
</div>
</div>
                                <div class="col">
                                    <p>Erklärung:</p>
                                    <table class="table table-bordered table-hover">
                                        <tr>
                                            <td><code>Minute</code></td>
                                            <td>Zu welcher Minute wird der Befehl ausgeführt?</td>
                                        </tr>
                                        <tr>
                                            <td><code>Stunde</code></td>
                                            <td>Zu welcher Stunde wird der Befehl ausgeführt?</td>
                                        </tr>
                                        <tr>
                                            <td><code>Tag</code></td>
                                            <td>An welchem Tag des Monats wird der Befehl ausgeführt?</td>
                                        </tr>
                                        <tr>
                                            <td><code>Monat</code></td>
                                            <td>An welchem Monat wird der Befehl ausgeführt?</td>
                                        </tr>
                                        <tr>
                                            <td><code>Wochentag</code></td>
                                            <td>Zu welchem Wochentag wird der Befehl ausgeführt?</td>
                                        </tr>
                                        <tr>
                                            <td><code>Benutzer</code></td>
                                            <td><em>Optional:</em> Als welcher Benutzer soll dieser Befehl ausgeführt werden?</td>
                                        </tr>
                                        <tr>
                                            <td><code>Befehl</code></td>
                                            <td>Welcher Befehl soll ausgeführt werden? Man kann hier auch ein Skript ausführen lassen. Hilfreich, wenn es eine komplexere Befehlsabfolge ist.</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>



                        </td>
                    </tr>
                    <tr>
                        <td><code>* * * * * date > datei.txt</code></td>
                        <td>Beispiel 1: Jede Minute das aktuelle Datum in die Datei <code>datei.txt</code> schreiben.</td>
                    </tr>
                    <tr>
                        <td><code>15 14 1 * * date > datei.txt</code></td>
                        <td>Beispiel 2: Um 14:15 Uhr an jedem 1. eines Monats das aktuelle Datum in die Datei <code>datei.txt</code> schreiben.</td>
                    </tr>
                </table>
            </div>

            <div class="abschnittsblock-grau shell">
                <h3 id="shell">Shell anpassen</h3>
                <hr>
                <p>Mann kann sich das Leben auf der Shell leicht machen, indem man Kurzbefehle (Alias) definiert. Das geht, indem man die <code>.bashrc</code>-Datei bearbeitet.</p>
                <p>Mit z.B. <code>nano ~/.bashrc</code> (diese Datei liegt im Home-Verzeichnis des Benutzers) öffnet man sie.</p>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Eintrag</th>
                        <th>Erklärung</th>
                    </tr>
                    <tr>
                        <td>
                            <code>alias ll='ls -l'</code><br>
                            <code>alias la='ls -A'</code><br>
                            <code>alias l='ls -CF'</code>
                        </td>
                        <td>Diese drei Befehle sind in der Datei schon definiert, aber je nach Distribution kann es sein dass sie auskommentiert sind (<code>#</code> am Anfang der Zeile). Sie sind Kurzbefehle für <code>ls</code> mit jeweils anderen Parametern.</td>
                    </tr>
                    <tr>
                        <td><code>alias [ALIAS]='[BEFEHL]'</code></td>
                        <td>Eigene Kurzbefehle zu definieren ist denkbar einfach. Zuerst <code>alias</code>, dann den Namen des Kurzbefehls, gefolgt von einem Gleichheitszeichen und dem Befehl in einfachen Anführungszeichen.</td>
                    </tr>
                    <tr>
                        <td><code>alias www='cd /var/www/html/'</code></td>
                        <td>Dieser Kurzbefehl würde mich zum Beispiel in das Verzeichnis <code>/var/www/html/</code> bringen.</td>
                    </tr>
                    <tr>
                        <td>
                            <code>push2git(){<br>
                                   cd /var/www/html/meine_webseite/<br>
                                   sudo git add .<br>
                                   sudo git status<br>
                                   sudo git commit -m "$1"<br>
                                   sudo git push [REPOSITORY] master<br>
                                }</code>
                        </td>
                        <td>
                            <p>Man kann auch eigene Funktionen definieren, die dann z.B. mehrere Befehle hintereinander ausführen, und sogar Argumente akzeptieren.</p>
                            <p><code>"$1"</code> definiert ein Argument, das die Funktion erwartet.</p>
                            <p>Ich kann nun auf der Konsole den Befehl <code>push2git MEIN_COMMIT_KOMMENTAR</code> eintippen, und schon würde mein Ordner automatisch auf git gepusht werden.</p>
                        </td>
                    </tr>
                    <tr>
                        <td><code>source ~/.bashrc</code></td>
                        <td>Nach jeder Änderung in der <code>.bashrc</code>-Datei solltest du diesen Befehl ausführen, damit die Änderungen gültig werden. Alternativ kannst du dich auch ab- und anmelden.</td>
                    </tr>
                </table>
            </div>

            <div class="abschnittsblock-grau ssh">
                <h3 id="ssh">SSH</h3>
                <hr>
                <p>Secure Shell (SSH) bezeichnet ein kryptographisches Netzwerkprotokoll für den sicheren Betrieb von Netzwerkdiensten über ungesicherte Netzwerke (<a href="https://de.wikipedia.org/wiki/Secure_Shell" target="_blank">danke Wikipedia</a>). Kurzgesagt kann man sich damit auf die Konsole eines entfernten Rechners verbinden. Sehr hilfreich, um sich z.B. auf einen (Linux-) Server zu verbinden, wenn man dort etwas machen oder prüfen möchte.</p>
                <p>Es gibt verschiedene Programme dafür. Ein kleine Auswahl ist hier zu sehen:</p>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Programm</th>
                        <th>Link</th>
                    </tr>
                    <tr>
                        <td>shell / cmd / Powershell</td>
                        <td>
                            <p>Unter Linux kann man einfach auf der Konsole/Shell den shh-Befehl ausführen (siehe unten).</p>
                            <p>Seit Windows 10 geht das auch mit der Windows-Kommandozeile und Powershell</p>
                        </td>
                    </tr>
                    <tr>
                        <td>Putty</td>
                        <td>
                            <p><a href="https://www.putty.org" target="_blank">https://www.putty.org</a></p>
                            <p>Kleines kostenloses Programm, unter der <a href="https://opensource.org/license/mit" target="_blank">MIT-Lizenz</a>.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>MobaXterm</td>
                        <td>
                            <p><a href="https://mobaxterm.mobatek.net/download.html" target="_blank">https://mobaxterm.mobatek.net/download.html</a></p>
                            <p>Kommerzielles Programm mit einer kostenlosen Version für Privatleute. Erlaubt das Anlegen von Profilen, speichern von Anmeldedaten, und somit leichten Zugriff auf verschiedene Ziele.</p>
                        </td>
                    </tr>
                </table>
                <p>Befehlssyntax:</p>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Befehl</th>
                        <th>Erklärung</th>
                    </tr>
                    <tr>
                        <td><code>ssh 192.168.178.160</code></td>
                        <td>Verbindet sich mit der angegebenen IP-Adresse per SSH.</td>
                    </tr>
                    <tr>
                        <td><code>ssh office-rechner-01</code></td>
                        <td>Verbindet sich mit dem PC namens <code>office-rechner-01</code>, wenn dies ein gültiger Name ist.</td>
                    </tr>
                    <tr>
                        <td><code>ssh administrator@office-rechner-01</code></td>
                        <td>Verbindet sich mit dem PC namens <code>office-rechner-01</code> und dem Benutzernamen <code>administrator</code>. Der Benutzername muss auf dem Zielrechner existieren!</td>
                    </tr>
                </table>
            </div>

            <div class="abschnittsblock-grau git">
                <h3 id="git">Git-Grundlagen</h3>
                <hr>
                <p>git ist ein Versionierungsprogramm. Es speichert die Veränderungen zwischen den einzelnen hochgeladenen Dateien. Wenn also zwischen verschiedenen Commits etwas schiefgelaufen ist, kann man die Änderung leicht rückgangig machen (vorausgesetzt man gleicht die Dateien regelmäßig ab).</p>
                <p>Ich gehe in dieser Erklärung von einem vorhandenen <a href="https://github.com" target="_blank">GitHub-Account</a> aus. Alle Befehle setzen ein installiertes <a href="https://git-scm.com" target="_blank">git</a> voraus, und werden auf der Konsole/Shell ausgeführt.</p>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Befehl</th>
                        <th>Erklärung</th>
                    </tr>
                    <tr>
                        <td>
                            <code>git config --global user.name "benutzername"</code>
                            <hr>
                            <code>git config --global user.email "meine-git-benutzer@email.de"</code>
                        </td>
                        <td>
                            <p>Deine Anmeldedaten bei GitHub. Jedes Mal wenn du etwas commitest/hochlädst, wird dies mit diesen Daten geschehen.</p>
                            <p>Diese Befehle müssen pro Rechner auf dem du git benutzt nur ein Mal ausgeführt werden.</p>
                        </td>
                    </tr>
                    <tr>
                        <td><code>git init</code></td>
                        <td>Initisiert ein neues git-Projekt in dem Ordner, indem man sich gerade befindent</td>
                    </tr>
                    <tr>
                        <td><code>git status</code></td>
                        <td>Prüft den Status der Dateien.</td>
                    </tr>
                    <tr>
                        <td><code>git add .</code></td>
                        <td>Fügt geänderte Dateien zur Upload-Liste hinzu.</td>
                    </tr>
                    <tr>
                        <td><code>git commit -m "Ein Kommentar zum Commit"</code></td>
                        <td>Fügt einen Commit hinzu.</td>
                    </tr>
                    <tr>
                        <td><code>git push origin</code></td>
                        <td>Dieser Befehl lädt alle Änderungen hoch. Alle Befehle davor sind nur Vorbereitung!</td>
                    </tr>
                    <tr>
                        <td><code>git pull</code></td>
                        <td>Lade Änderungen auf deinen Rechner herunter, wenn es welche gibt.</td>
                    </tr>
                    <tr>
                        <td><code>git clone [REPOSITORY]</code></td>
                        <td>Klont ein Repository.</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>

</div>

<div style="text-align: center; position: fixed; bottom: 1px;">
<small>Favicon: <a href="mailto:lewing@isc.tamu.edu">lewing@isc.tamu.edu</a> und <a href="http://www.isc.tamu.edu/~lewing/gimp/" target="_blank">The GIMP</a></lewing></small>
</div>

<style>
    th{        
        background-color: #393939 !important;
        color: white !important;
    }

    p{
        text-align: left;
    }

    li, button{
        list-style: none;
        border: solid 1px lightgray;
        border-radius: 5px;
        padding: 5px 10px;
        margin-bottom: 5px;
        margin-left: -30px;
    }

    li:hover{
        cursor: pointer;
    }

    pre{

    }

    .comment{
        color: grey;
    }

    .command{
        color: deepskyblue;
    }

    .code{
        background-color: black;
        font-family: "Courier New";
        white-space: pre;
        padding-left: 15px;
        border-radius: 15px;
    }

    .abschnittsblock-grau{
        border: solid 1px lightgray;
        border-radius: 15px;
        padding: 10px 10px;
    }

</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>



    $(document).ready(function () {
        hideAll();
        $(".allgemeines").show();

        $(".info").on("click", function (){
            $(".allgemeines").toggle();
        })

    });

    function showElement(element){
        hideAll();
        $("." + element).show();
        $(".li-" + element).css("background-color", "lightgrey");

    }

    function hideAll(){
        $(".allgemeines").hide();
        $(".bewegung").hide();
        $(".programme").hide();
        $(".dateiensuchenanzeigen").hide();
        $(".dateienanlegenaendern").hide();
        $(".systemueberwachung").hide();
        $(".benutzergruppen").hide();
        $(".rechte").hide();
        $(".festplattenbelegung").hide();
        $(".cronjobs").hide();
        $(".shell").hide();
        $(".ssh").hide();
        $(".git").hide();

        $(".li-bewegung").css("background-color", "white");
        $(".li-programme").css("background-color", "white");
        $(".li-dateiensuchenanzeigen").css("background-color", "white");
        $(".li-dateienanlegenaendern").css("background-color", "white");
        $(".li-systemueberwachung").css("background-color", "white");
        $(".li-benutzergruppen").css("background-color", "white");
        $(".li-rechte").css("background-color", "white");
        $(".li-festplattenbelegung").css("background-color", "white");
        $(".li-cronjobs").css("background-color", "white");
        $(".li-shell").css("background-color", "white");
        $(".li-ssh").css("background-color", "white");
        $(".li-git").css("background-color", "white");
    }

</script>

</body>
</html>