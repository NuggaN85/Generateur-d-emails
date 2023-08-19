<?php
$limit = 5000; // Nombre d'emails à générer
$page = '';

for ($i = 0; $i < $limit; $i++) {
    $page .= generate_emails();
}

function generate_emails() {
    $names = array(
        // Liste des noms
    );

    $domainPartA = array(
        // Liste des domaines Part A
    );

    $domainPartB = array(
        // Liste des domaines Part B
    );

    $domainPartC = array(
        // Liste des domaines Part C
    );

    $domainPartD = array(
        // Liste des domaines Part D
    );

    $extensions = array(
        // Liste des extensions de domaine
    );

    $rand = mt_rand(0, 5);

    $A = "";
    $B = "";
    $name = "";

    switch ($rand) {
        case 0:
            $A = $names[mt_rand(0, count($names) - 1)];
            $B = $domainPartA[mt_rand(0, count($domainPartA) - 1)];
            break;
        case 1:
            $A = $names[mt_rand(0, count($names) - 1)];
            $B = $domainPartC[mt_rand(0, count($domainPartC) - 1)];
            break;
        case 2:
            $A = $names[mt_rand(0, count($names) - 1)];
            $B = $names[mt_rand(0, count($names) - 1)];
            break;
        case 3:
            $A = $names[mt_rand(0, count($names) - 1)];
            break;
        case 4:
            $A = $domainPartA[mt_rand(0, count($domainPartA) - 1)];
            break;
        case 5:
            $A = $domainPartC[mt_rand(0, count($domainPartC) - 1)];
            break;
    }

    if ($B !== "") {
        $rand = mt_rand(0, 1);

        if ($rand === 0) {
            $email = $A . '.' . $B;
            $name = $A . ' ' . $B;
        } else {
            $email = $B . '.' . $A;
            $name = $B . ' ' . $A;
        }
    } else {
        $email = $A;
        $B = $names[mt_rand(0, count($names) - 1)];
        $name = $B . ' ' . $A;
    }

    $rand = mt_rand(0, 3);

    switch ($rand) {
        case 0:
            $A = $domainPartA[mt_rand(0, count($domainPartA) - 1)];
            $B = $domainPartB[mt_rand(0, count($domainPartB) - 1)];
            break;
        case 1:
            $A = $domainPartC[mt_rand(0, count($domainPartC) - 1)];
            $B = $domainPartD[mt_rand(0, count($domainPartD) - 1)];
            break;
        case 2:
            $A = $domainPartA[mt_rand(0, count($domainPartA) - 1)];
            $B = $domainPartD[mt_rand(0, count($domainPartD) - 1)];
            break;
        case 3:
            $A = $domainPartC[mt_rand(0, count($domainPartC) - 1)];
            $B = $domainPartB[mt_rand(0, count($domainPartB) - 1)];
            break;
    }

    $email .= '@' . $A . $B . $extensions[mt_rand(0, count($extensions) - 1)];
    $emailLink = '<a href="mailto:' . $email . '">' . $email . '</a>';
    $output = $name . ' ' . $emailLink . "<br>\n";

    return $output;
}

$page .= "Copyright © All rights reserved."; // Copyright ou autre chose dans le bas de page
echo $page;
?>
