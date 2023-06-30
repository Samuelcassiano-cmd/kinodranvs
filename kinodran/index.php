

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bem-vindo!</title>
</head>
<body>
  

  <style>

@import url("https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Archivo+Black&family=Oswald:wght@200;300;400;500&display=swap");

* {
  padding: 0%;
  margin: 0%;
  font-family: "Oswald", sans-serif;
}
  /* font-family: "Archivo Black", sans-serif; */
        /* font-family: "Archivo Black", sans-serif; */
 body {

  overflow-x: hidden;
  background: radial-gradient(circle at bottom, navy , rgb(25, 21, 43) 100%);
  height: 125vh;          
}

header {
  background-color: black;
  height: 80px;
}

.logo{
  padding: 20px 20px 20px 20px;
}

.logo img {
  height: 50px;
}

.iconjoin{
  padding: 20px 20px 20px 20px;
  
}

  .cssbuttons-io-button {
  background: #09084e;
  color: white;
  font-family: "Oswald", sans-serif;
  padding-left: 1.2em;
  font-size: 17px;
  font-weight: normal;
  border-radius: 0.9em;
  border: none;
  letter-spacing: 0.05em;
  display: flex;
  align-items: center;
  box-shadow: inset 0 0 1.6em -0.6em #09084e;
  overflow: hidden;
  position: relative;
  height: 2.8em;
  padding-right: 3.3em;
  
}

.cssbuttons-io-button .icon {
  background: white;
  margin-left: 1em;
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 2.2em;
  width: 2.2em;
  border-radius: 0.7em;
  box-shadow: 0.1em 0.1em 0.6em 0.2em #06052d;
  right: 0.3em;
  transition: all 0.3s;
}

.cssbuttons-io-button:hover .icon {
  width: calc(100% - 0.6em);
}

.cssbuttons-io-button .icon svg {
  width: 1.1em;
  transition: transform 0.3s;
  color: #09084e;
}

.icon {
  width: 45px;
  height: 45px;
}
.cssbuttons-io-button:hover .icon svg {
  transform: translateX(0.1em);
}

.cssbuttons-io-button:active .icon {
  transform: scale(0.95);
}

.iconjoin a{
  text-decoration: none;
}



.elementsheader{
  height: 80px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.blocposition{
  display: flex;
  justify-content: center;
  padding: 0px 0px 100px 0px;
}

.bloclogin{
  
 background-color: #1e3a6a;
 width: 90%;
 height: 500px;
  border-radius: 20px;
  background-image: radial-gradient(
      circle,
      rgba(22, 69, 122, 0.5) 40%,
      black 80%
    ),url("imagens/fundologin.png");
}

.tittlebloc{
  font-size: 50px;
  color: white;
  font-family: "Archivo Black", sans-serif;
  padding: 0px 0px 0px 90px;

  
}

.tittlelogin{
  color: white;
  font-size: 25px;
  padding: 0px 0px 0px 120px;
}

.formlog input{
  background-color: transparent;
  border: 0;
  border-bottom: 1px solid #000000;
  color: #ffffff;
  font-weight: lighter;
  font-size: 21px;
  margin-left: 80px;

}

.formlog input:focus,.formlog input:active {
  outline: none;
}


.formlog input::after{
  border: 0;

}


.inputSubmit{
  border-bottom: none;
  background-color: transparent;
  margin-left: 100px;
}

.buttonenviar input{
  border-bottom: none;
  margin-left: 100px;
}

.entraradm{
  font-size: 12px;
  font-weight: lighter;
  display: flex;
  justify-content: end;
  padding: 50px 50px 0px 0px;
  background-color: transparent;
}

.entraradm a{
  text-decoration: none;
  color: #89a7db;
}

button {
        
        padding: 8px 20px;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 2.5px;
        font-weight: 500;
        color: #000;
        background-color: #fff;
        border: none;
        border-radius: 45px;
        box-shadow: 0px 8px 15px rgba(47, 255, 5, 0.1);
        transition: all 0.3s ease 0s;
        cursor: pointer;
        outline: none;
}

    button:hover {
    background-color: #09084e;
    box-shadow: 0px 5px 5px #ffffff42;
    color: #fff;
    
    }

    

.enviar{
      padding: 20px 0px 0px 50px;
}


footer {
    background-color: #333;
    color: #fff;
  }
  
  .container {
    width: 100%;
    margin: 0 auto;
  }
  
  .footer-columns {
    display: flex;
    flex-wrap: wrap;
    justify-content:space-around;
    margin-bottom: 10px;
  }
  
  .column {
    flex: 0 0 calc(15% - 20px);
  }

  .column h3{
    margin-top: 0;
  }
  
  
  .column ul {
    list-style: none;
    padding: 0;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }
  
  .column ul li {
    margin-bottom: 15px;
    font-size: 10px;
  }
  
  .column ul li a {
    color: #fff;
    text-decoration: none;
  }
  
  .footer-bottom {
    text-align: center;
  }
  
  .footer-bottom p {
    margin: 0;
    font-size: 12px;
  }








@media  (max-width: 414px) {

  .tittlebloc{
    font-size: 40px;
    width: 300px;
    color: white;
    padding: 0px 0px 0px 40px;
    font-family: "Oswald", sans-serif;
  }


    .tittlelogin{
    color: white;
    font-size: 25px;
    padding: 0px 0px 0px 20px;
  }

  .bloclogin{
  
      background-color: #1e3a6a;
      width: 90%;
      height: 500px;
      border-radius: 20px;
      background-image: radial-gradient(
          rgba(10, 35, 65, 0.74) 40%,
          black 90%
        ),url("imagens/fundologin.png");
 }

    .entraradm{
      font-size: 12px;
      font-weight: lighter;
      display: flex;
      justify-content: end;
      padding: 0px 10px 0px 0px;
    }


}
  </style>





  <header>
   <div class="elementsheader">

      <div class="logo">
        <img src="imagens/logo.png" alt="">
      </div>

      <div class="iconjoin">
        <a href="formulario.php">
          <button class="cssbuttons-io-button">
            Cadastrar
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z"></path>
                <path fill="currentColor" d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path>
              </svg>
            </div>
          </button>
        </a>
      </div>
   </div>
  </header>

  <br><br>

  <div class="blocposition">
      <div class="bloclogin">

        <br><br>
        <p class="tittlebloc">
          Você decide quando para!
        </p>


        <form action="testLoginu.php" method="POST" class="formlog">

          <br><br>
          <p class="tittlelogin">Login Usuário</p>
      
            <br>
                  <input type="text" name="email" placeholder="Email">
                  <br><br><br>
                  <input type="password" name="senha" placeholder="Senha">

                  <br><br>

                  <div class="enviar">
                    <button type="submit" name="submit" value="Enviar">Enviar</button>
                  </div>
                  <!-- <div class="buttonenviar">
                    <input class="inputSubmit" type="submit" name="submit" value="Enviar">
                  </div> -->
          </form>

        

          <div class="entraradm">
            <a href="loginadm.php"><u>Entrar como adm</u></a>
          </div>
      </div>
</div>

  <footer>
        <div class="container">
          <div class="footer-columns">
            <div class="column">
              <ul>
                <br>
                <li><a href="#"><u>FAQ</u></a></li>
                <li><a href="#"><u>Investor Relations</u></a></li>
                <li><a href="#"><u>Buy Services</u></a></li>
                <li><a href="#"><u>Cookie Preferences</u></a></li>
                <li><a href="#"><u>Legal Notices</u></a></li>
              </ul>
            </div>
            <div class="column">
              <ul>
                <br>
                <li><a href="#"><u>Help Center</u></a></li>
                <li><a href="#"><u>Jobs</u></a></li>
                <li><a href="#"><u>Ways to Watch</u></a></li>
                <li><a href="#"><u>Corporate Information</u></a></li>
                <li><a href="#"><u>Only on Kinodran</u></a></li>
              </ul>
            </div>
            <div class="column">
              <ul>
                <br>
                <li><a href="#"><u>Account</u></a></li>
                <li><a href="#"><u>Kinodran Shop</u></a></li>
                <li><a href="#"><u>Terms of Use</u></a></li>
                <li><a href="#"><u>Contact Us</u></a></li>
                <li><a href="#"><u>Do Not Sell or Share My Personal Information</u></a></li>
              </ul>
            </div>
            <div class="column">
              <ul>
                <br>
                <li><a href="#"><u>Media Center</u></a></li>
                <li><a href="#"><u>Redeem Gift Cards</u></a></li>
                <li><a href="#"><u>Privacy</u></a></li>
                <li><a href="#"><u>Speed Test</u></a></li>
              </ul>
            </div>
          </div>
          <br>
          <div class="footer-bottom">
            <p>Todos os direitos reservados &copy; 2023 Kinodran.com</p>
          </div>
        </div>
      </footer>


</body>
</html>