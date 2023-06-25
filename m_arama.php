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
  left: 37%;
  margin-left: 37px;
  margin: auto;
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
    <center>
        <div class="boyutlandirma">
          <a href="mekle.php"><i class="fa-solid fa-backward fa-2x"></i></a>
          <a href="m_arama.php"><i class="fa-sharp fa-solid fa-rotate-left fa-2x"></i></a>
        </div>
  <div style= "margin: auto;
        position: absolute;
        left: 37%;
        top: 20%;
        margin-top: -20px;
        margin-left: 37px;">
  <table>
<form method="post" >
        <td><input type="text" name="ara" class="button" id="ara" placeholder="MÜŞTERİ ARAMA" /></td>
         <td><button class="button" name="arama">ARA</button></td>
</center>
</form>
</table>
</div>

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
if (isset($_POST['arama'])) 
{
$con = new mysqli("localhost","stoccyne_musteri","dMr6885j$","stoccyne_musteriler");
$m_ara=$_POST['ara'];
$sorgu="select * from musteri where tel like '%$m_ara%'";
$sonuc=mysqli_query($con, $sorgu);

    $verileriCek = mysqli_query($con, "select * from musteri where tel like '%$m_ara%'" );
               
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
                    </tr>";
                }   
            }
     ?>
</div>
 </body>
 </html>