<html>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <header>
      <nav class="nav-bar">

      <div class="logo"> 
        <a href="index.php"><img src="img/logo.jpg" alt=""></a>
        </div>

        <div class="nav-list">
    <?php
     include "nav.php";
    ?>
    </div>
        
      
        <div class="login-button">
             <button>
            <a href="login.php">LOGIN</a>
            </button>
        </div>
         
    </div>

    <div class="mobile-menu-icon">
        <button onclick="menuShow()">
            <img class="icon" src="img/menu_white_36dp.svg" alt="">
        </button>
    </div>

        </nav>

        <div class="mobile-menu">
    <?php
        include "nav.php";
    ?>

    <div class="login-button">
             <button>
            <a href="login.php">LOGIN</a>
            </button>
    </div>

        </div>
    </header>
    <script src="js/script.js"></script>


    <div class="container">
        <div class="form-box">
            <h2 class="title">Envie sua mensagem!</h2>

            <form action="" method="get">
                
            <input type="text" name="name" placeholder="Seu nome">
            <input type="email" name="email" placeholder="Seu E-mail">
            <input type="text" name="subject" placeholder="Assunto">
 
            <textarea name="message" placeholder="Digite sua mensagem"></textarea>

            <button type="submit">Enviar</button>

            </form>
        </div>
    </div>
    
</html>
