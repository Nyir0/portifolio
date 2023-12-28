<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Gabriel Teofilo - Portifolio</title>
    </head>
    <body>
        <main id="vanta" class="flex pt-0 mt-[1vw] w-full">
            <div class="w-2/3 max-sm:w-full py-8 max-sm:py-8 pl-[7.5vw] max-sm:px-8">
                <h1 class="text-gg font-bold text-red-500 max-sm:text-[5vw]">GABRIEL TEOFILO</h1>
                <h2 class="text-m max-sm:text-[4vw] py-4 font-semibold">
                    Sou um Programador Web Junior, formado em ciência da computação, utilizo as linguagens PHP e Javascript para desenvolver sistemas e paginas Web. 
                    <br>
                    <br>
                    Atualmente estou em busca de uma oportunidade de emprego. Tenho objetivo de crescer profissionalmente e ajudar a empresa de toda forma que eu puder.
                    <br>
                    <br>
                    Seguindo abaixo podera ver minhas experiências de trabalho e meus conhecimentos:
                </h2>
            </div>
        </main>
        <section class="py-[1vw] px-[7.5vw] max-sm:px-8">
            <div>
                <h2 class="uppercase text-gg font-bold text-red-500 max-sm:text-[5vw]">Experiência</h2>
                <div class="flex max-sm:flex-col justify-center py-4">
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
            <div class="flex flex-col py-8">
                <h2 class="uppercase text-gg font-bold text-red-500 max-sm:text-[5vw]">Conhecimento:</h2>
               <ul>
                    <li>PHP</li>
                    <li>Javascript</li>
                    <li>HTML5 e CSS</li>
                    <li>Laravel</li>
                    <li>React</li>
                    <li>MySQL</li>
                    <li>SQL</li>
                    <li>Git</li>
                    <li>GitHub (https://github.com/Nyir0)</li>
                    <li>Bootstrap e Tailwind</li>
               </ul>
            </div>
            <div class="flex flex-col py-8 w-full">
                <h2 class="uppercase text-gg font-bold text-red-500 max-sm:text-[5vw]">Alguns projetos desenvolvidos por mim:</h2>
                <p class="py-4">Clique no card e será redirecionado !</p>
                <div class="flex max-sm:flex-col max-sm:flex-nowrap flex-wrap items-center py-2">
                    <div class="flex max-sm:flex-col justify-between w-full">
                        <x-link_card :link="'https://computador.strongtechbrasil.com.br/page4'" :text="'Landing page de venda de computadores All In One'"></x-link_card>
                        <x-link_card :link="'https://computador.strongtechbrasil.com.br/page6'" :text="'Landing page de venda de Notebooks'"></x-link_card>
                    </div>
                </div>
                <div class="flex flex-wrap items-center py-2">
                    <div class="flex max-sm:flex-col justify-between w-full">
                        <x-link_card :link="'https://computador.strongtechbrasil.com.br/page8'" :text="'Variante da Landing page de venda de computadores All In One'"></x-link_card>
                        <x-link_card :link="'https://novosite.ramasfragrancias.com.br/inicio'" :text="'Site de Venda de Fragrâncias'"></x-link_card>
                    </div>
                </div>
            </div>
            <footer>
                <h2 class="uppercase text-gg font-bold text-red-500 max-sm:text-[5vw] mb-4">Contatos</h2>
                <x-link_card :link="'https://api.whatsapp.com/send?phone=5511942979746&text=Gostaria%20de%20um%20or%C3%A7amento%20para%20um%20projeto.'" :img="'img/whatsapp-logo-whatsapp-icon-whatsapp-transparent-free-png.webp'" :text="'(11) 94297-9746'"></x-link_card>
                <strong class="text-m font-bold max-sm:text-[4vw]">Email: gabriel.ol.teo@outlook.com</strong>
            </footer>
        </section>
        <script src="js/three.r134.min.js"></script>
        @vite("resources/js/canva/canva.js")
    </body>
</html>
