<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gabriel Teofilo - Portifólio</title>
        @vite('resources/css/app.css')
        <style>
            
        </style>
    </head>
    <body class="bg-black">
        <header class="flex justify-between max-md:justify-center w-full items-center h-24 border-b-2 border-gray-800 px-24 max-md:px-6">
            <div class="flex">
                <span class="red font-bold"><</span>
                <strong class="font-semibold">Gabriel Teofilo</strong>
                <span class="red font-bold">/></span>
            </div>
            <nav class="flex">
                <ul class="flex max-md:hidden">
                    <li>Início</li>
                    <li>Quem Sou</li>
                    <li>Experiência</li>
                    <li>Projetos</li>
                    <li>Conhecimentos</li>
                </ul>
            </nav>
        </header>
        <div class="flex flex-col mx-24 max-md:mx-6 h-[calc(100vh-6rem)]">
            <nav id="redes-sociais" class="fixed max-md:static flex flex-col max-md:flex-row items-center max-md:justify-center left-7 top-48 max-md:w-32 max-md:mt-4">
                <a class="my-2 max-md:mr-2" href="https://api.whatsapp.com/send?phone=5511942979746&text=Ol%C3%A1%20Gabriel,%20estou%20entrando%20em%20contato%20direto%20do%20seu%20portf%C3%B3lio%20!" target="blank">
                    <img src="img/zap.svg" alt="" width="40" height="40">
                </a>
                <a class="my-2 max-md:mr-2" href="">
                    <img src="img/discord.svg" alt="" width="55" height="55">
                </a>
                <a class="my-2 max-md:mr-2" href="https://www.linkedin.com/in/gabriel-teofilo-837183125/" target="blank">
                    <img src="img/linkedin.svg" alt="" width="40" height="40">
                </a>
            </nav>
            <section class="flex flex-col max-md:h-auto py-10 max-sm:py-2">
                <h1 class="mb-3 w-1/2">
                    Desenvolvedor full stack junior apaixonado por
                    contribuir na construção de <span class="red">soluções digitais</span> de
                    excelência para empresas em busca de inovação e
                    qualidade.
                </h1>
                <p class="mb-5 max-md:text-sm w-1/2">
                    Desenvolvimento full stack utilizando as melhores práticas com Laravel,
                    integração de APIs REST e aplicação de tecnologias para criar produtos
                    que sejam funcionais, intuitivos e de fácil manutenção.
                </p>
                <a class="flex button-zap" href="https://api.whatsapp.com/send?phone=5511942979746&text=Ol%C3%A1%20Gabriel,%20estou%20entrando%20em%20contato%20direto%20do%20seu%20portf%C3%B3lio%20!" target="blank">
                    Whatsapp
                </a>
            </section>
        </div>
        <section class="bg-[#111111] px-24 py-10">
            <div class="flex justify-between w-full">
                <img src="/img/myphoto.jpg" alt="" width="500" height="500">
                <div class="flex flex-col items-start w-[calc(100%-550px)]">
                    <h3 class="red">Quem Sou</h3>        
                    <h2>Gabriel Oliveira Teofilo</h2>
                    <strong>Desenvolvedor Full Stack PHP</strong>
                    <p class="text-sm my-2">
                        Me chamo Gabriel, mas sou mais conhecido como "Nyiro". Graduado em Ciência da Computação, minha expertise em PHP e Javascript me permite criar projetos web robustos. Meu interesse central está na constante evolução e na exploração de novas tecnologias. Com experiência em plataformas de freelancing, como Workana e 99freelas, estou familiarizado com uma ampla gama de desafios, os quais têm contribuído para expandir minha competência e conhecimento em projetos desafiadores.
                    </p>
                    <p class="text-sm">
                        Integrei com sucesso o Mercado Livre e o WooCommerce, utilizando tecnologias REST em Laravel e Laravel Breeze. Destaco a criação de um dashboard intuitivo com a API REST do WooCommerce para gerenciamento de produtos e relatórios, fortalecendo minha experiência em Laravel. Possuo habilidades avançadas em Vite, React, NPM, Git, Javascript, Tailwind, Bootstrap e MySQL. Estou determinado a ampliar meu conhecimento e contribuir de maneira significativa em projetos desafiadores, oferecendo soluções inovadoras e impactantes no ambiente digital.
                    </p>
                </div>
            </div>
        </section>
    </body>
</html>
