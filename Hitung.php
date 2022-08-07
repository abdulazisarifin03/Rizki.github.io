<form action="Hitung.php" method= "POST">
  <input type="text" name= "angka1" size= "2"> *
  <input type="text" name= "angka2" size= "2">
  <input type= "submit" value="proses" name="hitung">
  
  hasilnya adalah :
  <?php
  if(isset($_POST['hitung'])){
  $angka1=$_POST['angka1'];
  $angka2=$_POST['angka2'];
  
  $hasil=$angka1 * $angka2;
  
  echo $hasil;
}
?>
  </form>
