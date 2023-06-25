<style>
.basarili
{
  padding: 30px;
  background-color:#E9FFDD; 
  border: 1px 
  solid #5bec73; 
  width: 600px; 
  margin-bottom: 20px;
}
.basarili-title
{
   margin-bottom: 20px; 
   font-family: tahoma,sans-serif; 
   font-size: 16px; 
   font: bold; 
   color: #3f5134;
}
.basarili-content
{
   font-family: tahoma,sans-serif; 
   font-size: 11px; 
   color: #3f5134;
}
</style>
 <?php 
ob_start();
$con = new mysqli("localhost","stoccyne_musteri","dMr6885j$","stoccyne_musteriler");
$gel=$_GET['sil'];
$sorgu="delete from musteri where tel='$gel'";
mysqli_query($con, $sorgu);
header("Refresh: 3; url=mekle.php");
 ?>
</pre>
<div class="basarili">
<div class="basarili-title">Başarılı...</div>
<div class="basarili-content">Başarılı Bir Şekilde Ürün Silindi. Müşteri Bilgileri Sayfasına Yönlendiriliyorsunuz. Lütfen Bekleyiniz...</div>
</div>
<pre>
