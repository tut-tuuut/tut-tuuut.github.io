<?php

$pastedSolution="1
7
4
2
9
3
8
5
6
8
5
3
1
7
6
9
4
2
9
6
2
5
8
4
3
1
7
2
4
1
8
3
5
6
7
9
6
8
9
7
4
1
5
2
3
7
3
5
9
6
2
4
8
1
5
2
8
3
1
9
7
6
4
3
1
6
4
5
7
2
9
8
4
9
7
6
2
8
1
3
5";
$solution = '';
$i=0;
foreach(explode("\n", $pastedSolution) as $digit) {
    if ($i%9 === 0 && $i>0) {
        $solution .= "\n";
    }
    $solution .= $digit;
    $i++;
}
var_dump($solution);

$sebastien = str_split_unicode('SOBASTIEN');

$lines = explode("\n", $solution);
foreach ($lines as $line) {
    echo "sébastien = $line\n";
    $anagramme = "";
    foreach ($lines as $subline) {
        $anag = str_replace(str_split_unicode($line), $sebastien, $subline);
        //echo implode(' ', str_split_unicode($anag));
        //echo PHP_EOL;
        $anagramme[] = str_split_unicode($anag);
    }
    analyse_anagramme($anagramme);
    echo PHP_EOL.'-----------------'.PHP_EOL;
}


echo PHP_EOL;

function str_split_unicode($str, $l = 0) {
    if ($l > 0) {
        $ret = array();
        $len = mb_strlen($str, "UTF-8");
        for ($i = 0; $i < $len; $i += $l) {
            $ret[] = mb_substr($str, $i, $l, "UTF-8");
        }
        return $ret;
    }
    return preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
}

function analyse_anagramme($anagramme) {
    $searchTermes = ['SANTO','BASSINE', 'SAINT', 'BONITS'];
    foreach($searchTermes as $terme) {
        for ($i = 0; $i < 9; $i++) {
            for ($j = 0; $j < 9; $j++) {
                $result = analyse_char($i, $j, 0, $anagramme, $terme, 0);
            }
        }
    }
}

function analyse_char($i, $j, $index, $graph, $search, $direction) {
    // $i et $j (entiers) = position horizontale et verticale du curseur ds le sudoku
    // $index (entier) = position dans le terme de recherche
    // $graph (tableau) = grille du sudoku
    // $search (chaîne de caractères) = terme recherché
    // $direction (entier 0, 1 ou 2) = direction dans laquelle on cherche
    if ($i > 8 || $j > 8) {
        return;
    }

    if ($graph[$i][$j] == $search[$index]) {
        if ($index === strlen($search) - 1) {
            echo "found $search !!!".PHP_EOL;
            display_anagramme($graph);
            return true;
        }
        if ($direction === 0 || $direction === 1) {
            // on cherche verticalement
            analyse_char($i+1, $j, $index + 1, $graph, $search, 1);
        }
        if ($direction === 0 || $direction === 2) {
            // on cherche horizontalement
            analyse_char($i, $j+1, $index + 1, $graph, $search, 2);
        }
    }
}

function display_anagramme($anagramme) {
    foreach ($anagramme as $line) {
        echo implode(' ', $line).PHP_EOL;
    }
}

// http://www.e-sudoku.fr n° 212983 - Niveau Moyen
// ---> presque bon (bassiné à la place de bassine)

// http://www.e-sudoku.fr n° 21531 - Niveau Moyen
// Sébastien sur la 3e ligne - bénits dans la dernière colonne
