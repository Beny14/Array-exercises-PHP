<?php
// Probleme Siruri
// .................. 1 ...............
/*
    Elementul unui şir poate fi orice tip de dată. Aceasta înseamnă că
    elementul şirului poate fi un număr, un string, o valoare boolean, dar şi
    un alt şir. Când un şir conţine un alt şir ca element, atunci spunem că
    acesta este un şir multidimensional.
*/
    // $cars = array(
    //     array("BMW",'525',2015),
    //     array("Audi",'A8',2014),
    //     array("Fiat",'500L',2015)
    // );
    // foreach($cars as $car){
    //     echo "Brand: " . $car[0] . ", model: " . $car[1] . ", age: " . $car[2] . ".</br>";
    // }

// .................. 2 ...............
/*
    Ambele funcţii( count(), sizeof() ) returnează ca valoare numărul elementelor din şir.
*/
    // $my_array = array("red","green","blue","yellow","purple");
    //     echo(sizeOf($my_array));
    //     echo "<br/>";
    //     echo(count($my_array));

// .................. 3 ...............

    // count() - Calculeaza cate elemente sunt intr-un array.
    // sizeof() - Calculeaza cate elemente sunt intr-un array.
    // sort() - Schimbă ordinea valorilor elementelor, dar nu şi a indexurilor.
    // asort() - Păstreaza indexul existent.
    // rsort() - Ordonează şirul în ordine descrescătoare.
    // ksort() - Ordonează şirul în ordine crescătoare.
    // shuffle() - Ordoneaza sirul in mod aleatoriu. 
    // array_slice($numeSir, poziţie, lungime) - Se poate crea un şir nou ca o submulţime a unui şir deja existent.
    // array_merge($numeSir1, $numeSir2) - Vă oferă posibilitatea să uniţi două şiruri într-unul singur.
    // explode(), implode() - Convertirea stringului în şir şi invers.
    // array_diff($sir1, $sir2, ...) - e identifică toate elementele care se găsesc în primul şir, însă nu şi în celelalte şiruri.
    // array_sum() - adună valorile care sunt elementele unui şir.
    // array_unique() -  pot fi eliminate elementele identice ale unui şir.
    // in_array() - Se verifica daca un element apartine sirului.

// .................. 4 ...............
/*
    Primul argument al acestei funcţii ( explode() ) determină caracterul care va fi
    utilizat pentru separarea stringului. Al doilea argument este textul care
    se împarte în secţiuni. Fiecare parte devine un element al şirului.
*/

    // $someWords = "Please don't blow me to pieces.";
    // $wordChunks = explode(" ", $someWords);

    //     for($i = 0; $i < count($wordChunks); $i++){
    //         echo "Piece $i = $wordChunks[$i] <br />";
    //     }
    
// .................. 5 ...............
/*
    În mod similar, elementele şirului pot fi unite într-un string cu ajutorul funcţiei implode():
*/
    // $words = array("Please", "don't", "blow", "me", "to", "pieces.");
    // $str = implode(" ", $words);

    // echo $str;

// .................. 6 ...............
/*
    Este definit următorul şir:
    $arr = array( 2, 5, 1, 7, 4, 3, 8 );
    Creați o aplicaţie care va sorta acest şir, astfel încât valorile să fie
    aranjate în ordine crescătoare de la cea mai mică către cea mai mare.
    Afişați şirul sortat la ieşire.
*/

    // $arr = array(2, 5, 1, 7, 4, 3, 8);
    //     for($i = 0; $i < count($arr); $i++){
    //         $min = $i;
    //         for($u = $i; $u < sizeof($arr); $u++){
    //             if($arr[$u] < $arr[$min]){
    //                 $min = $u;
    //             }
    //         }
    //         if($min != $i){
    //             $tmp = $arr[$i];
    //             $arr[$i] = $arr[$min];
    //             $arr[$min] = $tmp;
    //         }
    //     }
    // print_r($arr);

// .................. 7 ...............
/*
    Se dă următorul şir:
    $arr = array( 0, 1, 2, 3, 4, 5, 6, 7, 8 );
    Trebuie creat codul care va afişa fiecare membru al şirului, înmulţit cu
    membrul anterior al şirului.
    0
    0
    2
    6
    12
    20
    30
    42
    56
*/

    // $arr = array(0, 1, 2, 3, 4, 5, 6, 7, 8);

    // for ($i = 0; $i < sizeof($arr); $i++){ 
    //    if ($i > 0) {
    //     echo $arr[$i] + $arr[$i-1] . "<br>";
    //    }else{
    //     echo $arr[$i]."<br>";
    //     }
    // }

// .................. 8 ...............
/*
    Se dă următoarea variabilă: $lipsum = "..."
    Creaţi un program care va număra numărul exact de cuvinte din acest
    string şi care va emite un rezultat la ieşire în următorul format:
    Lorem : 4
    Ipsum : 3
    is : 1
    simply : 1
    dummy : 2
    text : 2
    of : 4

*/

    // $lipsum = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lore
    //     m Ipsum has been the industry's standard dummy text ever since the 1500s, when an unkno
    //     wn printer took a galley of type and scrambled it to make a type specimen book. It has surviv
    //     ed not only five centuries, but also the leap into electronic typesetting, remaining essentially
    //     unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lor
    //     em Ipsum passages, and more recently with desktop publishing software like Aldus PageMa
    //     ker including versions of Lorem Ipsum.";

    // $arr = explode(" ", $lipsum);
    // $words = array();
    // $counts = array();

    //     for($i = 0; $i < sizeof($arr); $i++){
    //         if(!in_array($arr[$i], $words)){
    //             $words[] = $arr[$i];
    //             $counts[] = 1;
    //         }else{
    //             for($u = 0; $u < sizeof($words); $u++){
    //                 if($words[$u] == $arr[$i]){
    //                     $counts[$u]++;
    //                 }
    //             }
    //         }
    //     }
    //     for($i = 0; $i < sizeof($words); $i++){
    //         echo($words[$i] . " : " . $counts[$i] . "<br>");
    //     }

// .................. 9 ...............
/*
    Scrieți un program care va accesa elementele şirului cu ajutorul buclei
    foreach şi al sistemului key=>value pentru un şir de produse lactate
    (milk, chocolate, cheese) şi preţurile lor în ordinea valorilor de la 89,
    75, 105.
*/

    // $product = ['milk' => '89', 'chocolate' => '75', 'cheese' => '105'];

    // foreach ($product as $products => $value) {
    //    echo $products . ' => ' . $value . '<br>';
    // }

// .................. 10 ...............
/*
    Să presupunem că vrem să depozităm nişte date în formă
    de tabel, astfel încât tabelul să conţină următoarele coloane: ID,
    Prenume, Nume, CNP. În acest caz, vom putea utiliza un şir bidimensional:
*/

// $arr = array(
//      array( 1, "John", "Miller", "1111111111111" ),
//      array( 2, "Peter", "Andersen", "2222222222222" ),
//      array( 3, "Ana", "Newman", "3333333333333")
//     );

//     for($i = 0; $i < count($arr); $i++){
//         echo $arr[$i][0] . " " . $arr[$i][1] . " " . $arr[$i][2] . " " . $arr[$i][3] ."<br>";
//     }
    
// .................. 11 ...............
/*
    O matrice cu valorile:
    1 2 3 4
    5 6 7 8
    9 0 1 2
*/

    // $arr = array(
    //         array( 1, 2, 3, 4 ),
    //         array( 5, 6, 7, 8 ),
    //         array( 9, 0, 1, 2 )
    //     );

    // for($sp = 0; $sp < count($arr); $sp++){
    //     for($up = 0; $up < count($arr[$sp]); $up++)
    //         echo $arr[$sp][$up] . " ";
    //         echo "<br>";
    // }

// .................. 12 ...............

    // print_r() - Descompune şirul, afişându-i cheile sau numerele indexurilor.
    // array_walk() - Se foloseşte pentru deplasarea elementelor din şir prin funcţia specificată.
    // array_fill() - Dacă dorim să formăm un șir populat cu o valoare statică.
    // array_flip() - Schimbă poziţiile cheilor şi ale valorilor.
    // array_pop() - Va extrage şi va şterge ultimul element din şir.
    // array_push() - Va adauga un element in sir.
    // list() - Atribuie valorile şirului către lista transmisă de variabile.

// .................. 13 ...............
/*
    Funcţia array_walk() se foloseşte pentru deplasarea elementelor din şir
    prin funcţia specificată. Cheile şi valorile elementului din şir reprezintă
    argumentele funcţiei. Dacă schimbările, pe care le provoacă funcţia pe
    chei şi valori, vrem să le salvăm imediat în acelaşi şir, atunci putem
    folosi operatorul & pentru indicarea la adresa de memorie.
*/

    // $arr = array("Romania" => "Bucharest", "France" => "Paris", "England" => "London");
    // array_walk($arr, 'arrFunc', ' is capital city of state which name is ');

    //     function arrFunc($key, $value, $p){
    //         echo $key . $p . $value . ".<br>";
    //     }

// .................. 14 ...............
/*
    Dacă dorim să formăm un șir populat cu o valoare statică, putem
    utiliza această funcţie, unde primul parametru este indexul de început
    al şirului, al doilea parametru este numărul membrilor inseraţi, iar
    ultimul parametru este valoarea care se inserează:
*/

    // $x = array_fill( 0, 10, "hello" );
    //     print_r( $x );

// .................. 15 ...............
/*
    Schimbă poziţiile cheilor şi ale valorilor. Dacă şirul este alcătuit din chei
    şi valori, această funcţie va înlocui cheile şi valorile, iar dacă şirul nu
    are chei, ci doar indexuri, această funcţie va înlocui indexurile
    membrilor cu valorile membrilor.
*/

    // $arr = array("Romania" => "Bucharest", "France" => "Paris", "England" => "London");
    // $x = array_flip($arr);
    //     print_r($x);

// .................. 16 ...............
/*
    Array_pop() va extrage şi va şterge ultimul element din şir, dar va pune
    un marker în poziţia sa precedentă.
*/

    // $arr = array("Bucharest", "Paris", "London", "Washington");
    // echo array_pop($arr);

// .................. 17 ...............
/*
    Ca să adăugăm un element în şir după acelaşi principiu, vom utiliza
    funcţia: array_push().

*/

    // $arr = array("Bucharest", "Paris", "London");
    // array_push($arr, "Washington");
    // print_r($arr);

// .................. 18 ...............
/*
    Atribuie valorile şirului către lista transmisă de variabile.
*/

    // $capitals = array("Bucharest", "Paris", "London");
    // list($Romania, $France, $England) = $capitals;
    // echo $France;

// .................. 19 ...............
/*
    Cu ajutorul buclei, treceți prin şirurile corespunzătoare, astfel încât să
    creați un tabel al dimensiunilor menționate în subşirul format, şirul
    table.
    Desenați un tabel astfel încât toate câmpurile libere să fie afișate cu
    semnul 0, iar toate câmpurile care se află în subşirul positions al șirului
    tabel să fie prezentate cu semnul X. Pentru şirul dat, ieşirea ar trebui
    să arate astfel:
    0000000
    0000000
    0000000
    X000000
    00X0000
    000X000
    00X0000
*/
    // $table = array(
    //     "format" => array(7, 7),
    //     "positions" => array(
    //                     array(3, 5),
    //                     array(1, 4),
    //                     array(4, 6),
    //                     array(3, 7)
    //                 )
    //             );

    // for($fh = 1; $fh <= $table['format'][1]; $fh++){
    //     for($fw = 1; $fw <= $table['format'][0]; $fw++){
    //         $pointExists = false;
    //         foreach($table['positions'] as $pos){
    //             if($pos[1] == $fh && $pos[0] == $fw){
    //                 echo 'X';
    //                 $pointExists = true;
    //             }
    //         }
    //         if(!$pointExists){
    //             echo '0';
    //         }
    //     }
    //     echo '<br>';
    // }

// .................. 20 ...............
/*
    Creați un program bazat pe numărul populației, pentru a crea un grafic
    primitiv în care să fie afişat numărul de locuitori pe o scară de la 1 la
    10, în funcție de procentaj. Se va forma un procent astfel încât orașul
    cu cea mai mare populație să fie de 100%.
    În diagramă, părțile incluse în scală trebuie prezentate cu semnul #, în
    timp ce părțile care nu acoperă valoarea nu ar trebui să fie prezentate
    (aceste semne sunt arbitrare).
    În partea de jos a listei, ar trebui să se afișeze pe verticală numele
    orașelor.
    Aspectul final al exemplului este următorul:
    #
    #
    # #
    # # #
    # # #
    # # #
    # # #
    # # #
    # # # #
    # # # #
    # # # #
    L B N P
    o e e a
    n l w r
    d g i
    o r Y s
    n a o
    d r
    e k 
*/
    // $population = array(
    //     "London" =>    7556900, 
    //     "Bucharest" => 1500000, 
    //     "New York" =>  8406000, 
    //     "Paris" =>     11836970
    // );

    // $max = 0;
    // $longestCityName = 0;

    // foreach($population as $k => $v){
    //     if($v > $max){
    //         $max = $v;
    //     }
    //     if(strlen($k) > $longestCityName){
    //         $longestCityName = strlen($k);
    //     }
    // }

    // $percent = 100 / $max;
    // for($i = 10; $i >= 0; $i--){
    //     foreach($population as $k => $v){
    //         $currentPercent = ceil(($percent * $v)/10);
    //         if($currentPercent >= $i){
    //             echo "#" . " ";
    //         }else{
    //             echo "<span style='color:white;'>#</span>" . " ";
    //         }
    //     }
    //     echo "<br>";
    // }

    // for($i = 0; $i < $longestCityName; $i++){
    //     foreach($population as $k => $v){
    //         if(strlen($k) > $i){
    //             $cityArr = str_split( $k );
    //             echo $cityArr[$i] . " ";
    //         }else{
    //             echo " ";
    //         }
    //     }
    // echo "<br>";
    // }
    
    echo "<h1 style='text-align:center;'>Exemplele sunt puse in '<span style='color:green;'>comentarii</span>', nu se va afisa nimic pe pagina, deschide-ti fisierul cu ajutorul unui editor code!</h1>";
?>