<!DOCTYPE html>
 <html>
 <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
            <script src="https://kit.fontawesome.com/70abf9add9.js" crossorigin="anonymous"></script>      

         <title></title>
 </head>
 <style>
 body
 {
 text-shadow: 0 1px 1px hsl(0 0% 0% / 20%);
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  min-height: 100vh;
  font-family: 'Jost', sans-serif;
  background: linear-gradient(to bottom, #00804B, #3F5EFB);
}
.table 
{
  font-family: arial, sans-serif;
  border-collapse: collapse;
  background-color: #fff;
  width: 100%;
  text-align: center;
}

.boyutlandirma img 
{
    max-width: 40px;
    height: auto;
}
.button
{
    background-color: #e67e22;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: inherit;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
</style>
 <body>
    <div class="boyutlandirma">
          <a href="anasayfa.php"><i class="fa-solid fa-backward fa-2x"></i></a>
          <a href="mekle.php"><i class="fa-sharp fa-solid fa-rotate-left fa-2x"></i></a>
      </div>
  <div style= "margin: auto;
        position: absolute;
        left: 10%;
        top: 20%;
        margin-top: -20px;
        margin-left: -10px;">
  <table>
<form method="post" >
        <td><input type="text" name="ad"  id="ad" class="button"  placeholder="MÜŞTERİ ADI" /></td>
        <td><input type="text" name="tel" id="tel" class="button" placeholder="MÜŞTERİ TELEFONU" /></td>
        <td><input type="text" name="adres" id="adres" class="button" placeholder="MÜŞTERİ ADRESİ" /></td>
       <td style="color: white;"><h4>Cinsiyet</h4></td>
        <td class="button">     
        <input type="radio" name="cinsiyet" value="Erkek" checked/>Erkek<br>
        <input type="radio" name="cinsiyet" value="Kadın"/>Kadın<br>    
        </td>
        <tr> 
        <td><button class="button">EKLE</button></td>
        </tr>
         <tr>
         <td><button class="button" name="arama"><a href="m_arama.php">ARA</a></button></td>
         </tr>
</form>
</table>
</div>
<?php 
$con = new mysqli("localhost","stoccyne_musteri","dMr6885j$","stoccyne_musteriler");
if (isset($_POST['ad']) && isset($_POST['tel']) && isset($_POST['adres']) && isset($_POST['cinsiyet'])) 
{
$ad=$_POST['ad'];
$tel=$_POST['tel'];
$adres=$_POST['adres'];
$cinsiyet=$_POST["cinsiyet"];
$sorgu="insert into musteri (ad,tel,adres,cinsiyet) values ('".$ad."','".$tel."','".$adres."','".$cinsiyet."')";
mysqli_query($con, $sorgu);
}
 ?>
<div style="height: 500px; 
        overflow: scroll;
        width: 1350px; 
        margin: auto;
        position: absolute;
        left: 10%;
        top: 50%;
        margin-top: -50px;
        margin-left: -10px;">
 <table class="table">
 <tr>
    
       <td>MÜŞTERİ ADI</td>
       <td>MÜŞTERİ TELEFONU</td>
       <td>MÜŞTERİ ADRESİ</td>
       <td>MÜŞTERİ CİNSİYETİ</td>

</tr>
    <?php 
    $con = new mysqli("localhost","stoccyne_musteri","dMr6885j$","stoccyne_musteriler");
    $verileriCek = mysqli_query($con,"select * from musteri");
               
                while ($b=mysqli_fetch_array($verileriCek))
                {   
                     
                    $ad = $b['ad'];
                    $tel = $b['tel'];
                    $adres = $b['adres'];
                    $cinsiyet = $b['cinsiyet'];

                     
                    echo 
                    "<tr>
                    <td>$ad</td>
                    <td>$tel</td>
                    <td>$adres</td>
                    <td>$cinsiyet</td>
                    <td><a href='m_sil.php?sil=".$b['tel']."'>KAYDI İPTAL ET</a></td>
                    </tr>";
         
                }   
   ?>
</table>
 </body>
 </html>

