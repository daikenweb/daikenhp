<div class="container center-block top_move page-top">
	<div class="text-center"><a href="#"><img src="https://daikenweb.com/wp-content/uploads/2017/07/top-buttun.png" class="img-responsive2" alt="ダイケントップへ" /></a></div>
</div>
<div class="container-fluid footer-border">
    <div class="row">
         <div id="footer-menu" class="text-center">
           <ul>
             <li><a href="https://daikenweb.com/#service">SERVICE</a></li>
             <li><a href="https://daikenweb.com/aboutus/">ABOUT US</a></li>
<!--
             <li><a href="https://daikenweb.com/recruit/" target="_blank">RECRUIT</a></li>
-->
             <li><a href="https://daikenweb.com/privacy/">PRIVACY POLICY</a></li>
             <li><a href="https://daikenweb.com/contact/">CONTACT</a></li>
             <li><a href="https://daikenweb.com/disclaimer/">免責事項</a></li>
           </ul> 
         </div>
    </div>
<footer>
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12 col-xs-12 footer-area">
        <p class="footer-company"><a href="https://daikenweb.com/">株式会社ダイケン</a></p>
        <p><img src="https://daikenweb.com/wp-content/uploads/2017/07/footer-tel-kuma.png" class="img-footer-tel" alt=""/><a href="https://privacymark.jp/" target="_blank"><img src="https://daikenweb.com/wp-content/uploads/2017/07/privecy-mark.png" class="footer-mark" alt=""/></a></p>
        <p class="footer-text">TOKYO 03-6264-4174&nbsp;&nbsp;&nbsp;&nbsp;FUKUOKA 092-738-8825</p></br></br>


<!--SNSアイコンの表示です

        <p class="text-center"><img src="https://daikenweb.com/wp-content/uploads/2017/07/Facebook.png" class="footer-sns" alt=""/>&nbsp;<img src="https://daikenweb.com/wp-content/uploads/2017/07/Youtube.png" class="footer-sns" alt=""/><img src="https://daikenweb.com/wp-content/uploads/2017/07/Instagram.png" class="footer-sns" alt=""/><br><br></p>

-->

        <p class="small">COPYRIGHT DAIKEN CO., LTD. ALL RIGHTS RESERVED.</p>
      </div>
    </div>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<script>
//スマホ　メニュー
(function($) {
    $(function() {
        var $header = $('#top-head');
        // Nav Fixed
        $(window).scroll(function() {
            if ($(window).scrollTop() > 350) {
                $header.addClass('fixed');
            } else {
                $header.removeClass('fixed');
            }
        });
        // Nav Toggle Button
        $('#nav-toggle').click(function(){
            $header.toggleClass('open');
        });
    });
})(jQuery);
(function($) {
    $(function() {
        var $header = $('#top-head2');
        // Nav Fixed
        $(window).scroll(function() {
            if ($(window).scrollTop() > 350) {
                $header.addClass('fixed');
            } else {
                $header.removeClass('fixed');
            }
        });
        // Nav Toggle Button
        $('#nav-toggle2').click(function(){
            $header.toggleClass('open');
        });
    });
})(jQuery);

$(function(){
    $( '#contents ')
      .bind( 'touchstart', function(){
        $( this ).addClass( 'a:hover img' );
    }).bind( 'touchend', function(){
        $( this ).removeClass( 'a:hover img' );
    });
});
//page down
$(function(){
    $('#move_target').on('click', function(){
        var targetTop = $('#scroll-down').offset().top;
        $('html,body').animate({
            scrollTop: targetTop
        }, 600);
        return false;
    });
});

//top メイン画像背景　ランダム表示
$(function() {
var array = [
"https://daikenweb.com/wp-content/uploads/2017/07/insatsu1.gif",
"https://daikenweb.com/wp-content/uploads/2017/07/insatsu2.gif",
"https://daikenweb.com/wp-content/uploads/2017/07/insatsu3.gif",
"https://daikenweb.com/wp-content/uploads/2017/07/insatsu4.gif",
];
var l = array.length;
var r = Math.floor(Math.random()*l);
var bgimgurl = array[r];
$("div#randomimg2").css('background-image',('url("'+bgimgurl+'")'));
});

//page top
$(function() {
  $(".top_move").on('click touchstart', function () {
    $('html,body').animate({ scrollTop: 0 }, 'swing');
      return false;
    });
});
</script>
</body>
</html>