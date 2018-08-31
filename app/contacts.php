<?
include('includes/head.php');
?>

<?include_once('includes/breadcrumb.php')?>
<section class="content-box container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 base-block">
                <h1 class="zagolovok">Наши контакты</h1>

                <span class="contacts_page_label">ТЕЛЕФОН</span>
                <p class="contacts_page_phone">+7 (3852) 62-30-30</p>

                <span class="contacts_page_label">e-mail</span>
                <p class="contacts_page_email">623344@mail.ru</p>

                <p>
                    <span>Алтайский край, г. Барнаул, <br />ул. Южные Мастерские, 14 Б</span>
                </p>
                <div class="map" id="map"></div>
            </div>
        </div>
    </div>
    <script async defer
            src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCe3SOacWSnAy63LQAheWP2s7B9I6-EU48&callback=initMap">
    </script>
    <script src="script/google_map.js"></script>
</section>
</div>
</div>

<?
include('includes/bottom_forms.php');
?>

<?
include('includes/footer.php');
?>
