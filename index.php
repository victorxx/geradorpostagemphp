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
                "💰 Crédito pessoal fácil e rápido -> https://geocredibnkvitoria.com/",
                "💻 Contrate sua VPS agora -> https://wa.me/5527999860405",
                "📞 Cotação de seguros e consórcios: (27) 99949-7001 -> https://wa.me/5527999497001"
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
