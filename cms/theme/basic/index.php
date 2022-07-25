<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<div class="contents">
<!-- 최신글 시작 -->
    <?php echo latest('silde','mainbanner',3,100)?>
<!-- 시작끝 -->
    <div id="sctionA">
        <div class="container t-center rel bgimg">
                <div>
                    <h2>반려동물을 위한 스튜디오</h2>
                </div>
                <p>오직 펫하우스에서만 진행하는 특별한 기획전을 소개합니다.</p>

                <p>언제나 내 옆에서 함께 지내던 반려동물,<br>
                    <span class="p_bold">함께하는 시간이 긴 만큼 서로를 얼마나 잘 알고 있을까요?</span><br>
                    첫만남을 지나 이제는 마지막을 준비하기까지<br>
                    <span class="p_bold">여러분들의 특별한 여행은 어디까지 왔을까요?</span></p>
                <h4>반려동물과 아름다운 순간을<br>
                    남기기 위한 스튜디오를 소개합니다!</h4>
                    <div class="sctionA_img"><img src="/cms/img/go_dog.png" alt="LET'S GO!"></div> 
        </div>
    </div>




    <div id="sctionB">
        <div class="container m-auto">
            <h3>STU<br><span class="h3_font">DIO</span></h3>
            <div class="content_studio d-md-flex align-items-center col-md-12">
                <div class="contentB_img"><img src="/cms/img/Mask group.png" alt="실내 스튜디오"></div>
                    <div class="text text-md-left">
                        <h3>STUDIO</h3>
                        <p>12개의 감성 스튜디오와 120여 가지의<br>
                        소품들이 준비되어있습니다</p>
                        <p>전문 펫 포토그래와 전용 휴식 공간이 마련되어 있어<br> 
                            예민한 동물들도 안심하고 찾아올 수 있습니다.</p>
                    </div>
            </div>
            <div class="content_studio d-md-flex align-items-center row-reverse col-md-12">
                <div class="contentA_img"><img src="/cms/img/Mask group2.png" alt="실외 스튜디오"></div>
                    <div class="text text-md-right">
                        <h3>SERVICES</h3>
                        <p>소중한 반려동물을 위한 세심한 선택<br>
                        맞춤 서비스를 보고 직접 선택해보세요!
                        </p>
                        <p>스트레스에 취약한 반려동물을 위해 포토그래퍼가<br>
                        직접 방문하는 출장방문 서비스가 준비되어 있습니다.</p>
                    </div>
            </div>
        </div>
    </div>

    <div id="sub_slide" class="container">
        <ul id="sud_ul" class="d-flex">
            <li><img src="img/slide1.png" alt=""></li>
            <li><img src="img/slide2.png" alt=""></li>
            <li><img src="img/slide3.png" alt=""></li>
        </ul>
    </div>

    <div id="step">
        <div>
            <h3>HOW<br>TO<br>STEP</h3>
            <p>스튜디오 스케줄은 독립적으로 운영되므로 
            온라인 예약을 통해서 예약이 가능합니다.</p>
            <strong>날짜와 시간이 확정되신면 예약금 안내 메세지를 보내드립니다</strong>
        </div>
        <ul>
            <li>
                <strong>STEP 1</strong>
                <span>예약폼 작성하기</span>
                <p>예약폼 작성 후 2일 이내로
                예약금 안내 메세지를 보내드립니다</p>
            </li>
            <li>
                <div class="step_img">
                    <img src="" alt="">
                </div>
            </li>   
        </ul>
    </div>

</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');