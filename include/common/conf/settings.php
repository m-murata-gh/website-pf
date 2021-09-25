<?php
/**
 * include/common/conf/settings.php
 */

/**
 * 環境設定
 */
// dev= 0, prod = 1
const ENV = 0;

/**
 * timezone
 */
date_default_timezone_set('Asia/Tokyo');

/**
 * ルート設定
 */
 if (ENV) {
   // prod
   $root = 'https://murata2021.website/';
 } else {
   // dev
   $root = 'http://localhost/pf/public/';
 }

/**
 * 関数呼び出し
 */
require_once __DIR__ . '/../../../include/common/model/myfunctions.php';
require_once __DIR__ . '/../../../include/common/view/showIE.php';
require_once __DIR__ . '/../../../include/common/view/showHeader.php';
require_once __DIR__ . '/../../../include/common/view/showFooter.php';
require_once __DIR__ . '/../../../include/common/view/showWork.php';
require_once __DIR__ . '/../../../include/common/view/showBreadcrumb.php';
require_once __DIR__ . '/../../../include/common/view/showCard.php';
require_once __DIR__ . '/../../../include/common/view/showBtnBox.php';
require_once __DIR__ . '/../../../include/common/view/showLabelUnit.php';
require_once __DIR__ . '/../../../include/common/view/showTxtBoxUnit.php';
require_once __DIR__ . '/../../../include/common/view/showLightbox.php';

/**
 * 各ページで使用する変数を定義
 */
require_once __DIR__ . '/../../../include/common/conf/myFunctions.php';
$contVar = [];

// nav
// root(top)
$GLOBALS['contVar']['url']['root'] = $root;
// website
$GLOBALS['contVar']['url']['website'] = $root . '#website';
// system
$GLOBALS['contVar']['url']['system'] = $root . '#system';
// other
$GLOBALS['contVar']['url']['other'] = $root . '#other';
// about
$GLOBALS['contVar']['url']['about'] = $root . '#about';

// label_category
const LABEL_WEBSITE = 'WEBSITE';
const LABEL_SYSTEM = 'SYSTEM';
const LABEL_GRAPHIC = 'GRAPHIC';
const LABEL_ILLUST = 'ILLUST';

// btn_category
const BTN_1 = 'VIEW SITE';
const BTN_2 = 'GIT HUB';
// const BTN_3 = 'STYLE GUIDE';

// SKILL
const SKILL_1 = 'HTML/CSS';
const SKILL_2 = 'Sass';
const SKILL_3 = 'JavaScript';
const SKILL_4 = 'PHP';
const SKILL_5 = 'Illustrator';
const SKILL_6 = 'Photoshop';
$skillWebsiteArr = [SKILL_1, SKILL_2, SKILL_3, SKILL_4];
$skillGraphicArr = [SKILL_5, SKILL_6];

// top
$cd = 'public';
$common = $GLOBALS['contVar']['ttlHead'][$cd] = 'MISAMURATA PORTFOLIOSITE';
$separator = ' _ ';

// website-pf
$cd = 'website-pf';
$label = LABEL_WEBSITE;
$ttl = '自主制作:ポートフォリオサイト';
$date = '2021.7.4';
$time = '95h';
$timeSub = '[デザイン14h + コーディング81h]';
$skill = array_merge($skillWebsiteArr, ['PRECSS'], $skillGraphicArr);
$btn = [
  BTN_1 => 'https://murata2021.website/',
  BTN_2  => 'https://github.com/m-murata-gh/website-pf'
];
$imgMain = 'website-pf-main-min.png';
$lightboxSrc = [
  [
    'thumb' => 'website-pf-screen-10pct-min.png',
    'detail' => 'website-pf-screen-60pct-min.png'
  ],
  [
    'thumb' => 'website-pf-screen-sp-20pct-min.png',
    'detail' => 'website-pf-screen-sp-100pct-min.png'
  ],
  [
    'thumb' => 'website-pf-comp-20pct-min.png',
    'detail' => 'website-pf-comp-100pct-min.png'
  ],
  [
    'thumb' => 'faces-thumb-min.png',
    'detail' => 'faces-detail-min.png'
  ],
  [
    'thumb' => 'QR-httpsmurata2021.website_1000x856.png',
    'detail' => 'QR-httpsmurata2021.website_1000x856.png'
  ]
];
$caption = [
  'DESIGN' =>
  '<p>テーマカラーは新緑をイメージ、フォントは斜体にし、スタイリッシュさと前向きな雰囲気に。<br>
  トップページに作品をポスターのように並べ、作品量・作品分野が把握しやすいデザインを目指した。',
  'CODING' =>
  '<p>PHPを使い、作品の解説文や画像・リンクURLなどを全てsettings.phpで管理し、保守性を高めた。<br>
  各作品ページはsettings.phpの配列データから生成される。(→<a href="https://github.com/m-murata-gh/website-pf/blob/master/include/common/conf/settings.php"  target="_blank" rel="noreferrer">settings.phpコードリンク</a>)<br>
  <br>
  また、JavaScriptモジュールはスライドメニューとライトボックスをそれぞれ自作しデザインにこだわった。<br>
  ライトボックスの画像はsettings.phpに追加するだけでOK。<br>
  <br>
  CSS設計はPRECSSを使用。<br>
  レスポンシブデザイン・スマホ対応。'
];
$args = [$cd, $label, $ttl, $date, $time, $timeSub, $skill, $btn, $imgMain, $lightboxSrc, $caption] ;
setContVar($args);

// website-honodc
$cd = 'website-honodc';
$label = LABEL_WEBSITE;
$ttl = '自主制作:ほの歯科クリニック';
$date = '2021.4.24';
$time = '160h';
$timeSub = '[デザイン21h + コーディング139h]';
$skill = array_merge($skillWebsiteArr, ['BEM'], $skillGraphicArr);
$btn = [
  BTN_1 => 'https://honodc.murata2021.website/',
  BTN_2 => 'https://github.com/m-murata-gh/website-honodc'
];
$imgMain = 'website-honodc-main-min.png';
$lightboxSrc = [['thumb' => $thumb, 'detail' => $detail]] = [
  [
    'thumb' => 'website-honodc-screen-10pct-min.png',
    'detail' => 'website-honodc-screen-60pct-min.png'
  ],
  [
    'thumb' => 'website-honodc-screen-sp-20pct-min.png',
    'detail' => 'website-honodc-screen-sp-100pct-min.png'
  ],
  [
    'thumb' => 'website-honodc-comp-20pct-min.png',
    'detail' => 'website-honodc-comp-100pct-min.png'
  ],
  [
    'thumb' => 'website-honodc-sketch-thumb-min.png',
    'detail' => 'website-honodc-sketch-detail-min.png'
  ],
  [
    'thumb' => 'QR-httpshonodc.murata2021.website_1000x856.png',
    'detail' => 'QR-httpshonodc.murata2021.website_1000x856.png'
  ]
];
$caption = [
  'DESIGN' =>
  '<p>テーマカラーは清潔感と信頼感をイメージ。<br>
  爽やかなリーフをモチーフに使い、子供も通いやすい優しい雰囲気に。',
  'CODING' =>
  '<p>PHPでヘッダーやフッターは共通化、JavaScriptモジュールでは、ハンバーガーメニューを自作。左右サイドの開いたデザインにこだわった。<br>
  <br>
  CSS設計はBEMを使用。<br>
  また、バーティカルリズムを使用し、画面に統一感を出した。<br>
  レスポンシブデザイン・スマホ対応。'
];
$args = [$cd, $label, $ttl, $date, $time, $timeSub, $skill, $btn, $imgMain, $lightboxSrc, $caption] ;
setContVar($args);

// website-emploszoo
$cd = 'website-emploszoo';
$label = LABEL_WEBSITE;
$ttl = '職業訓練:姫路市立動物園';
$date = '2020.2.14';
$time = '19h';
$timeSub = '[取材4h + 映像編集3h + コーディング12h]';
$skill = array_merge(['HTML/CSS'], ['Windowsフォト']);
$btn = [
  BTN_1 => 'https://emploszoo.murata2021.website/'
];
$imgMain = 'website-emploszoo-main-min.png';
$lightboxSrc = [['thumb' => $thumb, 'detail' => $detail]] = [
  [
    'thumb' => 'website-emploszoo-screen-20pct-min.png',
    'detail' => 'website-emploszoo-screen-100pct-min.png'
  ],
  [
    'thumb' => 'website-emploszoo-screen2-40pct-min.png',
    'detail' => 'website-emploszoo-screen2-100pct-min.png'
  ],
  [
    'thumb' => 'website-emploszoo-screen3-40pct-min.png',
    'detail' => 'website-emploszoo-screen3-100pct-min.png'
  ],
  [
    'thumb' => 'website-emploszoo-sketch-thumb-min.png',
    'detail' => 'website-emploszoo-sketch-detail-min.png'
  ]
];
$caption = [
  'TEAM' =>
  '<p>職業訓練校でのチーム制作。<br>
  チーム全員でコンセプトを決め、担当間で協力しながら作成した。<br>
  <br>
  取材：全員<br>
  デザイン：1名<br>
  文章制作：1名<br>
  コーディング：2名(担当) の計4名。<br>
  <br>
  <担当箇所(コーディング)><br>
  ・ヘッダー、フッター、プランページのコーディング<br>
  ・トップページの映像編集',
  'VIDEO' =>
  '<p>チーム各人がそれぞれ撮影した映像をピックアップし、Windowsフォトを使用し編集。<br>
  <br>
  目玉の動物や観覧車などの中から、手振れシーンなどを避けて自然につながるよう意識した。<br>
  <br>
  ウェブサイト用のため、サイズが軽くなるようエンコード(フリーソフトを使用)。',
  'CODING' =>
  '<p>HTML/CSSを勉強してから初めての制作だったが、<br>
  もう1名の担当者と、授業で学んだことをベースに実際のサイトなども参考に、話し合いながら進めた。'
];
$args = [$cd, $label, $ttl, $date, $time, $timeSub, $skill, $btn, $imgMain, $lightboxSrc, $caption] ;
setContVar($args);

// system-reservedc
$cd = 'system-reservedc';
$label = LABEL_SYSTEM;
$ttl = '自主制作:歯科予約システム(PHP)';
$date = '2021.6.12';
$time = '76h';
$timeSub = '[デザイン8h + コーディング68h]';
$skill = array_merge($skillWebsiteArr,['SQL']);
$btn = [
  BTN_1 => 'https://honodc.murata2021.website/reserve/',
  BTN_2  => 'https://github.com/m-murata-gh/system-reservedc/'
];
$imgMain = 'system-reservedc-main-min.png';
$lightboxSrc = [['thumb' => $thumb, 'detail' => $detail]] = [
  [
    'thumb' => 'system-reservedc-screen-20pct-min.png',
    'detail' => 'system-reservedc-screen-100pct-min.png'
  ],
  [
    'thumb' => 'system-reservedc-screen-sp-40pct-min.png',
    'detail' => 'system-reservedc-screen-sp-100pct-min.png'
  ],
  [
    'thumb' => 'system-reservedc-comp-20pct-min.png',
    'detail' => 'system-reservedc-comp-100pct-min.png'
  ],
  [
    'thumb' => 'QR-httpshonodc.murata2021.websitereserve_1000x856.png',
    'detail' => 'QR-httpshonodc.murata2021.websitereserve_1000x856.png'
  ]
];
$caption = [
  'DESIGN' =>
  '<p>シンプルにわかりやすく、情報の整理されたデザインを心がけた。',
  'CODING' =>
  '<p>歯科医院の予約システム。<br>
  PHPの基礎学習のためフレームワークは使用せず、簡易なMVCモデル、数個のクラスで設計した。<br>
  <br>
  ★実際に予約操作できますのでお試しください★<br>
  <br>
  <主な機能><br>
  ・カレンダーから予約日時のセルをクリックして予約。DBへ登録。<br>
  ・登録時はDB最新データと照合し、重複予約を防止。<br>
  ・カレンダーデータは、3ヶ月先までの分がDBになければその都度自動生成。<br>
  ・祝日と臨時の休日はcsvからDBに登録しておくと、該当日は休日として生成。<br>
  ・入力時にjavascriptで入力個所をハイライト。<br>
  ・入力時に不適当なデータを入力し送信するとエラーコメントを表示。<br>
  ・インジェクション、不正アクセス攻撃対策。<br>
  ・セッションによる入力内容の一時保存。'
];
$args = [$cd, $label, $ttl, $date, $time, $timeSub, $skill, $btn, $imgMain, $lightboxSrc, $caption] ;
setContVar($args);

// other-emplosbanner
$cd = 'other-emplosbanner';
$label = LABEL_GRAPHIC;
$ttl = '職業訓練:バナー';
$date = '2020.2.28';
$time = '40min';
$timeSub = '[素材収集とデザイン15min + 制作25min]';
$skill = array_merge( $skillGraphicArr);
$btn = [
];
$imgMain = 'b1.jpg';
$lightboxSrc = [['thumb' => $thumb, 'detail' => $detail]] = [
  [
    'thumb' => 'b1.jpg',
    'detail' => 'b1.jpg'
  ],
  [
    'thumb' => 'b2.jpg',
    'detail' => 'b2.jpg'
  ],
  [
    'thumb' => 'b3.jpg',
    'detail' => 'b3.jpg'
  ],
  [
    'thumb' => 'b4.jpg',
    'detail' => 'b4.jpg'
  ],
  [
    'thumb' => 'b5.jpg',
    'detail' => 'b5.jpg'
  ],
  [
    'thumb' => 'b6.jpg',
    'detail' => 'b6.jpg'
  ],
  [
    'thumb' => 'b7.jpg',
    'detail' => 'b7.jpg'
  ],
  [
    'thumb' => 'b8.jpg',
    'detail' => 'b8.jpg'
  ],
  [
    'thumb' => 'b9.jpg',
    'detail' => 'b9.jpg'
  ],
  [
    'thumb' => 'b10.jpg',
    'detail' => 'b10.jpg'
  ],
  [
    'thumb' => 'b11.jpg',
    'detail' => 'b11.jpg'
  ],
  [
    'thumb' => 'b12.jpg',
    'detail' => 'b12.jpg'
  ],
  [
    'thumb' => 'b13.jpg',
    'detail' => 'b13.jpg'
  ],
  [
    'thumb' => 'b14.jpg',
    'detail' => 'b14.jpg'
  ],
  [
    'thumb' => 'b15.jpg',
    'detail' => 'b15.jpg'
  ],
  [
    'thumb' => 'b16.jpg',
    'detail' => 'b16.jpg'
  ],
  [
    'thumb' => 'b17.jpg',
    'detail' => 'b17.jpg'
  ],
  [
    'thumb' => 'b18.jpg',
    'detail' => 'b18.jpg'
  ],
  [
    'thumb' => 'b19.jpg',
    'detail' => 'b19.jpg'
  ]
];
$caption = [
  'BANNER' =>
  '<p>職業訓練校で毎朝制作した課題。<br>
  お題に沿って画像と文字を組み合わせて、40分以内で作成。'
];
$args = [$cd, $label, $ttl, $date, $time, $timeSub, $skill, $btn, $imgMain, $lightboxSrc, $caption] ;
setContVar($args);

// other-drawing
$cd = 'other-drawing';
$label = LABEL_ILLUST;
$ttl = 'その他:イラスト等';
$date = '2007～2021';
$time = '-h';
$timeSub = '[イラスト・平面構成6h、デッサン6～12h]';
$skill = array_merge($skillGraphicArr, ['鉛筆','アクリル']);
$btn = [
];
$imgMain = 'i1.png';
$lightboxSrc = [['thumb' => $thumb, 'detail' => $detail]] = [
  [
    'thumb' => 'i1.png',
    'detail' => 'i1.png'
  ],
  [
    'thumb' => 'i2.png',
    'detail' => 'i2.png'
  ],
  [
    'thumb' => 'i3.png',
    'detail' => 'i3.png'
  ],
  [
    'thumb' => 'd1.jpg',
    'detail' => 'd1.jpg'
  ],
  [
    'thumb' => 'd2.jpg',
    'detail' => 'd2.jpg'
  ],
  [
    'thumb' => 'd3.jpg',
    'detail' => 'd3.jpg'
  ],
  [
    'thumb' => 'd4.jpg',
    'detail' => 'd4.jpg'
  ],
  [
    'thumb' => 'd5.jpg',
    'detail' => 'd5.jpg'
  ],
  [
    'thumb' => 'd6.jpg',
    'detail' => 'd6.jpg'
  ],
  [
    'thumb' => 'd7.jpg',
    'detail' => 'd7.jpg'
  ],
  [
    'thumb' => 'd8.jpg',
    'detail' => 'd8.jpg'
  ],
  [
    'thumb' => 'd9.jpg',
    'detail' => 'd9.jpg'
  ],
  [
    'thumb' => 'd10.jpg',
    'detail' => 'd10.jpg'
  ],
  [
    'thumb' => 'd11.jpg',
    'detail' => 'd11.jpg'
  ],
  [
    'thumb' => 'd12.jpg',
    'detail' => 'd12.jpg'
  ],
  [
    'thumb' => 'h1.jpg',
    'detail' => 'h1.jpg'
  ],
  [
    'thumb' => 'h2.jpg',
    'detail' => 'h2.jpg'
  ],
  [
    'thumb' => 'h3.jpg',
    'detail' => 'h3.jpg'
  ],
  [
    'thumb' => 't1.jpg',
    'detail' => 't1.jpg'
  ],
  [
    'thumb' => 't2.jpg',
    'detail' => 't2.jpg'
  ],
  [
    'thumb' => 't3.jpg',
    'detail' => 't3.jpg'
  ]
];
$caption = [
  'ILLUST' =>
  '<p>PhotoshopやIllustratorで描いたイラスト。',
  'DRAWING' =>
  '<p>鉛筆デッサンや平面構成。'
];
$args = [$cd, $label, $ttl, $date, $time, $timeSub, $skill, $btn, $imgMain, $lightboxSrc, $caption] ;
setContVar($args);
