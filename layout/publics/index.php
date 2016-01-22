	<!--  start hero  -->
	<section class="hero">
		<div class="caption">
			<h3><?= $webc['slogan']; ?></h3>
			<h4>
				<span class="rsep"></span>
				<?= $webc['judul']; ?>
				<span class="lsep"></span>
			</h4>
			
		</div>
	</section><!--  end hero  -->

    <section class="menubox">
        <div class="wrapper">
            <section class="info">
                <div class="title">
                    <h3>Menu Spesial</h3>
                    <span class="separator"></span>
                </div>
                <div class="slider_nav" id="menubox_nav">
                </div>
            </section>

            <section class="dishes" id="menubox">
				<?php $datas = array(); while($data = @mysql_fetch_array($menu)) { $datas[] = $data; ?>
            <article>
                <div class="dishe_img">
                    <a href="#"><img src="<?= WEBURL ?>ui-publics/uploads/<?= strtolower($data['idmenu']); ?>.jpg" alt="<?= $data['idmenu']; ?>" title=""/></a>
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

	<!--  start menu  -->
	<section class="menu">
		<div class="wrapper">
			<div class="menu_title">
                <h2>&mdash; Menu &mdash;</h2>
			</div>

			<div class="mean_menu">
                <?php $i=0; while($a = @mysql_fetch_array($men1)) { $i++;?>
				<!--  left menu row  -->
				<article title="<?= $i; ?>" class="<?= ($i % 2) ? 'lmenu' : 'rmenu'; ?>">
					<ul>
						<li>
							<div class="item_info">
								<h3 class="item_name"><?= $a['nama']; ?>.</h3>
								<p class="item_desc"><?= $a['deskripsi']; ?>.</p>
							</div>

                            <h4 class="price">Rp. <?=  number_format($a['harga'],0,',','.'); ?>,-</h4>
                            <span class="separator"></span>

						</li>

					</ul>
				</article>
                <?php if ($i == 8) break; } ?>
			</div>



			<div class="load-more">
                <a href="menu.php" id="view_items">
                    Selengkapnya
                    <hr/>
                    <span class="right_arrow"></span>
                </a>
			</div>
		</div>
	</section><!--  end menu  -->





	<!--  start gallery  -->
	<section class="gallery">
		<div class="wrapper">
			<section class="info">
				<div class="title">
					<h3>Galeri &amp; Katalog</h3>
					<span class="separator"></span>
				</div>
			</section>

			<div class="media">
				<section>
					<a href="#">
						<img src="<?= WEBURL ?>ui-publics/uploads/img1.jpg" alt="" title=""/>
					</a>
				</section>

				<section>
					<div class="hhalf">
						<a href="#">
							<img src="<?= WEBURL ?>ui-publics/uploads/img2.jpg" alt="" title=""/>
						</a>
					</div>
					<div class="hhalf">
						<a href="#">
							<img src="<?= WEBURL ?>ui-publics/uploads/img3.jpg" alt="" title=""/>
						</a>
					</div>
				</section>

				<section>
					<div class="hhalf">
						<a href="#">
							<img src="<?= WEBURL ?>ui-publics/uploads/img4.jpg" alt="" title=""/>
						</a>
					</div>
					<div class="hhalf">
						<a href="#">
							<img src="<?= WEBURL ?>ui-publics/uploads/img5.jpg" alt="" title=""/>
						</a>
					</div>
				</section>
			</div>
            <div class="more">
                <a href="katalog.php">
                    Lihat Katalog
                    <hr/>
                    <span class="right_arrow"></span>
                </a>
            </div>
		</div>
	</section><!--  end gallery  -->