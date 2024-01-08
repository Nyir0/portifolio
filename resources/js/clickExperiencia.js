const tagPaiExp = document.getElementById("exp");

var btnExp = tagPaiExp.getElementsByTagName("li");

const expCompany = document.getElementById("exp_company");

const expDescription = document.getElementById("exp_description");

const expJob = document.getElementById("exp_job");

const expDate = document.getElementById("exp_date");

var experience = [
    {
        company:"Integramix",
        job:"Desenvolvedor Full Stack PHP",
        date:"Mai 2023 - Nov 2023",
        description:"Na Integramix, minha expertise foi focada na criação de sistemas robustos e integrados utilizando Laravel. Destaco minhas habilidades em integrações bem-sucedidas com Mercado Livre e WooCommerce, utilizando Laravel e suas tecnologias REST, como Laravel Breeze. Um dos marcos significativos foi a concepção de um dashboard intuitivo, aproveitando a API REST do WooCommerce para gerenciar produtos e relatórios, ampliando minha proficiência em Laravel. Além disso, destaco meu papel na criação ágil de Landing Pages utilizando Laravel para acelerar a entrega de projetos. Minha habilidade em PHP, React, HTML5, CSS e Javascript foi fundamental para desenvolver essas páginas eficientes e visualmente atrativas. Também possuo domínio em tecnologias como Vite, NPM, Git, Javascript, Tailwind, Bootstrap e MySQL, contribuindo para o desenvolvimento completo de sistemas e interfaces."},
    {
        company:"NorwayBank", 
        job:"Desenvolvedor Full Stack PHP",
        date:"nov 2021 - abr 2023",
        description:"Na NorwayBank, como desenvolvedor júnior, contribuí ativamente para o desenvolvimento de um sistema abrangente de dashboard e gerenciamento de usuários. Utilizando PHP, Laravel, HTML, CSS, Javascript, jQuery, SQL, BitBucket, GIT, React e Laravel Breeze, trabalhei em equipe para otimizar o tempo de entrega, garantindo a eficiência e qualidade do projeto. Essa experiência solidificou minha expertise em diversas tecnologias web, desde o back-end até a interface do usuário, fortalecendo meu perfil profissional."},
    {
        company:"Universidade Paulista", 
        job:"Graduação",
        date:"jan 2019 - dez 2022",
        description:"Durante minha graduação em Ciência da Computação na Universidade Paulista (UNIP), concentrei-me em módulos essenciais que aprimoraram minhas habilidades em programação, estruturas de dados e algoritmos. Além disso, explorei disciplinas relacionadas a redes de computadores, sistemas operacionais, bancos de dados e engenharia de software. O curso na UNIP proporcionou uma base sólida para compreender teoria e prática da computação, preparando-me para enfrentar desafios significativos na área de desenvolvimento e tecnologia da informação."}
]

console.log(experience);

Object.values(btnExp).forEach(element => {
    element.addEventListener("click",function(e){
        var expId = element.id.replace(/_/g, " ");
        var exp = experience.filter(function(element){
            if(element.company == expId){
                return element;
            }
        });
        console.log(exp[0].company);
        expCompany.textContent = exp[0].company;
        expDescription.textContent = exp[0].description;
        expJob.textContent = exp[0].job;
        expDate.textContent = exp[0].date;
    });
});