@include('header')

<?php
$f = scandir('C:\Users\1\Desktop\infa\testing laravel\testing\public\imgs_figures');
echo '<div class="photo-description">';
foreach ($f as $imgs) {
    if ($datas->title == $imgs) {
        $p = scandir('C:\Users\1\Desktop\infa\testing laravel\testing\public\imgs_figures\\' . $imgs);
        echo '<div class="item-main">';
        $count = 0;
        foreach ($p as $b => $s) {
            if (strlen($s) > 3 && $count == 0) {
                $p = '\imgs_figures\\' . $imgs . '\\' . $s;
                echo '<div class="imgs_catalog active">';
                echo '<img  src="' . $p . '" alt="">';
                echo '</div>';
                $count++;
            } elseif (strlen($s) > 3 && $count > 0) {
                $p = '\imgs_figures\\' . $imgs . '\\' . $s;
                echo '<div class="imgs_catalog">';
                echo '<img  src="' . $p . '" alt="">';
                echo '</div>';
            }
        }
        echo '</div>';
        echo '<div>';
        foreach ($datas as $key => $value) {
            if (!($key == 'id')) {
                echo '<p class="figures-text">';
                echo $value;
                echo '</p>';
            }
        };
        echo '</div>';
        echo '</div>';
    }
}
?>
@include('footer')