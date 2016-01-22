<div class="wrapper">
    <div class="container">
        <!--[if !IE]> START TOP <![endif]-->
        <div class="top">
        </div>
        <!--[if !IE]> END TOP <![endif]-->
        <!--[if !IE]> START LOGIN <![endif]-->
        <div class="box">
            <div class="title"><h2>Login</h2></div>
            <div class="content forms">
                <?php if (isset($_GET['log'])) { ?>
                <div class="message red">
                    User dan/atau Password Salah!
                </div>
                <?php } ?>
                <form action="<?= WEBURL.'do.login.php'; ?>" method="post" accept-charset="utf-8">
                    <div class="row">
                        <div class="half-left">
                            <label>Username:</label>
                            <input type="text" name="username" />
                        </div>
                        <div class="half">
                            <label>Password:</label>
                            <input type="password" name="password" />
                        </div>
                    </div>
                    <div class="row logged">
                        <div class="buttons">
                            <button type="submit"><span>Login</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--[if !IE]> END LOGIN <![endif]-->
    </div>
</div>