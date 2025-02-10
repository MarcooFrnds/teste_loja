<html>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/destaque.css">
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

    <body>
    <main>
        <section class="destaques">
            <div class="produto">
                <img src="camisas/imgdesq10.png" alt="Camise de time">
                <h2>Camisa</h2>
                <p>Camisa de time</p>
                <span class="preco">R$ 80,00</span>
            </div>
            <div class="produto">
                <img src="camisas//desq1.png" alt="Camisa de time">
                <h2>Camisa da Inglaterra</h2>
                <p>Camisa de time</p>
                <span class="preco">R$ 80,00</span>
            </div>
            <div class="produto">
                <img src="camisas//imgdesq5.png" alt="Camisa">
                <h2>Camisa da Argentina</h2>
                <p>Camisa de time</p>
                <span class="preco">R$ 80,00</span>
            </div>
            <div class="produto">
                <img src="camisas//imgdesq6.png" alt="Camisa">
                <h2>Camisa do Barcelona</h2>
                <p>Camisa de time</p>
                <span class="preco">R$ 80,00</span>
            </div>
            <div class="produto">
                <img src="camisas//imgdesq7.png" alt="Camisa">
                <h2>Camisa do Manchester city</h2>
                <p>Camisa de time</p>
                <span class="preco">R$ 80,00</span>
            </div>
            <div class="produto">
                <img src="camisas//imgdesq8.png" alt="Camisa">
                <h2>Camisa do Brasil</h2>
                <p>Camisa de time</p>
                <span class="preco">R$ 80,00</span>
            </div>
            <div class="produto">
                <img src="camisas//imgdesq9.png" alt="Camisa">
                <h2>Camisa do Barcelona</h2>
                <p>Camisa de time</p>
                <span class="preco">R$ 80,00</span>
            </div>
            <div class="produto">
                <img src="camisas//imgdesq13.png" alt="Camisa">
                <h2>Camisa do Estados Unidos</h2>
                <p>Camisa de time</p>
                <span class="preco">R$ 80,00</span>
            </div>
            <div class="produto">
                <img src="camisas//imgdesq11.png" alt="Camisa">
                <h2>Camisa do Aston Villa</h2>
                <p>Camisa de time</p>
                <span class="preco">R$ 80,00</span>
            </div>
        </section>
    </main>
    </body>
    
</html>