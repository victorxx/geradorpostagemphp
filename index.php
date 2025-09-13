<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Geração automática de conteúdo com vídeos do YouTube, propagandas de serviços e hashtags regionais do Espírito Santo.">
    <meta name="author" content="Seu Nome ou Empresa">
    <title>Conteúdo Capixaba Automatizado</title>
</head>
<body>
    <?php

    function getRandomPropaganda() {
        $propagandas = [
            "💻 VPS Rápido, Seguro e Barato -> https://filmeseserie.com.br/vps.html  Desempenho estável, segurança garantida e preços acessíveis! contato whatsapp 📲 Fale agora no WhatsApp:27 99986-0405",
            "PRECISA DE CRÉDITO PESSOAL TA AQUI A SOLUÇÃO -> https://geocredibnkvitoria.com/",
            "💻 VPS Rápido, Seguro e Barato  Desempenho estável, segurança garantida e preços acessíveis! contato whatsapp 📲 Fale agora no WhatsApp: https://wa.me/5527999860405",
            "Solicite sua cotação de seguros, consórcios e muito mais! Atendimento com todas as seguradoras. 📞 (27) 99949-7001 CONTATO: https://wa.me/5527999497001",
            "💻 VPS Rápido, Seguro e Barato -> https://www.espiritosanto-es.com.br/vps.html  Desempenho estável, segurança garantida e preços acessíveis! contato whatsapp 📲 Fale agora no WhatsApp:27 99986-0405",
            "PRECISA DE CRÉDITO PESSOAL TA AQUI A SOLUÇÃO -> https://geocredibnkvitoria.com/ Telefone: (27) 99726-9454...",
            "Solicite sua cotação de seguros, consórcios e muito mais! Atendimento com todas as seguradoras. 📞 (27) 99949-7001 CONTATO:",
            "💻 VPS Rápido, Seguro e Barato  Desempenho estável, segurança garantida e preços acessíveis! contato whatsapp 📲 Fale agora no WhatsApp:27 99986-0405"
        ];

        return $propagandas[array_rand($propagandas)];
    }

    function getRandomTag() {
        $tags = [
                                "#MoquecaCapixaba", "#ComidaCapixaba", "#GastronomiaCapixaba",
                                "#VilaVelha", "#VitóriaES", "#Guarapari", "#VixDaDepressao",
                                "#VilavelhaPraias", "#vilavelhaes", "#praiadacosta", "#conventodapenha",
                                "#vilavelhapraias", "#turismovilavelha",
                                  "#MoquecaCapixaba", "#ComidaCapixaba", "#GastronomiaCapixaba", "#CulináriaCapixaba", "#MoquecaÉCapixaba", "#GastronomiaES", "#ComidaDeVerdade", "#ComidaDoES", "#ComidaTípicaCapixaba", "#SaboresCapixabas", "#RestaurantesES", "#ComidaDeBotecoES", "#FeiraCapixaba", "#CaféCapixaba", "#ComidaArtesanalES", "#DelíciasCapixabas", "#PeixeFritoES", "#ArrozComPeixe", "#ComidaCaseiraES", "#CapixabaDaGema", "#CapixabaNaCozinha",
                                "#ChurrascoCapixaba", "#ChurrascoES", "#ChurrasNoES", "#ChurrascoDeFDS", "#Churrasqueada", "#CarnesDoES", "#EspetinhoCapixaba", "#CostelaNoFogoDeChão", "#PicanhaCapixaba", "#ChurrasEntreAmigos", "#ChurrascoArtesanal", "#ChurrascoDeVerdade", "#ChurrascoNaBrasa",
                                "#Vitória", "#VilaVelha", "#Serra", "#CariacicaES", "#Guarapari", "#Linhares",
                                "#DomingosMartins", "#MontanhasCapixabas", "#ESéLindo", "#Capixabinha", "#OrgulhoCapixaba",
                                "#CapixabaDaGema", "#RoleCapixaba", "#PraiadoCanto", "#Camburi", "#CurvaDaJurema",
                                "#VilaVelhaVistaLinda", "#PraiaDoMorro", "#PedraAzul", "#PraiaES", "#SolES",
                                "#LitoralES", "#ESNatureza", "#CachoeirasES", "#EcoturismoES", "#VitoriaVix",
                                "#CentroDeVitoria", "#IlhaDoBoi", "#IlhaDoFrade", "#SantaLuzia", "#PancasES", "#ValeDoCafésES",
                                "#VitóriaES", "#VilaVelhaES", "#SerraES", "#Cariacica", "#EspíritoSanto", "#GrandeVitória",
                                "#Capixaba", "#Vix", "#PraiaES", "#OrlaCapixaba", "#TurismoES", "#VidaCapixaba",
                                "#CulturaCapixaba", "#GastronomiaES", "#LitoralCapixaba", "#Brasil", "#ES",
                                "#NaturezaCapixaba", "#AmoES", "#DescubraES", "#FotografiaES", "#ExploreES", "#PéNaAreia",
                                "#SolCapixaba", "#ViagemES", "#Capixabando", "#VixDaDepressao", "#IlhaDoMelES",
                                "#PedraDaCebola", "#ConventoDaPenha", "#ManguinhosES", "#PraiaDaCosta", "#MeioAmbienteES",
                                "#EspíritoSanto", "#TurismoES", "#VitoriaES", "#VilaVelhaES", "#Guarapari", "#DomingosMartins",
                                "#PraiasDoES", "#LitoralCapixaba", "#NaturezaCapixaba", "#MeioAmbienteCapixaba", "#TrilhasES",
                                "#PicoDaBandeira", "#MorroDoMoxuara", "#PedraAzul", "#ParqueDaFonteGrande", "#IlhaDoFrade",
                                "#IlhaDoBoi", "#PraiaDeCamburi", "#PraiaDeItaparica", "#AmoES", "#VemProES", "#DescubraES",
                                "#ESMaravilhoso", "#BelezasCapixabas", "#NaturezaES", "#Industrial", "#Ipanema", "#Soteco",
                                "#ValedoSol", "#VilaBethânia", "#BomPastor", "#MoradaBethânia", "#ParqueResidencialBethânia",
                                "#VillageBelém", "#NovaBelém", "#VistaLinda", "#TrezedeMaio", "#ChácarasBeiraRio", "#Guaritas",
                                "#Seminário", "#Antártica", "#Mamoeiro", "#Garoupa", "#PedraDaMulata", "#ValeDoSolA", "#ValeDoSolB",
                                "#ValeDoSolC", "#ValeDoSolD", "#Calabouço", "#Buiaiaras", "#TrezeDeMaio", "#NovaVilaBethânia",
                                "#Eldorado", "#SantaTerezinhaLagoaAzul", "#VilaNova", "#ParqueDoFlamengo", "#NovaViana",
                                "#NovaVianaI", "#ChácarasPedraNegra", "#VistaLinda", "#EstradaDaGaroupa", "#RuaBiricas",
                                "#RuaBomJesusDoMorroDeBaixo", "#RuaPresídio", "#RuaPedraDaMulata", "#RuaSãoPauloDeCima",
                                "#RuaPauAmarelo", "#RuaAugustoAlvesDeAraújo", "#RuaDomingosVicente", "#RuaFredericoOzanan",
                                "#RuaGovernadorRubim", "#RuaHeribaldoLopesBalestrero", "#AvenidaAníbalMoutinho", "#AvenidaBeiraRio",
                                "#VianaES", "#CulturaVianense", "#HistóriaDeViana", "#CentroDeViana", "#MarcílioDeNoronha",
                                "#Araçatiba", "#Jucu", "#VianaSede", "#GrandeVitoria", "#TurismoViana", "#NaturezaViana",
                                "#TrilhasDeViana", "#IgrejaDeViana", "#GastronomiaViana", "#ComidaCapixaba", "#ArtesanatoCapixaba",
                                "#VianaRural", "#CaféDeViana", "#FeiraDeViana", "#LagoaDeCaracás", "#PedraDaMulata",
                                "#CachoeirasDeViana", "#CaminhosDeViana", "#CulturaCapixaba", "#EspíritoSanto", "#InteriorCapixaba",
                                "#TradiçãoVianense", "#FotosDeViana", "#VianenseComOrgulho", "#VianaAntiga", "#VianaModerna",
                                "#EventosEmViana", "#FestaDeViana", "#PatrimônioHistórico", "#CaminhosDoES", "#RuasDeViana",
                                "#BairrosDeViana", "#IgrejaNossaSenhoraDaConceição", "#PovoDeViana", "#TurismoCapixaba",
                                "#VianaTem", "#VianaÉLinda", "#VianaÉCultura", "#VianaESBrasil", "#CidadeDeViana", "#MoradoresDeViana",
                                "#VidaEmViana", "#Vianando", "#DescubraViana", "#PaixãoPorViana",
                                "#vilavelha", "#vilavelhagastronomia", "#comidavilavelha", "#vilavelharestaurantes",
                                "#comidacapixaba", "#gastronomiacapixaba", "#vilavelhadelivery", "#vilavelhabares",
                                "#vilavelhalanches", "#vilavelhafoodie", "#vilavelharestô", "#vilavelhapratos", "#foodvilavelha",
                                "#vilavelhaes", "#praiadacosta", "#conventodapenha", "#vilavelhapraias", "#turismovilavelha",
                                "#vilavelhabeach", "#vilavelhanatureza", "#vilavelhaparaiso", "#vilavelhatrip",
                                "#vilavelhaturismo", "#vilavelhasunset", "#vilavelhapordosol", "#vilavelhaurbana",
                                "#vilavelhastyle", "#vilavelhavibes", "#vilavelhanight", "#vilavelhaevento", "#vilavelharole",
                                "#vilavelhapasseio", "#vilavelhashopping", "#vilavelhacultura", "#vilavelhaart", "#vilavelhafeira",
                                "#vilavelhafds", "#vilavelhafitness", "#vilavelhasesaude", "#vilavelhatreino", "#vilavelhasurf",
                                "#vilavelharun", "#vilavelhapraiaativa", "#vilavelhafit", "#vilavelhayoga",
                                "#vilavelhavlog", "#vilavelhastory", "#vilavelhafilme", "#vilavelhaporai", "#vilavelhafotos",
                                "#vilavelhavisual", "#vilavelhareels", "#vilavelhashorts",
                                "#serravisual", "#serrareels", "#serrashorts",
                                        "#cariacicavisual", "#cariacicareels", "#cariacicashorts",
                                        "#vitóriavisual", "#vitóriareels", "#vitóriashorts",
                                        "#cachoeirovisual", "#cachoeiroreels", "#cachoeiroshorts",
                                        "#linharesvisual", "#linharesreels", "#linharesshorts",
                                        "#guaraparivisual", "#guaraparireels", "#guapararishorts",
                                        "#saomateusvisual", "#saomateusreels", "#saomateusshorts",
                                        "#colatinavisual", "#colatinareels", "#colatinashorts",
                                        "#aracruzvisual", "#aracruzreels", "#aracruzshorts",
                                        "#vianavisual", "#vianareels", "#vianashorts",
                                        "#novaveneciavisual", "#novaveneciareels", "#novaveneciashorts",
                                        "#barradesaofrancisvisual", "#barradesaofrancisareels", "#barradesaofranciasshorts",
                                        "#santamariadejetibavisual", "#santamariadejetibareels", "#santamariadejetibashorts",
                                        "#itapemirimvisual", "#itapemirimreels", "#itapemirimshorts",
                                        "#castelovisual", "#casteloreels", "#casteloshorts",
                                        "#domingosmartinsvisual", "#domingosmartinsreels", "#domingosmartinsshorts",
                                        "#saogabrieldapalhavvisual", "#saogabrieldapalhareels", "#saogabrieldapalhashorts",
                                        "#afonsoclaudiovisual", "#afonsoclaudioreels", "#afonsoclaudioshorts",
                                        "#baixoguanduvisual", "#baixoguandureels", "#baixoguandushorts",
                                        "#anchietavisual", "#anchietareels", "#anchietashorts",
                                        "#guacuiVisual", "#guacuireels", "#guacuishorts",
                                        "#alegrevisual", "#alegrereels", "#alegreshorts",
                                        "#jagarereelsvisual", "#jagarereelsreels", "#jagarereelsshorts",
                                        "#iúnavisual", "#iúnareels", "#iúnashorts",
                                        "#conceicaodabarraVisual", "#conceicaodabarrareels", "#conceicaodabarrashorts",
                                        "#sooretamavisual", "#sooretamareels", "#sooretamashorts",
                                        "#ibatibavisual", "#ibatibareels", "#ibatibashorts",
                                        "#pinheirosvisual", "#pinheirosreels", "#pinheirosshorts",
                                        "#vendanovadoimigrantevisual", "#vendanovadoimigrantereels", "#vendanovadoimigranteshorts",
                                        "#santateresavisual", "#santateresareels", "#santateresashorts",
                                        "#piúmavisual", "#piúmareels", "#piúmashorts",
                                        "#ecoporangavisual", "#ecoporangareels", "#ecoporangashorts",
                                        "#pedrocanáriovisual", "#pedrocanárioreels", "#pedrocanárioshorts",
                                        "#vargemaltavisual", "#vargemaltareels", "#vargemaltashorts",
                                        "#riobananalvisual", "#riobananalreels", "#riobananalshorts",
                                        "#montanhavisual", "#montanhareels", "#montanhashorts",
                                        "#pancasvisual", "#pancasreels", "#pancasshorts",
                                        "#munizfreirevisual", "#munizfreireeels", "#munizfreireshorts",
                                        "#fundãovisual", "#fundãoreels", "#fundãoshorts",
                                        "#marechalflorianovisual", "#marechalflorianoreels", "#marechalflorianoshorts",
                                        "#joãoneivavisual", "#joãoneivareels", "#joãoneivashorts",
                                        "#alfredochavesvisual", "#alfredochavesreels", "#alfredochavesshorts",
                                        "#muquivisual", "#muquireels", "#muquishorts",
                                        "#vilavaleriovisual", "#vilavalerioreels", "#vilavaleriashorts",
                                        "#irupivisual", "#irupireels", "#irupishorts",
                                        "#presidentekennedyvisual", "#presidentekennedyreels", "#presidentekennedysorts",
                                        "#boaesperançavisual", "#boaesperançareels", "#boaesperançashorts",
                                         "#itaguaçúvisual", "#itaguaçúreels", "#itaguaçúshorts",
                                        "#santaleopoldinavisual", "#santaleopoldinareels", "#santaleopoldinashorts",
                                        "#brejetubavisual", "#brejetubareels", "#brejetubashorts",
                                        "#marilándiavísual", "#marilándiareels", "#marilándiashorts",
                                        "#comidavisual", "#comidareels", "#comidashorts", "#gastronomiavisual", "#gastronomiareels", "#gastronomiashorts", "#culináriavisual", "#culináriareels", "#culináriashorts", "#docesvisuais", "#docesreels", "#docesshorts", "#salgadosvisuais", "#salgadosreels", "#salgadosshorts", "#padariavisual", "#padariareels", "#padariashorts", "#restaurantevisual", "#restaurantereels", "#restauranteshorts", "#chefvisual", "#chefreels", "#chefshorts", "#cozinhavisual", "#cozinhareels", "#cozinhashorts",
                                        "#ruaalankardec", "#ruamoema", "#ruasaogabriel", "#ruagetuliofreirenunes", "#ruaanitagaribaldi", "#ruadocoqueiro", "#ruamiracema", "#avenidalucianodasneves,", "#ruavenus", "#ruaveracruz", "#ruarepublica", "#ruafloresta", "#avenidacarloslindenberg", "#rua7dejunho",
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
            echo "<p>Nenhum link encontrado.</p>";
            return;
        }

        $linkAleatorio = $links[array_rand($links)];
        $randomString = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 33)), 0, 33);

        $textoFinal = "{$propaganda}\n\n{$linkAleatorio}\n\n{$tag}\n\n{$randomString}";

        $filePath = "C:\\Users\\vitor\\Desktop\\colartexto.txt"; // Ajuste se necessário
        file_put_contents($filePath, $textoFinal);

        echo "<pre>" . htmlspecialchars($textoFinal) . "</pre>";
    }

    // Executa em loop
    while (true) {
        gerarTextoFinal();
        sleep(23);
        if (strncasecmp(PHP_OS, 'WIN', 3) == 0) {
            system('cls');
        } else {
            system('clear');
        }
    }

    ?>
</body>
</html>
