<div class="wrap">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="index.html">
                        <div class="logo">
                            <img src="img/logo2.png" alt="Venue Logo">
                        </div>
                    </a>
                    <nav id="primary-nav" class="dropdown cf">
                        <ul class="dropdown menu">
                            <li class='active'><a href="index.html?controller=home">Trang Chủ</a></li>

                            <li><a href="index.php?controller=sanpham&action=getAll">Danh Mục Xe</a></li>
                            <li>
                                <a href="index.php?controller=hang&action=getAll">Danh Mục Hãng</a>
                                <!-- <ul class="sub-menu">
                                    <li><a href="#"></a></li>
                                </ul> -->
                            </li>
                            <?php
                            if (isset($_SESSION) == false) {
                                session_start();
                                //session_unset();
                            }
                            $m = new user();
                            if ($m->isSignin() == false) {
                            ?>
                                <li>
                                    <a href="index.php?controller=user">
                                        SIGN UP&nbsp;<i class="fa fa-sign-in" aria-hidden="true"></i>
                                    </a>
                                </li>

                            <?php
                            } else {
                            ?>
                                <li>
                                    <p><a href="#"> Xin chào <?php echo $_SESSION['user'] ?> </a> </p>
                                </li>
                                <li>
                                    <a href="index.php?controller=user&action=signout">
                                        LOG OUT&nbsp;<i class="fa fa-sign-in" aria-hidden="true"></i>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>
                            <li>
                                <a href="index.php?controller=user&action=toadmin">
                                    ADMIN&nbsp;<i class="fa fa-sign-in" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- / #primary-nav -->
                </div>
            </div>
            <div class="row" style="margin-top: 3em; margin-bottom: 3em;">
                <div class="col-md-12">
                    <nav class="search-bar" style="display: flex; justify-content: center; align-items: center;">
                        <form action="index.php" method="get">
                            <input type="hidden" name="controller" value="sanpham">
                            <input type="hidden" name="action" value="search">
                            <input type="text" placeholder="Search...." name="DH52003760_kw" size="50" required style="line-height: 0;height: 3em;" />
                            <button type="submit" style="line-height: 0; height: 3em; width: 3em">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </nav>

                </div>
            </div>
        </div>
    </header>
</div>