<?php 
$a = 0;
include 'contador.php';
if (isset($_COOKIE['counte'])) {
  $counte = $_COOKIE['counte'] + 1;
}else{
$counte = 1;
$a++; 
}
setcookie('counte', "$counte", time()+3700);
$abre =@fopen("contador.php","w");
 $ss ='<?php $a='.$a.'; ?>';
 $escreve =fwrite($abre, $ss);
?>
<html lang="PT-BR"><head><meta charset="UTF-8"><meta content="width=device-width,initial-scale=1,shrink-to-fit=no"name="viewport"><title>W-Net - Inicio</title><link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700"rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i"rel="stylesheet"><link href="css/bootstrap.css"rel="stylesheet"><link href="css/fontawesome-all.css"rel="stylesheet"><link href="css/swiper.css"rel="stylesheet"><link href="css/magnific-popup.css"rel="stylesheet"><link href="css/styles.css"rel="stylesheet"><link href="images/favic.ico"rel="icon"><script>function formatar(s,n){var r=n.value.length,t=s.substring(0,1),u=s.substring(r);u.substring(0,1)!=t&&(n.value+=u.substring(0,1))}</script></head><body data-spy="scroll"data-target=".fixed-top"><script src="http://s.codigofonte.com.br/wp-content/js/codigofonte-bar.js"></script><div class="spinner-wrapper"><div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div><nav class="fixed-top navbar navbar-custom navbar-dark navbar-expand-md"><a href="index.php"class="logo-image navbar-brand"><img src="images/logo.png"alt="alternative"></a><button class="navbar-toggler"type="button"aria-controls="navbarsExampleDefault"aria-expanded="false"aria-label="Toggle navigation"data-target="#navbarsExampleDefault"data-toggle="collapse"><span class="fas navbar-toggler-awesome fa-bars"></span> <span class="fas navbar-toggler-awesome fa-times"></span></button><div class="collapse navbar-collapse"id="navbarsExampleDefault"><ul class="ml-auto navbar-nav"><li class="nav-item"><a href="#header"class="page-scroll nav-link">INICIO <span class="sr-only">(current)</span></a></li><li class="nav-item"><a href="#features"class="page-scroll nav-link">2ª VIA DE BOLETO</a></li><li class="nav-item"><a href="#preview"class="page-scroll nav-link">CADASTRO</a></li><li class="nav-item"><a href="#planos"class="page-scroll nav-link">PLANOS</a></li><li class="nav-item dropdown"><a href="#contact"class="page-scroll nav-link dropdown-toggle"aria-expanded="false"aria-haspopup="true"id="navbarDropdown"role="button">CONTATO</a><div class="dropdown-menu"aria-labelledby="navbarDropdown"><a href="presuporte.php"class="dropdown-item"><span class="item-text">SUPORTE</span></a><div class="dropdown-items-divide-hr"></div><a href="precancelamento.php"class="dropdown-item"><span class="item-text">CANCELAMENTO</span></a></div></li></ul><span class="nav-item social-icons"><span class="fa-stack"><a href="https://www.facebook.com/wnetcarlito"><i class="fas fa-circle fa-stack-2x"></i> <i class="fa-stack-1x fab fa-facebook-f"></i> </a></span><span class="fa-stack"><a href="https://www.instagram.com/wnetcarlito/"><i class="fas fa-circle fa-stack-2x"></i> <i class="fa-stack-1x fab fa-instagram"></i></a></span></span></div></nav><header class="header"id="header"><div class="header-content"><div class="container"><div class="row"><div class="col-lg-6"><div class="text-container"><h1>W-NET CARLITO <span id="js-rotating">QUALIDADE, VELOCIDADE</span></h1><p class="p-large">Internet em fibra óptica</p><p class="p-large">A fibra óptica é uma tecnologia associada com alta performance para conexões de Internet. A fibra óptica oferece o que há de mais avançado em termos de conectividade para o consumidor.</p></div></div><div class="col-lg-6"><div class="image-container"><img src="images/girikita.png"class="img-fluid"></div></div></div></div></div></header><div class="tabs"id="features"><div class="container"><div class="row"><div class="col-lg-12"><h2>2ª VIA DE BOLETO</h2><div class="p-large p-heading">Selecione o banco desejado para atualizar o seu boleto, Após clicar no banco desejado, você será redirecionado para o site do banco.</div><div class="p-large p-heading"><a href="https://www63.bb.com.br//portalbb//boleto//boletos//hc21e,802,3322,10343,2,0,1.bbx"class="page-scroll btn-solid-lg"target="_block">BANCO DO BRASIL</a><br><br><a href="https://www.santander.com.br/2-via-boleto?estado=comeco"class="page-scroll btn-solid-lg"target="_block">BANCO SANTANDER</a></div></div></div></div></div><div class="basic-1"id="preview"><div class="container"><div class="row"><div class="col-lg-12"><h2>PRÉ-CADASTRO</h2><div class="p-large p-heading">Deseja se tornar um cliente W-Net? Realize o pré cadastro e informe a nossa central de atendimento.<br><br><a href="cadastro.php"class="page-scroll btn-solid-lg">CLIQUE AQUI</a></div></div></div></div></div><div class="slider-2"id="planos"><div class="container"><div class="row"><div class="col-lg-12"><h2 style="text-align:center">PLANOS</h2><br><div class="p-large p-heading">A W-Net é uma provedora de internet com um portfólio amplo de produtos e serviços, é uma empresa focada em oferecer internet de qualidade aos seus clientes! Confira abaixo o valores das mensalidades:</div><div class="slider-container"><div class="image-slider swiper-container"><div class="swiper-wrapper"><div class="swiper-slide"><a href="cadastro.php"><img src="images/30mb.png"alt="alternative"class="img-fluid"></a></div><div class="swiper-slide"><a href="cadastro.php"><img src="images/40mb.png"alt="alternative"class="img-fluid"></a></div><div class="swiper-slide"><a href="cadastro.php"><img src="images/foto1.png"alt="alternative"class="img-fluid"></a></div><div class="swiper-slide"><a href="cadastro.php"><img src="images/50mb.png"alt="alternative"class="img-fluid"></a></div><div class="swiper-slide"><a href="cadastro.php"><img src="images/100mb.png"alt="alternative"class="img-fluid"></a></div><div class="swiper-slide"><a href="cadastro.php"><img src="images/foto2.png"alt="alternative"class="img-fluid"></a></div><div class="swiper-slide"><a href="cadastro.php"><img src="images/200mb.png"alt="alternative"class="img-fluid"></a></div></div><div class="swiper-button-next"></div><div class="swiper-button-prev"></div></div></div></div></div></div></div><div class="counter"><div class="container"><div class="row"><div class="col-lg-12"><div id="counter"><div class="cell"><div class="counter-value number-count"data-count="1027">1</div><p class="counter-info">Clientes</p></div><div class="cell"><div class="counter-value number-count"data-count="518">1</div><p class="counter-info">Suportes</p></div><div class="cell"><div class="counter-value number-count"data-count="369">1</div><p class="counter-info">Atendimentos</p></div><div class="cell"><div class="counter-value number-count"><?php 
echo $a;
?> 
</div><p class="counter-info">Visitas no Site</p></div></div></div></div></div></div><div class="form"id="contact"><div class="container"><div class="row"><div class="col-lg-12"><h2>Dúvidas? Entre em contato</h2><ul class="li-space-lg list-unstyled"><li><i class="fas fa-map-marker-alt"></i>Rua Álvaro de Alencar - 185, Carlito Pamplona, Fortaleza</li><li><i class="fas fa-phone"></i><a href="tel:+558532361777"class="blue">+55 (85) 3236-1777</a></li><li><i class="fas fa-envelope"></i><a href="mailto:contato@wnetcarlito.com.br"class="blue">contato@wnetcarlito.com.br</a></li></ul></div></div><div class="row"><div class="col-lg-6 offset-lg-3"><form action="contato.php"method="POST"><div class="form-group"><input class="form-control-input"id="c_nome"name="c_nome"required> <label class="label-control"for="c_nome">Nome</label><div class="help-block with-errors"></div></div><div class="form-group"><input class="form-control-input"id="c_telefone"name="c_telefone"required maxlength="14"onkeypress='formatar("##-#.####-####",this)'> <label class="label-control"for="c_telefone"name="c_telefone">Telefone</label><div class="help-block with-errors"></div></div><div class="form-group"><textarea class="form-control-textarea"id="c_mensagem"name="c_mensagem"required></textarea> <label class="label-control"for="c_mensagem"name="c_mensagem">Sua mensagem</label><div class="help-block with-errors"></div></div><div class="form-group"><button class="form-control-submit-button"type="submit">ENTRAR EM CONTATO</button></div><div class="form-message"><div class="h3 hidden text-center"id="cmsgSubmit"></div></div></form></div></div></div></div><div class="footer"><a href="https://api.whatsapp.com/send?phone=5585985370023"target="_block"><img src="https://i.imgur.com/ryESuZ5.png"data-selector="img"style="height:70px;position:fixed;bottom:70px;right:10px;z-index:99999"></a><div class="container"><div class="row"><div class="col-md-4"><div class="footer-col"><h4>Objetivo</h4><p>Nosso objetivo é “trazer internet de qualidade, com velocidade, e um preço acessível”, a W-Net vêm deixando sua marca em todos os seus serviços prestados.</p></div></div><div class="col-md-4"><div class="footer-col middle"><h4>Links Importantes</h4><ul class="li-space-lg list-unstyled"><li class="media"><i class="fas fa-square"></i><div class="media-body">Problemas com atendimento? <a href="https://api.whatsapp.com/send?phone=5585985370023"class="turquoise">Reclame aqui!</a></div></li><li class="media"><i class="fas fa-square"></i><div class="media-body">Todos os direitos reservados W-Net Telecomunicações.</div></li></ul></div></div><div class="col-md-4"><div class="footer-col last"><h4>Midias Sociais</h4><span class="fa-stack"><a href="https://www.facebook.com/wnetcarlito"><i class="fas fa-circle fa-stack-2x"></i> <i class="fa-stack-1x fab fa-facebook-f"></i> </a></span><span class="fa-stack"><a href="https://twitter.com/wnetcarlito"><i class="fas fa-circle fa-stack-2x"></i> <i class="fa-stack-1x fab fa-twitter"></i> </a></span><span class="fa-stack"><a href="https://www.instagram.com/wnetcarlito/"><i class="fas fa-circle fa-stack-2x"></i> <i class="fa-stack-1x fab fa-instagram"></i></a></span></div></div></div></div></div><div class="copyright"><div class="container"><div class="row"><div class="col-lg-12"><p class="p-small">Copyright © W-Net Carlito - 2021 by <a href="https://www.althdevops.com.br"target="_block">Alth Devops</a></p></div></div></div></div><script src="js/jquery.min.js"></script><script src="js/popper.min.js"></script><script src="js/bootstrap.min.js"></script><script src="js/jquery.easing.min.js"></script><script src="js/swiper.min.js"></script><script src="js/jquery.magnific-popup.js"></script><script src="js/morphext.min.js"></script><script src="js/validator.min.js"></script><script src="js/scripts.js"></script></body></html>