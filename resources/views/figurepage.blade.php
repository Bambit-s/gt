@include('header')
<div class="figure-alone">
    <?php
    $f = scandir('C:\Users\1\Desktop\infa\testing laravel\testing\public\imgs_figures');
    echo '<div class="figure-alone-description">';
    foreach ($f as $imgs) {
        if ($datas->title == $imgs) {
            $p = scandir('C:\Users\1\Desktop\infa\testing laravel\testing\public\imgs_figures\\' . $imgs);
            echo '<div class="figure-scroll">';
            $count = 0;
            foreach ($p as $b => $s) {
                if (strlen($s) > 3 && $count == 0) {
                    $count++;
                    $p = '\imgs_figures\\' . $imgs . '\\' . $s;
                    echo '<div class="figure-first" id="' . $count . '">';
                    echo '<img src="' . $p . '" alt="">';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="figure-scrolling-container">';
                    echo '<div class="figure-scrolling">';
                    echo '<button class="scroll-btn up-btn">↑</button>';
                    $b--;
                } elseif (strlen($s) > 3 && $count > 0) {
                    $count++;
                    $p = '\imgs_figures\\' . $imgs . '\\' . $s;
                    echo '<div class="figure-other" id="' . $count . '">';
                    echo '<img src="' . $p . '" alt="">';
                    echo '</div>';
                }
            }
            echo '<button class="scroll-btn down-btn">↓</button>';

            echo '</div>';
            echo '</div>';
            echo '<div class="figure-card">';
            $datas_figure = (json_decode(json_encode($datas), true));
            echo '<div class="figure-card">';
            echo    '<div class="figure-header">';
            echo        '<h2 class="figure-name">' . $datas_figure['webname'] . '</h2>';
            echo        '<div class="figure-price">' . $datas_figure['price'] . '₲</div>';
            echo    '</div>';
            echo    '<div class="figure-specs">';
            echo        '<div class="spec-item">';
            echo            '<span class="spec-label">Tamaño: </span>';
            echo            '<span class="spec-value">' . $datas_figure['size'] . ' cm</span>';
            echo        '</div>';
            echo        '<div class="spec-item">';
            echo            '<span class="spec-label">Peso: </span>';
            echo            '<span class="spec-value">' . $datas_figure['weight'] . ' kg</span>';
            echo        '</div>';
            echo        '<div class="spec-item">';
            echo           ' <span class="spec-label">Material: </span>';
            echo            '<span class="spec-value">' . $datas_figure['materials'] . '</span>';
            echo        '</div>';
            echo    '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
    ?>
</div>
@include('footer')

<script></script>