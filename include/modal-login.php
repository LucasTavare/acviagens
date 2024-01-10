
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">

        <div class="corpo-modal">
          <div class="foto-login">
            <img src="img/img-header/fundo.modal.jpg" alt="">
          </div>
          <div class="login">
            <div style="display: grid; justify-content: end;">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="centralizar">
              <img src="img/img-header/logo.jpg" alt="" style="width: 150px; height: 150px;">
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
              <img src="img/img-header/logo.jpg" alt="" style="width: 150px; height: 150px;">
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

