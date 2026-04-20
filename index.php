<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfraFlow - Ordem ao Caos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-300 selection:bg-blue-500 selection:text-white">

    <nav class="fixed top-0 w-full bg-slate-900/95 backdrop-blur-sm border-b border-slate-800 z-50 p-4 flex justify-between items-center px-6 md:px-10 transition-all">
        <a href="index.php" class="flex items-center">
            <img src="public/logo.png" alt="Logo InfraFlow" class="h-10 md:h-12 w-auto object-contain">
        </a>
        
        <button id="menu-btn" class="block md:hidden text-blue-500 focus:outline-none">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <div id="menu" class="hidden absolute top-full left-0 w-full bg-slate-900 border-b border-slate-800 flex-col items-center space-y-4 py-6 md:static md:w-auto md:bg-transparent md:border-none md:flex md:flex-row md:space-y-0 md:space-x-6 md:py-0 shadow-xl md:shadow-none">
            <a href="index.php" class="text-blue-500 font-semibold hover:text-blue-400 transition">Home</a>
            <a href="quem-somos.php" class="text-slate-300 font-medium hover:text-blue-400 transition">Quem Somos</a>
            <a href="personas.php" class="text-slate-300 font-medium hover:text-blue-400 transition">Equipe</a>
            <a href="contato.php" class="text-slate-300 font-medium hover:text-blue-400 transition">Contato</a>
        </div>
    </nav>

    <section class="h-screen flex items-center justify-center bg-cover bg-center md:bg-top relative" style="background-image: url('public/equipe-laboratorio.jpeg');">
        <div class="absolute inset-0 bg-slate-950 opacity-85"></div> 
        <div class="relative z-10 text-center text-white p-6 max-w-4xl mt-16 md:mt-0"> 
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4 md:mb-6 leading-tight tracking-tight">InfraFlow: Automação que traz <span class="text-blue-500">Ordem ao Caos.</span></h1>
            <p class="text-lg md:text-xl text-slate-300 leading-relaxed font-light">Transformando a complexidade da infraestrutura em processos simples, seguros e organizados. Nascida dentro do IFSP Guarulhos para revolucionar o mercado de DevOps.</p>
            <p class="mt-6 text-xs md:text-sm text-slate-500 tracking-wider uppercase font-semibold">Equipe: Pedro, João, Júlia, Beatriz, Ana Layslla e Anna Beatriz.</p>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-slate-900 px-6 md:px-10 text-center">
        <h2 class="text-3xl font-bold mb-10 md:mb-12 text-white tracking-wide">Nossa Identidade</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 max-w-6xl mx-auto">
            <div class="p-8 rounded-xl bg-slate-800 border border-slate-700 border-t-4 border-t-blue-500 shadow-lg hover:shadow-blue-900/20 transition duration-300">
                <h3 class="text-xl font-bold text-white mb-4">Missão</h3>
                <p class="text-slate-400 leading-relaxed">Democratizar a automação de infraestrutura, eliminando o erro humano e a desorganização através de tecnologia robusta e governança clara.</p>
            </div>
            <div class="p-8 rounded-xl bg-slate-800 border border-slate-700 border-t-4 border-t-blue-500 shadow-lg hover:shadow-blue-900/20 transition duration-300">
                <h3 class="text-xl font-bold text-white mb-4">Visão</h3>
                <p class="text-slate-400 leading-relaxed">Ser a principal referência em orquestração de ambientes para pequenas e médias empresas que buscam estabilidade e escalabilidade.</p>
            </div>
            <div class="p-8 rounded-xl bg-slate-800 border border-slate-700 border-t-4 border-t-blue-500 shadow-lg hover:shadow-blue-900/20 transition duration-300">
                <h3 class="text-xl font-bold text-white mb-4">Valores</h3>
                <p class="text-slate-400 leading-relaxed">Organização absoluta, transparência técnica, compromisso acadêmico e segurança por design.</p>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-slate-950 px-6 md:px-10 border-y border-slate-800">
        <h2 class="text-3xl font-bold text-center mb-10 md:mb-12 text-white tracking-wide">Ações de Extensão</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 max-w-7xl mx-auto">
            <div class="bg-slate-800 p-6 rounded-lg border border-slate-700 hover:border-blue-500 hover:bg-slate-800/80 transition duration-300">
                <div class="text-3xl mb-3">🧭</div>
                <h3 class="font-bold mb-2 text-white text-lg">Consultoria</h3>
                <p class="text-sm text-slate-400">Diagnóstico de infraestrutura e planejamento de migração para modelos automatizados e seguros.</p>
            </div>
            <div class="bg-slate-800 p-6 rounded-lg border border-slate-700 hover:border-blue-500 hover:bg-slate-800/80 transition duration-300">
                <div class="text-3xl mb-3">🎓</div>
                <h3 class="font-bold mb-2 text-white text-lg">Capacitação</h3>
                <p class="text-sm text-slate-400">Treinamentos técnicos para equipes de TI sobre IaC, Docker e governança.</p>
            </div>
            <div class="bg-slate-800 p-6 rounded-lg border border-slate-700 hover:border-blue-500 hover:bg-slate-800/80 transition duration-300">
                <div class="text-3xl mb-3">⚙️</div>
                <h3 class="font-bold mb-2 text-white text-lg">Serviços</h3>
                <p class="text-sm text-slate-400">Configuração e manutenção de servidores, bancos de dados e ambientes em nuvem sob demanda.</p>
            </div>
            <div class="bg-slate-800 p-6 rounded-lg border border-slate-700 hover:border-blue-500 hover:bg-slate-800/80 transition duration-300">
                <div class="text-3xl mb-3">🏗️</div>
                <h3 class="font-bold mb-2 text-white text-lg">Engenharia</h3>
                <p class="text-sm text-slate-400">Desenvolvimento de soluções personalizadas utilizando nossa plataforma em Java e Terraform.</p>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-slate-900 px-6 md:px-10">
        <h2 class="text-3xl font-bold text-center mb-10 md:mb-12 text-white tracking-wide">Nossa Equipe</h2>
        <div class="flex flex-wrap justify-center gap-6 md:gap-8 max-w-6xl mx-auto">

            <a href="personas.php" class="w-full sm:w-80 flex flex-col text-center transform hover:-translate-y-2 transition duration-300 bg-slate-800 p-6 rounded-xl border border-slate-700 shadow-lg">
                <img src="public/pedro.jpeg" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-2 border-blue-500 p-1">
                <h4 class="font-bold text-white text-lg">Pedro M. Clemonini</h4>
                <p class="text-blue-400 text-sm font-semibold mb-3">Liderança Técnica</p>
                <p class="text-xs text-slate-400 flex-grow leading-relaxed">Estudante de Engenharia de Computação com atuação em infraestrutura, redes e desenvolvimento de software. Especializado em automatizar fluxos complexos através de práticas DevOps (Terraform e Docker), combinando competências técnicas com liderança e governança.</p>
            </a>

            <a href="personas.php" class="w-full sm:w-80 flex flex-col text-center transform hover:-translate-y-2 transition duration-300 bg-slate-800 p-6 rounded-xl border border-slate-700 shadow-lg">
                <img src="public/joao.jpeg" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-2 border-slate-600 p-1">
                <h4 class="font-bold text-white text-lg">João Ruffino dos Santos</h4>
                <p class="text-blue-400 text-sm font-semibold mb-3">DevOps</p>
                <p class="text-xs text-slate-400 flex-grow leading-relaxed">Estudante de Engenharia de Computação com experiência prática em redes, infraestrutura e automação de processos. Desenvolve aplicações utilizando Java, Spring Boot e React, possuindo um forte interesse em arquitetura de microsserviços, cloud e soluções escaláveis.</p>
            </a>

            <a href="personas.php" class="w-full sm:w-80 flex flex-col text-center transform hover:-translate-y-2 transition duration-300 bg-slate-800 p-6 rounded-xl border border-slate-700 shadow-lg">
                <img src="public/julia.jpeg" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-2 border-slate-600 p-1">
                <h4 class="font-bold text-white text-lg">Júlia Garcia Pereira</h4>
                <p class="text-blue-400 text-sm font-semibold mb-3">Designer</p>
                <p class="text-xs text-slate-400 flex-grow leading-relaxed">Estudante de Engenharia da Computação focada em desenvolvimento web, análise de dados e experiência do usuário (UX/UI). Combina o desenvolvimento frontend com a criação de interfaces responsivas e protótipos, garantindo uma navegação intuitiva e centrada no usuário.</p>
            </a>

            <a href="personas.php" class="w-full sm:w-80 flex flex-col text-center transform hover:-translate-y-2 transition duration-300 bg-slate-800 p-6 rounded-xl border border-slate-700 shadow-lg">
                <img src="public/beatriz-mazzucato.jpeg" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-2 border-slate-600 p-1">
                <h4 class="font-bold text-white text-lg">Beatriz Mazzucatto Seabra</h4>
                <p class="text-blue-400 text-sm font-semibold mb-3">Back-end Developer</p>
                <p class="text-xs text-slate-400 flex-grow leading-relaxed">Estudante de Engenharia da Computação orientada para soluções tecnológicas do mercado corporativo e financeiro. Possui experiência prática em segurança eletrônica e parametrização de sistemas bancários, destacando-se pelo perfil analítico e facilidade na resolução de problemas complexos.</p>
            </a>

            <a href="personas.php" class="w-full sm:w-80 flex flex-col text-center transform hover:-translate-y-2 transition duration-300 bg-slate-800 p-6 rounded-xl border border-slate-700 shadow-lg">
                <img src="public/ana-laysla.jpeg" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-2 border-slate-600 p-1">
                <h4 class="font-bold text-white text-lg">Ana Layslla Medeiros Ferreira</h4>
                <p class="text-blue-400 text-sm font-semibold mb-3">QA - Quality Assurance</p>
                <p class="text-xs text-slate-400 flex-grow leading-relaxed">Estudante de Engenharia da Computação dedicada à qualidade de software. É responsável por garantir a confiabilidade dos sistemas através da elaboração e execução de casos de teste, com uma preocupação constante em melhorar a experiência final do usuário.</p>
            </a>

            <a href="personas.php" class="w-full sm:w-80 flex flex-col text-center transform hover:-translate-y-2 transition duration-300 bg-slate-800 p-6 rounded-xl border border-slate-700 shadow-lg">
                <img src="public/anna-beatrice.jpg" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-2 border-slate-600 p-1">
                <h4 class="font-bold text-white text-lg">Anna Beatriz Kitice Palacio</h4>
                <p class="text-blue-400 text-sm font-semibold mb-3">Front-end Developer</p>
                <p class="text-xs text-slate-400 flex-grow leading-relaxed">Estudante de Engenharia da Computação focada no desenvolvimento de aplicações web. Cria interfaces modernas, responsivas e intuitivas utilizando tecnologias como React Native e TypeScript, priorizando a usabilidade e a integração eficiente com APIs.</p>
            </a>

        </div>
    </section>

    <section class="py-12 md:py-16 bg-black text-center px-6 border-t border-slate-800">
        <h2 class="text-2xl font-bold mb-4 text-white">Onde Estamos</h2>
        <p class="text-lg text-slate-300">IFSP - Campus Guarulhos</p>
        <p class="text-slate-500 text-sm md:text-base mt-2">Av. Salgado Filho, 3501 - Vila Rio de Janeiro, Guarulhos - SP</p>
    </section>

    <script>
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
        });
    </script>

</body>
</html>
