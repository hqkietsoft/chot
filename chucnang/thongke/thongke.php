<div class="l-sidebar">
	<!-- <h2>Thống kê truy cập</h2> -->
    <div id="counter">
    <?php
    	$fp = '../chucnang/thongke/counter.txt';
    	$fo = fopen($fp, 'r');
    	$fr = fread($fo, filesize($fp));
    	$fc = fclose($fo);
    	$fo = fopen($fp, 'w');
    	$fr++;
    	$fw = fwrite($fo, $fr);
    	$fc = fclose($fo);
    ?>
    	<!-- <p>Hiện có <span></span> người đang xem</p>-->
			<?php
				echo $fr;
			?>
    </div>
</div>