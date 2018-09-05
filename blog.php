<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once 'common/head.php'; ?>
<script>
	// var BASE_URL = 'http://ht.inviendong.com/';
</script>
</head>
<body>
	<?php require_once 'common/header.php'; ?>
    <section class="upper">
        <div class="uk-container uk-container-center">
            <div class="blog-upper">
                <header class="panel-head">
                    <a class="heading-1" href="#">TIN TỨC</a>
                </header>
                <ul class="uk-breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Tin tức</a></li>
                </ul>
            </div>
        </div>

    </section>

    <section class="blogpage-new">
        <div class="uk-container uk-container-center">
            <div class="blog-container uk-grid">
                <div class="uk-width-large-1-5">
                    <section class="category">
                        <header class="panel-head">
                            <div class="heading">
                                <a href="#">DANH MỤC</a>
                            </div>
                        </header>
                        <div class="panel-body">
                            <ul class="uk-list">
                                <li>
                                    <div class="title">
                                        <a href="#">Máy kéo</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <a href="#">Bo mạch - biến tần</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <a href="#">Truyền động cửa</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <a href="#">Sản phẩm khác</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <a href="#">Ray dẫn hướng</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <a href="#">Thiết bị thang cuốn</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <a href="#">Guốc dẫn hướng</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <a href="#">Goverer và phanh cơ</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <a href="#">Giảm chấn</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>

                    <div class="blog-newmore">
                        <header class="panel-head">
                            <h3 class="heading-3"><a href="#">TIN TỨC XEM NHIỀU</a></h3>
                        </header>
                        <div class="panel-body">
                            <ul class="uk-list list-newmore">
                                <li>
                                    <a href="#">Những điều thú vị liên quan đến tốc độ của thang máy</a>
                                </li>
                                <li>
                                    <a href="#">Những điều thú vị liên quan đến tốc độ của thang máy</a>
                                </li>
                                <li>
                                    <a href="#">Những điều thú vị liên quan đến tốc độ của thang máy</a>
                                </li>
                                <li>
                                    <a href="#">Những điều thú vị liên quan đến tốc độ của thang máy</a>
                                </li>
                                <li>
                                    <a href="#">Những điều thú vị liên quan đến tốc độ của thang máy</a>
                                </li>
                                <li>
                                    <a href="#">Những điều thú vị liên quan đến tốc độ của thang máy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-large-4-5">
                    <section class="blog-new">
                        <header class="panel-head">
                            <h3 class="heading-3">TIN TỨC</h3>
                        </header>
                        <div class="panel-body">
                            <ul class="uk-list list-setup">
                                <?php for ($i=0; $i <=5 ; $i++) { ?>
                                    <li>
                                        <article class="uk-clearfix setup">
                                            <div class="thumb">
                                                <a class="image img-zoomin" href="#"> <img src="resources/img/icon/blog-new.gif" alt=""> </a>
                                            </div>
                                            <div class="info">
                                                <h4 class="title">Lắp đặt thang máy đạt tiêu chuẩn Châu Âu (EN)</h4>
                                                <div class="meta">
                                                    <div class="date">
                                                        Thứ 2: 19 / 9 /2018
                                                    </div>
                                                    <div class="description">
                                                        Lắp đặt thang máy gia đình đạt tiêu chuẩn Châu Âu Lắp đặt thang máy gia đình đạt tiêu chuẩn Châu Âu Lắp đặt thang máy gia đình đạt tiêu chuẩn Châu Âu Lắp đặt thang máy gia đình đạt tiêu chuẩn Châu Âu Lắp đặt thang máy gia đình đạt tiêu chuẩn Châu Âu Lắp đặt thang máy gia đình đạt tiêu chuẩn Châu Âu
                                                    </div>
                                                    <div class="more">
                                                        <a href="#">Xem thêm >> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </section>
                    <div class="viewmore">
                        <ul class="panigation uk-flex uk-list uk-clearfix">
                            <li>Trang</li>
                            <li>
                                <a href="#">&laquo;</a>
                            </li>
                            <li> <a href="#">1</a> </li>
                            <li> <a href="#">2</a> </li>
                            <li> <a href="#">3</a> </li>
                            <li> <a href="#">4</a> </li>
                            <li> <a href="#">5</a> </li>
                            <li> <a href="#">6</a> </li>
                            <li>
                                <a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

	<?php require_once 'common/footer.php'; ?>
	<?php require_once 'common/offcanvas.php'; ?>
	<?php require_once 'common/script.php'; ?>
</body>
</html>
