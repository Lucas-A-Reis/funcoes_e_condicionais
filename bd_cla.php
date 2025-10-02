<?php
function descrever_cla($numero_elfo){
        
    
        if ($numero_elfo == 1){
            return 'Os Avari (em quenya "Os relutantes") são os elfos que recusaram o convite de Oromë e não partiram na jornada ao oeste. Pouco se sabe sobre eles e teoriza-se que tenha sido deles que Morgoth obteve os elfos usados para criar os primeiros orcs (segundo a versão da origem dos orcs relatada no Silmarillion). <br>
            Seis endoetnomios avari são mencionados, todos cognatos do termo "quendi":  Kindi, Cuind, Hwenti, Windan, Kinn-lai e Penni. Não se sabe em que medida esta diferença de nomes corresponde às subdivisões tribais entre eles.';
        }
        else if ($numero_elfo == 2){
            return 'Os Falmari são os Teleri que chegaram em Aman. Eram apaixonados pelo mar e passavam o dia fazendo música junto as ondas que arrebentavam na praia das terras imortais. O rei deles era Olwë, o avô da Galadriel, que, durante a fuga dos Ñoldor, recusou a Fëanor o apoio dos Falmari com as seguintes palavras: "Quanto a nossas alvas embarcações, essas vocês não nos deram. Não aprendemos esse ofício com os noldor, mas com os Senhores do Mar; e as madeiras claras trabalhamos com nossas próprias mãos; e as velas brancas foram tecidas por nossas esposas e filhas. Por isso, não nos dispomos a dá-las nem vendê-las por nenhuma aliança ou amizade. Pois eu lhe digo, Fëanor, filho de Finwë, elas são para nós como são as pedras preciosas dos noldor: as obras que mais prezamos, iguais às quais não voltaremos a fazer outras." Depois desta recusa, os Ñoldor guerrearam contra os Falmari para tomar as embarcações à força no evento que ficou conhecido como "Fratricído de Aqualondë"';
        }
        else if ($numero_elfo == 3){
            return 'Os Sindar são descendentes dos Teleri que ficaram em Beleriand. Acontece que os Teleri, durante a jornada, tinham dois líderes: Olwë e Elwë. Um dia, Elwë encontrou a Maia Melian, serva de Varda, numa floresta, e os dois ficaram se encarando e as estrelas giraram muitas vezes sobre suas cabeças antes que dissessem uma palavra sequer. Os Teleri que se cansaram de esperar e partiram deram origem aos Falmari e aos Falathrin, sendo estes últimos os elfos das Falas que preferiram ficar na praia de Beleriand do que atravessar o grande mar. Os que esperaram Elwë se chamavam "Eglath", os esquecidos. Os Eglath e os Falathrin são os ancestrais de todos os Sindar. 
            Quando Elwë (ou melhor, Elu Thingol, que significa Elu manto-gris) apareceu casado com Melian, os dois se tornaram rei e rainha de jure de toda Beleriand.
            Depois da Guerra da Ira, Sindar que ficaram na Terra-Média construiram os portos cinzentos em Lindon e, depois, sob a liderança de Celeborn, foram para Eriador. Mas houve os que foram ainda mais pro leste, cruzaram as montanhas sombrias e se misturaram com seus parentes os elfos selvagens. Um destes foi Amdír, fundador de um reino em Lórien (governado por Galadriel e seu marido durante os eventos de o Senhor dos Anéis), e um outro foi Oropher, fundador de um reino em Mirkwood e avô do Légolas.
            Os Sindar amam as estrelas e são muito devotos de Varda, a quem chamam Elbereth em sua língua. A Elbereth Giltoniel, que aparece em O Senhor dos Anéis, é um hino sindarin dedicado a ela.';
        }
        else if ($numero_elfo == 4){
            return 'Os Vanyar são os elfos mais certinhos e os únicos descritos como loiros. São dos elfos os menos parecidos conosco, tanto que a única vez em que puseram o pé na terra média depois da jornada ao oeste foi a pedido dos valar na Guerra da Ira. Assim, eles vivem nas terras imortais contemplando o que há de bonito em Ëa. Seu rei, Ingwë, tem o título de Alto-Rei de todos os elfos. Outro Vanya notável é Indis, madrasta de Fëanor e mãe de Finarfin e Fingolfin. Os Vanyar são muito amigos de Manwë e moram ao pé da Taniquetil.';
        }
        else if ($numero_elfo == 5){
            return 'O clã Ñoldor é composto pelos elfos "do meio", ou seja, são os irmãos mais novos dos Vanyar e os irmãos mais velhos dos Teleri. Já foram chamados de "gnomos" por estarem intimamente ligados ao conhecimento. Porém, diferente dos Vanyar, os Ñoldor preferem conhecimentos produtivos e habilidades manuais ao invés da contemplação pura das coisas que são. Em geral são muito inteligentes, mas pouco sábios e, por isso mesmo, são os responsáveis pelas maiores barbaridades e guerras da história de Arda.';
        }
        else{
            return 'não identificado';
        }
    };
?>