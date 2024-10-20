<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio - Online</title>
    <style>
        @font-face {
            font-family: 'DMSerif';
            src: url('fonts/DMSerifText-Regular.ttf') format('truetype');
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #494949;
            color: white;
            padding: 0.5rem;
            text-align: center;
        }

        .bemvindo {
            font-family: 'DMSerif';
            font-size: 30px;
            font-weight: bold;
        }

        .p1 {
            color: white;
            font-size: 20px;
            margin-top: -20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .div-empresas {
            margin-top: 100px;
        }

        .empresas {
            font-size: 1.5rem;
            font-weight: bold;
            color: #494949;
            text-align: center;
            margin-top: 20px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-family: 'DMSerif';
        }

        .div-container {
            text-align: center;
            padding: 20px;
        }

        .empresas-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 20px;
        }

        .card {
            display: grid;
            justify-content: center;
            align-items: center;
            background-color: #cacaca;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 400px;
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .images-empresas {
            width: 150px;
            height: auto;
            margin-bottom: 10px;
        }

        .images-empresas3 {
            width: 200px;
            height: auto;
            margin-bottom: 10px;
            margin-left: 52px;
        }

        span {
            font-size: 1rem;
            color: #333;
        }




        nav {
            text-align: center;
            margin-top: 20px;
        }

        nav .a-modify {
            margin: 0 15px;
            text-decoration: none;
            color: #494949;
            font-weight: bold;
            font-family: 'DMSerif';
        }

        .a-modify {
            position: relative;
            display: inline-block;
            padding: 15px 30px;
            border: 2px solid #595959;
            text-transform: uppercase;
            color: #fefefe;
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
        }

        .a-modify::before {
            content: '';
            position: absolute;
            top: 6px;
            left: -2px;
            width: calc(100% + 4px);
            height: calc(100% - 12px);
            background-color: #ffffff;
            transition: 0.3s ease-in-out;
            transform: scaleY(1);
        }

        .a-modify:hover::before {
            transform: scaleY(0);
        }

        .a-modify::after {
            content: '';
            position: absolute;
            left: 6px;
            top: -2px;
            height: calc(100% + 4px);
            width: calc(100% - 12px);
            background-color: #ffffff;
            transition: 0.3s ease-in-out;
            transform: scaleX(1);
            transition-delay: 0.5s;
        }

        .a-modify:hover::after {
            transform: scaleX(0);
        }

        .a-modify span {
            position: relative;
            z-index: 3;
        }

        button {
            background-color: none;
            text-decoration: none;
            background-color: #ffffff;
            border: none;
        }

        section {
            max-width: 900px;
            margin: 70px auto;
            padding: 40px;
            background-color: #cacaca;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 30px;
            transition: box-shadow 0.3s ease-in-out, transform 0.3s ease-in-out;

        }

        section:hover {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transform: scale(1.05);
        }


        h2 {
            color: #494949;
        }

        p {
            line-height: 1.6;
            color: #7f7f7f;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        li {
            color: #7f7f7f;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
        }


        .div-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .div-section>section {
            flex: 0 1 calc(50% - 20px);
            margin: 10px;
            box-sizing: border-box;
        }

        .topicos {
            font-size: 1.5rem;
            font-weight: bold;
            color: #494949;
            text-align: center;
            margin-top: 60px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-family: 'DMSerif';
        }

        .Btn {
            width: 50px;
            height: 50px;
            border: none;
            border-radius: 50%;
            background-color: #494949;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            position: relative;
            transition-duration: .3s;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.11);
        }

        .svgIcon {
            fill: rgb(255, 255, 255);
        }

        .icon2 {
            width: 18px;
            height: 5px;
            border-bottom: 2px solid rgb(255, 255, 255);
            border-left: 2px solid rgb(255, 255, 255);
            border-right: 2px solid rgb(255, 255, 255);
        }

        .tooltip {
            position: absolute;
            right: -220px;
            opacity: 0;
            background-color: #494949;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition-duration: .2s;
            pointer-events: none;
            letter-spacing: 0.5px;
        }

        .tooltip::before {
            position: absolute;
            content: "";
            width: 10px;
            height: 10px;
            background-color: #494949;
            background-size: 1000%;
            background-position: center;
            transform: rotate(45deg);
            left: -6%;
            transition-duration: .3s;
        }

        .Btn:hover .tooltip {
            opacity: 1;
            transition-duration: .3s;
        }

        .Btn:hover {
            background-color: green;
            transition-duration: .3s;
        }

        .Btn:hover .icon2 {
            border-bottom: 2px solid rgb(235, 235, 235);
            border-left: 2px solid rgb(235, 235, 235);
            border-right: 2px solid rgb(235, 235, 235);
        }

        .Btn:hover .svgIcon {
            fill: rgb(255, 255, 255);
            animation: slide-in-top 0.6s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        }

        @keyframes slide-in-top {
            0% {
                transform: translateY(-10px);
                opacity: 0;
            }

            100% {
                transform: translateY(0px);
                opacity: 1;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1 class="bemvindo">Bem-vindo,
            <?php
            echo getenv('USERNAME');
            ?>!
        </h1>
        <p class="p1">Um pouco sobre mim:</p>
    </header>

    <nav>
        <button>
            <a href="#sobre-mim" class="a-modify"><span>Quem Sou</span></a>
        </button>
        <button>
            <a href="#conhecimentos" class="a-modify"><span>Meus Conhecimentos</span></a>
        </button>
        <button>
            <a href="#objetivos" class="a-modify"><span>Objetivos</span></a>
        </button>
        <button>
            <a href="#curriculo" class="a-modify"><span>Currículo</span></a>
        </button>
    </nav>

    <div class="div-container">
        <div class="div-empresas">
            <p class="empresas">Empresas que já atuei:</p>
        </div>
        <div class="empresas-container">
            <div class="card" onclick="window.location.href='https://cspautomacao.com.br';">
                <img src="imgs/CSP-Logo.png" class="images-empresas">
                <span style="margin-bottom: -20px;">Técnico de Informática</span>
                <span>-</span>
                <span style="margin-top: -20px;">Suporte de software</span>
            </div>
            <div class="card" onclick="window.location.href='https://www.unimed.coop.br/site/web/chapeco';">
                <img src="imgs/Unimed-Logo.png" class="images-empresas">
                <span>Jovem Aprendiz TI</span>
            </div>
            <div class="card" onclick="window.location.href='https://grupoeko7.com.br';">
                <img src="imgs/GrupoEko7-Logo.png" class="images-empresas3">
                <span>Auxiliar de Ti</span>
                <span>-</span>
                <span>Analista de Desenvolvimento de Softwares</span>
            </div>
        </div>
    </div>

    <div>
        <p class="topicos">Tópicos:</p>
    </div>
    <div class="div-section">
        <section id="sobre-mim">
            <h2 style="font-family: 'DMSerif';">Quem Sou:</h2>
            <p>Olá, Meu nome é Gabriel F. Korb,
                Atualmente com 19 anos, sou um entusiasta de tecnologia, desenvolvimento e do mundo digital. Desde a infância, mantenho uma profunda fascinação pelo potencial transformador que a tecnologia proporciona, o que me levou a explorar diversas áreas, como desenvolvimento de software/web, manutenção de computadores, jogos, artes digitais e tecnologia em geral. Dedico-me constantemente à aquisição de novas habilidades, sempre buscando inovações que possam gerar um impacto positivo na vida das pessoas.</p>
        </section>

        <section id="conhecimentos">
            <h2 style="font-family: 'DMSerif';">Meus Conhecimentos</h2>
            <ul>
                <li>Desenvolvimento Web (HTML, CSS, JavaScript, PHP)</li>
                <li>Programação em [Node JS, Ionic, Angular, TypeScript, Python]</li>
                <li>Bancos de Dados (MySQL, Oracle, Firebird)</li>
                <li>Montagem/Manutenção de computadores</li>
                <li>Formatação e configuração de computadores</li>
                <li>Infraestrutura e Rede</li>
                <li>Photoshop - Conhecimento intermediário (Design)</li>
                <li>Office Intermediário/Avançado</li>
                <li>DevOps e Automação: Tenho interesse em práticas de DevOps e na criação de automações que visam otimizar e agilizar processos, tanto pessoais quanto de terceiros.</li>
            </ul>
        </section>

        <section id="objetivos">
            <h2 style="font-family: 'DMSerif';">Objetivos:</h2>
            <p>Meu objetivo é crescer profissionalmente e ser reconhecido pelos conhecimentos que adquiri ao longo da minha jornada. Tenho um forte desejo de ajudar, colaborar e contribuir, tanto para a felicidade das pessoas quanto para o sucesso de uma empresa. Além disso, busco me destacar no mundo da tecnologia, mantendo-me sempre atualizado sobre as últimas tendências e inovações. Acredito que, ao aperfeiçoar continuamente minhas habilidades, poderei fazer uma diferença significativa e impactar positivamente aqueles ao meu redor.</p>
        </section>

        <section id="curriculo">
            <h2 style="font-family: 'DMSerif';">Currículo</h2>
            <div class="curriculo-link">
                <p>Ao clicar no botão abaixo, Você irá fazer o download automaticamente do meu currículo.</p>
                <a href="documents/curriculo-gabrielkorb.pdf" download class="Btn">
                    <svg class="svgIcon" viewBox="0 0 384 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                    </svg>
                    <span class="icon2"></span>
                    <span class="tooltip">curriculo-gabrielkorb.pdf</span>
                </a>
            </div>

        </section>
    </div>




</body>

</html>