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
  border: 3px;
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
}
</style>
 <body>
    <div class="boyutlandirma">
          <a href="anasayfa.php"><i class="fa-solid fa-backward fa-2x"></i></a>
          <a href="uekle.php"><i class="fa-sharp fa-solid fa-rotate-left fa-2x"></i></a>
      </div>
  <div style= "margin: auto;
        position: absolute;
        left: 10%;
        top: 20%;
        margin-top: -20px;
        margin-left: -10px;">
  <table>
<form method="post" >
        <td><input type="text" name="urun_adi" class="button" id="urun_adi" placeholder="ÜRÜN ADI" /></td>
        <td><input type="text" name="urun_markasi" class="button" id="urun_markasi" placeholder="ÜRÜN MARKASI" /></td>
       <td> <input type="text" name="urun_barkodu" class="button" id="urun_barkodu" placeholder="ÜRÜN BARKODU" /></td>
        <td><input type="text" name="urun_fiyat" class="button" id="urun_fiyat" placeholder="ÜRÜN FİYATI" /></td>
        <td><input type="text" name="urun_stok" class="button" id="urun_stok" placeholder="ÜRÜN STOK" /></td>
        <tr> 
        <td><button class="button">EKLE</button></td>   
                </tr>
                <tr>
         <td><button class="button" name="arama"><a href="arama.php">ARA</a></button></td>
        </tr>

</form>
</table>
</div>
<?php 
$con = new mysqli("localhost","stoccyne_urun","dMr6885j$","stoccyne_urunler");
if (isset($_POST['urun_adi']) && isset($_POST['urun_markasi']) && isset($_POST['urun_barkodu']) && isset($_POST['urun_fiyat']) && isset($_POST['urun_fiyat']) &&isset($_POST['urun_stok'])) 
{ 
$urun_adi=$_POST['urun_adi'];
$urun_markasi=$_POST['urun_markasi'];
$urun_barkodu=$_POST['urun_barkodu'];
$urun_fiyat=$_POST['urun_fiyat'];
$urun_stok=$_POST['urun_stok'];
$sorgu="insert into urun (urun_adi,urun_markasi,urun_barkodu,urun_fiyat,urun_stok) values ('".$urun_adi."','".$urun_markasi."','".$urun_barkodu."','".$urun_fiyat."','".$urun_stok."')";
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
        <td>ÜRÜN ADI</td>
        <td>ÜRÜN MARKASI</td>
        <td>ÜRÜN BARKODU</td>
        <td>ÜRÜN FİYATI</td>
        <td>ÜRÜN STOK</td>
    </tr>
    <?php 
    $con = new mysqli("localhost","stoccyne_urun","dMr6885j$","stoccyne_urunler");
    $verileriCek = mysqli_query($con,"select * from urun");
               
                while ($b=mysqli_fetch_array($verileriCek))
                {
                     
                    $urun_adi = $b['urun_adi'];
                    $urun_markasi = $b['urun_markasi'];
                    $urun_barkodu = $b['urun_barkodu'];
                    $urun_fiyat = $b['urun_fiyat'];
                    $urun_stok = $b['urun_stok'];


                     
                    echo 
                    "
                    <tr>
                    <td>$urun_adi</td>
                    <td>$urun_markasi</td>
                    <td>$urun_barkodu</td>
                    <td>$urun_fiyat</td>
                    <td>$urun_stok</td>
                    <td><a href='sil.php?sil=".$b['urun_barkodu']."'>ÜRÜNÜ İPTAL ET</a></td>
                    </tr>    
                    ";
         
                }   
   ?>

</table>
 </body>
 </html>

