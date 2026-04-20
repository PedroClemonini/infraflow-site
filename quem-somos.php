<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quem Somos - InfraFlow</title>
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
            <a href="quem-somos.php" class="text-blue-500 font-semibold hover:text-blue-400 transition">Quem Somos</a>
            <a href="personas.php" class="text-slate-300 font-medium hover:text-blue-400 transition">Equipe</a>
            <a href="contato.php" class="text-slate-300 font-medium hover:text-blue-400 transition">Contato</a>
        </div>
    </nav>

    <section class="max-w-4xl mx-auto py-16 px-6">
        <h1 class="text-4xl font-extrabold text-white mb-8 border-b-4 border-blue-500 pb-2 inline-block">Nossa História</h1>
        
        <div class="prose prose-lg prose-invert text-slate-400 space-y-6">
            <p>
                A <strong class="text-white">InfraFlow</strong> nasceu no seio do Laboratório Oficinas 4.0 do IFSP Campus Guarulhos. Mais do que uma aspiração empresarial, somos um trabalho de extensão acadêmica com um propósito claro: combater a desorganização que afeta as infraestruturas de TI modernas e implementar uma cultura de governança tecnológica rigorosa.
            </p>
            <p>
                Nossa equipe multidisciplinar une a excelência acadêmica às exigências práticas do mercado. Combinamos o desenvolvimento de software e interfaces com a engenharia de redes de alta performance e virtualização, criando uma ponte sólida entre o conhecimento adquirido na sala de aula e os desafios do mundo real.
            </p>
            <p>
                Acreditamos que a tecnologia deve ser um motor de estabilidade, não uma fonte de caos. É por isso que aplicamos metodologias ágeis e a cultura DevOps para transformar ambientes desestruturados em sistemas imutáveis, padronizados e documentados.
            </p>
        </div>

        <h2 class="text-3xl font-bold text-white mt-16 mb-8">Nossas Ações de Extensão</h2>
        <p class="text-lg text-slate-300 mb-10 border-l-4 border-blue-500 pl-6 bg-slate-800 p-6 rounded-r-lg shadow-md">
            <strong class="text-white">Como ajudamos:</strong> Utilizamos o nosso domínio em infraestrutura como código (IaC) para remover as barreiras tecnológicas de pequenas e médias empresas, garantindo que a estabilidade de nível corporativo seja acessível e compreensível.
        </p>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-slate-800 p-8 rounded-xl border border-slate-700 shadow-lg hover:border-blue-500 transition duration-300">
                <div class="flex items-center gap-3 mb-4">
                    <div class="bg-blue-500/20 p-3 rounded-lg text-blue-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white">Consultoria e Governança</h3>
                </div>
                <p class="text-slate-400">Analisamos a atual desorganização do seu ambiente de TI e entregamos um mapa claro de arquitetura, focando na resolução sistemática de problemas e na redução de falhas humanas.</p>
            </div>
            
            <div class="bg-slate-800 p-8 rounded-xl border border-slate-700 shadow-lg hover:border-blue-500 transition duration-300">
                <div class="flex items-center gap-3 mb-4">
                    <div class="bg-blue-500/20 p-3 rounded-lg text-blue-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-white">Capacitação Técnica</h3>
                </div>
                <p class="text-slate-400">Ensinamos a sua equipe a assumir o controle. Através de treinamentos em ferramentas como Docker e Terraform, garantimos que a tecnologia seja um processo dominado.</p>
            </div>
        </div>
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
