<?php
include 'header.php';

$promotions = [
  // array multi valorado chave - valor
  // da linha 7 a 12 e um objeto 
  [
    'image' => 'img/lisboa.jpg',
    'pontoChegada' => 'Lisboa',
    'pontoPartida' => 'São Paulo',
    'valor' => 'R$ 249,90'
  ],
  [
    'image' => 'img/img-internacionais/dubai.jpg',
    'pontoChegada' => 'Dubai',
    'pontoPartida' => 'São Paulo',
    'valor' => 'R$ 249,90'
  ],
  [
    'image' => 'img/londres.jpg',
    'pontoChegada' => 'Londres',
    'pontoPartida' => 'São Paulo',
    'valor' => 'R$ 249,90'
  ],
  [
    'image' => 'img/sidney.jpg',
    'pontoChegada' => 'Sidney',
    'pontoPartida' => 'São Paulo',
    'valor' => 'R$ 249,90'
  ],
  [
    'image' => 'img/newyork.jpg',
    'pontoChegada' => 'New York',
    'pontoPartida' => 'São Paulo',
    'valor' => 'R$ 249,90'
  ],
  [
    'image' => 'img/paris.jpg',
    'pontoChegada' => 'Paris',
    'pontoPartida' => 'São Paulo',
    'valor' => 'R$ 249,90'
  ]
];

$inverno = [
  [
    'image' => 'img/londres.jpg',
    'local' => 'Londres',
    'valor' => 'R$ 249,90'
  ],
  [
    'image' => 'img/newyork.jpg',
    'local' => 'New York',
    'valor' => 'R$ 249,90'
  ],
  [
    'image' => 'img/paris.jpg',
    'local' => 'Paris',
    'valor' => 'R$ 249,90'
  ]
]
?>

<div id="abahome-layout" class="container-meu">
  <div style="display: grid; justify-content: start;"></div>
  <h3 class="subtitulo">Conheça agora seus planos de viagens</h3>

  <div class="planos-viagens">

    <div class="planos-blocos">
      <div class="img-bloco-plano">
        <i class="fa-solid fa-person fa-6x" style="color: white;"></i>
      </div>
      <div class="blocos-textos">
        <h3>Plano single</h3>
        <ul>
          <li>Direito a uma bagagem até 10kg</li>
          <li>Poltrona</li>
          <li>Aperitivos</li>
          <li>Seguro viagem</li>
        </ul>
        <div class="blocos-botao">
          <button>Detalhes</button>
        </div>
      </div>


    </div>
    <div class="planos-blocos">
      <div class="img-bloco-plano">
        <i class="fa-solid fa-person-cane fa-6x" style="color: white;"></i>
      </div>
      <div class="blocos-textos">
        <h3> Plano preferencial </h3>
        <ul>
          <li>Direito a uma bagagem até 10kg</li>
          <li>Poltrona</li>
          <li>Aperitivos</li>
          <li>Seguro viagem</li>
        </ul>
        <div class="blocos-botao">
          <button>Detalhes</button>
        </div>
      </div>


    </div>
    <div class="planos-blocos">
      <div class="img-bloco-plano">
        <i class="fa-solid fa-people-group fa-6x" style="color: white;"></i>
      </div>
      <div class="blocos-textos">
        <h3>Plano familia</h3>
        <ul>
          <li>Direito a uma bagagem até 10kg</li>
          <li>Poltrona</li>
          <li>Aperitivos</li>
          <li>Seguro viagem</li>
        </ul>
        <div class="blocos-botao">
          <button>Detalhes</button>
        </div>
      </div>


    </div>

  </div>
  <hr style=" width: 80vw; margin: 5vh auto;">
  <div class="h3-indica">
    <h3>Paises mais visitados</h3>
  </div>
  <div class="indicacoes">

    <div class="indicacoes2">

      <input type="radio" name="slider" class="d-none input-slide" id="s1" checked>
      <input type="radio" name="slider" class="d-none input-slide" id="s2">
      <input type="radio" name="slider" class="d-none input-slide" id="s3">
      <input type="radio" name="slider" class="d-none input-slide" id="s4">
      <input type="radio" name="slider" class="d-none input-slide" id="s5">

      <div class="cards">
        <label for="s1" id="slide1">
          <div class="card">
            <div class="image">
              <img src="img/londres.jpg" alt="">

            </div>
            <div class="infos">
              <span class="name">Londres - Inglaterra</span>
              <span class="lorem">Lorem ipsum dolor sit amet, sit amet adipiscing elit. Aenean vel ansd . Nullam
                lorem. Nulla eu
                sodales</span>
            </div>
            <a href="/contact" class="btn-contact">Detalhes</a>

          </div>
        </label>

        <label for="s2" id="slide2">
          <div class="card">
            <div class="image">
              <img src="img/lisboa.jpg" alt="">

            </div>
            <div class="infos">
              <span class="name">Lisboa - Portugal</span>
              <span class="lorem">Lorem ipsum dolor sit, adipiscing elit. Aenean vel sit ansd . Nullam
                lorem. Nulla eu
                sodales karma stellus</span>
            </div>
            <a href="/contact" class="btn-contact">Detalhes</a>

          </div>
        </label>

        <label for="s3" id="slide3">
          <div class="card">
            <div class="image">
              <img src="img/newyork.jpg" alt="">

            </div>
            <div class="infos">
              <span class="name">New York - Eua</span>
              <span class="lorem">Lorem ipsum dolor, sit amet let kar adipiscing. Aenean vel velit sit ansd . Nullam
                lorem. Nulla karma stellus</span>
            </div>
            <a href="/contact" class="btn-contact">Detalhes</a>

          </div>
        </label>

        <label for="s4" id="slide4">
          <div class="card">
            <div class="image">
              <img src="img/sidney.jpg" alt="">
            </div>
            <div class="infos">
              <span class="name">Sidney - Australia</span>
              <span class="lorem">Lorem ipsum dolor sit, sit amet elit. Aenean sit amet sit amet vel velit sit ansd.
                Nulla eu
                sodales stellus</span>
            </div>
            <a href="/contact" class="btn-contact">Detalhes</a>

          </div>
        </label>

        <label for="s5" id="slide5">
          <div class="card">
            <div class="image">
              <img src="img/paris.jpg" alt="">

            </div>
            <div class="infos">
              <span class="name">Paris - França</span>
              <span class="lorem">Lorem ipsum sit amet, sit amet elit. Aenean vel velit ansd . Nullam
                lorem. Nulla eu
                sodales stellus</span>
            </div>
            <a href="/contact" class="btn-contact">Detalhes</a>

          </div>
        </label>
      </div>
    </div>


  </div>



  <hr style=" width: 80vw; margin: 5vh auto;">
  <div style="display: grid; justify-content: end;">
    <h3 class="h3-promocao">Pacotes Promocionais</h3>
  </div>


  <div class="pacotes-promocionais">
    <!-- array multi valorado chave - valor -->
    <?php foreach ($promotions as $promotion) : ?>
      <div class="itens-promocao">
        <img src="<?php echo $promotion['image'] ?>" alt="">
        <div>
          <p style="line-height: 10  pt; font-size: 0.96em;">Passagem aerea:<br><i class="fa-solid fa-plane"></i> -
            <span class="ponto-chegada"><?php echo $promotion['pontoChegada'] ?></span> <br> Saindo de: <br> <span class="ponto-partida"><?php echo $promotion['pontoPartida'] ?></span>
          </p>
          <p>
            <c style="border-bottom: 1px solid black; display: flex;"><?php echo $promotion['valor'] ?></c>Ida e Volta
          </p>
          <button class="btn-promocao btn-comprar" data-bs-toggle="modal" data-bs-target="#staticBackdropPromocao">Comprar</button>
        </div>
      </div>
    <?php endforeach ?>


  </div>

  <hr style=" width: 80vw; margin: 5vh auto;">
  <div style="display: grid; justify-content: start;">
    <h3 class="h3-pp">Proxima Parada</h3>
  </div>

  <div class="proxima-parada">

    <div class="continentes">
      <i class="fa-solid fa-earth-americas americas fa-10x"></i>
      <p>America</p>
    </div>
    <div class="continentes"><i class="fa-solid fa-earth-europe fa-10x europe"></i>
      <p>Europa</p>
    </div>
    <div class="continentes"><i class="fa-solid fa-earth-africa fa-10x africa"></i>
      <p>Africa</p>
    </div>
    <div class="continentes"><i class="fa-solid fa-earth-asia fa-10x asia"></i>
      <p>Asia</p>
    </div>
    <div class="continentes"><i class="fa-solid fa-earth-oceania fa-10x oceania"></i>
      <p>Oceania</p>
    </div>
  </div>

  <hr style=" width: 90vw; margin: 5vh auto;">
  <div style="display: grid; justify-content: end;">
    <h3 class="h3-dicas">Viagens de inverno</h3>
  </div>

  <div class="curiosidades">
    <div class="texto">
      <h2>QUER SABER PARA ONDE VIAJAR ESSE INVERNO?<br>SE LIGUE NESTAS NOVIDADES!</h2>
      <i class="fa-solid fa-snowflake fa-5x floco"></i>
    </div>

    
    <div class="lugares-recomendados">
    <?php foreach ($inverno as $viagem) : ?>
      <div class="card-recomendados">
        <img src="<?php echo $viagem['image']?>" alt="">
        <p><span class="local"><?php echo $viagem['local']?></span> <br>

          <span><?php echo $viagem['valor']?></span>

          <br>
          <br>
          <span>Lorem ipsum dolor, sit <br>
            amet consectetur adipisicing<br>
            elit.</span>

        </p>
        <div style="display: grid; justify-items: center;   "><button class="btn-promocao">Comprar</button></div>
      </div>
      <?php endforeach ?>
    </div>
      
    </div>
  </div>
  <footer>
    <div>
      <ul>
        <li>Contatos</li>
        <li><a href="">(19) 99999-9999</a></li>
        <li><a href="">acviagens@gmail.com</a></li>
        <li><a href="">@AcViagens</a></li>
      </ul>
    </div>
    <div>
      <ul>
        <li>Duvidas Frequentes</li>
        <li><a href="">Pagamentos</a></li>
        <li><a href="">Entregas</a></li>
        <li><a href="">Planos</a></li>
      </ul>
    </div>
    <div>
      <ul class="redes-sociais">
        <li><a href="" class="redes-sociais-a"><i class="fa-brands fa-whatsapp"></i></a></li>
        <li><a href="" class="redes-sociais-a"><i class="fa-brands fa-twitter"></i></a></li>
        <li><a href="" class="redes-sociais-a"><i class="fa-brands fa-instagram"></i></a></li>
      </ul>
    </div>
  </footer>

  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">

        <div class="corpo-modal">
          <div class="foto-login">
            <img src="img/fundo.modal.jpg" alt="">
          </div>
          <div class="login">
            <div style="display: grid; justify-content: end;">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="centralizar">
              <img src="img/logo.jpg" alt="" style="width: 150px; height: 150px;">
            </div>
            <form action="">

              <div>
                <label for="Login" class="label-modal">Login:</label>
                <input type="text" name="login" id="login">
              </div>
              <div>
                <label for="senha" class="label-modal">Senha:</label>
                <input type="password" name="senha" id="senha">
              </div>

              <div class="centralizar" style="margin-top: 5vh;">
                <button class="btn-logar">Entrar</button>
                <a href="" data-bs-target="#staticBackdrop2" data-bs-toggle="modal" style="font-size: 0.8em; text-align: center; margin-top: 2vh;">Não tem uma conta? <br>
                  cadastra-se!</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="modal modal-cadastro fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">

        <div class="corpo-modal-cadastro">



          <div class="cadastro">
            <div style="display: grid; justify-content: start;">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="centralizar">
              <img src="img/logo.jpg" alt="" style="width: 150px; height: 150px;">
            </div>
            <form id="cadastraUser">
              <div>
                <label for="Login" class="label-modal">Login:</label>
                <input type="text" name="login" id="login">
              </div>
              <div>
                <label for="senha" class="label-modal">Senha:</label>
                <input type="password" name="senha" id="senha">
              </div>
              <div>
                <label for="senha" class="label-modal">Confirmar:</label>
                <input type="password" name="confirma" id="confirma">
              </div>

              <div class="centralizar" style="margin-top: 5vh;">
                <button class="btn-logar" onclick="cadastraUser()">Cadastrar</button>
                <a href="" data-bs-target="#staticBackdrop" data-bs-toggle="modal" style="font-size: 0.8em; text-align: center; margin-top: 3px;">Tem uma conta? <br>
                  Faça login</a>
              </div>
            </form>
          </div>
          <div class="foto-cadastro">

          </div>





        </div>

      </div>

    </div>
  </div>


  <!--                            modal promoções                        -->


  <div class="modal modal-promocao fade" id="staticBackdropPromocao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="corpo-modal-promocao">
          <img src="" alt="">
          <p class="chegada"></p>
          <p class="partida"></p>
          <p class="valor"></p>
        </div>
      </div>
    </div>
  </div>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://kit.fontawesome.com/58751a54d8.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <script src="js/home.js"> </script>
  </body>

  </html>