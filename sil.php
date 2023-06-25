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
$con = new mysqli("localhost","stoccyne_urun","dMr6885j$","stoccyne_urunler");
$gel=$_GET['sil'];
$sorgu="delete from urun where urun_barkodu='$gel'";
mysqli_query($con, $sorgu);
header("Refresh: 3; url=uekle.php");
 ?>
</pre>
<div class="basarili">
<div class="basarili-title">Başarılı...</div>
<div class="basarili-content">Başarılı Bir Şekilde Ürün Silindi. Stok Kontrole Yönlendiriliyorsunuz. Lütfen Bekleyiniz...</div>
</div>
<pre>
