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

    <section class="projectpage page-panel">
        <div class="container uk-container uk-container-center">
            <div class="panel-head">
                <h2 class="heading-2"> <a href="#">DỰ ÁN</a> </h2>
            </div>
            <div class="panel-body">
                <ul class="uk-list uk-clearfix uk-grid uk-grid-width-1-2 uk-grid-small-1-2 uk-grid-width-large-1-3 list-project1">
                    <?php for ($i=0; $i <9 ; $i++) { ?>
                    <li>
                        <div class="project1">
                            <div class="thumb img-shine">
                                <a class="image img-cover" href="#"> <img src="resources/img/icon/project-1.gif" alt=""> </a>
                            </div>
                            <div class="info">
                                <h4 class="title">
                                    Thang máy chuyên dùng tại nguyệt quế 06 - 36 vinhomes Harmony, Quận Long Biên ,Thành Phố Hà Nội
                                </h4>
                                <div class="description">
                                    Thang máy gia đình lắp đặt tại Nguyệt Quế 06 - 39 Vinhomes Harmony, Quận Long Biên, Thành phố Hà Nội
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
				<div class="readmore">
					<a class="readmore-btn" title="Xem thêm" href="#">Xem thêm</a>
				</div>
            </div>
        </div>
    </section>




	<?php require_once 'common/footer.php'; ?>
	<?php require_once 'common/offcanvas.php'; ?>
	<?php require_once 'common/script.php'; ?>
</body>
</html>
