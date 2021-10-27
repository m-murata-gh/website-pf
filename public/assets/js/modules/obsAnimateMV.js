'use strict';

window.onload = function() {

/* MVと交差するとアニメーションする。nミリ秒後にリセットされ、交差のたびにアニメーションする。 */

/* memo */
/*
animateCssClassはimgタグに直接つけるとよい。コンテナにつけるとtransformが競合して位置ずれする場合あり。
*/

// エラー回避
try {

  // 設定
  const resetInterval = 3000;
  const obsTargetId = 'MV'; // 交差を監視する要素につけるクラス
  const moveTargetArr = [
    {
      targetClass: 'js_shakeX_repeat', // アニメーションさせる要素につけるクラス
      animateCssClass: 'animate__shakeX' // animate.css
    },
    {
      targetClass: 'js_tada_repeat',
      animateCssClass: 'animate__tada'
    }
  ];

  // IntersectionObserver option
  const defaultOptions = {
    root: null,
    rootMargin: '0%',
    threshold: 0.7
  }

  setObsIntersecting(obsTargetId, moveTargetArr, defaultOptions, true, resetInterval);

  // ※引数isRepeatがtrueならrepeatIntervalミリ秒後にアニメーションクラスを初期化
  function setObsIntersecting(obsTargetId, moveTargetArr, options=defaultOptions, isRepeat=false, repeatInterval=0) {

    // IntersectionObserver callback関数
    const callback = (entries, observer) => {
      let obsTarget = entries[0].target;

      // 交差時に処理を行う
      if (entries[0].isIntersecting) {
        let clientTop = obsTarget.getBoundingClientRect().top;
          // アニメーション処理
          animateTarget(moveTargetArr);
      }
    }

    // IntersectionObserverインスタンスを作成
    let observer = new IntersectionObserver(callback, options);

    let obsTarget = document.getElementById(obsTargetId);

    // 監視
    observer.observe(obsTarget);

    // アニメーションクラス排除
    function removeAnimateCssClass(targetClass, AnimateCssClass) {
      // targets要素を取得
      let targets = Array.from(document.querySelectorAll('.' + targetClass));
      // アニメーションクラス排除
      targets.forEach(target => {
        target.classList.remove('animate__animated', AnimateCssClass);
      });
    }

    // アニメーションクラス付与
    function addAnimateCssClass(targetClass, AnimateCssClass) {
      // targets要素を取得
      let targets = Array.from(document.querySelectorAll('.' + targetClass));
      // アニメーションクラス付与
      targets.forEach(target => {
        target.classList.add('animate__animated', AnimateCssClass);
      });
    }

    // アニメーション処理
    async function animateTarget(moveTargetArr) {
      // isRepeatがtrueならrepeatIntervalミリ秒後にアニメーションクラスを初期化
      if (isRepeat) {
        const flg = await (() => {
          return new Promise(resolve => {
            // アニメーションクラス付与
            moveTargetArr.forEach(moveTarget => {
              addAnimateCssClass(moveTarget.targetClass, moveTarget.animateCssClass)
            });
            setTimeout(function() {
              resolve(true);
            }, repeatInterval)
          });
        })();
        if (flg) {
          // アニメーションクラス排除
          moveTargetArr.forEach(moveTarget => {
            removeAnimateCssClass(moveTarget.targetClass, moveTarget.animateCssClass)
          });
        }
      } else { // isRepeatがfalseなら初期化しない
        // アニメーションクラス付与
        moveTargetArr.forEach(moveTarget => {
          addAnimateCssClass(moveTarget.targetClass, moveTarget.animateCssClass)
        });
      }
      return;
    }
  }

} catch (e) {

} finally {

}
// end window.onload
}();
