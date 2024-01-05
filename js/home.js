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

const acionaModal = () =>{

  const p = document.getElementById('textoP')

  const elementoPromocao = $(this).closest('.itens-promocao');

  const elementoModal = $('.modal-promocao .corpo-modal-promocao');
  

  elementoModal.html(`
  
  `);

  console.log(dados)
  
  console.log(p)

}


// internacional scrpit

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

