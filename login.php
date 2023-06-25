<style>
body{
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  font-family: 'Jost', sans-serif;
  background: linear-gradient(to bottom, #00804B, #3F5EFB);
}
.main{
  width: 350px;
  height: 500px;
  background: red;
  overflow: hidden;
  background:#FFF;
  border-radius: 10px;
  box-shadow: 5px 20px 50px #000;
}
.boyutlandirma img 
{
    max-width: 40px;
    height: auto;
}
#chk{
  display: none;
}
.signup{
  position: relative;
  width:570px;
  height: 570px;
}
.signup1
{
  color: black;
}
label{
  color: #000;
  font-size: 2.3em;
  justify-content: center;
  display: flex;
  margin: 60px;
  font-weight: bold;
  cursor: pointer;
  transition: .5s ease-in-out;
}
input{
  width: 60%;
  height: 20px;
  background: #e0dede;
  justify-content: center;
  display: flex;
  margin: 20px auto;
  padding: 10px;
  border: none;
  outline: none;
  border-radius: 5px;
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
    margin: 18px 4px;
    cursor: pointer;
}
</style>
<!DOCTYPE html>
<html>
<head>
   <script src="https://kit.fontawesome.com/70abf9add9.js" crossorigin="anonymous"></script>      

</head>
<body>
  <div class="main">
        <div class="boyutlandirma">
        <a href="anasayfa.php"><i class="fa-solid fa-backward fa-2x"></i></a>
        <a href="login.php"><i class="fa-sharp fa-solid fa-rotate-left fa-2x"></i></a>
        </div>
     <div>
        <label for="chk" aria-hidden="true" class="signup1">ÜYE KAYDI</label>
      </div>
        <div class="signup">
        <form method="post" action="login.php">
        <input type="email" name="email" id=email class="button" placeholder="E-Mail" required="">
        <input type="password" name="sifre" id=sifre class="button" placeholder="Şifre" required="">
        <br></br>
        <div style="
        left: 125%;  
        margin-left: 125px;
        ">
        <button class="button">EKLE</button>
      </div>
      </form>
<?php 
if (isset($_POST['email']) && isset($_POST['sifre'])) 
{
$email=$_POST['email'];
$sifre=$_POST['sifre'];
$sorgu =  new mysqli("localhost","stoccyne_kullanici","dMr6885j$","stoccyne_kullanicilar");
$ekle="SELECT * FROM kullanici WHERE email='$email' AND sifre='$sifre'";
$sonuc=mysqli_query($sorgu, $ekle);
$row = mysqli_num_rows($sonuc);
            if ($row>0)
            { 
                echo ('<span style="left: 80%; margin-left: 80px;">Daha Önce Kayıt Yapılmış !');
            }
            else
            {
              $m_eklemek="insert into kullanici (email,sifre) values ('".$email."','".$sifre."')";
              $sonuc1=mysqli_query($sorgu, $m_eklemek);
              if ($sonuc1==0) 
              {
                echo ('<span style="left: 80%; margin-left: 80px;">Kayıt Oluşturulamadı !');
              }
              else
              {
                echo ('<span style="left: 95%; margin-left: 95px;">Başarı İle Kayıt Eklendi');
              }
            }
}
?>
    </div>
  </div>
</body>
</html> 