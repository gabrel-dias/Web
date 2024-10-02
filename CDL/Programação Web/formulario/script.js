document.addEventListener("DOMContentLoaded", function () {
  var botaoEnviar = document.getElementById("botaoEnviar");
  var botaoLimpar = document.getElementById("botaoLimpar");
  var formulario = document.getElementById("meuFormulario");

  // Exibe alerta ao enviar
  botaoEnviar.addEventListener("click", function () {
    alert("Formulário enviado!");
  });

  // Limpa todos os campos do formulário
  botaoLimpar.addEventListener("click", function () {
    formulario.reset(); // Método para limpar o formulário
  });
});
