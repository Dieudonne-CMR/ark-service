<?php
// fonction qui limite le nombre de mots dans un texte
function limiterNombreMots($texte, $limite) {
    $mots = explode(' ',strip_tags($texte));
    if (count($mots) > $limite) {
        $texte = implode(' ', array_slice($mots, 0, $limite)) . '...';
    }
    return $texte;
}
// fonction qui limite le nombre de carractaire dans un texte
function limiterNombreCaracteres($mon_texte, $limite) {
    $texte=strip_tags(trim($mon_texte));
    if (strlen($texte) > $limite) {
        $texte = substr($texte, 0, $limite) . '...';
    }
    return $texte;
}