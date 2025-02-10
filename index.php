<html>
    <link rel="stylesheet" href="css/style.css">
    
    <form class="barra-pesquisa"  action="/search" method="get">
    <input class="pesquisa" type="text" name="query" placeholder="Digite sua pesquisa">
     <button class="botton-pesquisa" type="submit">Buscar</button>
</form>
    <header>
      <nav class="nav-bar">

        <div class="logo"> 
        <a href="index.php"><img src="img/eu.jpg" alt=""></a>
        </div>


        <div class="nav-list">
    <?php
     include "nav.php";
    ?>
    </div>

         <div class="login-button">
             <button>
            <a href="#">LOGIN</a>
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
            <a href="#">LOGIN</a>
            </button>
    </div>

        </div>

    </header>

    <script src="js/script.js"></script>

</html>