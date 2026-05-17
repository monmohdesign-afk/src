//375px 未満は JS で viewport を固定する
// =============================
(function () {
  const viewport = document.querySelector('meta[name="viewport"]');

  function switchViewport() {
    const value = window.outerWidth > 375 ? "width=device-width,initial-scale=1" : "width=375";
    if (viewport.getAttribute("content") !== value) {
      viewport.setAttribute("content", value);
    }
  }
  addEventListener("resize", switchViewport, false);
  switchViewport();
})();


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
  e.preventDefault();
  drawerIcon.trigger("click");
});

// Q&Aアコーディオン
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


// キャンペーンについてスライダー
// =============================
const aboutSwiperWrap = document.querySelector("#js-about-swiper-wrap");
const aboutSwiperSlides = aboutSwiperWrap.querySelectorAll(".swiper-slide");

// 動きを滑らかにするCSS
aboutSwiperWrap.style.transitionTimingFunction = "linear";

// 無限ループのためスライドを複製する処理
function cloneAndAppend(element, swiperWrap) {
  let clonedElement = element.cloneNode(true);
  swiperWrap.appendChild(clonedElement);
}
for (let aboutSwiperSlide of aboutSwiperSlides) {
  cloneAndAppend(aboutSwiperSlide, aboutSwiperWrap);
}

// スライダーオプション
const aboutSwiper = new Swiper("#js-about-swiper", {
  loop: true, // 無限ループ
  width: 100, // スライドの横幅
  spaceBetween: 10, // スライド間の余白
  speed: 3000, // スピード
	simulateTouch: false, // タッチイベントを無効

  autoplay: {
    // 自動再生
    delay: 0, // スライドが止まる時間
    disableOnInteraction: false, // 自動再生を止めない
  },

  virtual: {
    enabled: true, // バーチャルスライドを有効にします。
    addSlidesAfter: 10, // 事前レンダリングする枚数。スライドの表示枚数が入ります。
  },

  breakpoints: {
    // 900px以上のオプション
    768: {
      spaceBetween: 20, // スライド間の余白
      width: 200, // スライドの横幅
    },
  },
});


// モーダル
// =============================
jQuery(".js-modal-open").on("click", function (e) {
  e.preventDefault();

  let target = jQuery(this).data("target");
  jQuery("#" + target)[0].showModal();
  jQuery("html, body").css("overflow", "hidden");
});

jQuery(".js-modal-close").on("click", function (e) {
  e.preventDefault();

  jQuery(this).parents(".js-prizes-modal")[0].close();
  jQuery("html, body").css("overflow", "auto");
  jQuery(document.activeElement).blur();
});


// おすすめスポットスライダー
// =============================
// 無限ループのためスライドを複製する処理
const spotsSwiperWrap = document.querySelector("#js-spots-swiper-wrap");
const spotsSwiperSlides = spotsSwiperWrap.querySelectorAll(".swiper-slide");

for (let spotsSwiperSlide of spotsSwiperSlides) {
  cloneAndAppend(spotsSwiperSlide, spotsSwiperWrap);
}

// スライダーオプション
const spotsSwiper = new Swiper("#js-spots-swiper", {
  loop: true, // ループ
  spaceBetween: 16, // スライド間余白
  slidesPerView: 1.5273, // 表示スライド枚数
  centeredSlides: true, // アクティブなスライドを中央
  keyboard: true, // キーボード操作
  navigation: {
    nextEl: "#js-spots-next",
    prevEl: "#js-spots-prev",
  },
  breakpoints: {
    // 600px以上のオプション
    768: {
      slidesPerView: 2, // 表示スライド枚数
      centeredSlides: true, // アクティブなスライドを中央
    },
    1200: {
      slidesPerView: 3.2234,
      spaceBetween: 32, // スライド間余白
      centeredSlides: false, // アクティブなスライドを中央
    },
  },
});


// トップへ戻るボタン
//=============================
const pagetop = jQuery("#js-pagetop");
jQuery(window).on("scroll", function () {
  if (jQuery(window).scrollTop() > 300) {
    pagetop.fadeIn();
  } else {
    pagetop.fadeOut();
  }
});

pagetop.on("click", function () {
  const speed = 500;
  jQuery("body, html").animate({ scrollTop: 0 }, speed, "swing");
});


// スムーススクロール
//=============================
jQuery('a[href^="#"]').on("click", function (e) {
  // ページトップボタンは除外
  if (jQuery(this).attr("id") === "#js-pagetop") {
    return;
  }

  const header = jQuery("#js-header");
  const headerHeight = header.innerHeight();
  const speed = 500;
  const id = jQuery(this).attr("href");
  const target = jQuery("#" == id ? "html" : id);
  let position = jQuery(target).offset().top - headerHeight;

  if ("fixed" !== header.css("position")) {
    position = jQuery(target).offset().top;
  }
  if (0 > position) {
    position = 0;
  }

  jQuery("html, body").animate(
    {
      scrollTop: position,
    },
    speed,
    "swing"
  );

  e.preventDefault();
});


// フォームバリデーション
// =============================
const form = jQuery("#js-form");
const inputElements = form.find(".js-form-input");

form.on("submit", function (e) {
  e.preventDefault();

  inputElements.removeClass("is-error");
  const isValid = form[0].checkValidity();
  if (isValid) {
    alert("送信完了");
    form[0].reset();
  }
});

inputElements.on("invalid", function () {
  jQuery(this).addClass("is-error");
});

inputElements.on("input", function () {
  if (this.checkValidity()) {
    jQuery(this).removeClass("is-error");
  }
});

