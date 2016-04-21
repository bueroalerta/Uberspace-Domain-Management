<?php
error_reporting(0);

function getLoggedin()
{
	if (isset($_COOKIE["name"])) {
		if (isset($_COOKIE["key"])) {
			$username = $_COOKIE["name"];
			$password = $_COOKIE["key"];
            global $t_users, $mysqli;

			$q = $mysqli->query("SELECT password FROM " . $t_users . " WHERE username = '" . $mysqli->real_escape_string($username) . "' AND password = '" . $mysqli->real_escape_string($password) . "'");
			while ($r = mysqli_fetch_array($q)) {
				return TRUE;
			}
			return FALSE;
		} else return FALSE;
	} else return FALSE;
}

function makeHash($hashThis)
{
	for ($i = 0; $i < 42; $i++) $hashThis = hash("sha512", $hashThis);
	return $hashThis;
}

function checkDomain($domain)
{
    global $t_domains, $mysqli;
	$q = $mysqli->query("SELECT domain FROM " . $t_domains . " WHERE domain = '" . mysql_real_escape_string($domain) . "'");
	while ($r = mysqli_fetch_array($q)) {
		return TRUE;
	}
	return FALSE;
}

function checkLink($link, $id)
{
	if (is_link($link)) {
		return "<span style='color: green;'>Verfügbar</span>";
	} else {
		return "<span style='color: red;'>Fehler <a href='?p=edit-domain&id=" . $id . "'>(Fix it!)</a></span>";
	}
}

function checkFolder($path1, $path2)
{
	if (!file_exists($path1) && $path1 != "" && !file_exists($path2) && $path2 != "") {
		return "<br><span style='color: red;'>Der angegebene Ordner existiert nicht mehr.</span>";
	}
}

function getLink($path1, $path2) {
	if (readlink($path1) != "") {
		return readlink($path1);
	} else if (readlink($path2) != "") {
		return readlink($path2);
	} else {
		return "<span style='color: red;'>Der Link konnte nicht zurückverfolgt werden.</span>";
	}
}
