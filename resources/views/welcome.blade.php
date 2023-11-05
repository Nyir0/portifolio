<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Gabriel Teofilo - Portifolio</title>
    </head>
    <body>
        <header class="flex text-xl py-[2vh] fixed top-0 w-full">
            <nav class="w-full">
                <div class="flex justify-evenly">
                    <span class="px-3 mx-[2vw] cursor-pointer hover:scale-125 transition-all max-w-md text-m">Inicio</span>
                    <span class="px-3 mx-[2vw] cursor-pointer hover:scale-125 transition-all max-w-md text-m">Contato</span>
                </div>
            </nav>
        </header>
        <main id="vanta" class="flex pt-20 mt-[3vw] w-full">
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
                        entrega da pagina.'"
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
            <div class="py-8">

            </div>
        </section>
        @vite("resources/js/canva/three.r134.min.js")
        @vite("resources/js/canva/canva.js")
    </body>
</html>
