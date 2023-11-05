<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Gabriel Teofilo - Portifolio</title>
    </head>
    <body>
        {{-- <header class="flex text-xl py-[2vh] fixed top-0 w-full">
            <nav class="w-full">
                <div class="flex justify-evenly">
                    <span class="px-3 mx-[2vw] cursor-pointer hover:scale-125 transition-all max-w-md text-m">Inicio</span>
                    <span class="px-3 mx-[2vw] cursor-pointer hover:scale-125 transition-all max-w-md text-m">Contato</span>
                </div>
            </nav>
        </header> --}}
        <main id="vanta" class="flex pt-0 mt-[3vw] w-full">
            <div class="w-1/2 py-16 pl-[7.5vw]">
                <h1 class="text-gg font-bold text-red-500">GABRIEL TEOFILO</h1>
                <h2 class="text-m py-4 font-semibold">
                    Sou um Programador full stack pronto para criar soluções web de ponta 
                    para atender às necessidades dos clientes e dos usuários.
                </h2>
            </div>
        </main>
        <section class="py-[5vw] px-[7.5vw]">
            <div>
                <h2 class="uppercase text-gg font-bold text-red-500">Experiência e habilidades</h2>
                <div class="flex justify-center py-4">
                    <x-card 
                        :title="'2 anos de expêriencia em PHP e Laravel'"
                        :empresa="'Norwaybank'" 
                        :description="'Desenvolvia sistema de gerenciamento de usuarios
                        dentro de um banco digital com integração por API com core
                        bancário.'"
                    >
                    </x-card>
                    <x-card 
                        :title="'2 anos de expêriencia em PHP,Laravel, HTML5, CSS e Javascript'"
                        :empresa="'Integramix'" 
                        :description="'Criação de Landing Pages usando o laravel
                        que pode por meio do Laravel agilizava a velocidade de 
                        entrega das paginas.'"
                    >
                    </x-card>
                    <x-card 
                        :title="'4 anos de Graduação em Ciência da computação'"
                        :empresa="'Universidade Paulista'" 
                        :description="'Graduação Completa.'"
                    >
                    </x-card>
                </div>
                <p class="w-full text-center">
                    Observação: Em ambas as empresas eu trabalhava como full stack, mas na empresa "Integramix"
                    foi onde eu criei mais landing pages.
                </p>
            </div>
            <div class="flex flex-wrap items-center py-8">
                <x-images :img="'img/25005108362009.webp'"></x-images>
                <x-images :img="'img/PHP-logo.svg.png'"></x-images>
                <x-images :img="'img/1color-orange-lightbg@2x.png'"></x-images>
                <x-images :img="'img/MySQL-Logo.jpg'"></x-images>
                <x-images :img="'img/html5_and_css3.webp'"></x-images>
                <x-images :img="'img/Unofficial_JavaScript_logo_2.svg.png'"></x-images>
            </div>
            <div class="flex flex-col py-8 w-full">
                <h2 class="uppercase text-gg font-bold text-red-500">Alguns projetos desenvolvidos por mim:</h2>
                <div class="flex flex-wrap items-center py-2">
                    <div class="flex justify-between w-full">
                        <x-link_card :link="'https://computador.strongtechbrasil.com.br/page4'" :img="'img/4cf1541ff9482f7ddeb51bd0f886c0c3.webp'" :text="'Landing page de venda de computadores All In One'"></x-link_card>
                        <x-link_card :link="'https://computador.strongtechbrasil.com.br/page6'" :img="'img/purepng.com-laptop-notebooklaptopsnotebooknotebook-computerclamshell-17015283549984ov54.png'" :text="'Landing page de venda de Notebooks'"></x-link_card>
                    </div>
                </div>
                <div class="flex flex-wrap items-center py-2">
                    <div class="flex justify-between w-full">
                        <x-link_card :link="'https://computador.strongtechbrasil.com.br/page8'" :img="'img/51zr2LPPfwL._AC_UF894,1000_QL80_.jpg'" :text="'Variante da Landing page de venda de computadores All In One'"></x-link_card>
                        <x-link_card :link="'https://novosite.ramasfragrancias.com.br/inicio'" :img="'img/capa-difusores.webp'" :text="'Site de Venda de Fragrâncias'"></x-link_card>
                    </div>
                </div>
                <p class="w-full text-center">
                    Observação: Todos este projetos foram feitos utilizando Laravel. Inclusive este portifólio embora mais simples, também foi feito em Laravel.
                </p>
            </div>
            <div>
                <h2 class="uppercase text-gg font-bold text-red-500">Contatos</h2>
                <x-link_card :link="'https://api.whatsapp.com/send?phone=5511942979746&text=Gostaria%20de%20um%20or%C3%A7amento%20para%20um%20projeto.'" :img="'img/whatsapp-logo-whatsapp-icon-whatsapp-transparent-free-png.webp'" :text="'(11) 94297-9746'"></x-link_card>
                <strong class="text-m font-bold">Email: gabriel.ol.teo@outlook.com</strong>
            </div>
        </section>
        <footer class="px-20 pb-10 text-center">
            <strong class="uppercase text-m">
                **No momento estou totalmente a disposição, mande uma mensagem em meu email ou whatsapp que retornarei o contato o mais rápido possível.
            </strong>
        </footer>
        <script src="js/three.r134.min.js"></script>
        @vite("resources/js/canva/canva.js")
    </body>
</html>
