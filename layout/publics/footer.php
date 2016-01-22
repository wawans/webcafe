<!--  start footer  -->
<footer>
    <div class="wrapper">
        <!--  footer navigation  -->
        <section class="footer_nav">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="shop.php">Reservasi</a></li>
                    <li><a href="kontak.php">Kontak</a></li>
                </ul>
            </nav>
        </section>

        <!-- adresse1  -->
        <section class="adress">
            <p><?= $webc['judul']; ?></p>
            <p class="location"><?= $webc['alamat']; ?><br/>
                <?= $webc['kota']; ?></p>
            <p class="phone"><?= $webc['telp']; ?></p>
        </section>

        <!--  footer copyrights  -->
        <section class="copyrights">
            <h2><?= $webc['judul']; ?></h2>
            <p class="phone"><?= $webc['email']; ?></p>
            <p>© All Rights Reserved 2016.</p>
        </section>
    </div>
</footer><!--  end footer  -->
<script type="text/javascript" src="<?= WEBURL ?>/ui-publics/js/carouFredSel.js"></script>
<script type="text/javascript" src="<?= WEBURL ?>/ui-publics/js/easing.js"></script>
<script type="text/javascript" src="<?= WEBURL ?>/ui-publics/js/main.js"></script>
</body>
</html>
