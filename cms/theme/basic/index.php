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
    <?php //echo latest('silde','mainbanner',3,100)?>
    <div id="splide2" class='d-flex flex-column justify-content-cetner align-items-center'>
        <div class="text_content text-center">
            <h2>펫하우스와 함께하는<br>특별한 시간 여행</h2>
            <input type="button" value="바로가기">
        </div>
    </div>
<!-- 시작끝 -->
    <div id="sctionA" class="navisection rel">
    <!-- <div class="cerim ">
                 <img src="/cms/img/cer.png" alt="css 애니메이션">
            </div> -->
        <div class="container text-center rel bgimg">
            <div>
                <h2 class="wght-500 S-br">반려동물을 위한 스튜디오</h2>
            </div>
            <p>오직 펫하우스에서만 진행하는 특별한 기획전을 소개합니다.</p>
            <p>언제나 내 옆에서 함께 지내던 반려동물,<br>
            <span class="wght-500">함께하는 시간이 긴 만큼 서로를 얼마나 잘 알고 있을까요?</span><br>
            첫만남을 지나 이제는 마지막을 준비하기까지<br>
            <span class="wght-500">여러분들의 특별한 여행은 어디까지 왔을까요?</span></p>
            <h4 class="wght-500 S-br">반려동물과 소중한 추억을<br>
            남기기 위한 스튜디오를 소개합니다!</h4>
            <div class="sctionA_img"data-aos="fade-up"data-aos-anchor-placement="top-bottom">
                <img src="/cms/img/go_dog.png" alt="시작 이미지">
            </div> 
        
        </div>
    </div>




    <div id="sctionB">
        <div class="container m-auto rel">
            <h3 class="wght-500 text-center text-white">STU<br><span class="h3_font">DIO</span></h3>
            <div class="content_studio d-md-flex align-items-center col-md-12">
                 <div class="contentB_img"data-aos="fade-right"data-aos-duration="1000">
                    <img src="/cms/img/Mask group.png" alt="실내 스튜디오">
                </div>
                    <div class="text text-md-left text-center text-white">
                        <h3 class="wght-500 ">STUDIO</h3>
                        <p>12개의 감성 스튜디오와 120여 가지의<br>
                        소품들이 준비되어있습니다</p>
                        <p>전문 펫 포토그래와 전용 휴식 공간이 마련되어 있어<br> 
                            예민한 동물들도 안심하고 찾아올 수 있습니다.</p>
                    </div>
            </div>
            <div class="content_studio d-md-flex align-items-center row-reverse col-md-12">
                <div class="contentA_img"data-aos="fade-left" data-aos-duration="1000">
                    <img src="/cms/img/Mask group2.png" alt="실외 스튜디오">
                </div>
                    <div class="text text-md-right text-center text-white">
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

 <?php
 include_once(G5_THEME_PATH.'/subslide.php');
 ?>

    <div id="step" class="rel">
        <div class="text-center">
            <h3 class="wght-700">HOW<br>TO<br>STEP</h3>
            <p class="wght-350">스튜디오 스케줄은 독립적으로 운영되므로<br>
            온라인 예약을 통해서 예약이 가능합니다.</p>
            <strong class="wght-700">날짜와 시간이 확정되신면 예약금 안내 메세지를 보내드립니다</strong>
        </div>
        
        <ul class="rel">
            <li class="d-md-flex justify-content-between align-items-center rig">
                <div class="txt text-lg-right text-center">
                    <strong>STEP 1</strong>
                    <span>예약폼 작성하기</span>
                    <p>예약폼 작성 후 2일 이내로<br>
                    예약금 안내 메세지를 보내드립니다</p>
                </div>
                <div class="step_img" data-aos="fade-left">
                    <img src="/cms/img/step1.jpg" alt="단계 이미지">
                </div>
                <div class="step_img d-md-none mb" data-aos="fade-left">
                    <img src="/cms/img/mob 1.jpg" alt="단계 이미지">
                </div>
            </li>  
            <li class="d-md-flex justify-content-between align-items-center row-reverse lef">
                <div class="txt text-lg-left text-center">
                    <strong>STEP 2</strong>
                    <span>정확한 상담하기</span>
                    <p>1 : 1  상담을 통해 자세한 상담 후<br>
                    원하는 컨셉을 정합니다.</p>
                </div>
                <div class="step_img_left"data-aos="fade-right">
                    <img src="/cms/img/step2.jpg" alt="단계 이미지">
                </div>
                <div class="step_img_left d-md-none mb"data-aos="fade-right">
                    <img src="/cms/img/mob 2.jpg" alt="단계 이미지">
                </div>
            </li> 
            <li class="d-md-flex justify-content-between align-items-center m-auto rig">
                <div class="txt text-lg-right text-center">
                    <strong>STEP 3</strong>
                    <span>특별한 추억 남기기</span>
                    <p>안내받은 사항을 통해<br>
                    스튜디오 및 거주 공간에서 촬영하기</p>
                </div>
                <div class="step_img"data-aos="fade-left">
                    <img src="/cms/img/step3.jpg" alt="단계 이미지">
                </div>
                <div class="step_img d-md-none mb"data-aos="fade-left">
                    <img src="/cms/img/mob 3.jpg" alt="단계 이미지">
                </div>
            </li> 
        </ul>
    </div>

    <div id="FAQ"class="navisection">
        <div class="container">
            <div class="main_yellow wght-400 m-auto text-center"data-aos="fade-up"
             data-aos-anchor-placement="center-bottom">
                <h3>Q</h3>
            </div>
            <ul class="Ftext rel text-white">

                <li class="d-flex justify-content-between ">
                    <div class="yellow wght-400" data-aos="fade-right" data-aos-duration="1000">
                        <span>Q 예약날짜를 변경하고 싶어요</span>
                    </div>
                    <div class="black wght-400" data-aos="fade-up"
                     data-aos-anchor-placement="bottom-bottom"data-aos-duration="1000">
                        <p>모든 분들의 스케줄 및 상황에 따라 스튜디오의 일정을 맞추어 드릴 수 없는관계로<br>
                        촬영 날짜가 한달 이상 남아있을 경우 1회에 한해서 변경이 가능합니다</p>
                    </div>
                </li>

                <li class="d-flex justify-content-between">
                    <div class="yellow wght-400" data-aos="fade-right"data-aos-duration="1300">
                        <span>Q 컨셉은 어떻게 정하나요?</span>
                    </div>

                    <div>
                        <div class="black wght-400" data-aos="fade-up"
                        data-aos-anchor-placement="bottom-bottom"data-aos-duration="1300">
                            <p>생각해 두신 컨셉과 의상을 정하신 후 원하는 분위기를<br>
                            알려주시거나 원하시는 시안을 상담때 말해주세요</p>
                        </div>
                        <div class="black wght-400" data-aos="fade-up"
                        data-aos-anchor-placement="bottom-bottom"data-aos-duration="1500">
                            <p>알려주시는 컨셉은 보다 더 좋은 촬영에 도움이 되며<br>
                            스튜디오에서 가능한지 판단 후에 촬영 진행해드립니다</p>
                        </div>
                    </div>
                </li>

                <li class="d-flex justify-content-between">
                    <div class="yellow wght-400" data-aos="fade-right"data-aos-duration="1300">
                        <span>Q 원본 사진파일도 촬영 후 전송해주나요?</span>
                    </div>

                    <div>
                        <div class="black wght-400" data-aos="fade-up"
                            data-aos-anchor-placement="bottom-bottom"data-aos-duration="1300">
                            <p>촬영 당일 혹은 익일 알려주신 메일주소로 사진파일이 발송되며<br>
                            촬영이 많은 시기에는 스케줄에 따라 메일 발송이 지연될 수 있습니다</p>
                        </div>
                        <div class="black wght-400" data-aos="fade-up"
                        data-aos-anchor-placement="bottom-bottom"data-aos-duration="1500">
                        <p>촬영 데이터의 보관은 촬영일로부터 한 달 동안 보관되며 그 이후에는<br>
                            삭제되오니 받은 원본파일을 반드시 백업하여 보관해주시기 바랍니다</p>
                        </div>
                    </div>     
                </li>

                <li class="d-flex justify-content-between">
                    <div class="yellow wght-400" data-aos="fade-right"data-aos-duration="1300">
                        <span>Q 촬영진행 순서가 궁금해요</span>
                    </div>
                    <div class="black wght-400" data-aos="fade-up"
                      data-aos-anchor-placement="bottom-bottom"data-aos-duration="1300">
                        <p>스튜디오입장-환복 및 준비-촬영시작-<br>
                        촬영 및 컨셉변경,환복-촬영 후 정리-잔금결재-퇴실 순서대로 진행됩니다</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div id="event"class="navisection">
        <div class="container">
            <div class="evOne text-center">
                <h4 class="bg-white">EVENT</h4>
                <p class="wght-350 text-white">2022.08.27 ~ 2022.09.11</p>
                <div class="event_tit"data-aos="fade-up" data-aos-duration="1000">
                    <h3 class="wght-400 text-white">특별한 사연 쓰고<br>
                    특별한 사진도 찍고!</h3>
                </div>
                <span class="text-white">나만의 특별한 사연을 적고 SNS에 공유하면<br>
                추첨을 통해 스튜디오 이용권을 드립니다</span>
        
            </div>
            <div class="event_img">
                <img src="/cms/img/event_img.png" alt="">
            </div>

            <div id="event_qa" class="text-left text-white">
                <div class="event_B text-center ">
                    <h2 class="bg-white">신청방법</h2>
                </div>
                <div class="dlt">
                    <dl class="align-items-center">
                        <dt class="wght-400 text-center">모집기간</dt>
                        <dd class="wght-700 one">2022.08.27 ~ 2022.09.11</dd>
                
                        <dt class="wght-400 text-center">응모방법</dt>
                        <dd class="wght-700">1. 펫 하우스 회원가입 하기</dd>
                        <dd class="wght-700 one el">2. 특별한 사연이 담긴 이벤트 폼<br>
                        작성하고 신청하기 누르기</dd>
                
                        <dt class="wght-400 text-center">당첨자 발표</dt>
                        <dd class="wght-700 one el">2022.09.15 ~<br>
                        작성한 이메일로 개별연락</dd>
                        
                    </dl>
                 <span class="text-center d-block wght-400">*당첨 메일을 일주일 이내로 확인하지 못하는 경우 다른 사람에게 기회가 넘어갑니다.</span>

                </div>
                
            </div>
            <div class="fnw text-center text-white">
                 <i class="fa-solid fa-angles-down"></i>
            </div>
        </div>
    </div>



    <div id="event_form">
        <h3 class="text-center text-white">이벤트 신청하기</h3>
        <form action="">
            <ul class="text-left text-white"> 
                <li class="mb-5">
                    <label for="">이름</label>
                    <input type="text">
                </li>
                <li class="mb-5">
                    <label for="">이메일</label>
                    <input type="email" name="" id="">
                </li>
                <li class="mb-5">
                    <label for="">연락처</label>
                    <input type="tel" name="" id="">
                </li>
                <li class="mb-5">
                    <label for="">특별한 사연을 적어주세요</label>
                    <input type="text">
                </li>
                <li class="mb-5 d-flex justify-content-between align-items-center border-0">
                    <input type="checkbox" name="" id="">
                    <i class="fa-solid fa-chevron-down"></i>
                    <label for="">개인정보 수집/이용 동의 (필수)</label>
                    <span>보기</span>
                </li>
                <li class="mb-5 d-flex justify-content-between align-items-center border-0">
                    <input type="checkbox" name="" id="">
                    <i class="fa-solid fa-chevron-down"></i>
                    <label for="">서비스 이용약관 동의 (필수)</label>
                    <span>보기</span>
                </li>
                <li class="text-center border-0">
                    <input type="submit" value="신청하기">
                </li>
            </ul> 
        </form>
    </div>


    <div id="fth">
        <div class="container text-white">
            <h3 class="text-center">찾아오시는길</h3>
            <div class="d-md-flex justify-content-between align-items-center">
                <div class="m-auto wght-350 text-center text-md-left">
                    <dl>
                        <dt>(우편번호 : 05610)</dt>
                        <dt>주소</dt>
                        <dd>서울특별시 송파구 송파대로49길 29</dd>
                        <dt>TEL</dt>
                        <dd>02-5678-4567</dd>
                        <dt>FAX</dt>
                        <dd>02-4567-5678</dd>
                        <dt>Email</dt>
                        <dd>feel808080@gmail.com</dd>
                    </dl>
                </div>

                    <div id="map" style="width:590px;height:420px;"></div>
                    <!-- 카카오API -->
                    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=36803296f48346760b666e5dec4b06c1"></script>
                    <script>
                    var container = document.getElementById('map');
                    var options = {
                        center: new kakao.maps.LatLng(37.5067147, 127.1015772),
                        level: 3
                    };

                    var map = new kakao.maps.Map(container, options);

                    var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
                    mapOption = { 
                        center: new kakao.maps.LatLng(33.450701, 126.570667), // 지도의 중심좌표
                        level: 3 // 지도의 확대 레벨
                    };

                    var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

                    // 마커가 표시될 위치입니다 
                    var markerPosition  = new kakao.maps.LatLng(33.450701, 126.570667); 

                    // 마커를 생성합니다
                    var marker = new kakao.maps.Marker({
                        position: markerPosition
                    });

                    // 마커가 지도 위에 표시되도록 설정합니다
                    marker.setMap(map);
                </script>
            </div>
        </div>
    </div>

</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');