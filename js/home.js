const cadastrarUser = () => {
    let dados = new FormData($('#cadastrarUser')[0])
    const result = fetch('backend/cadastrar_usuario.php', {
        method: 'POST',
        body: dados
      })
      .then((response => response.json()))
    .then((result) => {
      if(result.retorno == 'erro'){
        Swal.fire({
        icon: result.retorno == 'erro' ? 'error' : 'success',
        title: 'Atenção',
        text: result.mensagem,
        showConfiirmButton: false
      })
      }else{
        Swal.fire({
          title: 'Sucesso!',
          text: result.mensagem,
          icon: 'success',
          confirmButtonColor: '#078BB7',
          confirmButtonText: 'OK!'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.replace("http://localhost/acviagens/index.php")
          }
        })
    
        
      }
    })
}

const acionaModal = (event) =>{
  console.log(this)

  const card = $(this).closest('.itens-promocao')
  const img = ''
  const localPartida = card.find('.ponto-partida').text()
  const localChegada = card.find('.ponto-chegada').text()
  const valor = ''

  console.log(localChegada)
  const modal = $('.corpo-modal-promocao')

  modal.find('.chegada').html(localChegada)

  console.log(modal.find('.chegada'))



}


// internacional scrpit

$('.btn-comprar').click(function(){
  // retorna primeiro elemento do botao que clicou (closets),  this e a referencia (botao)
  const card = $(this).closest('.itens-promocao')
  const img = card.find('img').attr('src')
  console.log(img)
  const localPartida = card.find('.ponto-partida').text()
  const localChegada = card.find('.ponto-chegada').text()
  const valor = ''

  console.log(localChegada)
  const modal = $('.corpo-modal-promocao')

  modal.find('.chegada').html(localChegada)
  modal.find('.partida').html(localPartida)
  modal.find('img').attr('src', img)

  console.log(modal.find('.chegada'))


})



var swiper = new Swiper(".swiper", {
  grabCursor: true, 
  speed: 500, 
  effect: "slide",
  Loop: true,
  mousewheel: {
  invert: false, sensitivity: 1,
  },
});
  swiper.enable();

