
$('.btn-comprar').click(function(){
  // retorna primeiro elemento do botao que clicou (closets),  this e a referencia (botao)
  const card = $(this).closest('.itens-promocao')
  const img = card.find('img').attr('src')
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


