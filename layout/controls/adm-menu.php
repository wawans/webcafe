<div class="wrapper">
    <div class="container">

        <?php require 'nav.php'; ?>

        <div class="holder">
            <div class="box">
                <div class="title">
                    <h2>Daftar Menu</h2>
                </div>
                <div class="content pages forms">
                    <table>
                        <thead>
                        <tr>
                            <td>Id</td>
                            <td>Nama</td>
                            <td>Deskripsi</td>
                            <td>Harga</td>
                            <td>Status</td>
                            <td>&mdash; Kontrol &mdash;</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php while ($result = @mysql_fetch_array($query)) { ?>
                        <tr>
                            <td><?= $result['idmenu']; ?></td>
                            <td><?= $result['nama']; ?></td>
                            <td><?= $result['deskripsi']; ?></td>
                            <td><?= $result['harga']; ?></td>
                            <td><?= $result['status']; ?></td>
                            <td>
                                <a href="adm-menu.php?act=edit&id=<?= $result['idmenu']; ?>"><img src="<?= WEBURL ?>ui-controls/gfx/icon-edit.png" alt="Edit this item" /></a>
                                <a href="adm-menu.php?act=drop&id=<?= $result['idmenu']; ?>"><img src="<?= WEBURL ?>ui-controls/gfx/icon-delete.png" alt="Delete this item" /></a>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <br/>
                    <div class="pages-bottom">
                        <div class="actionbox">
                            <a href="adm-menu.php?act=add"><button type="button"><span>Tambah</span></button></a>
                        </div>

                        <div class="pagination">
                            <a href="#" class="left"></a>
                            <a href="#" class="active">1</a>
                            <a href="#" class="right"></a>
                        </div>
                    </div>

                    <div id="form-menu">


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


