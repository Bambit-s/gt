<?php
$nav = [
    1 => ['/catalog', 'Página de catálogo'],
    2 => ['/about', 'Sobre nosotros'],
    3 => ['/delivery', 'Entrega'],
    4 => ['/montage', 'Montaje'],
    5 => ['/comments', 'Comentarios'],
    6 => ['/contacts', 'Contactos'],
];
foreach ($nav as $link) {
    if ($_SERVER['REQUEST_URI'] == $link[0]) {
        echo '<a href="' . $link[0] . '" class="nav_link_active">' . $link[1] . '</a>';
    } else {
        echo '<a href="' . $link[0] . '" class="nav_link">' . $link[1] . '</a>';
    }
}
