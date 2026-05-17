// ローディング判定
jQuery(window).on("load", function () {
  jQuery("body").attr("data-loading", "true");
});

//ドロワーメニュー
const drawerIcon = jQuery("#js-drawer-icon");
const drawerContents = jQuery("#js-drawer-content");
drawerIcon.on("click", function (e) {
  e.preventDefault();
  drawerIcon.toggleClass("is-checked");
  drawerContents.slideToggle(300);
  jQuery("body").toggleClass("is-fixed");
});

drawerContents.find("a").on("click", function (e) {
  drawerIcon.trigger("click");
});

jQuery(".js-accordion").on("click", function (e) {
  e.preventDefault();
  if (jQuery(this).parent().hasClass("is-open")) {
    jQuery(this).parent().removeClass("is-open");
    jQuery(this).next().slideUp()
  }
  else {
    jQuery(this).parent().addClass("is-open");
    jQuery(this).next().slideDown()
  }
});

/* 電話リンク */
let ua = navigator.userAgent;
if (ua.indexOf("iPhone") < 0 && ua.indexOf("Android") < 0) {
  jQuery('a[href^="tel:"]')
    .css("cursor", "default")
    .on("click", function (e) {
      e.preventDefault();
    });
}

/* セレクトタグの最初の項目をplaceholderとして扱う */
jQuery(function () {
  const Target = jQuery(".is-empty");
  jQuery(Target).on("change", function () {
    if (jQuery(Target).val() !== "") {
      jQuery(this).removeClass("is-empty");
    } else {
      jQuery(this).addClass("is-empty");
    }
  });
});

// スライダーオプション
let mySwiper = new Swiper('#js-spots-swiper', {
  loop: true,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  autoplay: {
    delay: 5000, // 1枚5秒 → 3枚で15秒
    disableOnInteraction: false
  },
  speed: 2000, // フェードの速度（2秒）
  navigation: false, // ← ナビゲーションを完全に消す
});


/* ページトップへ戻る */
const pageTop = jQuery("#js-pagetop");
const speed = 300;
pageTop.on("click", function () {
  jQuery("body, html").animate(
    {
      scrollTop: 0,
    },
    speed
  );
  return false;
});

