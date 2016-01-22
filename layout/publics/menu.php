<section class="featured_dishes">
    <div class="wrapper">
        <section class="info">
            <div class="title">
                <h3>Menu</h3>
                <span class="separator"></span>
            </div>
        </section>

        <section class="dishes">
            <?php while($data = @mysql_fetch_array($menu)) { ?>
            <article>
                <div class="dishe_img">
                    <a href="#"><img src="<?= WEBURL ?>ui-publics/uploads/<?= strtolower($data['idmenu']); ?>.jpg" alt="" title=""/></a>
                </div>
                <div class="dish_info">
                    <h2><?= $data['nama']; ?></h2>
                    <h3 class="price">Rp. <?=  number_format($data['harga'],0,',','.'); ?>,-</h3>
                </div>
            </article>
            <?php } ?>
        </section>
    </div>
</section>