'use strict';

window.onload = function() {

/**
 * lightbox
 *
 *
 */
let detail = document.getElementById('js_detail');
if (detail) {

  let body = document.body;
  let bg = document.getElementById('js_detailBG');
  let cont = document.getElementById('js_detailCont');
  let close = document.getElementById('js_detailClose');
  let prev = document.getElementById('js_detailPrev');
  let next = document.getElementById('js_detailNext');
  let thumbs = Array.from(document.getElementsByClassName('js_thumb'));
  let thumbsData = [];

  /**
   * サムネイル設定
   */
  thumbs.forEach(thumb => {
    thumb.addEventListener('click', showDetailEvent(), false);
    let itemOrder = thumb.getAttribute('data-itemorder');
    let thumbSrc = thumb.getAttribute('data-thumbsrc');
    let thumbStyle = 'background: center / contain no-repeat url(' + thumbSrc + ');';
    let detailSrc = thumb.getAttribute('data-detailsrc');
    thumb.setAttribute('style', thumbStyle);
    thumbsData[itemOrder] = { 'detailSrc': detailSrc };
  });

  /**
   * 各エリアクリック時
   */
  bg.addEventListener('click', closeDetailEvent(), false);
  cont.addEventListener('click', closeDetailEvent(), false);
  prev.addEventListener('click', changeDetailEvent(), false);
  next.addEventListener('click', changeDetailEvent(), false);
  setSwipe(detail);


  /**
   * detailを表示
   */
  function showDetailEvent() {
    return function(e) {
      // imgを作成
      let src = this.getAttribute('data-detailsrc')
      let newImg = createImg(src);
      // imgを挿入
      cont.appendChild(newImg);
      // prevとnextの設定
      let itemOrder = this.getAttribute('data-itemorder');
      setitemLink(itemOrder);
      // モーダルウィンドウを表示
      detail.classList.add('is_active');
      // bodyのスクロールを無効にする
      body.setAttribute('style', 'overflow: hidden;');
    }
  }

  /**
   * detailを閉じる
   */
  function closeDetailEvent() {
    return function(e) {
      closeDetail();
      e.stopPropagation();
    }
  }
  function closeDetail() {
    // モーダルウィンドウを非表示
    detail.classList.remove('is_active');
    // bodyのスクロール無効を解除
    body.removeAttribute('style');
  }

  /**
   * imgを作成
   */
  function createImg(src) {
    // img要素がすでに存在する場合は削除
    let oldImg = document.getElementById('js_img');
    if (oldImg) {
      oldImg.parentNode.removeChild(oldImg);
    }
    // imgを作成
    let newImg = document.createElement('img');
    newImg.setAttribute('id', 'js_img');
    newImg.setAttribute('src', src);
    newImg.setAttribute('class', 'hp_blink');

    return newImg;
  }

  /**
   * prev next クリック時の画像チェンジ
   */
  function changeDetailEvent() {
    return function(e) {
      let itemLink = this.getAttribute('data-itemlink');
      if (+itemLink === 0) {
        // closeDetail(); // 画像の始点と終点の際は閉じる
        return; // 画像の始点と終点の際は何もしない
      } else {
        changeDetail(this);
      }
    }
    e.stopPropagation();
  }

  function changeDetail(element) {
    let itemOrder = element.getAttribute('data-itemlink');
    // imgを作成
    let src = thumbsData[itemOrder].detailSrc;
    let newImg = createImg(src);
    // imgを挿入
    cont.appendChild(newImg);
    setitemLink(itemOrder);
  }

  /**
   * prev next data-itemlinkをセット
   */
  function setitemLink(itemOrder) {
    let previtemLink = +itemOrder - 1;
    let nextitemLink = +itemOrder + 1;
    let firstorder = 1;
    let lastorder = thumbsData.length -1;
    if (+itemOrder === 1) {
      // previtemLink = lastorder; // ループ
      previtemLink = 0; // 閉じる
    }
    if (+itemOrder === lastorder) {
      // nextitemLink = 1; // ループ
      nextitemLink = 0; // 閉じる
    }
    prev.setAttribute('data-itemlink', previtemLink);
    next.setAttribute('data-itemlink', nextitemLink);
  }

  /**
   * スワイプイベント設定
   *
   * 長押しで画僧保存を有効にするためe.preventDefault()はオフにする。
   */
  function setSwipe(element) {
    let t = element;
    let startX = null; // タッチ開始 x座標
    let moveX = null; // スワイプ中の x座標
    let dist = 80; // スワイプを感知する最低距離（ピクセル単位）

    // タッチ開始時： xy座標を取得
    t.addEventListener("touchstart", function(e) {
      // e.preventDefault();
      moveX = 0;
      startX = e.touches[0].pageX;
    });

    // スワイプ中： xy座標を取得
    t.addEventListener("touchmove", function(e) {
      // e.preventDefault();
      moveX = e.changedTouches[0].pageX;
    });

    // タッチ終了時： スワイプした距離から左右どちらにスワイプしたかを判定する/距離が短い場合何もしない
    t.addEventListener("touchend", function(e) {
      // e.preventDefault();
      if (moveX !== 0 && startX > moveX && startX > moveX + dist) {
        // 左から右にスワイプ
        changeDetail(next);
      }
      else if (moveX !== 0 && startX < moveX && startX + dist < moveX) {
        // 右から左にスワイプ
        changeDetail(prev);
      } else {
        // タッチのみ
        // closeDetail();
      }
    });
  }

}

}();
