<?php
    // EPS
    // Estrutura de dados -> Variáveis e Arrays (indexado e associativo)

    $nome;
    $idade;
    $preço;

    // Processamento

    // Estruturas funcionais e estruturas condicionais

    /*
    // Exemplo ola mundo
    function ola_mundo (){
        echo "Ola mundo";
    };
    ola_mundo();
    ola_mundo();
    ola_mundo();
    */

    function apresentar_autor($nome, $obras){
        echo "<h4> Autor: ".$nome."</h4>";
        for ($x = 0; $x <= 2; $x++) {
            echo "<h4>Obras: ".$obras[$x]."</h4>";
        }

    };

    $arraydasilva = ["O IA", "A IA", "U IA"];
    /*
    apresentar_autor('Gustavos Gonçalves', array $arraydasilva);

    function apresentar_post($titulo, $subtitulo, $paragrafo){
        echo "<h1> $titulo </h1>";
        echo "<h3> $subtitulo </h3>";
        echo "<p> $paragrafo </p>";
    };

    apresentar_post("IA em programação", "Como IA afeta as profissões do futuro", "A IA chegou em nossas vidas...");
    */

    function calculadora($operacao){
        $valor1 = 2;
        $valor2 = 4;
        if ($operacao == "soma"){
            soma($valor1, $valor2);
        }
        else if ($operacao == "subtração"){
            subtracao($valor1, $valor2);
        }
        else if ($operacao == "multiplicação"){
            multiplicacao($valor1, $valor2);
        }
        else {
            divisao($valor1, $valor2);
        }
    }

    function soma ($valor1, $valor2){
        echo "A soma é ".$valor1 + $valor2."<br>";
    }
    function subtracao ($valor1, $valor2){
        echo "A diferença é ".$valor1 - $valor2;
    }
    function multiplicacao ($valor1, $valor2){
        echo "A multiplicação é ".$valor1 * $valor2;
    }
    function divisao ($valor1, $valor2){
        echo "A divisão é ".$valor1 / $valor2;
    }

    /*
    calculadora("soma");
    calculadora("multiplicação");
    */

    $pessoa = [
        'pessoa' => "Gustavo",
        'idade' => 20,
        'peso' => 50,
        'hobbies' => ["Filmes", "Jogos", "Futebol", "Charuto"]    
    ];

    function recomendar_lazer($hobbie, $idade){

        // operação
        /*
        unária -> ! etc
        binária -> >= etc
        ternária -> condição ? V : F
        */


        if ($idade >= 18){
            echo "conteúdos sensíveis";
            switch($hobbie){
                case "Filmes":
                    echo "Lista de Filmes";
                break;
                case "Futebol":
                    echo "Lista de partidas de Futebol";
                break;
                default:
                 "Lista genérica de conteúdo";
            }
        }
            echo "conteúdos gerais";
            switch($hobbie){
                case "Filmes":
                    break;
                    echo "Lista de Filmes";
                case "Jogos":
                    echo "Lista de Jogos";
                    break;
                case "Animes":
                    echo "Lista de Animes";
                    break;
                default:
                 "Lista genérica de conteúdo";
                }
            }

        recomendar_lazer($pessoa['hobbies'][0], $pessoa['idade']);

        function teste(){
            if (1 == 1){
                echo 'based!';
            }
        }
        teste();
        
?>