<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Equipe - InfraFlow</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-300 pt-20 selection:bg-blue-500 selection:text-white">
    
    <nav class="fixed top-0 w-full bg-slate-900/95 backdrop-blur-sm border-b border-slate-800 z-50 p-4 flex justify-between items-center px-6 md:px-10 transition-all">
        <a href="index.php" class="flex items-center">
            <img src="public/logo.png" alt="Logo InfraFlow" class="h-10 md:h-12 w-auto object-contain">
        </a>
        <button id="menu-btn" class="block md:hidden text-blue-500 focus:outline-none">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <div id="menu" class="hidden absolute top-full left-0 w-full bg-slate-900 border-b border-slate-800 flex-col items-center space-y-4 py-6 md:static md:w-auto md:bg-transparent md:border-none md:flex md:flex-row md:space-y-0 md:space-x-6 md:py-0 shadow-xl md:shadow-none">
            <a href="index.php" class="text-slate-300 font-medium hover:text-blue-400 transition">Home</a>
            <a href="quem-somos.php" class="text-slate-300 font-medium hover:text-blue-400 transition">Quem Somos</a>
            <a href="personas.php" class="text-blue-500 font-semibold hover:text-blue-400 transition">Equipe</a>
            <a href="contato.php" class="text-slate-300 font-medium hover:text-blue-400 transition">Contato</a>
        </div>
    </nav>

    <header class="text-center py-16 px-6">
        <h1 class="text-4xl font-extrabold text-white mb-4">Núcleo Técnico</h1>
        <p class="text-slate-400 text-lg">Os especialistas por trás da governança e automação da InfraFlow.</p>
    </header>

    <section class="max-w-5xl mx-auto px-6 pb-20 grid gap-8">
        
        <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl p-8 flex flex-col md:flex-row items-center md:items-start gap-8 hover:border-blue-500/50 transition duration-300">
            <img src="public/pedro.jpeg" alt="Pedro Clemonini" class="w-40 h-40 rounded-xl object-cover border-2 border-blue-500 p-1 shadow-lg shrink-0">
            <div>
                <h2 class="text-3xl font-bold text-white mb-1">Pedro M. Clemonini</h2>
                <p class="text-blue-400 font-mono text-sm mb-4">Liderança Técnica (CTO & Scrum Master)</p>
                <div class="text-slate-400 leading-relaxed space-y-3">
                    <p>Profissional multidisciplinar com atuação em infraestrutura, redes e desenvolvimento de software. Especializado em automatizar fluxos complexos através de práticas DevOps (Terraform e Docker), combinando competências técnicas com liderança e governança.</p>
                    <p>Define a arquitetura tecnológica e garante a escalabilidade dos projetos na InfraFlow. Aplica metodologias ágeis, atua na mentoria técnica da equipe e garante o funcionamento de infraestruturas críticas (Proxmox, ZFS, Redes Cisco/Huawei).</p>
                </div>
            </div>
        </div>

        <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl p-8 flex flex-col md:flex-row items-center md:items-start gap-8 hover:border-blue-500/50 transition duration-300">
            <img src="public/joao.jpeg" alt="João Ruffino" class="w-40 h-40 rounded-xl object-cover border-2 border-slate-600 p-1 shadow-lg shrink-0">
            <div>
                <h2 class="text-3xl font-bold text-white mb-1">João Ruffino dos Santos</h2>
                <p class="text-blue-400 font-mono text-sm mb-4">DevOps</p>
                <div class="text-slate-400 leading-relaxed">
                    <p>Estudante de Engenharia de Computação com experiência prática em redes, infraestrutura e automação de processos. Desenvolve aplicações utilizando Java, Spring Boot e React, possuindo um forte interesse em arquitetura de microsserviços, cloud e soluções escaláveis.</p>
                </div>
            </div>
        </div>

        <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl p-8 flex flex-col md:flex-row items-center md:items-start gap-8 hover:border-blue-500/50 transition duration-300">
            <img src="public/julia.jpeg" alt="Júlia Garcia" class="w-40 h-40 rounded-xl object-cover border-2 border-slate-600 p-1 shadow-lg shrink-0">
            <div>
                <h2 class="text-3xl font-bold text-white mb-1">Júlia Garcia Pereira</h2>
                <p class="text-blue-400 font-mono text-sm mb-4">Designer (UX/UI & Frontend)</p>
                <div class="text-slate-400 leading-relaxed">
                    <p>Estudante de Engenharia da Computação focada em desenvolvimento web, análise de dados e experiência do usuário (UX/UI). Combina o desenvolvimento frontend com a criação de interfaces responsivas e protótipos, garantindo uma navegação intuitiva e centrada no usuário.</p>
                </div>
            </div>
        </div>

        <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl p-8 flex flex-col md:flex-row items-center md:items-start gap-8 hover:border-blue-500/50 transition duration-300">
            <img src="public/beatriz-mazzucato.jpeg" alt="Beatriz Mazzucatto" class="w-40 h-40 rounded-xl object-cover border-2 border-slate-600 p-1 shadow-lg shrink-0">
            <div>
                <h2 class="text-3xl font-bold text-white mb-1">Beatriz Mazzucatto Seabra</h2>
                <p class="text-blue-400 font-mono text-sm mb-4">Back-end Developer</p>
                <div class="text-slate-400 leading-relaxed">
                    <p>Estudante de Engenharia da Computação orientada para soluções tecnológicas do mercado corporativo e financeiro. Possui experiência prática em segurança eletrônica e parametrização de sistemas bancários, destacando-se pelo perfil analítico e facilidade na resolução de problemas complexos.</p>
                </div>
            </div>
        </div>

        <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl p-8 flex flex-col md:flex-row items-center md:items-start gap-8 hover:border-blue-500/50 transition duration-300">
            <img src="public/ana-laysla.jpeg" alt="Ana Layslla" class="w-40 h-40 rounded-xl object-cover border-2 border-slate-600 p-1 shadow-lg shrink-0">
            <div>
                <h2 class="text-3xl font-bold text-white mb-1">Ana Layslla Medeiros Ferreira</h2>
                <p class="text-blue-400 font-mono text-sm mb-4">QA - Quality Assurance</p>
                <div class="text-slate-400 leading-relaxed">
                    <p>Estudante de Engenharia da Computação dedicada à qualidade de software. É responsável por garantir a confiabilidade dos sistemas através da elaboração e execução de casos de teste, com uma preocupação constante em melhorar a experiência final do usuário.</p>
                </div>
            </div>
        </div>

        <div class="bg-slate-800 rounded-2xl border border-slate-700 shadow-xl p-8 flex flex-col md:flex-row items-center md:items-start gap-8 hover:border-blue-500/50 transition duration-300">
            <img src="public/anna-beatrice.jpg" alt="Anna Beatriz" class="w-40 h-40 rounded-xl object-cover border-2 border-slate-600 p-1 shadow-lg shrink-0">
            <div>
                <h2 class="text-3xl font-bold text-white mb-1">Anna Beatriz Kitice Palacio</h2>
                <p class="text-blue-400 font-mono text-sm mb-4">Front-end Developer</p>
                <div class="text-slate-400 leading-relaxed">
                    <p>Estudante de Engenharia da Computação focada no desenvolvimento de aplicações web. Cria interfaces modernas, responsivas e intuitivas utilizando tecnologias como React Native e TypeScript, priorizando a usabilidade e a integração eficiente com APIs.</p>
                </div>
            </div>
        </div>

    </section>

    <footer class="py-8 bg-black text-center border-t border-slate-800">
        <p class="text-slate-500 text-sm">© 2026 InfraFlow - Projeto de Extensão IFSP Guarulhos</p>
    </footer>

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
