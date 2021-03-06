<?php
if (isset($msg)) {
    switch ($msg) {
        case "E00":
            echo '<div class="alert alert-success">' . $xButton . '<i class="fa fa-sign-in fa-fw" aria-hidden="true"></i> <b>Login erfolgreich!</b> Du bist nun eingeloggt.</div>';
            break;
        case "E00.1":
            echo '<div class="alert alert-warning">' . $xButton . '<i class="fa fa-exclamation-triangle fa-fw" aria-hidden="true"></i> <b>Login erfolgreich!</b> Du bist nun eingeloggt. Bitte ändere jedoch aus Sicherheitsgründen dein Passwort, da die Passwörter nun <a href="https://de.wikipedia.org/wiki/Salt_(Kryptologie)" rel="noopener noreferrer"><i>gesalzen</i></a> gespeichert werden und dein altes Passwort nur in das neue Format konvertiert wurde. <a href="?p=edit-password">Passwort ändern <i class="fa fa-arrow-right fa-fw"></i></a></div>';
            break;
        case "E01":
            echo '<div class="alert alert-danger">' . $xButton . '<i class="fa fa-exclamation-triangle fa-fw" aria-hidden="true"></i> <b>Login fehlgeschlagen!</b> Bitte versuche es erneut.</div>';
            break;
        case "E02":
            echo '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle fa-fw" aria-hidden="true"></i> Fehler bei der Datenübertragung!</div>';
            break;
        case "E03":
            echo '<div class="alert alert-danger">' . $xButton . '<i class="fa fa-exclamation-triangle fa-fw" aria-hidden="true"></i> <b>Domain nicht hinzugefügt oder bearbeitet!</b> Der angegebene Pfad existiert nicht.</div>';
            break;
        case "E04":
            echo '<div class="alert alert-danger">' . $xButton . '<i class="fa fa-exclamation-triangle fa-fw" aria-hidden="true"></i> <b>Domain nicht hinzugefügt!</b> Die Domain existiert bereits.</div>';
            break;
        case "E05":
            echo '<div class="alert alert-success">' . $xButton . '<i class="fa fa-link fa-fw" aria-hidden="true"></i> <b>Domain hinzugefügt!</b> Sybolische Links wurden erstellt.</div>';
            break;
        case "E06":
            echo '<div class="alert alert-danger">' . $xButton . '<i class="fa fa-exclamation-triangle fa-fw" aria-hidden="true"></i> <b>Domain nicht hinzugefügt!</b> Symbolischer Link existiert bereits.</div>';
            break;
        case "E07":
            echo '<div class="alert alert-success">' . $xButton . '<i class="fa fa-chain-broken fa-fw" aria-hidden="true"></i> <b>Domain entfernt!</b> Sybolische Links wurden gelöscht.</div>';
            break;
        case "E08":
            echo '<div class="alert alert-success">' . $xButton . '<i class="fa fa-sign-out fa-fw" aria-hidden="true"></i> <b>Logout erfolgreich!</b></div>';
            break;
        case "E09":
            echo '<div class="alert alert-success">' . $xButton . '<i class="fa fa-pencil fa-fw" aria-hidden="true"></i> <b>Domain bearbeitet!</b> Sybolische Links wurden neu erstellt.</div>';
            break;
        case "E10":
            echo '<div class="alert alert-danger">' . $xButton . '<i class="fa fa-exclamation-triangle fa-fw" aria-hidden="true"></i> <b>Fehler!</b> Aktuelles Passwort ist falsch.</div>';
            break;
        case "E11":
            echo '<div class="alert alert-danger">' . $xButton . '<i class="fa fa-exclamation-triangle fa-fw" aria-hidden="true"></i> <b>Fehler!</b> Die eingegebenen Passwörter stimmen nicht überein.</div>';
            break;
        case "E12":
            echo '<div class="alert alert-success">' . $xButton . '<i class="fa fa-lock fa-fw" aria-hidden="true"></i> <b>Passwort geändert!</b> Bitte logge dich erneut ein.</div>';
            break;
        case "E13":
            echo '<div class="alert alert-danger">' . $xButton . '<i class="fa fa-exclamation-triangle  fa-fw" aria-hidden="true"></i> <b>Fehler!</b> Nutzername nicht gefunden oder Uberspace Name ungültig.</div>';
            break;
        case "E14":
            echo '<div class="alert alert-danger">' . $xButton . '<i class="fa fa-exclamation-triangle  fa-fw" aria-hidden="true"></i> <b>Fehler!</b> Homeverzeichnis nicht gefunden.</div>';
            break;
        case "E15":
            echo '<div class="alert alert-danger">' . $xButton . '<i class="fa fa-exclamation-triangle  fa-fw" aria-hidden="true"></i> <b>Fehler!</b> Datei zum zurücksetzten des Passworts existiert bereits. Bitte lösche die Datei <i>'. $filepath . '</i>.</div>';
            break;
        case "E16":
            echo '
		<div class="panel panel-success">
			<div class="panel-heading">Fast geschafft!</div>
			<div class="panel-body">
			Logge dich nun via SSH auf deinem Uberspace ein und gib folgenden Befehl zum Zurücksetzten deines Passworts ein:
			<br><br>
			<pre>php '. $filepath . '</pre>
			Es wird dort ein neues Passwort generiert, mit dem du dich einloggen kannst. Du solltest dennoch anschließend aus Sicherheitsgründen dein Passwort ändern.
			</div>
		</div>';
            break;

        case "I00":
            echo '
		<div class="panel panel-success">
			<div class="panel-heading">Installation abgeschlossen!</div>
			<div class="panel-body">
			Du kannst dich nun einloggen und Domains anlegen und verwalten. Bitte beachte, dass du vor der Nutzung alte symbolische Links im Verzeichnis <i>' . $dir . '</i> entfernen solltest bzw. diese manuell in die Datenbank eintragen solltest.
			</div>
		</div>';
            break;

        case "I01":
            echo '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle fa-fw" aria-hidden="true"></i> <b>Installation abgebrochen!</b> Die Passwörter stimmen nicht überein.</div>';
            break;
        case "I02":
            echo '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle fa-fw" aria-hidden="true"></i> <b>Installation abgebrochen!</b> Tabellenpräfix ungültig. (Erlaubte Zeichen: <b>a-z</b>, <b>A-Z</b>, <b>0-9</b>, <b>_</b>)</div>';
            break;
        case "I03":
            echo '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle fa-fw" aria-hidden="true"></i> <b>Installation abgebrochen!</b> Tabellenpräfix ungültig. Bitte überprüfe deine Konfigurationsdatei und passe diese ggf. an. (Erlaubte Zeichen: <b>a-z</b>, <b>A-Z</b>, <b>0-9</b>, <b>_</b>)</div>';
            break;

        default:
            echo '<div class="alert alert-info">' . $xButton . '<b>Ooops...</b> Diese Nachricht sollte hier eigentlich nicht stehen.</div>';
    }
    unset($msg);
}
?>
