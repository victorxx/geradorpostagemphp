<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Geração automática de conteúdo com vídeos do YouTube, propagandas de serviços e hashtags regionais do Espírito Santo.">
    <meta name="author" content="Seu Nome ou Empresa">
    <title>POSTAGEM AUTOMÁTICA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        #conteudo {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            white-space: pre-wrap;
            max-height: 500px;
            overflow-y: auto;
        }
        button {
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h1>Postagem Automática</h1>

    <div id="conteudo">
        <?php
        // Gerar conteúdo apenas uma vez por execução da página (sem loop infinito)
        function getRandomPropaganda() {
            $propagandas = [
                "💻 VPS Rápido, Seguro e Barato -> https://filmeseserie.com.br/vps.html - WhatsApp: 27 99986-0405",
                "💻 VPS Rápido, Seguro e Barato -> https://www.espiritosanto-es.com.br/vps.html - WhatsApp: 27 99986-0405",
                "🚀 VPS de alta performance por um preço justo! Saiba mais: https://www.espiritosanto-es.com.br/vps.html - WhatsApp: 27 99986-0405",
                "🔐 Segurança, velocidade e preço acessível em um só lugar -> https://www.espiritosanto-es.com.br/vps.html - WhatsApp: 27 99986-0405",
                "🖥️ Hospede seu projeto com estabilidade e suporte! -> https://www.espiritosanto-es.com.br/vps.html - WhatsApp: 27 99986-0405",
                "⚙️ VPS confiável e pronta para rodar seu sistema! Contrate agora -> https://www.espiritosanto-es.com.br/vps.html - WhatsApp: 27 99986-0405",
                "💻 A VPS que você precisa com o suporte que merece -> https://www.espiritosanto-es.com.br/vps.html - WhatsApp: 27 99986-0405",
                "📡 Infraestrutura profissional, ideal para devs e empresas -> https://www.espiritosanto-es.com.br/vps.html - WhatsApp: 27 99986-0405",
                "📲 Precisa de uma VPS com urgência? Ativação imediata! -> https://www.espiritosanto-es.com.br/vps.html - WhatsApp: 27 99986-0405",
                "🌐 Estável, econômica e com atendimento top! Confira -> https://www.espiritosanto-es.com.br/vps.html - WhatsApp: 27 99986-0405",
                "🔥 VPS premium com preço acessível! Veja agora -> https://www.espiritosanto-es.com.br/vps.html - WhatsApp: 27 99986-0405",
                "💻 VPS Rápido, Seguro e Barato -> https://www.espiritosanto-es.com.br/vps.html - WhatsApp: 27 99986-0405",
                "💰 Crédito pessoal fácil e rápido -> https://geocredibnkvitoria.com/",
                "💻 Contrate sua VPS agora -> https://wa.me/5527999860405",
                "💻 Contrate sua VPS agora -> https://wa.me/5527999860405",
                "⚙️ VPS rápida, segura e estável. Fale no WhatsApp: https://wa.me/5527999860405",
                "🚀 Tenha sua própria VPS com desempenho profissional! -> https://wa.me/5527999860405",
                "🔐 Segurança, estabilidade e velocidade em uma só VPS -> https://wa.me/5527999860405",
                "💻 Servidores dedicados por preço acessível! Fale agora: https://wa.me/5527999860405",
                "🖥️ VPS ideal para bots, sites, automações e muito mais -> https://wa.me/5527999860405",
                "📡 Infraestrutura confiável com suporte rápido. Contrate já: https://wa.me/5527999860405",
                "🌐 Hospede seu projeto com performance top! VPS disponível: https://wa.me/5527999860405",
                "⚡ VPS com ativação imediata e 100% funcional -> https://wa.me/5527999860405",
                "📲 Atendimento rápido via WhatsApp! Garanta sua VPS agora -> https://wa.me/5527999860405",
                "📞 Cotação de seguros e consórcios:  (27) 99949-7001 -> https://wa.me/5527999497001",
                "📞 Faça sua cotação agora com as melhores seguradoras! WhatsApp: (27) 99949-7001 -> https://wa.me/5527999497001",
                "💸 Economize no seu seguro! Atendimento rápido e fácil -> https://wa.me/5527999497001",
                "🛡️ Proteja o que é seu! Cote seu seguro sem sair de casa -> https://wa.me/5527999497001",
                "🚗 Seguro auto, residencial, vida e mais! Fale conosco -> https://wa.me/5527999497001",
                "💰 Quer consórcio com parcelas que cabem no seu bolso? Chama no zap -> https://wa.me/5527999497001",
                "✅ Atendimento personalizado em seguros e consórcios! WhatsApp: (27) 99949-7001",
                "📲 Simule agora seu consórcio ou seguro! É rápido e gratuito -> https://wa.me/5527999497001",
                "💬 Fale direto com um consultor especializado via WhatsApp -> https://wa.me/5527999497001",
                "💡 Seguro ideal pra você? A gente te ajuda a encontrar! -> https://wa.me/5527999497001",
                "📈 Faça seu dinheiro render com consórcios inteligentes. Fale conosco -> https://wa.me/5527999497001",
                "💰 Crédito pessoal fácil e rápido -> https://geocredibnkvitoria.com/",
                "✅ Precisa de dinheiro? Crédito aprovado em minutos! Acesse: https://geocredibnkvitoria.com/",
                "📲 Dinheiro rápido na conta! Faça sua simulação: https://geocredibnkvitoria.com/",
                "💳 Empréstimo sem complicação! Solicite agora: https://geocredibnkvitoria.com/",
                "⚡ Crédito rápido, seguro e sem burocracia -> https://geocredibnkvitoria.com/",
                "🤑 Realize seus planos com crédito pessoal acessível -> https://geocredibnkvitoria.com/",
                "💸 Empréstimo para negativado? Aqui tem! Veja agora: https://geocredibnkvitoria.com/",
                "📞 Fale com um consultor e consiga seu crédito fácil: https://geocredibnkvitoria.com/",
                "📈 Dinheiro para o que você precisa, com aprovação ágil! -> https://geocredibnkvitoria.com/",
                "💼 Crédito pessoal com parcelas que cabem no seu bolso -> https://geocredibnkvitoria.com/",


            ];
            return $propagandas[array_rand($propagandas)];
        }

        function getRandomTag() {
            $tags = [
                "#MoquecaCapixaba", "#VitóriaES", "#Guarapari", "#VilaVelha", "#TurismoES", "#GastronomiaCapixaba",
                "#PraiaDaCosta", "#ConventoDaPenha", "#EspíritoSanto", "#GrandeVitória", "#CapixabaDaGema"
            ];
            return $tags[array_rand($tags)];
        }

        function getYoutubeLinks($query = "noticia vitoria es") {
            $query = urlencode($query);
            $url = "https://www.youtube.com/results?search_query={$query}";

            $html = @file_get_contents($url);
            if (!$html) return [];

            preg_match_all('/\/watch\?v=[\w-]{11}/', $html, $matches);
            $uniqueLinks = array_unique($matches[0]);

            return array_map(fn($path) => "https://www.youtube.com{$path}", $uniqueLinks);
        }

        function gerarTextoFinal() {
            $propaganda = getRandomPropaganda();
            $tag = getRandomTag();
            $links = getYoutubeLinks();

            if (empty($links)) {
                return "Nenhum link encontrado.";
            }

            $linkAleatorio = $links[array_rand($links)];
            $randomString = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 33)), 0, 33);

            $textoFinal = "{$propaganda}\n\n{$linkAleatorio}\n\n{$tag}\n\n{$randomString}";

            // Opcional: salvar no arquivo local
            $filePath = __DIR__ . "/colartexto.txt";
            file_put_contents($filePath, $textoFinal);

            return htmlspecialchars($textoFinal);
        }

        echo gerarTextoFinal();
        ?>
    </div>

    <button onclick="copiarConteudo()">📋 Copiar Conteúdo</button>

    <script>
        function copiarConteudo() {
            const texto = document.getElementById("conteudo").innerText;
            navigator.clipboard.writeText(texto).then(() => {
                alert("Conteúdo copiado com sucesso!");
            }).catch(err => {
                alert("Erro ao copiar: " + err);
            });
        }
    </script>

</body>
</html>
