<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>IRChelp Network Brasil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rede IRChelp de suporte ao IRC Brasil, com tutoriais e artigos de instalação
                de servidor InspIRCd, services Anope, ZNC, certificados SSL, criação de sites, scripts novos e antigos, comandos IRC Chanserv, Nickserv, Operserv, Memoserv, Hostserv, BotServ">
    <meta name="keywords" content="IRCD, ANOPE, INSPIRCD, LESTENCRYPTER, TUTORIAIS, CHAT, MIRC, IRC,
                IRCHELP, COMANDOS, CHANSERV, NICKSERV, MEMOSERV, HOSTSERV, OPERSERV, BOTSERV, OPER">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="author" content="Erickson Tavares">
    <meta name="google-site-verification" content="leSlx_6KHx4m8MtXC7gjSV9klmVjcDGiegdHVuoEAuk">
    <link rel="icon" href="./images/ico_irchelp.ico">
    <link rel="stylesheet" href="design.css">
    
  </head>
  <body>
    <section id="main">
      <header class="mainHeader">
        <div class="caixa">
          <div id="topo">
            <div class="logo"><a href="home"><img src="./images/logo.jpg"></a></div>
            <div><a rel="github" href="https://github.com/irchelp-brasil/web-1.0/" target="_blank" rel="noopener noreferrer"><img src="./images/git.png"></a></div>
            <div><a rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/deed.pt_BR" target="_blank" rel="noopener noreferrer"><img alt="Licença Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/80x15.png" /></a><br /></div>
          </div>          
        </div>
        <input id="btn-menu" type="checkbox"> <label for="btn-menu">☰</label>
        <nav class="menu">
          <ul>
            <li><a href="home">Início</a></li>
            
            <li><a href="znc">ZNC</a></li>
            <li><a href="webchat">WebChat</a></li>
            <li><a href="redes">Redes</a></li>
            <li><a href="downloads">Downloads</a></li>
            <li><a href="tutoriais">Tutoriais</a></li>
            <li><a href="comandos">Comandos</a></li>
            <li><a href="scripts">Scripts</a></li>
            <li><a href="artigos">Artigos</a></li>
            <li><a href="fotos">Fotos</a></li>
            <li><a href="contato">Contato</a></li>
            <li><a href="news">News</a></li>
            <li><a href="sobre">Sobre</a></li>
          </ul>
        </nav>
      </header>
      <article class="mainBot">
        <div style="margin-top: 0px; background-color: #CCCCCC; height: 5px; border-top: 1px solid white; border-bottom: 1px solid #CCCCCC"></div>
        <div style="margin-top: 12px; background-color: white; height: 6px; border-top: 1px solid black; border-bottom: 1px solid #CCCCCC"></div>
      </article>
      <article class="mainContent">
        <div class="conteudo links">
          <?php                         if( $_GET['go'] != ""){
                            $pag = $_GET['go'];                            if(file_exists("$pag.php")){
                                include"$pag.php"; }                            else{
                                include '404.php'; }}                        else{
                            include "home.php";                            }
                        ?> </div>
      </article>
      <footer class="mainFooter links_b">        
        <div id="rodape" align="center">
          <div id="cx_banners" align="center">
            <div class="banner"><a rel="Lets Encrypt" href="https://letsencrypt.org/pt-br/" target="_blank" rel="noopener noreferrer"><img src="./images/banner_1.png"></a></div>
            <div class="banner"><a rel="Creative Commons" href="https://br.creativecommons.org/" target="_blank" rel="noopener noreferrer"><img src="./images/banner_2.png"></a></div>
            <div class="banner"><a rel="DNSBL Lookup" href="http://dnsbllookup.com/" target="_blank" rel="noopener noreferrer"><img src="./images/banner_3.png"></a></div>
            <!--<div>© 2018-2019 - <a href="contato">Contato</a> - <a href="pu">Política de utilização.</a> Há
              <!-- BEGIN: Powered by Supercounters.com
                <script type="text/javascript" src="//widget.supercounters.com/ssl/online_t.js"></script>
                <script type="text/javascript">sc_online_t(1536286, "Usuário(s) Online", "545649");</script><br>
                <noscript>
              <!-- END: Powered by Supercounters.com
                </noscript>
            </div> -->
          </div>
          <div id="cx_sitemap">
            <div id="cx_itens_01" align="left">
              <div class="cx_itens_02"><a href="znc"
            target="_self">ZNC</a>
                <div class="txt_sitemap"><a href="solicitar"
            target="_self">Solicitar</a></div>
                <div class="txt_sitemap"><a href="znc_console"
            target="_self">Console</a></div>
                <div class="txt_sitemap"><a href="znc"
            target="_self">ZNC's Free</a></div>
              </div>
              <div class="cx_itens_02"><a href="webchat"
            target="_self">WebChat</a>
                <div class="txt_sitemap"><a href="kiwiirc"
            target="_self">KiwiIRC</a></div>
                <div class="txt_sitemap"><a href="mibbit"
            target="_self">Mibbit</a></div>
                <div class="txt_sitemap"><a href="lightirc"
            target="_self">LightIRC</a></div>
              </div>
              <div class="cx_itens_02"><a href="redes"
            target="_self">Redes</a>
                <div class="txt_sitemap"><a href="redes"
            target="_self">Brasileiras</a></div>
                <div class="txt_sitemap"><a href="redes#ancor_extrangeiras"
            target="_self">Estrangeiras</a></div>
                <div class="txt_sitemap"><a href="redes#ancor_outras"
            target="_self">Outras</a></div>
              </div>
              <div class="cx_itens_02"><a href="downloads"
            target="_self">Downloads</a>
                <div class="txt_sitemap"><a href="https://github.com/snoonetIRC/CloudBot"
            target="_blank" rel="noopener noreferrer">Bot cloudbot</a></div>
                <div class="txt_sitemap"><a href="https://github.com/Dissimulate/SubWatch"
            target="_blank" rel="noopener noreferrer">Bot subwatch</a></div>
                <div class="txt_sitemap"><a href="https://znc.in/"
            target="_blank" rel="noopener noreferrer">ZNC</a></div>
              </div>
              <div class="cx_itens_02"><a href="tutoriais"
            target="_self">Tutoriais</a>
                <div class="txt_sitemap"><a href="tutoriais"
            target="_self">IRC</a></div>
                <div class="txt_sitemap"><a href="tutoriais#ancor_video"
            target="_self">Web - vídeo</a></div>
                <div class="txt_sitemap"><a href="tutoriais#ancor_artigos"
            target="_self">Web - texto</a></div>
              </div>
              <div class="cx_itens_02"><a href="comandos"
            target="_self">Comandos</a>
                <div class="txt_sitemap"><a href="http://www.geekshed.net/"
            target="_blank" rel="noopener noreferrer">IRC</a></div>
                <div class="txt_sitemap"><a href="https://cservice.undernet.org/docs/"
            target="_blank" rel="noopener noreferrer">UnderNet</a></div>
                <div class="txt_sitemap"><a href="http://quakenet.blogspot.com/"
            target="_blank" rel="noopener noreferrer">QuakeNet</a></div>
              </div>
              <div class="cx_itens_02"><a href="scripts"
            target="_self">Scripts</a>
                <div class="txt_sitemap"><a href="scripts"
            target="_self">Windowns</a></div>
                <div class="txt_sitemap"><a href="scripts"
            target="_self">Linux</a></div>                
              </div>
              <div class="cx_itens_02"><a href="fotos" target="_self">Fotos</a> 
                <div class="txt_sitemap"><a href="http://www.virtualife.com.br/novo/fotos/usuarios"
            target="_blank" rel="noopener noreferrer">Rede Virtualife</a></div>                
                <div class="txt_sitemap"><a href="https://www.brasvip.org/fotos-usuarios/"
            target="_blank" rel="noopener noreferrer">Rede Brasvip</a></div>
                <div class="txt_sitemap"><a href="https://brazil-undernet.webnode.com/"
            target="_blank" rel="noopener noreferrer">Rede UnderNet</a></div>
              </div>              
            </div>
          </div>
          <div id="barra_rodape">
            <div id="item_barra">© 2018 - 2019 - <a href="contato">Contato</a> - <a href="pu">Política de utilização</a> - Mídias Sociais:&nbsp</div>
            <div class="midias_sociais"><a href="https://web.facebook.com/Irchelp-104988690968423/" target="_blank" rel="noopener noreferrer"><img src="./images/facebook.png"></a></div>
            <div class="midias_sociais"><a href="#"><img src="./images/twitter.png"></a></div>
          </div>
        </div>
      </footer>
    </section>    
  </body>
</html>
