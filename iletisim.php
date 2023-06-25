<style>
  body 
  {
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  font-family: 'Jost', sans-serif;
  background: linear-gradient(to bottom, #00804B, #3F5EFB);
}

#contact 
{
  width: 100%;
  height: 100%;
}

.section-header 
{
  text-align: center;
  margin: 0 auto;
  padding: 40px 0;
  font: 300 60px 'Oswald', sans-serif;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 6px;
}

.contact-wrapper 
{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  margin: 0 auto;
  padding: 20px;
  position: relative;
  max-width: 840px;
}

.form-horizontal 
{
  max-width: 400px;
  font-family: 'Lato';
  font-weight: 400;
}

.form-control, 
textarea 
{
  max-width: 400px;
  background-color: linear-gradient(#00804B, #3F5EFB);
  color: #000;
  letter-spacing: 1px;
  max-height: 300px;
  height: 30px;
  width: 400px;
}

.send-button 
{
  margin-top: 75px;
  height: 50px;
  width: 400px;
  overflow: hidden;
  transition: all .2s ease-in-out;
  background-color: #e67e22;
}

.alt-send-button 
{
  width: 400px;
  height: 4px;
  transition: all .2s ease-in-out;
}

.send-text 
{
  display: block;
  margin-top: 25px;
  font: 700 15px 'Lato', sans-serif;
  letter-spacing: 2px;
}

.alt-send-button:hover 
{
  transform: translate3d(0px, -29px, 0px);
}

.direct-contact-container 
{
  max-width: 400px;
}

.contact-list 
{
  list-style-type: none;
  margin-left:  100px;
  padding-right: 2px;
}

.list-item 
{
  line-height: 4;
  color: #aaa;
}

.contact-text 
{
  font: 300 18px 'Lato', sans-serif;
  letter-spacing: 1.9px;
  color: #bbb;
}

.place 
{
  margin-left: 62px;
}

.phone 
{
  margin-left: 56px;
}

.gmail
{
  margin-left: 53px;
}

.contact-text a 
{
  color: #bbb;
  text-decoration: none;
  text-align: center;
  transition-duration: 0.2s;
}

.contact-text a:hover 
{
  color: #fff;
  text-decoration: none;
}


.social-media-list 
{
  position: auto;
  font-size: 22px;
  text-align: center;
  width: 100%;
  margin: 0 150;
  padding: 0;
}

.social-media-list li a 
{
  color: #fff;
}

.social-media-list li 
{
  position: relative; 
  display: inline-block;
  height: 60px;
  width: 60px;
  margin: 10px 3px;
  line-height: 60px;
  border-radius: 50%;
  color: #e67e22;
  background-color: #e67e22;
  cursor: pointer; 
  transition: all .2s ease-in-out;
}

.social-media-list li:after 
{ 
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 60px;
  height: 60px;
  line-height: 60px;
  border-radius: 50%;
  opacity: 0;
  box-shadow: 0 0 0 4px #e67e22;
  transition: all .2s ease-in-out;
}

.social-media-list li:hover 
{
  background-color: #fff; 
}

.social-media-list li:hover:after 
{
  opacity: 1;  
  transform: scale(1.12);
  transition-timing-function: cubic-bezier(0.37,0.74,0.15,1.65);
}

.social-media-list li:hover a 
{
  color: #e67e22;
}

.copyright 
{
  font: 200 14px 'Oswald', sans-serif;
  color: #555;
  letter-spacing: 3px;
  margin-left: 100px;
  margin-top: 20px;
  text-align: center;
}

hr 
{
  margin-left: 100px;
  width: 120%;
  border-color: rgba(255,255,255,.6);
}
}
.text
{
  padding: 30px; 
  color: #fff;
  width: 600px; 
  margin-bottom: 20px;
}

.boyutlandirma img 
{
    max-width: 40px;
    height: auto;
}
</style>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="https://kit.fontawesome.com/70abf9add9.js" crossorigin="anonymous"></script>      
  <title></title>
</head>
<body>
<section id="contact">
  <div class="boyutlandirma">
    <center>
          <a href="anasayfa.php"><i class="fa-solid fa-backward fa-2x"></i></a>
          <a href="iletisim.php"><i class="fa-sharp fa-solid fa-rotate-left fa-2x"></i></a>
        </center>
        </div>

  <h1 class="section-header">İLETİŞİM</h1>

  <div class="contact-wrapper">
    <form id="contact-form" class="form-horizontal" role="form">
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="ad" placeholder="İsim Soyisim" name="ad" >
        </div>
      </div>
      <div class="form-group">
        <div>
          <input type="email" class="form-control" id="email" placeholder="E-Mail Adresiniz" name="email">
        </div>
      </div>
      <textarea class="form-control" rows="10" placeholder="Bize İletmek İstediğiniz Mesajınız" name="mesaj" id="mesaj"></textarea>
      <button class="btn btn-primary send-button" id="submit" type="submit" value="GÖNDER">
        <div class="alt-send-button">
         <i class="fa-solid fa-paper-plane fa-xl"></i>
         <br>
         <span class="send-text">GÖNDER</span>
        </div>
      </button>
    </form>
      <div class="direct-contact-container">
        <ul class="contact-list">
          <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">İstanbul, Türkiye</span></i></li>        
          <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">(212) 555-555</a></span></i></li>
          <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:destekstocc@gmail.com" title="Send me an email">destekstocc@gmail.com</a></span></i></li>
        </ul>
        <hr>
        <ul class="social-media-list">
          <li><a href="#" target="_blank" class="contact-icon">
            <p>
            <i class="fa fa-github fa-lg"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <p>
            <i class="fa-brands fa-linkedin fa-lg"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <p>
            <i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <p>
            <i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
          </li>       
        </ul>
        <hr>
        <div class="copyright">2023&copy; Tüm Hakları Saklıdır</div>
      </div>
  </div>
  <br>
  <br>
  <center>
  <?php 
if (isset($_GET['ad']) && isset($_GET['email'])) 
{
$ad=$_GET['ad'];
$email=$_GET['email'];
$sorgu =  new mysqli("localhost","stoccyne_iletisim","dMr6885j$","stoccyne_iletisimdb");
$ekle="SELECT * FROM iletisim WHERE ad='$ad' AND email='$email' ";
$sonuc=mysqli_query($sorgu, $ekle);
$row = mysqli_num_rows($sonuc);
if ($row>0)
            { 
              echo ('<span class="text">Daha Önce Talebiniz Alınmış !');
            }
            else
            {
              $m_eklemek="insert into iletisim (ad,email,mesaj) values ('".$ad."','".$email."','".$mesaj ."')";
              $sonuc1=mysqli_query($sorgu, $m_eklemek);
              if ($sonuc1==0) 
              {
                echo ('<span class="text">Talebiniz Alınamadı !');
              }
              else
              {
                echo ('<span class="text">Başarılı Bir Şekilde Talebiniz İletildi');
              }
            }
}
?>
</center>
</section>  
</body>
</html>