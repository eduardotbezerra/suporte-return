<?
$para = "taxireturnteste@gmail.com";

$assunto = $_POST['duvida'];

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['duvida'];

$corpo = "<html><body>";
$corpo .= "Nome: $nome ";
$corpo .= "Email: $email  Mensagem: $duvida";
$corpo .= "</body></html>";

$email_headers = implode("\n", array("From: $nome", "Reply-To: $email", "Subject: $assunto", "Return-Path: $email", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

if (!empty($nome) && !empty($email) && !empty($mensagem)) {
    mail($para, $assunto, $corpo, $email_headers);
    $msg = "Sua mensagem foi enviada com sucesso.";
    echo "<script>alert('$msg');window.location.assign('taxireturn.com.br');</script>";
} else {
    $msg = "Erro ao enviar a mensagem.";
    echo "<script>alert('$msg');window.location.assign('http://www.seusite.com.br/contato');</script>";
}
?>