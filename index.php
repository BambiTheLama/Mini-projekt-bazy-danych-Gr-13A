<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Firma przewozowa</title>
</head>
<body>
<center><h1>Firma przewozowa</h1></center>
<center>
<b>Dane osobowe:</b>
<?php
$conn = oci_connect("Bartosz", "bartosz123", "//localhost/orclpdb", "AL32UTF8");
if (!$conn) {
  $m = oci_error();
  echo $m['message'], "\n";
  exit;
}
else{
$stid = oci_parse($conn, 'select Dane_id, Imie, Nazwisko, telefon, email from Dane_osobowe');
oci_execute($stid);
echo "<table border='1'>";
echo "<tr><th>" . "Dane_id" . "</th><th>" . "Imie" . "</th><th>" . "Nazwisko" . "</th><th>" . "Telefon" . "</th><th>" . "Email" . "</th></tr>";
while(($row = oci_fetch_array($stid, OCI_BOTH))!=false){
echo "<tr><td>" . $row['DANE_ID'] . "</td><td>" . $row['IMIE'] . "</td><td>" . $row['NAZWISKO'] . "</td><td> " . $row['TELEFON'] . "</td><td> " . $row['EMAIL'] ."</td></tr>";
}
echo "</table>";
}
oci_close($conn);
?>
<br>
<b>Adresy:</b>
<?php
$conn = oci_connect("Bartosz", "bartosz123", "//localhost/orclpdb", "AL32UTF8");
if (!$conn) {
  $m = oci_error();
  echo $m['message'], "\n";
  exit;
}
else{
$stid = oci_parse($conn, 'select adres_ID, Miasto, Kod_pocztowy, Wojewodztwo, Ulica, nr_domu from Adresy');
oci_execute($stid);
echo "<table border='1'>";
echo "<tr><th>" . "adres_id" . "</th><th>" . "Miasto" . "</th><th>" . "Kod_pocztowy" . "</th><th>" . "Wojewodztwo" . "</th><th>" . "Ulica" . "</th><th>" . "nr_domu" . "</th></tr>";
while(($row = oci_fetch_array($stid, OCI_BOTH))!=false){
echo "<tr><td>" . $row['ADRES_ID'] . "</td><td>" . $row['MIASTO'] . "</td><td>" . $row['KOD_POCZTOWY'] . "</td><td> " . $row['WOJEWODZTWO'] . "</td><td> " . $row['ULICA'] .  "</td><td> " . $row['NR_DOMU'] ."</td></tr>";
}
echo "</table>";
}
oci_close($conn);
?>
<br>
<b>Karty:</b>
<?php
$conn = oci_connect("Bartosz", "bartosz123", "//localhost/orclpdb", "AL32UTF8");
if (!$conn) {
  $m = oci_error();
  echo $m['message'], "\n";
  exit;
}
else{
$stid = oci_parse($conn, 'select Karta_ID, typ_karty, znizka_procent, data_wyrobienia, data_waznosci from karty');
oci_execute($stid);
echo "<table border='1'>";
echo "<tr><th>" . "Karta_id" . "</th><th>" . "typ_karty" . "</th><th>" . "znizka_procent" . "</th><th>" . "data_wyrobienia" . "</th><th>" . "data_waznosci" . "</th></tr>";
while(($row = oci_fetch_array($stid, OCI_BOTH))!=false){
echo "<tr><td>" . $row['KARTA_ID'] . "</td><td>" . $row['TYP_KARTY'] . "</td><td>" . $row['ZNIZKA_PROCENT'] . "</td><td> " . $row['DATA_WYROBIENIA'] . "</td><td> " . $row['DATA_WAZNOSCI'] ."</td></tr>";
}
echo "</table>";
}
oci_close($conn);
?>
<br>
<b>Wyksztalcenie:</b>
<?php
$conn = oci_connect("Bartosz", "bartosz123", "//localhost/orclpdb", "AL32UTF8");
if (!$conn) {
  $m = oci_error();
  echo $m['message'], "\n";
  exit;
}
else{
$stid = oci_parse($conn, 'select wyksztalcenie_ID, stopien, nazwa_uczelni, kierunek, adres_uczelni from wyksztalcenie');
oci_execute($stid);
echo "<table border='1'>";
echo "<tr><th>" . "wyksztalcenie_ID" . "</th><th>" . "stopien" . "</th><th>" . "nazwa_uczelni" . "</th><th>" . "kierunek" . "</th><th>" . "adres_uczelni" . "</th></tr>";
while(($row = oci_fetch_array($stid, OCI_BOTH))!=false){
echo "<tr><td>" . $row['WYKSZTALCENIE_ID'] . "</td><td>" . $row['STOPIEN'] . "</td><td>" . $row['NAZWA_UCZELNI'] . "</td><td> " . $row['KIERUNEK'] . "</td><td> " . $row['ADRES_UCZELNI'] ."</td></tr>";
}
echo "</table>";
}
oci_close($conn);
?>
<br>
<b>Samochod:</b>
<?php
$conn = oci_connect("Bartosz", "bartosz123", "//localhost/orclpdb", "AL32UTF8");
if (!$conn) {
  $m = oci_error();
  echo $m['message'], "\n";
  exit;
}
else{
$stid = oci_parse($conn, 'select Samochod_ID, numer_rejestracyjny, marka, model, rocznik, pojemnosc_zbiornika_litry from samochod');
oci_execute($stid);
echo "<table border='1'>";
echo "<tr><th>" . "Samochod_ID" . "</th><th>" . "numer_rejestracyjny" . "</th><th>" . "marka" . "</th><th>" . "model" . "</th><th>" . "rocznik" . "</th><th>" . "pojemnosc_zbiornika_litry" . "</th></tr>";
while(($row = oci_fetch_array($stid, OCI_BOTH))!=false){
echo "<tr><td>" . $row['SAMOCHOD_ID'] . "</td><td>" . $row['NUMER_REJESTRACYJNY'] . "</td><td>" . $row['MARKA'] . "</td><td> " . $row['MODEL'] . "</td><td> " . $row['ROCZNIK'] . "</td><td> " . $row['POJEMNOSC_ZBIORNIKA_LITRY'] . "</td></tr>";
}
echo "</table>";
}
oci_close($conn);
?>
<br>
<b>Oplaty:</b>
<?php
$conn = oci_connect("Bartosz", "bartosz123", "//localhost/orclpdb", "AL32UTF8");
if (!$conn) {
  $m = oci_error();
  echo $m['message'], "\n";
  exit;
}
else{
$stid = oci_parse($conn, 'select Oplata_ID, kwota, termin_platnosci, rodzaj_platnosci, faktura_paragon, dni_spoznienia from Oplaty');
oci_execute($stid);
echo "<table border='1'>";
echo "<tr><th>" . "Oplata_ID" . "</th><th>" . "kwota" . "</th><th>" . "termin_platnosci" . "</th><th>" . "rodzaj_platnosci" . "</th><th>" . "faktura_paragon" . "</th><th>" . "dni_spoznienia" . "</th></tr>";
while(($row = oci_fetch_array($stid, OCI_BOTH))!=false){
echo "<tr><td>" . $row['OPLATA_ID'] . "</td><td>" . $row['KWOTA'] . "</td><td>" . $row['TERMIN_PLATNOSCI'] . "</td><td> " . $row['RODZAJ_PLATNOSCI'] . "</td><td> " . $row['FAKTURA_PARAGON'] . "</td><td> " . $row['DNI_SPOZNIENIA'] . "</td></tr>";
}
echo "</table>";
}
oci_close($conn);
?>
<br>
<b>Koszty:</b>
<?php
$conn = oci_connect("Bartosz", "bartosz123", "//localhost/orclpdb", "AL32UTF8");
if (!$conn) {
  $m = oci_error();
  echo $m['message'], "\n";
  exit;
}
else{
$stid = oci_parse($conn, 'select koszt_ID, zuzyte_paliwo_litry, koszt_paliwa, naprawy_id from Koszty');
oci_execute($stid);
echo "<table border='1'>";
echo "<tr><th>" . "koszt_ID" . "</th><th>" . "zuzyte_paliwo_litry" . "</th><th>" . "koszt_paliwa" . "</th><th>" . "naprawy_id" . "</th></tr>";
while(($row = oci_fetch_array($stid, OCI_BOTH))!=false){
echo "<tr><td>" . $row['KOSZT_ID'] . "</td><td>" . $row['ZUZYTE_PALIWO_LITRY'] . "</td><td>" . $row['KOSZT_PALIWA'] . "</td><td> " . $row['NAPRAWY_ID'] . "</td></tr>";
}
echo "</table>";
}
oci_close($conn);
?>
<br>
<b>Pracownik:</b>
<?php
$conn = oci_connect("Bartosz", "bartosz123", "//localhost/orclpdb", "AL32UTF8");
if (!$conn) {
  $m = oci_error();
  echo $m['message'], "\n";
  exit;
}
else{
$stid = oci_parse($conn, 'select Pracownik_ID, adres_ID, dane_ID, wyksztalcenie_ID, stanowisko, pensja from Pracownik');
oci_execute($stid);
echo "<table border='1'>";
echo "<tr><th>" . "Pracownik_ID" . "</th><th>" . "adres_ID" . "</th><th>" . "dane_ID" . "</th><th>" . "wyksztalcenie_ID" . "</th><th>" . "stanowisko" . "</th><th>" . "pensja" . "</th></tr>";
while(($row = oci_fetch_array($stid, OCI_BOTH))!=false){
echo "<tr><td>" . $row['PRACOWNIK_ID'] . "</td><td>" . $row['ADRES_ID'] . "</td><td>" . $row['DANE_ID'] . "</td><td> " . $row['WYKSZTALCENIE_ID'] . "</td><td> " . $row['STANOWISKO'] . "</td><td> " . $row['PENSJA'] . "</td></tr>";
}
echo "</table>";
}
oci_close($conn);
?>
<br>
<b>Klient:</b>
<?php
$conn = oci_connect("Bartosz", "bartosz123", "//localhost/orclpdb", "AL32UTF8");
if (!$conn) {
  $m = oci_error();
  echo $m['message'], "\n";
  exit;
}
else{
$stid = oci_parse($conn, 'select Klient_ID, adres_ID, dane_ID, karta_ID from Klient');
oci_execute($stid);
echo "<table border='1'>";
echo "<tr><th>" . "Klient_ID" . "</th><th>"  . "adres_ID" . "</th><th>" . "dane_ID" . "</th><th>" . "karta_ID" . "</th></tr>";
while(($row = oci_fetch_array($stid, OCI_BOTH))!=false){
echo "<tr><td>" . $row['KLIENT_ID'] . "</td><td>" . $row['ADRES_ID'] . "</td><td>" . $row['DANE_ID'] . "</td><td> " . $row['KARTA_ID'] . "</td></tr>";
}
echo "</table>";
}
oci_close($conn);
?>
<br>
<b>Kierowcy:</b>
<?php
$conn = oci_connect("Bartosz", "bartosz123", "//localhost/orclpdb", "AL32UTF8");
if (!$conn) {
  $m = oci_error();
  echo $m['message'], "\n";
  exit;
}
else{
$stid = oci_parse($conn, 'select Kierowca_ID, Pracownik_ID, Samochod_ID from Kierowcy');
oci_execute($stid);
echo "<table border='1'>";
echo "<tr><th>" . "Kierowca_ID" . "</th><th>" . "Pracownik_ID" . "</th><th>" . "Samochod_ID" . "</th></tr>";
while(($row = oci_fetch_array($stid, OCI_BOTH))!=false){
echo "<tr><td>" . $row['KIEROWCA_ID'] . "</td><td>" . $row['PRACOWNIK_ID'] . "</td><td>" . $row['SAMOCHOD_ID'] . "</td></tr>";
}
echo "</table>";
}
oci_close($conn);
?>
<br>
<b>Zlecenie:</b>
<?php
$conn = oci_connect("Bartosz", "bartosz123", "//localhost/orclpdb", "AL32UTF8");
if (!$conn) {
  $m = oci_error();
  echo $m['message'], "\n";
  exit;
}
else{
$stid = oci_parse($conn, 'select zlecenie_ID, Kierowca_ID, Klient_ID, Adres_odbioru_ID, Adres_dostawy_ID, Oplata_ID, ladunek, ilosc_sztuk, ogleglosc, waga_tony, data_rozpoczecia, data_zakonczenia, status from Zlecenie');
oci_execute($stid);
echo "<table border='1'>";
echo "<tr><th>" . "zlecenie_ID" . "</th><th>" . "Kierowca_ID" . "</th><th>" . "Klient_ID" . "</th><th>" . "Adres_odbioru_ID" . "</th><th>" . "Adres_dostawy_ID" . "</th><th>" . "Oplata_ID" . "</th><th>" . "ladunek" . "</th><th>" . "ilosc_sztuk" . "</th><th>" . "ogleglosc" . "</th><th>" . "waga_tony" . "</th><th>" . "data_rozpoczecia" . "</th><th>" . "data_zakonczenia" . "</th><th>" . "status" . "</th></tr>";
while(($row = oci_fetch_array($stid, OCI_BOTH))!=false){
echo "<tr><td>" . $row['ZLECENIE_ID'] . "</td><td>" . $row['KIEROWCA_ID'] .  "</td><td>" . $row['KLIENT_ID'] . "</td><td>" . $row['ADRES_ODBIORU_ID'] .  "</td><td>" . $row['ADRES_DOSTAWY_ID'] .  "</td><td>" . $row['OPLATA_ID'] .  "</td><td>" . $row['LADUNEK'] .  "</td><td>" . $row['ILOSC_SZTUK'] .  "</td><td>" . $row['OGLEGLOSC'] .  "</td><td>" . $row['WAGA_TONY'] .  "</td><td>" . $row['DATA_ROZPOCZECIA'] .  "</td><td>" . $row['DATA_ZAKONCZENIA'] .  "</td><td>" . $row['STATUS'] . "</td></tr>";
}
echo "</table>";
}
oci_close($conn);
?>
<br>
</center>
</body>
</html>