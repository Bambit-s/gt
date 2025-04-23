@include('header')
<!-- <div class="links">
    <a href="/">Cabesa</a>
    <p>/</p>
    <a href="/catalog">Catalog</a>
</div> -->
<div class="carousel">
    @foreach ($results as $result)
    <?php
    $f = scandir('C:\Users\1\Desktop\infa\testing laravel\testing\public\imgs_figures');
    echo '<div class="photo-description">';
    foreach ($f as $k) {
        if ($result->title == $k) {

            $p = scandir('C:\Users\1\Desktop\infa\testing laravel\testing\public\imgs_figures\\' . $k);
            echo '<div class="item-main">';
            $count = 0;
            echo '<a class="buskar" href="/catalog/' . $result->id . '">';
            foreach ($p as $b => $s) {
                if (strlen($s) > 3 && $count == 0) {
                    $p = 'imgs_figures\\' . $k . '\\' . $s;
                    echo '<div class="imgs_catalog active">';
                    echo '<img  src="' . $p . '" alt="">';
                    echo '</div>';
                    $count++;
                } elseif (strlen($s) > 3 && $count > 0) {
                    $p = 'imgs_figures\\' . $k . '\\' . $s;
                    echo '<div class="imgs_catalog">';
                    echo '<img  src="' . $p . '" alt="">';
                    echo '</div>';
                }
            }
            echo '</a>';
            echo '</div>';
            foreach ($result as $key => $value) {
                if (!($key == 'id')) {
                    echo '<p class="figures-text">';
                    echo $value;
                    echo '</p>';
                } else {
                }
            };
            echo '</div>';
        }
    }
    ?>
    @endforeach
</div>
@include('footer')