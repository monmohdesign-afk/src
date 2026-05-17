// 課題1：ドロワーメニューの実装
jQuery(".js-accordion").on("click", function() {
    jQuery(this).next().slideToggle();
});

// 課題2：ページトップへ戻るボタンを付ける
let toTop = jQuery("#to-top");
jQuery(window).on("scroll", function(){
    if(jQuery(this).scrollTop() > 80){
        toTop.fadeIn(300);
    } else {
        toTop.fadeOut(300);
    }
});
jQuery("#to-top").on("click", function(){
    jQuery("html, body").animate({scrollTop:0}, 500);

    return false;
});