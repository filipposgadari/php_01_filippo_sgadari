<!-- Crea una variabile di tipo Stringa chiamata $results che stampi a terminare il seguente testo, attraverso l’accesso agli array sopra: 
 “Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita“.

HINT:
Non tutti gli elementi all’interno dell’array sono utili, e alcuni elementi mancano proprio. Scegli come risolvere il problema nel modo piu' opportuno: nuove variabili, concatenamenti, ecc ecc. -->
<?php

$words1 = [
    'vostro',
    67,
    'essere',
    'colle',
    'mi',
    'sempre',
    [
        'oscura',
        'era',
        89,
        [
            'mezzo',
            'E'
        ],
        'ritrovai',
        'per'
    ],
    'diritta'
];

$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'possa',
    'elemento3' => [
        'Virgilio',
        'Favore',
        'favore',
        ['fortuna']
    ],
    'fine' => '!'
];

$nel = "Nel";
$di = "di";
$cammin = "cammin";
$nostra = "nostra";
$vita = "vita";
$una = "una";
$selva = "selva";
$che = "che'";
$la = "la";
$via = "via";
$smarrita = "smarrita";

$results = $nel . " " . $words1[6][3][0] . " " . $di . " " . $cammin . " " . $di . " " . $nostra . " " . $vita . " " . $words1[4] . " " . $words1[6][4] . " " . $words1[6][5] . " " . $una . " " . $selva . " " . $words1[6][0] . ", " . $che . " " . $la . " " . $words1[7] . " " . $via . " " . $words1[6][1] . " " . $smarrita . ". \n";

echo $results;