<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 
 
 <style>

@import url("https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Archivo+Black&family=Oswald:wght@200;300;400;500&display=swap");



        *{
        padding: 0%;
        margin: 0%;
        font-family: "Oswald", sans-serif;
        }


                        /* font-family: "Archivo Black", sans-serif; */
                                /* font-family: "Archivo Black", sans-serif; */
        body {
        overflow-x: hidden;
        background: radial-gradient(circle at bottom, navy 0, black 100%);
      
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


        .blocadmin{
                
                background-color: black;
                height: 500px;
                width: 600px;
        }

        .elementsheader{
                display: flex;
                flex-direction: row;
                justify-content: space-between;
        }
        


        .rowsadm{
        display: flex;
        flex-direction: column;
        width: 500px;
        padding: 20px 0px 30px 0px;
        } 

        .rowsadm input{
            background-color: transparent;
            border: 0;
            border-bottom: 1px solid #ffffff;
            font-weight: lighter;
            font-size: 18px;
            margin-left: 40px;
            color: white;        
        }

        .rowsadm input:focus,.formlog input:active {
        outline: none;
        
        }


        .rowsadm input::after{
        border: 0;
        }

        .buttonenviar input{
            
            background-color: transparent;
            color: white;
            font-size: 22px;
            font-family: "Oswald", sans-serif;
            font-weight: lighter;
            border: none;
            padding: 20px 0px 20px 0px ;
            cursor: pointer;
        }

        .buttonenviar :hover{
                font-weight: normal;
        }

        .positionelements{
            display: flex;
            justify-content: center; 
            padding: 50px 0px 0px 0px;
        }

        .columnitens{
                display: flex;
                flex-direction: column;
        }

        .tittlelogin{
                display: flex;
                justify-content: center;
                color: white;
                font-size: 20px;
        }

        .adminimg{
                display: flex;
                justify-content: center;
        }

        .adminimg img{
                width: 100px;
        }

        .blocadmin{
                background-color: black;
                width: 600px;
                height: 400px;

                
        }

        .voltaradm{
                width: 80px;
                height:40px;
                background: #dc3545;
                color: white;
                border-radius: 10px;
        }

       
        .textvoltar{
                display: flex;
                justify-content: center;
                height: 40px;
                align-items: center;
        }

        .iconjoin a{
                text-decoration: none;
   
        }


        
        footer {
        background-color: #333;
        display: flex;
        align-items: end;
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

        .blocadmin{
         background-color: black;
         height: 500px;
         width: 400px;
        }

        .rowsadm{
        display: flex;
        flex-direction: column;
        width: 380px;
        padding: 20px 0px 30px 0px;
        } 

       

        }

      



                

        </style>

                <header>
                <div class="elementsheader">

                <div class="logo">
                        <img src="imagens/logo.png" alt="">
                </div>

                <div class="iconjoin">
                        <a href="index.php">
                                <div class="voltaradm">
                                        <p class="textvoltar">Voltar</p>
                                </div>
                        </a>
                </div>
                </div>
                </header>



        <form action="testLogin.php" method="POST" class="formlog">

        
        
              
                <div class="positionelements">
                        
                        <div class="blocadmin">

                                
                                <div class="positionelements">

                                    <div class="columnitens">
                                        <p class="tittlelogin">Login do Administrador</p>
                        
                        
                                        <div class="adminimg">
                                                <img src="imagens/amdincolor.png" alt="">
                                        </div>
                        
                                        
                        
                        
                                        <div class="rowsadm">
                                                <input type="text" name="email" placeholder="Email">
                                        </div>
                                        
                                        <div class="rowsadm">
                                                <input type="password" name="senha" placeholder="Senha">
                                        </div>
                        
                                        <div class="buttonenviar">
                                        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
                                        </div>

                                    </div>
                                </div>
                        </div>
                </div>


                <br><br><br><br>
                
        <footer>
        <div class="container">
          <div class="footer-columns">
            <div class="column">
              <ul>
                <li><a href="#"><u>FAQ</u></a></li>
                <li><a href="#"><u>Investor Relations</u></a></li>
                <li><a href="#"><u>Buy Services</u></a></li>
                <li><a href="#"><u>Cookie Preferences</u></a></li>
                <li><a href="#"><u>Legal Notices</u></a></li>
              </ul>
            </div>
            <div class="column">
              <ul>
                <li><a href="#"><u>Help Center</u></a></li>
                <li><a href="#"><u>Jobs</u></a></li>
                <li><a href="#"><u>Ways to Watch</u></a></li>
                <li><a href="#"><u>Corporate Information</u></a></li>
                <li><a href="#"><u>Only on Kinodran</u></a></li>
              </ul>
            </div>
            <div class="column">
              <ul>
                <li><a href="#"><u>Account</u></a></li>
                <li><a href="#"><u>Kinodran Shop</u></a></li>
                <li><a href="#"><u>Terms of Use</u></a></li>
                <li><a href="#"><u>Contact Us</u></a></li>
                <li><a href="#"><u>Do Not Sell or Share My Personal Information</u></a></li>
              </ul>
            </div>
            <div class="column">
              <ul>
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


        </form>




</body>
</html>
