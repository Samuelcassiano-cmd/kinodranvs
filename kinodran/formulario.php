<!-- <?php

if(isset($_POST['submit']))
{
    // print_r('Nome: ' . $_POST['nome']);
    // print_r('<br>');
    // print_r('Email: ' . $_POST['email']);
    // print_r('<br>');
    // print_r('Telefone: ' . $_POST['telefone']);
    // print_r('<br>');
    // print_r('Sexo: ' . $_POST['genero']);
    // print_r('<br>');
    // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
    // print_r('<br>');
    // print_r('Cidade: ' . $_POST['cidade']);
    // print_r('<br>');
    // print_r('Estado: ' . $_POST['estado']);
    // print_r('<br>');
    // print_r('Endereço: ' . $_POST['endereco']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
   

    $result = mysqli_query($conexao, "INSERT INTO clientess3(nome,email,senha,telefone) 
    VALUES ('$nome','$email','$senha','$telefone')");

    header('Location: index.php');
}

?> -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário</title>


<style>


    @import url("https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Archivo+Black&family=Oswald:wght@200;300;400;500&display=swap");

    * {
    padding: 0%;
    margin: 0%;
    font-family: "Oswald", sans-serif;
    }
    /* font-family: "Archivo Black", sans-serif; */


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



    body {
        overflow-x: hidden;
        background: radial-gradient(circle at bottom, #000080 , #120f1f 100%);
        height: 120vh;
        }

        .elementsheader{
                display: flex;
                flex-direction: row;
                justify-content: space-between;
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



    form{
        background-color: #000000;
        width: 400px;
        height: 510px;
        text-align: center;
        color: white;
      
    }

    form input{
        padding-top: 35px;
        padding-bottom: 10px;
    }


        .rowsform{
            display: flex;
            flex-direction: column;
            width: 300px;
       
    }
   
    .rowsform input{
        background-color: transparent;
        border: 0;
        border-bottom: 1px solid #ffffff;
        font-weight: lighter;
        font-size: 18px;
        margin-left: 40px;
        color: white;
        
    }

    .rowsform input::placeholder{
        color: white;
    }

    .rowsform input:focus,.formlog input:active {
    outline: none;
    
    }


    .rowsform input::after{
    border: 0;

    }

    .enviar input{
        
        background-color: transparent;
        color: white;
        font-size: 22px;
        font-family: "Oswald", sans-serif;
        font-weight: lighter;
        border: none;
        padding: 20px 0px 20px 0px ;
    }

    .positionelements{
        display: flex;
        justify-content: center; 
    padding: 50px 0px 50px 0px;
    }


    .imgforms img{
        height: 510px;
        filter: brightness(60%);
    }


    .textandimg{
        display: flex;
        align-items: center;
        z-index: -1;
    }


    .textregistrese{
        font-size: 50px;
    }

    .subtitleresgistre{
        font-size: 20px;
    }

    .conjusttext{
        display: flex;
        z-index: 1;
        width: 400px;
        color: #ffffff;
        height: 510px;
        display: flex;
        align-items: center;
        text-align: center;
        background: #b401eb;
        background-image:  radial-gradient(circle, rgba(0, 0, 128, 0.5) 0%, rgba(0, 0, 0, 0.395) 100%), url("imagens/imgforms.png");     

    }

   
    .conjusttext .texto{
        backdrop-filter: brightness(60%)  blur(10px);
        background-size: auto 100%;
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
    

    body {
        overflow-x: hidden;
        background: radial-gradient(circle at bottom, navy , rgb(18, 15, 31) 100%);
        height: 120vh;
        overflow: hidden;
        }


        .positionelements{
            display: flex;
            flex-direction: row;
            justify-content: center;
    }

    .textandimg{
        display: none;
    }


  .rowsform{
            display: flex;
            flex-direction: column;
            width: 100px; 
    }

    form{
        background-color: #000000;
        width: 350px;
        height: 500px;
        align-content: center;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
      
    }


    .rowsform input{
        background-color: transparent;
        border: 0;
        border-bottom: 1px solid #ffffff;
        font-weight: lighter;
        font-size: 18px;
        margin-left: 40px;
        color: white;
        width: 280px;
        
    }
  
}
    
button {
    margin-top: 20px;
    padding: 1.3em 3em;
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
  margin-top: 20px;
}






</style>


</head>
<body>

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
            


<div class="positionelements">

        <form action="formulario.php" method="POST">

            <div class="rowsform">
                <input type="text" name="nome" id="nome" class="inputUser" required placeholder="Nome">
            </div>
            <div class="rowsform">
                <input type="email" name="email" id="email" class="inputUser" required placeholder="Email">
            </div>

            <div class="rowsform">
                <input type="password" name="senha" id="senha" class="inputUser" required placeholder="Senha">
            </div>

            <div class="rowsform">
            
                <input type="tel" name="telefone" id="telefone" class="inputUser" required placeholder="Telefone">
            </div>

            <div>
                <button type="submit" name="submit" id="submit">Enviar</button>
            </div>
        </form>

       <div class="textandimg">

       <div class="conjusttext">
            <div class="texto">
                <p class="textregistrese">
                    Novo por aqui? 
                 </p>

                <p class="subtitleresgistre">
                    Cadastre-se para ter acesso a conteúdos exclusivos sobre o mundo do drama.
                </p>
            </div>
       </div>
       </div>
</div>

<footer>
        <div class="container">
          <div class="footer-columns">
            <div class="column">
              <ul> <br>
                <li><a href="#"><u>FAQ</u></a></li>
                <li><a href="#"><u>Investor Relations</u></a></li>
                <li><a href="#"><u>Buy Services</u></a></li>
                <li><a href="#"><u>Cookie Preferences</u></a></li>
                <li><a href="#"><u>Legal Notices</u></a></li>
              </ul>
            </div>
            <div class="column">
              <ul> <br>
                <li><a href="#"><u>Help Center</u></a></li>
                <li><a href="#"><u>Jobs</u></a></li>
                <li><a href="#"><u>Ways to Watch</u></a></li>
                <li><a href="#"><u>Corporate Information</u></a></li>
                <li><a href="#"><u>Only on Kinodran</u></a></li>
              </ul>
            </div>
            <div class="column">
              <ul> <br>
                <li><a href="#"><u>Account</u></a></li>
                <li><a href="#"><u>Kinodran Shop</u></a></li>
                <li><a href="#"><u>Terms of Use</u></a></li>
                <li><a href="#"><u>Contact Us</u></a></li>
                <li><a href="#"><u>Do Not Sell or Share My Personal Information</u></a></li>
              </ul>
            </div>
            <div class="column">
              <ul> <br>
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