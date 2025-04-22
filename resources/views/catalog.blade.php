@include('header')
<div class="carousel">
    @foreach ($results as $result)

    <?php
    $f = scandir('C:\Users\1\Desktop\infa\testing laravel\testing\public\imgs_figures');
    echo '<div>';
    foreach ($f as $k) {
        if ($result->title == $k) {
            $p = scandir('C:\Users\1\Desktop\infa\testing laravel\testing\public\imgs_figures\\' . $k);
            echo '<div class="item-main">';
            foreach ($p as $b => $s) {
                if (strlen($s) > 3) {
                    $p = 'imgs_figures\\' . $k . '\\' . $s;
                    echo '<div class="imgs_catalog">';
                    echo '<img  src="' . $p . '" alt="">';
                    echo '</div>';
                }
            }
            echo '</div>';
            echo '<p>';
            echo $result->title;
            echo '</p>';
            echo '<p>';
            echo $result->price;
            echo '</p>';
            echo '<p>';
            echo $result->size;
            echo '</p>';
            echo '</div>';
        }
    }
    
    ?>

    @endforeach
</div>
@include('footer')