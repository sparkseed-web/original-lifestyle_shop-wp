
$(function() {
  $(".toggle_btn").click(function() {
    $("header").toggleClass("open");
  });

  // ★ 追加：メニュー内のリンクをクリックしたら閉じる
  $("header nav a").click(function() {
    $("header").removeClass("open");
  });


});



$(function() {
  $(window).scroll(function() {
    $(".item").each(function() {
      var position = $(this).offset().top;  // 要素の位置
      var scroll = $(window).scrollTop();   // 今のスクロール量
      var windowHeight = $(window).height(); // 画面の高さ

      if (scroll > position - windowHeight + 100) {
        $(this).addClass("show");
      }
    });
  });
});

$(function() {

  // スクロールしたら表示・非表示を切り替える
  $(window).scroll(function() {
    if ($(this).scrollTop() > 900) {
      $(".to-top").addClass("show");
    } else {
      $(".to-top").removeClass("show");
    }
  });

  // クリックしたらTOPへゆっくり戻る
  $(".to-top").click(function(e) {
    e.preventDefault(); // ブラウザの「href="/" に移動する」という動きを止める そうすることでゆっくりスクロールを実行することができる
    $("html, body").animate({ scrollTop: 0 }, 900);
  });

});

