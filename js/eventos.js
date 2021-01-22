/*const menu = document.querySelectorAll('[data-action="menu"]');

menu.forEach(cadaBotao => {
  cadaBotao.addEventListener('click', () => {
    let corDoClicado = cadaBotao.getAttribute('data-color'); 

    menu.forEach(cadaOutro => {
      let corDoOutro = cadaOutro.getAttribute('data-color');
      let cadaConteudo = cadaOutro.getAttribute('data-id');

      cadaOutro.classList.add('btn-outline-'+corDoOutro);
      cadaOutro.classList.remove('btn-'+corDoOutro);

      document.getElementById(cadaConteudo).style.display = 'none';
    });

    cadaBotao.classList.add('btn-'+corDoClicado);
    cadaBotao.classList.remove('btn-outline-'+corDoClicado);

    let conteudo = cadaBotao.getAttribute('data-id');
    document.getElementById(conteudo).style.display = 'block';

  }); 
});*/


/*const cepInput = document.getElementById('pc_cep');
cepInput.addEventListener('blur', () => {
  fetch(`https://viacep.com.br/ws/${cepInput.value}/json`)
  .then(resposta => resposta.json())
  .then(resposta => {
    document.getElementById('pc_endereco').value = resposta.logradouro;
    document.getElementById('pc_bairro').value = resposta.bairro;
    document.getElementById('cidade').value = resposta.localidade;
    document.getElementById('uf').value = resposta.uf;

    document.getElementById('num').focus();
  });
});

function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)

  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }

}*/
