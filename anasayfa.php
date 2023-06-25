<style >
@import url('https://fonts.googleapis.com/css?family=Varela+Round');

html, body {
    overflow-x: hidden;
    height: 100%;
}
body {
    background: #fff;
    padding: 0;
    margin: 0;
    font-family: 'Varela Round', sans-serif;
}
.header {
    display: block;
    margin: 0 auto;
    width: 100%;
    max-width: 100%;
    box-shadow: none;
    background-color: #00804B;
    position: fixed;
    height: 60px!important;
    overflow: hidden;
    z-index: 10;
}
.main {
    margin: 0 auto;
    display: block;
    height: 100%;
    margin-top: 60px;
}
.mainInner{
    display: table;
    height: 100%;
    width: 100%;
    text-align: center;
}
.mainInner div{
    display:table-cell;
    vertical-align: middle;
    font-size: 3em;
    font-weight: bold;
    letter-spacing: 1.25px;
}
#sidebarMenu {
    height: 100%;
    position: fixed;
    left: 0;
    width: 250px;
    margin-top: 60px;
    transform: translateX(-250px);
    transition: transform 250ms ease-in-out;
    background: linear-gradient(180deg, #00804B 0%, #3F5EFB 100%);
}
.sidebarMenuInner{
    margin:0;
    padding:0;
    border-top: 1px solid rgba(255, 255, 255, 0.10);
}
.sidebarMenuInner li{
    list-style: none;
    color: #fff;
    text-transform: uppercase;
    font-weight: bold;
    padding: 20px;
    cursor: pointer;
}
.sidebarMenuInner li span{
    display: block;
    font-size: 14px;
    color: rgba(255, 255, 255, 0.50);
}
.sidebarMenuInner li a{
    color: #fff;
    text-transform: uppercase;
    font-weight: bold;
    cursor: pointer;
    text-decoration: none;
}
input[type="checkbox"]:checked ~ #sidebarMenu {
    transform: translateX(0);
}

input[type=checkbox] {
    transition: all 0.3s;
    box-sizing: border-box;
    display: none;
}
.sidebarIconToggle {
    transition: all 0.3s;
    box-sizing: border-box;
    cursor: pointer;
    position: absolute;
    z-index: 99;
    height: 100%;
    width: 100%;
    top: 22px;
    left: 15px;
    height: 22px;
    width: 22px;
}
.spinner {
    transition: all 0.3s;
    box-sizing: border-box;
    position: absolute;
    height: 3px;
    width: 100%;
    background-color: #fff;
}
.horizontal {
    transition: all 0.3s;
    box-sizing: border-box;
    position: relative;
    float: left;
    margin-top: 3px;
}
.diagonal.part-1 {
    position: relative;
    transition: all 0.3s;
    box-sizing: border-box;
    float: left;
}
.diagonal.part-2 {
    transition: all 0.3s;
    box-sizing: border-box;
    position: relative;
    float: left;
    margin-top: 3px;
}
input[type=checkbox]:checked ~ .sidebarIconToggle > .horizontal {
    transition: all 0.3s;
    box-sizing: border-box;
    opacity: 0;
}
input[type=checkbox]:checked ~ .sidebarIconToggle > .diagonal.part-1 {
    transition: all 0.3s;
    box-sizing: border-box;
    transform: rotate(135deg);
    margin-top: 8px;
}
input[type=checkbox]:checked ~ .sidebarIconToggle > .diagonal.part-2 {
    transition: all 0.3s;
    box-sizing: border-box;
    transform: rotate(-135deg);
    margin-top: -9px;
}
:root {
  --delay: 0;
  --duration: 800ms;
  --iterations: 1;
}

.reveal-text,
.reveal-text::after {
  animation-delay: var(--animation-delay, 2s);
  animation-iteration-count: var(--iterations, 1);
  animation-duration: var(--duration, 800ms);
  animation-fill-mode: both;
  animation-timing-function: cubic-bezier(0.0, 0.0, 0.2, 1);
}

.reveal-text 
{
  --animation-delay: var(--delay, 0);
  --animation-duration: var(--duration, 800ms);
  --animation-iterations: var(--iterations, 1);
  position:sticky;
  font-size: 50pt;
  animation-name: clip-text;
  color: #000000;
  white-space: nowrap;
  cursor: default;
  
  &::after 
  {
    content: "";
    position: absolute;
    z-index: 999;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #f2f98b;
    transform: scaleX(5);
    transform-origin: 0 100%;
    pointer-events: none;
    animation-name: text-revealer;
  }
  
}


@keyframes clip-text {
  from {
    clip-path: inset(0 100% 0 0);
  }
  to {
    clip-path: inset(0 0 0 0);
  }
}


@keyframes text-revealer {
  
  0%, 50% {
    transform-origin: 0 50%;
  }
  
  60%, 100% {
    transform-origin: 100% 50%;   
  }

  
  60% {
    transform: scaleX(50);
  }
  
  100% {
    transform: scaleX(0);
  }
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
		<div class="header"></div>
  <input type="checkbox" class="css" id="openSidebarMenu">
  <label for="openSidebarMenu" class="sidebarIconToggle">
    <div class="spinner diagonal part-1"></div>
    <div class="spinner horizontal"></div>
    <div class="spinner diagonal part-2"></div>
  </label>
  <div id="sidebarMenu">
    <ul class="sidebarMenuInner">
      <li>BERAT TÜRK <span>Web Developer</span></li>
      <li></li>
      <li></li>
      <li><a href="uekle.php" >STOK KONTROLÜ</a></li>
      <li><a href="mekle.php" >MÜŞTERİ BİLGİLERİ</a></li>
      <li><a href="iletisim.php">Bizimle İletişime Geçin</a></li>
      <li><a href=login.php>YENİ KAYIT OLUŞTUR <i class="fa-sharp fa-solid fa-user fa-2xl"></i></a></li>
      <li><a href=index.php>Çıkış  <i class="fa-solid fa-right-from-bracket"></i></a></li>
    </ul>
  </div>
  <div id='center' class="main center">
    <center>
     <h1 class="reveal-text" style="text-align:center">STOCCY UYGULAMASINA <br> HOŞGELDİNİZ </h1>
   </center>
    </div>
      </div>

		</body>
		</html>		
