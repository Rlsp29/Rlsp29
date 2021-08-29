<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300display=swap');
  </style>
  <!-- ------------Página inicial ---------------- -->
  <section class="parallax">
    <div class="nav" id="myTopnav">
        <a href="javascript:void(0);" style="font-size:25px;" class="icon_nav" onclick="myFunction()">&#9776;</a>
        <a href="#contactos">Contactos</a>
        <a href="#menu">Menu</a>
        <a href="#especial">Especialidades</a>
        <a href="#sobre">Sobre Nós</a>
        <a href="#chefe">O Chefe</a>
        <a id="a-1" href="#reservar" onclick="document.getElementById('id02').style.display='block'">Registar</a>
        <a id="a-2" href="#reservar" onclick="document.getElementById('id01').style.display='block'">Reservar</a>      
    </div>
    <!-- <div class="barra"></div> -->
    <div class="desire">
      <h1>𝘋𝘦𝘴𝘪𝘳𝘦</h1>
    </div>
    <div class="slogan">
      <h2>We cook your desire</h2>
      <style>
        @import url('https://fonts.googleapis.com/css2?family=WindSong:wght@500&display=swap');
      </style>
    </div>
    <div class="redesSociais">
      <ol>     
        <li> <a class="facebook_icon" href="https://www.facebook.com" target="_blanck"><img alt="icone do Facebook"></a></li>
        <li> <a class="insta_icon" href="https://www.instagram.com" target="_blanck"><img alt="icone do Instagram"></a></li>
        <li> <a class="tweeter_icon" href="https://www.twitter.com" target="_blanck"><img alt="icone do Tweeter"></a></li>
     </ol>
    </div>
  </section>
  <!-- ------------MENU ---------------- -->
  <?php
    # Include script to make a database connection
    include("./php/conect.php");
    $query = "SELECT * FROM menu";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $cat = "";
        $i = 0;
        echo "<section class='menu'>";
        while($row = $result->fetch_assoc()) {
            if ($cat != $row["categoria"]) {
                if ($i != 0) {
                    echo "</div>";
                }
                echo "<div class='icon' id='menu'>", "<h1>";
                $cat = $row["categoria"];
                echo "$cat";
                echo "</h1>","</div>";
                echo "<div class='pratos'>";
            }     
            echo "<h2>",$row["prato"] ," | ", $row["preco"] ," €</h2>";
            echo "<p>",$row["descricao"],"</p>";
            $i++;
        }
        echo "</section>";
    } 
    else {
      echo "No Records!";
    }
?>

  <!-- ------------Especialidades ---------------- -->
  <section class="especial" id="especial">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <ul class="main-nav">
      <li class="item1">
        <div class="bg" onclick="document.getElementById('id03').style.display='block'"></div>
      </li>
      <li class="item2">
        <div class="bg" onclick="document.getElementById('id04').style.display='block'"></div>
      </li>
      <li class="item3">
        <div class="bg" onclick="document.getElementById('id05').style.display='block'"></div>
      </li>
      <li class="item4">
        <div class="bg" onclick="document.getElementById('id06').style.display='block'"></div>
      </li>
      <li class="item5">
        <div class="bg" onclick="document.getElementById('id07').style.display='block'"></div>
      </li>
    </ul>

    <div id="id03" class="modal">
        <span onclick="document.getElementById('id03').style.display='none'" class="close"
          title="Close Modal">&times;</span>
          <img id="img03" class="modal-content animate" src="./imagens/atum.jpg" >
          <div class="tag-nome">Atum braseado com crosta de sementes selvagens, legumes e batata doce</div>
    </div>
    <div id="id04" class="modal">
        <span onclick="document.getElementById('id04').style.display='none'" class="close"
          title="Close Modal">&times;</span>
          <img id="img04" class="modal-content animate" src="./imagens/magret.jpg" >
          <div class="tag-nome">Magret de pato com molho de beterraba e pinhão crocante</div>
    </div>
    <div id="id05" class="modal">
        <span onclick="document.getElementById('id05').style.display='none'" class="close"
          title="Close Modal">&times;</span>
          <img id="img05" class="modal-content animate" src="./imagens/salmao.jpg" >
          <div class="tag-nome">Ceviche de salmão selvagem com molho de abacate, tiras de pepino e tomate cherry</div>
    </div>
    <div id="id06" class="modal">
        <span onclick="document.getElementById('id06').style.display='none'" class="close"
          title="Close Modal">&times;</span>
          <img id="img06" class="modal-content animate" src="./imagens/creme.jpg">
          <div class="tag-nome">Créme brûlée, fios de caramelo e frutos do bosque</div>
    </div>
    <div id="id07" class="modal">
        <span onclick="document.getElementById('id07').style.display='none'" class="close"
          title="Close Modal">&times;</span>
          <img id="img07" class="modal-content animate" src="./imagens/espada.jpg">
          <div class="tag-nome">Espada Preta, legumes e emulsão de maracujá</div>
    </div>
  </section>
  <!-- ------------Sobre Nós ---------------- -->
  <section class="sobre" id="sobre">
    <div class="sobre-text">
      <h1>O restaurante<br></h1>
      <h2>𝘋𝘦𝘴𝘪𝘳𝘦</h2><br>
      <p>O Desire foi criado para pessoas amantes da boa gastronomia e que, além do prazer de saborear, gostam de
        contemplar a beleza natural do cenário envolvente.
        O Desire oferece para além de uma experiência gatronómica única, o prazer de disfrutar de uma localização
        excepcional, junto ao mar, criando um efeito relaxante.
        Um restaurante de charme, carisma, elegância e conhecido pela sua cozinha de alta qualidade, padrões elevados e
        uma equipa dedicada e sabores gourmet numa atmosfera charmosa e intima.
      </p>
    </div>
    <div class="parallax-sobre"></div>
  </section>
  <!-- ------------CHEF---------------- -->
  <section class="chefe" id="chefe">
    <div class="chefe-text">
      <h1>O Chef<br></h1>
      <h2>𝒫𝑒𝒹𝓇𝑜 𝐹𝑜𝓃𝓈𝑒𝒸𝒶</h2><br>
      <p>Desire é o primeiro restaurante do Chef Pedro Fonseca. Mais conhecido como Chef Fonfas, é um dos mais
        conceituados Chefs portugueses e uma das mentes mais ousadas e criativas por detrás do melhor restaurante de
        Portugal. Conquistou em 2019 a sua primeira estrela michelin.</p>
      <br>
      <q>A minha aventura no mundo da gastronomia começou há 15 anos, na minha cidade natal. Nos anos seguintes vivi e
        cozinhei em vários países, onde me fui formando como cozinheiro e como pessoa. Este menu é uma viagem por esse
        percurso de vida, com pratos que fui criando nos locais que mais me marcaram. Espero que através deles possam
        descobrir a minha essência.</q>
    </div>
    <div class="parallax-chefe"></div>
  </section>
  <!-- ------------Reserva / registo / login ---------------- -->
  <section class="reservas" id="reservar">
    <div class="res-reg">
      <button class="rest_reserva" onclick="document.getElementById('id01').style.display='block'">Reserva</button>
    </div>
    
    <!-- Pop Pup -->
    <div class="login">
      <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close"
          title="Close Modal">&times;</span>

        <!-- Conteudo criar reservas -->
        <form class="modal-content animate" action="./php/process_client.php" method="post">
          <div class="imgcontainer">
            <img src="./imagens/cook-cat.jpg" alt="Avatar" class="avatar">
          </div>

          <div class="container">
            <div class="dif">
                Apenas se aceitam reservas com pelo menos um dia de antecedência. <br><br>
              <label for="nr"><b>Número de pessoas</b></label>
              <input type="number" name="nr" required>

              <label for="date"><b>Data</b></label>
              <input id="date" type="date" name="date">

              <label for="espaco"><b>Espaço</b></label>
              <select name="espaco" id="esp">
                <option value="Esplanada">Esplanada</option>
                <option value="Interior">Interior</option>
              </select>

              <label for="refeicao"><b>Refeição</b></label>
              <select  name="refeicao">
                <option value="Almoço">Almoço</option>
                <option value="Jantar">Jantar</option>
              </select>
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" required>

              <label for="pass"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="pass" required>

              <button name="submit">Finalizar Reserva</button>
            </div>
            
            <br><br>
            <a id ="reg_a" onclick="document.getElementById('id02').style.display='block'">Registar</a>
            <label>
            <br><br>
          </div>

          <div class="container" style="background-color:#f1f1f1; border-radius: 20px;">
            <button type="button" onclick="document.getElementById('id01').style.display='none'"
              class="cancelbtn">Cancel</button>
          </div>
        </form>
      </div>
    </div>

    <div class="registar">

      <div id="id02" class="modal">
        <span onclick="document.getElementById('id02').style.display='none'" class="close"
          title="Close Modal">&times;</span>
        <form class="modal-content" action="./php/registo.php" method="post">
          <div class="container">
            <h1>Registar</h1>
            <p>Preencha este formulário para criar uma conta.</p>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" class ="email" placeholder="Insira Email" name="email" required>

            <label for="unome"><b>Nome</b></label>
            <input type="text" placeholder="Insira nome" name="unome" required>

            <label for="uapelido"><b>Apelido</b></label>
            <input type="text" placeholder="Insira Apelido" name="uapelido" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Insira Password" name="psw" required>

            <label for="psw-repeat"><b>Repita Password</b></label>
            <input type="password" placeholder="Insira novamente a Password" name="psw-repeat" required>

            <div class="clearfix">
              <button type="button" onclick="document.getElementById('id02').style.display='none'"
                class="cancelbtn">Cancel</button>
              <button type="submit" class="signupbtn">Registar</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </section>
  <!-- ------------Contactos / Footer ---------------- -->
  <section class="contactos" id="contactos">
    <footer class="footer-distributed">
      <div class="footer-left">
        <h3>Desire</h3>
        <p class="footer-links">
          <a href="#" class="link-1">Desire</a>
          <a href="#menu">Menus</a>
          <a href="#especial">Especialidades</a>
          <a href="#sobre">Sobre Nós</a>
          <a href="#chefe">Chef</a>
        </p>
        <p class="footer-company-name">Desire © 2021</p>
        <div id="left-icons">
          <!-- Mudar para os mesmos que no inicio do site-->
          <a href="https://pt-pt.facebook.com/"><img src="https://img.icons8.com/ios/50/000000/facebook--v1.png" /></a>
          <a href="https://www.instagram.com/"><img
              src="https://img.icons8.com/ios/50/000000/instagram-new--v1.png" /></a>
          <a href="https://twitter.com/?lang=pt"><img src="https://img.icons8.com/ios/50/000000/twitter--v1.png" /></a>
        </div>
      </div>
      <div class="footer-center icons">
        <div>
          <img src="https://img.icons8.com/fluency/48/000000/place-marker.png" />
          <p><span>Avenida Chique</span> Lisboa, Portugal</p>
        </div>
        <div>
          <img id="tlm" src="https://img.icons8.com/officel/40/000000/phone.png" />
          <p>911231238<br>210789987</p>
        </div>
        <div>
          <img src="https://img.icons8.com/color/48/000000/secured-letter--v1.png" />
          <p><a href="mailto:support@company.com">geral@desire.com</a></p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>O Desire</span>
          Conforto, requinte e uma vista deslumbrante
          Em plena Praia do Paraíso, e com vista privilegiada sobre o mar, o Desire é um espaço perfeito para desfrutar
          de uma refeição de excelência e uma experiência desejável.
        </p>
        <a id="contact-admin" href="./html/admin.html" >Admin</a>
      </div>
      
  </section>
  <script src="base.js"></script>
</body>

</html>