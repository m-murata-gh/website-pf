'use strict';

window.onload = function() {

/**
 * slideNav
 *
 *
 */

let body = document.body;
let slideNav = document.getElementById('js_slideNav');
let btn = document.getElementById('js_slideNav_btn');
let menu = document.getElementById('js_slideNav_menu');
let menuList = document.getElementById('js_slideNav_menuList');
let menuLinks = document.getElementsByClassName('js_slideNav_menuLink');

// btnをクリックしてbtn, menuのactive状態を切り替える
btn.addEventListener('click', (e) => {
  // 正常な動作のために以下の並び順は変えないこと!
  body.classList.toggle('is_active__slideNav');
  slideNav.classList.toggle('is_active');
  menu.scrollTo(0, 0); // スクロール位置の初期化(※slideNavをアクティブ化直後に記述すること)
  e.stopPropagation();
}, false);

// メニューリスト以外の画面をクリックすると、メニューを閉じる
menu.addEventListener('click', (e) => {
  removeActiveClass();
  e.stopPropagation();
}, false);

// メニューリスト(メニューリンク周辺)をクリックしたときは、メニューは閉じない
menuList.addEventListener('click', (e) => {
  e.stopPropagation();
}, false);

// メニューリンクをクリックすると、メニューを閉じる
menuLinks = Array.from(menuLinks) ;
menuLinks.forEach(element => {
  element.addEventListener('click', (e) => {
    console.log('menuLink');
    removeActiveClass();
    e.stopPropagation();
  }, false);
});

// クラス一括リムーブ関数
function removeActiveClass() {
  const elements = [body, slideNav];
  elements.forEach(element => {
    element.classList.remove('is_active__slideNav');
    element.classList.remove('is_active');
  });
}

}();
