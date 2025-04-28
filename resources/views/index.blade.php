@include('header')
<?php
echo "Index";

// use Illuminate\Support\Facades\DB;
// $user = DB::select('select * from tasks');
// dump($user);
// $users = DB::select('select * from posts');
// dump($users);
?>

<div class="index">
    <div class="index-name">
        <div class="index-name-full">
            <div class="index-name-top">
                <p>Topiary</p>
            </div>
            <div class="index-name-bottom">
                <p>figuras verdes realistas</p>
            </div>
        </div>
        <div class="index-img">
            <img src="img\bearslogo.png" alt="">
        </div>
    </div>
    <div class="index-interests">
        <div class="index-interests-1">
            <div class="index-interests-name">
                <p>Decoración duradera de cualquier espacio</p>
            </div>
            <div class="index-interests-img">
                <img src="img/elephantsmall.png" alt="">
            </div>
        </div>
        <div class="index-interests-2">
            <div class="interes-box-1">
                <p class="index-cifra">2</p>
                <p class="index-big-letter">años de Servicio</p>
                <p class="index-small-letter">No se corroe. Compuesto de fibra de vidrio y césped artificial</p>
            </div>
            <div class="interes-box-2">
                <p class="index-big-letter">No requiere mantenimiento</p>
                <p class="index-small-letter">Los topiarios no necesitan ser regados, fertilizados y cortados regularmente</p>
            </div>
            <div class="interes-box-3">
                <p class="index-big-letter">Alta resistencia</p>
                <p class="index-small-letter">Soportar grandes cargas de peso y no tienen miedo a los golpes, resistente a las heladas</p>
            </div>
            <div class="interes-box-4">
                <p class="index-big-letter">Más de</p>
                <p class="index-cifra">100</p>
                <p class="index-big-letter">figuras</p>
                <p class="index-small-letter">Una gran selección de figuras topiares para un diseño de paisaje espectacular</p>
            </div>
        </div>
    </div>
    <div class="index-delivery">
        <div class="index-delivery-costs">
            <p class="delivery-costs-text-big">Por qué más de 100 empresas ordenaron figuras de nosotros:</p>
            <p class="delivery-costs-text-small">Nuestra principal ventaja es nuestra propia producción donde cada figura se hace a mano con la ayuda de 5 personas o más.</p>
        </div>
        <div class="index-delivery-price">
            <div class="delivery-price-1">
                <div class="delivery-price-svg">
                    <img class="things-svg" src="img\truck.png" alt="">
                </div>
                <p class="delivery-price-text-big">
                    Envío a América del sur
                </p>
                <p class="delivery-price-text-small">
                    Y la entrega a Asuncion de la producción, haremos absolutamente gratis
                </p>
            </div>
            <div class="delivery-price-1">
                <div class="delivery-price-svg">
                    <img class="things-svg" src="img\writing.png" alt="">
                </div>
                <p class="delivery-price-text-big">
                    Sólo materiales de calidad
                </p>
                <p class="delivery-price-text-small">
                    En la producción utilizamos solamente los materiales cualitativos y comprobados
                </p>
            </div>
            <div class="delivery-price-1">
                <div class="delivery-price-svg">
                    <img class="things-svg" src="img\constract.png" alt="">
                </div>
                <p class="delivery-price-text-big">
                    Fabricaremos cualquier figura bajo el encargo
                </p>
                <p class="delivery-price-text-small">
                    Diseñaremos especialmente para usted y lo fabricaremos al más alto nivel, aunque por la fotografía
                </p>
            </div>
        </div>
    </div>
    <div class="servis">
        <div class="servis-name">
            Nuestro Servicio incluye entrega e instalación
        </div>
        <div class="servis-boxes">
            <div class="servis-box">
                <p class="servis-box-big">Organización de la entrega</p>
                <p class="servis-box-small">Organizamos la entrega a cualquier localidad del país con la garantía de la integridad</p>
            </div>
            <div class="servis-box">
                <p class="servis-box-big">Montaje de figuras</p>
                <p class="servis-box-small">Asuncion</p>
            </div>
            <div class="servis-box">
                <p class="servis-box-big">Protección contra vándalos</p>
                <p class="servis-box-small">Formas de fijación reforzadas para la instalación en lugares públicos y públicos</p>
            </div>
            <div class="servis-box">
                <p class="servis-box-big">Período de garantías</p>
                <p class="servis-box-small">Dentro de un año para la detección de defectos o defectos de fabricación</p>
            </div>
        </div>
    </div>
</div>

@include('footer')