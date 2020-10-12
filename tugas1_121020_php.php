<?php


$kalimat = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

//mengubah huruf awal kecil, sisanya huruf besar
function awalKecil($kalimat){
  // return strtoupper($kalimat);
  return lcfirst(strtoupper($kalimat));

}
//mengubah huruf awal jadi besar, sisanya kecil
function awalBesar($kalimat){
    return ucfirst(strtolower($kalimat));
}

//mengubah string menjadi huruf kecil semua
function tolow($kalimat){
  return strtolower($kalimat);
}
//mengubah string menjadi huruf besar semua
function toupper($kalimat){
  return strtoupper($kalimat);
}

echo "<br><br>", awalKecil($kalimat);
echo "<br><br>", awalBesar($kalimat);
echo "<br><br>", tolow($kalimat);
echo "<br><br>", toupper($kalimat);

 ?>
