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
</head>
<body>
  <div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">

    
     <div>
        <label for="chk" aria-hidden="true" class="signup1">GİRİŞ</label>
      </div>
        <div class="signup">
        <form method="post">
        <input type="email" name="email" class="button" placeholder="E-Mail" required="">
        <input type="password" name="sifre" class="button" placeholder="Şifre" required="">
        <br></br>
        <div style="
        left: 125%;  
        margin-left: 125px;
        ">
        <button class="button">GİRİŞ</button></div>

      </form>
<?php
ob_start();
      $con = new mysqli("localhost","stoccyne_kullanici","dMr6885j$","stoccyne_kullanicilar");
        if (isset($_POST['email']) && isset($_POST['sifre'])) 
        {
          $email=$_POST["email"];
          $sifre=$_POST["sifre"];         
          $sorgu="SELECT * FROM kullanici WHERE email='$email' AND sifre='$sifre'";
          $sonuc=mysqli_query($con, $sorgu);
          $row = mysqli_fetch_array($sonuc);

            if ($row!=0)
            { 
                header("Refresh: 0; url=anasayfa.php");
            }
            else
            {
              echo ('<span style="left: 60%; margin-left: 60px;">E-mail veya Şifreyi Kontrol Ediniz!');
            }
          } 
?>
    </div>
  </div>
</body>
</html> 