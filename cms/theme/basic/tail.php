<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

    </div>
 
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft" class="py-5 text-left">

    <div class="container text-white">
        <div class="d-md-flex  row-reverse  justify-content-between  px-5 mx-5">
        <h2 class="text-right  ">
        <img src="https://happycast88.cafe24.com/cms/img/logo.svg" alt="펫하우스">
        </h2>
        <div >
        	<h2>사이트 정보</h2>
	        <p >
	        	회사명 : 회사명 / 대표 : 대표자명<br>
				주소  : OO도 OO시 OO구 OO동 123-45<br>
				사업자 등록번호  : 123-45-67890<br>
				전화 :  02-123-4567  팩스  : 02-123-4568<br>
				통신판매업신고번호 :  제 OO구 - 123호<br>
				개인정보관리책임자 :  정보책임자명<br>
			</p>
            <div  >            
                <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
                <a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a>           
            </div>
            <div >Copyright &copy; <b>소유하신 도메인.</b> All rights reserved.</div>
	    </div>		

        </div>
       
	</div>      
       
       
    
    
    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");