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

    <section class="py-16 md:py-20 bg-slate-950 px-6 md:px-10 border-y border-slate-800 text-center">
        <h2 class="text-3xl font-bold mb-4 text-white tracking-wide">Análise SWOT</h2>
        <p class="text-slate-400 max-w-2xl mx-auto mb-10 md:mb-12">A seguir será apresentada a análise estratégica da InfraFlow, considerando fatores internos e externos que influenciam sua atuação.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto text-left">
            <!-- Forças -->
            <div class="bg-slate-800 p-8 rounded-xl border border-slate-700 border-t-4 border-t-emerald-500 shadow-lg hover:shadow-emerald-900/20 transition duration-300">
                <div class="bg-emerald-500/20 w-12 h-12 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Forças</h3>
                <ul class="text-sm text-slate-400 space-y-3 list-disc pl-4 marker:text-emerald-500">
                    <li><strong class="text-slate-300">Corpo Técnico Híbrido:</strong> Domínio Full Cycle (infra, dev, QA e UX/UI).</li>
                    <li><strong class="text-slate-300">Especialização em IaC:</strong> Proficiência em Terraform, Ansible e Packer.</li>
                    <li><strong class="text-slate-300">Virtualização:</strong> Experiência com Proxmox e ZFS on-premise.</li>
                    <li><strong class="text-slate-300">Cultura Ágil:</strong> Alta maturidade em Scrum e XP.</li>
                    <li><strong class="text-slate-300">Qualidade (QA):</strong> Processos refinados de validação.</li>
                </ul>
            </div>

            <!-- Fraquezas -->
            <div class="bg-slate-800 p-8 rounded-xl border border-slate-700 border-t-4 border-t-orange-500 shadow-lg hover:shadow-orange-900/20 transition duration-300">
                <div class="bg-orange-500/20 w-12 h-12 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Fraquezas</h3>
                <ul class="text-sm text-slate-400 space-y-3 list-disc pl-4 marker:text-orange-500">
                    <li><strong class="text-slate-300">Gaps de Negócio:</strong> Foco técnico em detrimento de habilidades comerciais.</li>
                    <li><strong class="text-slate-300">Centralização:</strong> Dificuldade na delegação podendo gerar gargalos.</li>
                    <li><strong class="text-slate-300">Curva de Experiência:</strong> Vivência majoritariamente acadêmica em larga escala.</li>
                    <li><strong class="text-slate-300">Automação de Testes:</strong> Dependência residual de processos manuais.</li>
                </ul>
            </div>

            <!-- Oportunidades -->
            <div class="bg-slate-800 p-8 rounded-xl border border-slate-700 border-t-4 border-t-blue-500 shadow-lg hover:shadow-blue-900/20 transition duration-300">
                <div class="bg-blue-500/20 w-12 h-12 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Oportunidades</h3>
                <ul class="text-sm text-slate-400 space-y-3 list-disc pl-4 marker:text-blue-500">
                    <li><strong class="text-slate-300">Indústria 4.0:</strong> Demanda por automação local e de baixa latência.</li>
                    <li><strong class="text-slate-300">DevSecOps:</strong> Integração de segurança em fluxos de infraestrutura.</li>
                    <li><strong class="text-slate-300">Nicho Financeiro:</strong> Know-how em sistemas críticos e segurança.</li>
                    <li><strong class="text-slate-300">Diferencial QA:</strong> Entrega validada de automações como diferencial.</li>
                </ul>
            </div>

            <!-- Ameaças -->
            <div class="bg-slate-800 p-8 rounded-xl border border-slate-700 border-t-4 border-t-purple-500 shadow-lg hover:shadow-purple-900/20 transition duration-300">
                <div class="bg-purple-500/20 w-12 h-12 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Ameaças</h3>
                <ul class="text-sm text-slate-400 space-y-3 list-disc pl-4 marker:text-purple-500">
                    <li><strong class="text-slate-300">Cloud Gerenciada:</strong> Hegemonia de serviços nativos (AWS/Azure).</li>
                    <li><strong class="text-slate-300">Obsolescência:</strong> Atualização acelerada de ferramentas DevOps.</li>
                    <li><strong class="text-slate-300">Time-to-Market:</strong> Pressão por entregas rápidas frente ao perfeccionismo.</li>
                    <li><strong class="text-slate-300">Volatilidade:</strong> Evolução constante de frameworks de teste.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-slate-900 px-6 md:px-10">
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

    <section class="py-16 md:py-20 bg-slate-950 px-6 md:px-10 border-t border-slate-800">
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
