<?php

function getRandomPropaganda() {
    $propagandas = [
        "💻 VPS Rápido, Seguro e Barato -> https://filmeseserie.com.br/vps.html  Desempenho estável, segurança garantida e preços acessíveis! contato whatsapp 📲 Fale agora no WhatsApp:27 99986-0405",
        "PRECISA DE CRÉDITO PESSOAL TA AQUI A SOLUÇÃO -> https://geocredibnkvitoria.com/ ",
        "💻 VPS Rápido, Seguro e Barato  Desempenho estável, segurança garantida e preços acessíveis! contato whatsapp 📲 Fale agora no WhatsApp: CONTATO: https://wa.me/5527999860405",
        "Solicite sua cotação de seguros, consórcios e muito mais! Atendimento com todas as seguradoras. 📞 (27) 99949-7001 CONTATO: https://wa.me/5527999497001",
        "💻 VPS Rápido, Seguro e Barato -> https://www.espiritosanto-es.com.br/vps.html  Desempenho estável, segurança garantida e preços acessíveis! contato whatsapp 📲 Fale agora no WhatsApp:27 99986-0405",
        "PRECISA DE CRÉDITO PESSOAL TA AQUI A SOLUÇÃO -> https://geocredibnkvitoria.com/ Telefone: (27) 99726-9454...",
        "Solicite sua cotação de seguros, consórcios e muito mais! Atendimento com todas as seguradoras. 📞 (27) 99949-7001 CONTATO:",
        "💻 VPS Rápido, Seguro e Barato  Desempenho estável, segurança garantida e preços acessíveis! contato whatsapp 📲 Fale agora no WhatsApp:27 99986-0405"
    ];

    return $propagandas[array_rand($propagandas)];
}

function getRandomTag() {
    $tags = ["#MoquecaCapixaba", "#ComidaCapixaba", "#GastronomiaCapixaba", "#VilaVelha", "#VitóriaES", "#Guarapari", "#VixDaDepressao", "#VilavelhaPraias","#vilavelhaes", "#praiadacosta", "#conventodapenha",                "#vilavelhapraias", "#turismovilavelha",];
    return $tags[array_rand($tags)];
}

function getYoutubeLinks($query = "noticia vitoria es") {
    $query = urlencode($query);
    $url = "https://www.youtube.com/results?search_query={$query}";

    $html = file_get_contents($url);
    if (!$html) return [];

    preg_match_all('/\/watch\?v=[\w-]{11}/', $html, $matches);

    $uniqueLinks = array_unique($matches[0]);
    $fullLinks = array_map(function ($path) {
        return "https://www.youtube.com{$path}";
    }, $uniqueLinks);

    return $fullLinks;
}

function gerarTextoFinal() {
    $propaganda = getRandomPropaganda();
    $tag = getRandomTag();
    $links = getYoutubeLinks();

    if (empty($links)) {
        echo "Nenhum link encontrado.\n";
        return;
    }

    $linkAleatorio = $links[array_rand($links)];
    $randomString = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 33)), 0, 33);

    $textoFinal = "{$propaganda}\n\n{$linkAleatorio}\n\n\n\"{$tag}\"\n\n\n{$randomString}";

    $filePath = "C:\\Users\\vitor\\Desktop\\colartexto.txt"; // Altere se necessário
    file_put_contents($filePath, $textoFinal);

    echo "\n";
    echo $textoFinal . "\n";
}

// Executa em loop
while (true) {
    gerarTextoFinal();
    echo "\n";
    sleep(23);
    if (strncasecmp(PHP_OS, 'WIN', 3) == 0) {
        system('cls');
    } else {
        system('clear');
    }
}
?>
