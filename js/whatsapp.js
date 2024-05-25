function enviarZap() {
  let telefone = "+5515981285114";
  let nome = document.getElementById("name").value;
  let assunto = document.getElementById("subject").value;
  let mensagem = document.getElementById("message").value;

  var url =
    "https://wa.me/" +
    telefone +
    "?text=Olá, meu nome é " +
    nome +
    ". Gostaria de falar sobre " +
    assunto +
    ". " +
    mensagem;

  window.open(url, "_blank").focus();
}
