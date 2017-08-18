<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
        <title>Montador de Móveis VH</title>
        <style>
            body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
            body {font-size:16px;}
            .w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
            .w3-half img:hover{opacity:1}
        </style>
    </head>
    <body>
        <!-- Sidebar/menu -->
        <nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
            <div class="w3-container">
                <img src="images/logotipo-vh.png" class="w3-image" alt="Logotipo Montador de Móveis VH"/>                

            </div>
            <div class="w3-bar-block">
                <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
                <a href="#sobre" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Sobre</a>
                <a href="#montagens" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Montagens</a>
                <a href="#contato" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contato</a>
            </div>
        </nav>
        <!-- Top menu on small screens -->
        <header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
            <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
            <span>VH - Montador de Móveis</span>
        </header>
        <!-- Overlay effect when opening sidebar on small screens -->
        <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

        <!-- !PAGE CONTENT! -->
        <div class="w3-main" style="margin-left:340px;margin-right:40px">
            <div class="w3-content w3-section" id="home">
                <h1 class="w3-jumbo"><b>Seja bem-vindo!</b></h1>
                <small>Whatsapp> (xx) 91234-5678</small>
                <h2 class="w3-xxxlarge w3-text-red"><b>Móveis Montados.</b></h2>
                <hr style="width:50px;border:5px solid red" class="w3-round">

                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="images/closet-montado.jpg" style="width:100%;height:420px;">
                        <div class="text">Closets</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="images/escritorio-montado.jpg" style="width:100%;height:420px;">
                        <div class="text">Escritórios</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="images/cozinha-montada.jpg" style="width:100%;height:420px;">
                        <div class="text">Cozinhas</div>
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
            </div>
            <div class="w3-content w3-section" id="sobre">
                <h2 class="w3-xxxlarge w3-text-red"><b>Sobre.</b></h2>
                <hr style="width:50px;border:5px solid red" class="w3-round">
                <p>Montador de móveis VH, conta com profissional capacitado com 
                    8 anos de atuação no mercado, e com experiência em lojas de
                    grande expressão.</p>
                <p>Prestamos serviços de qualidade, com honestidade e pontualidade.</p>
                <p>Atendemos em toda capital, zona Leste, zona Oeste, zona Norte, zona Sul, fazemos montagem, desmontagem, reparos.</p>
                <p>Trabalhamos com planejados, modulados, montagem de escritórios, e móveis para sua casa em geral.</p>
                <p>Com garantia de 90 dias de serviço.</p>
                <h4 class="w3-xxxlarge w3-text-red"><b>Horário de Atendimento.</b></h4>
                <p>Segunda a sábado das 8hs às 20hs.</p>
                <p>Trabalhamos com agendamento de horário afim de facilitar para o cliente.</p>
            </div>
            <div class="w3-content w3-section" id="montagens">
                <h2 class="w3-xxxlarge w3-text-red"><b>Montagens.</b></h2>
                <hr style="width:50px;border:5px solid red" class="w3-round">
                <div class="w3-row-padding">
                    <div class="w3-container w3-third">
                        <img src="images/comoda.jpg" style="width:100%" onclick="onClick(this)">
                    </div>
                    <div class="w3-container w3-third">
                        <img src="images/beliches.jpg" style="width:100%" onclick="onClick(this)">
                    </div>
                    <div class="w3-container w3-third">
                        <img src="images/camas.jpg" style="width:100%" onclick="onClick(this)">
                    </div>
                </div>
                <br>
                <div class="w3-row-padding">
                    <div class="w3-container w3-third">
                        <img src="images/mesa.jpg" style="width:100%" onclick="onClick(this)">
                    </div>
                    <div class="w3-container w3-third">
                        <img src="images/painel-sala.jpg" style="width:100%" onclick="onClick(this)">
                    </div>
                    <div class="w3-container w3-third">
                        <img src="images/guarda-roupas.jpg" style="width:100%" onclick="onClick(this)">
                    </div>
                </div>

                <div id="modal01" class="w3-modal" onclick="this.style.display = 'none'">
                    <img class="w3-modal-content" id="img01" style="width:100%">
                </div>

            </div>

            <!-- Contact -->
            <div class="w3-container" id="contato" style="margin-top:75px">
                <h1 class="w3-xxxlarge w3-text-red"><b>Contato.</b></h1>
                <hr style="width:50px;border:5px solid red" class="w3-round">
                <p>Deixe sua mensagem, em breve entraremos em contato.</p>
                <form action="/action_page.php" target="_blank">
                    <div class="w3-section">
                        <label>Nome</label>
                        <input class="w3-input w3-border" type="text" name="Name" required>
                    </div>
                    <div class="w3-section">
                        <label>Email</label>
                        <input class="w3-input w3-border" type="text" name="Email" required>
                    </div>
                    <div class="w3-section">
                        <label>Mensagem</label>
                        <input class="w3-input w3-border" type="text" name="Message" required>
                    </div>
                    <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Enviar</button>
                </form>
            </div>
            <div class="w3-container w3-whithe w3-center">
                <hr style="width:50px;border:5px solid red" class="w3-round">
            <h5>Montador de Móveis VH</h5>
            <p>2017 - Todos os direitos reservados &COPY;</p>
            <p>whatsapp:(00) 91234-5678 | e-mail: atendimento@montadordemoveisvh.com.br</p>
        </div>
        </div>
        <script src="js/app.js"></script>
    </body>
</html>
