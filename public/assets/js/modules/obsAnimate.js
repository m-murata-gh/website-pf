'use strict';

window.onload = function() {

/* 下へスクロールして要素が出てきたら、Animate.Cssのアニメーション処理を行う */

/* memo */
/*
スクロール方向の判定にはgetBoundingClientRect().top を使うとよい。
下方向からのスクロールなら0かマイナス値になる。
*/

// エラー回避
try {

  // 設定
  const targetClass = 'js_bounceInRight'; // アニメーションする要素のクラス名
  const AnimateCssClass = 'animate__bounceInRight'; // AnimateCssのクラス名

  const targetClass2 = 'js_bounceInLeft';
  const AnimateCssClass2 = 'animate__bounceInLeft';

  const targetClass3 = 'js_bounceInRight_onlyTop';
  const AnimateCssClass3 = 'animate__bounceInRight';

  const targetClass4 = 'js_flipInX';
  const AnimateCssClass4 = 'animate__flipInX';

  // IntersectionObserver option
  const defaultOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0
  }

  setObsIntersecting(targetClass, AnimateCssClass);
  setObsIntersecting(targetClass2, AnimateCssClass2);
  setObsIntersecting(targetClass4, AnimateCssClass4);

  // topのpcナビのみアニメーション
  let path = location.pathname;
  if (path == '/' || path == '/pf/public/') {
    setObsIntersecting(targetClass3, AnimateCssClass3);
  }

  // ※引数isRepeatがtrueならrepeatIntervalミリ秒後にアニメーションクラスを初期化
  function setObsIntersecting(targetClass, AnimateCssClass, options=defaultOptions, isRepeat=false, repeatInterval=0) {

    // IntersectionObserver callback関数
    const callback = (entries, observer) => {
      let target = entries[0].target;

      // 交差時に処理を行う
      if (entries[0].isIntersecting) {
        let clientTop = target.getBoundingClientRect().top;
        if (clientTop >= 0) { // 上からスクロールしたときのみ行う
          // アニメーション処理
          animateTarget(target);
        }
      }
    }

    // IntersectionObserverインスタンスを作成
    let observer = new IntersectionObserver(callback, options);

    // target要素を取得
    let targets = Array.from(document.querySelectorAll('.' + targetClass));

    // target要素の初期化処理と監視
    targets.forEach(target => {

      // 初期化処理
      initTarget(target);

      // 監視
      observer.observe(target);
    });

    // 初期化処理
    function initTarget(target) {
      target.classList.remove('animate__animated', AnimateCssClass);
      return;
    }

    // アニメーション処理
    async function animateTarget(target) {
      if (! target.classList.contains('animate__animated', AnimateCssClass)) {

        // isRepeatがtrueならrepeatIntervalミリ秒後にアニメーションクラスを初期化
        if (isRepeat) {
          const flg = await (() => {
            return new Promise(resolve => {
              // アニメーションクラス付与
              target.classList.add('animate__animated', AnimateCssClass);
              setTimeout(function() {
                resolve(true);
              }, repeatInterval)
            });
          })();
          if (flg) {
            // 初期化
            initTarget(target);
          }
        } else { // isRepeatがfalseなら初期化しない
          // アニメーションクラス付与
          target.classList.add('animate__animated', AnimateCssClass);
        }

      }
      return;
    }
  }

} catch (e) {

} finally {

}
// end window.onload
}();
