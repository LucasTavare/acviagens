<?php
include 'include/header.php';
include 'include/modal-login.php';

$procuras = [
    [
        'image' => 'img/img-internacionais/frio-procura.png'
    ],
    [
        'image' => 'img/img-internacionais/montanha-procura.png'
    ],
    [
        'image' => 'img/img-internacionais/praia-procura.png'
    ]

]
?>
  <h1 style="width: 100vw; text-align: center; margin-top: 5vh;">Cansou de se aventurar no Brasil e decidiu se aventurar para fora?
  </h1>
    <div class="container-internacionais">
    <section>
            <img class="hero"
                src="./img/img-internacionais/viajante.png"/>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <h1 class="title um">Amsterdã</h1>
                        <img src="./img/img-internacionais/amsterda.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <h1 class="title dois">Buenos Ares</h1>
                        <img src="./img/img-internacionais/buenos-aires.jpeg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <h1 class="title tres">Cancun</h1>
                        <img src="./img/img-internacionais/cancun.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <h1 class="title quatro">Dubai</h1>
                        <img src="./img/img-internacionais/dubai.jpg" alt="">
                    </div>
                    <div class=" swiper-slide">
                        <h1 class="title cinco">Madrid</h1>
                        <img src="./img/img-internacionais/madrid.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <h1 class="title seis">Munique</h1>
                        <img src="img/img-internacionais/munique.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <hr style="width: 80vw; margin: 0 auto; margin-top: 8vh;">
        <div class="procura">
          <div class="cabecalho-procura">
            <h2>Nos conte. Oque voce procura?</h2>
            <div class="escolhas">
                <?php foreach ($procuras as $procura) : ?>

              <div><img src="<?php echo $procura['image']?>" alt=""></div>
              
              <?php endforeach ?>
            </div>
          </div>
          
        </div>
    </div>
       

    <script src='https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js' ></script>
    <script src="./js/internacional.js"></script>

<?php
    include 'include/footer.php';
?>