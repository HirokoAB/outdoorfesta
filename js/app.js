//メニューのハンバーガー
jQuery(function($) {

  //ドロワーメニュー
  $('.js-hamburger').on('click', function(){
    let isActive = $(this).hasClass('on');
    toggleDrower(isActive);
  });

  //ハンバーガーメニューでドロップダウン
  function toggleDrower(isActive) {
    $('.js-hamburger')
    if (isActive) {
      $('#drower-bg').fadeOut(600);
    } else {
      $('#drower-bg').fadeIn(600);
    }
    $('.js-hamburger').toggleClass('on');
    $('.js-drower').toggleClass('on');
  }

});


//スライダーのJS
$(document).ready(function() {
 
  $("#slider1").owlCarousel();
 
});


$('#timer').yycountdown({
  startDateTime : '2019/10/20 23:59:55',  //カウントダウン開始日時
  endDateTime   : '2019/10/26 10:00:00',  //カウントダウン終了日時
  unit          : {d: '日', h: '時間', m: '分', s: '秒'},  //カウントダウン単位
  // complete      : function(_this){  //カウントダウン完了時のコールバック
  //                   _this.find('.yycountdown-box').css({color:'blue'});
  //                 }
});

console.log('タイマーの検査');