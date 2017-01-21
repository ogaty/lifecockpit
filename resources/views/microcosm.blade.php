<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>{{{$title or  'microcosm'}}}</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta property="og:title" content="{{{$title or  'microcosm'}}}" />
    <meta property="og:url" content="http://microcosm.ogatism.com/" />
    <meta property="og:image" content="http://microcosm.ogatism.com/img/microcosm_kv_mini.png" />
    <meta property="og:description" content="西洋占星術師用ホロスコープ作成ソフト「microcosm」公式サイトです。" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{{$title or  'microcosm'}}}" />
    <meta name="twitter:description" content="西洋占星術師用ホロスコープ作成ソフト「microcosm」公式サイトです。" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/grids-responsive-min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/microcosm.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-min.js"></script>
    <script type="text/javascript" src="/js/microcosm.js"></script>
    <script type="text/javascript">
    $(document).ready( function () {
        $('#compare').DataTable({
            searching: false,
            info: false,
            ordering: false,
            paging: false,
            scrollX: true
        });

        $('a[href^="#"]').click(function() {
            var href= $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top;
	    $('body,html').animate({scrollTop:position}, 400, 'swing');
	    return false;
        });

        var topBtn = $('#page-top');    
        topBtn.hide();
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                topBtn.fadeIn();
            } else {
                topBtn.fadeOut();
            }
        });
        topBtn.click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    } );
    </script>
</head>
<body>
<div class="microcosm" id="top">
    <div class="overlay"></div>
    <p id="page-top"><a href="#top">
        <i class="fa fa-angle-up"></i>
    </a></p>
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-text">
                <h1>覗いてみよう、君の宇宙を。</h1>
                <span class="catchcopy">西洋占星術師用ホロスコープ作成ソフト「microcosm」</span>
                <div class="btn-wrap">
                    <a class="btn" href="#dl">
                    ダウンロード
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="section-inner">
            <div class="abstract">
                IT技術の進化により、<br>
                占いの世界でもソフトウェアを使う事が<br class="sp">当たり前となっています。<br>
                しかし、<br class="sp">この業界に関わるエンジニアの数は少なく、<br>
                最新OSでの動作等不具合が見られたり、<br class="sp">デザインに問題があるソフトも多々ありました。<br>
                そういう理由で、今風のシステムを用いて<br>
                自分が使いやすいホロスコープ作成ソフトを<br class="sp">作ってみることにしました。<br>
                それが、このソフト<br class="sp">「microcosm(マイクロコズム)」です。
                <div class="btn-wrap">
                    <a class="btn" href="#dl">
                    ダウンロード
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="section color">
    <h2>お知らせ</h2>
        <div class="section-inner">
            <ul>
                <li>2017/01/17 microcosm-mac ver1.0.1 リリースしました！</li>
                <li>2017/01/04 microcosm-lite ver0.4.2 リリースしました！</li>
                <li>2016/12/09 microcosm-mac ver1.0 リリースしました！</li>
            </ul>
        </div>
    </div>

    <div class="section">
    <h2>特徴</h2>
        <div class="section-inner">
        <div class="feature pure-g">
            <div class="item pure-u-1 pure-u-md-1-3">
                <div class="item-inner">
                    <div class="head">
                        <span class="icon"><i class="fa fa-desktop" aria-hidden="true"></i></span><br>
                        windows,mac両対応
                    </div>
                    <div class="body">
                        Macに対応していない占星術ソフトも多いですが、当ソフトはMac版も開発しております。
                    </div>
                </div>
            </div>
            <div class="item pure-u-1 pure-u-md-1-3">
                <div class="item-inner">
                    <div class="head">
                        <span class="icon"><i class="fa fa-file-archive-o" aria-hidden="true"></i></span><br>
                        swiss Ephemeris使用
                    </div>
                    <div class="body">
                        当ソフトも様々なソフトで使用されているswiss Ephemerisライブラリを使用しております。
                    </div>
                </div>
            </div>
            <div class="item pure-u-1 pure-u-md-1-3">
                <div class="item-inner">
                    <div class="head">
                        <span class="icon"><i class="fa fa-sliders" aria-hidden="true"></i></span><br>
                        柔軟なオーブ設定
                    </div>
                    <div class="body">
                        太陽と月のみソフトオーブ8度、その他の天体は6度といった設定も可能です。
                    </div>
                </div>
            </div>
            <div class="item pure-u-1 pure-u-md-1-3">
                <div class="item-inner">
                    <div class="head">
                        <span class="icon"><i class="fa fa-sign-in" aria-hidden="true"></i></span><br>
                        他ソフトインポート
                    </div>
                    <div class="body">
                        他社（他者）製のソフトで作成したホロスコープも読み込みできます。
                    </div>
                </div>
            </div>
            <div class="item pure-u-1 pure-u-md-1-3">
                <div class="item-inner">
                    <div class="head">
                        <span class="icon"><i class="fa fa-cube" aria-hidden="true"></i></span><br>
                        CPSサポート
                    </div>
                    <div class="body">
                        CPS(Composission Progress System)に対応しています。
                    </div>
                </div>
            </div>
            <div class="item pure-u-1 pure-u-md-1-3">
                <div class="item-inner">
                    <div class="head">
                        <span class="icon"><i class="fa fa-id-card" aria-hidden="true"></i></span><br>
                        GPLライセンス
                    </div>
                    <div class="body">
                        当ソフトはGPLライセンスにて提供していますので、ダウンロード後の制限はありません。
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="section color">
    <h2>スクリーンショット</h2>
        <div class="section-inner">
            <div class="imgs pure-g">
                <div class="image-border pure-u-1 pure-u-md-1-3">
                    <div class="image-border-inner">
                            <img src="/img/sample1-mini.png" class="sampleimg">
                    </div>
                </div>
                <div class="image-border pure-u-1 pure-u-md-1-3">
                    <div class="image-border-inner">
                            <img src="/img/microcosm-mac-mini.png" class="sampleimg">
                    </div>
                </div>
                <div class="image-border pure-u-1 pure-u-md-1-3">
                    <div class="image-border-inner">
                            <img src="/img/sample2-mini.png" class="sampleimg">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section moon">
        <div class="overlay">
            <h2>ラインナップ</h2>
            <div class="section-inner">
                <dl>
                    <dt class="lineup">microcosm lite</dt>
                    <dd>旧windowsでも動作可能なバージョンです。機能追加やサポートは最低限となります。</dd>
                    <dt class="lineup">microcosm</dt>
                    <dd>windows storeで配布されるwindows10用バージョンです。</dd>
                    <dt class="lineup">microcosm for Mac</dt>
                    <dd>Mac OSX用バージョンです。</dd>
                </dl>
            ライセンスはいずれもGPL v2となります。
            </div>
        </div>
    </div>

    <div class="section">
    <h2>機能比較</h2>
        <div class="section-inner">
        <table id="compare" class="stripe" width="100%">
            <thead>
                <tr>
                    <th></th>
                    <th>microcosm lite</th>
                    <th>microcosm(開発中)</th>
                    <th>microcosm for Mac</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>配布形式</td>
                    <td class="center">ダウンロード</td>
                    <td class="center">Windows Store</td>
                    <td class="center">Mac App Store</td>
                </tr>
                <tr>
                    <td>windows7</td>
                    <td class="center">○</td>
                    <td class="center">×</td>
                    <td class="center">×</td>
                </tr>
                <tr>
                    <td>windows8</td>
                    <td class="center">○</td>
                    <td class="center">×</td>
                    <td class="center">×</td>
                </tr>
                <tr>
                    <td>windows10</td>
                    <td class="center">○</td>
                    <td class="center">○</td>
                    <td class="center">×</td>
                </tr>
                <tr>
                    <td>Mac OSX</td>
                    <td class="center">×</td>
                    <td class="center">×</td>
                    <td class="center">○</td>
                </tr>
                <tr>
                    <td>windows Ink</td>
                    <td class="center">×</td>
                    <td class="center">○</td>
                    <td class="center">×</td>
                </tr>
                <tr>
                    <td>一重円</td>
                    <td class="center">○</td>
                    <td class="center">開発中</td>
                    <td class="center">○</td>
                </tr>
                <tr>
                    <td>三重円</td>
                    <td class="center">○</td>
                    <td class="center">開発中</td>
                    <td class="center">開発中</td>
                </tr>
                <tr>
                    <td>10天体</td>
                    <td class="center">○</td>
                    <td class="center">開発中</td>
                    <td class="center">○</td>
                </tr>
                <tr>
                    <td>リリス</td>
                    <td class="center">○</td>
                    <td class="center">開発中</td>
                    <td class="center">開発中</td>
                </tr>
                <tr>
                    <td>小惑星</td>
                    <td class="center">キロンのみ</td>
                    <td class="center">キロン、4小惑星(予定)</td>
                    <td class="center">開発中</td>
                </tr>
                <tr>
                    <td>ヘリオセントリック</td>
                    <td class="center">○</td>
                    <td class="center">開発中</td>
                    <td class="center">開発中</td>
                </tr>
                <tr>
                    <td>サイドリアル</td>
                    <td class="center">○</td>
                    <td class="center">開発中</td>
                    <td class="center">開発中</td>
                </tr>
                <tr>
                    <td>他ソフト出生図インポート</td>
                    <td class="center">○</td>
                    <td class="center">開発中</td>
                    <td class="center">開発中</td>
                </tr>
                <tr>
                    <td>ソーラーリターン</td>
                    <td class="center">開発中</td>
                    <td class="center">開発中</td>
                    <td class="center">開発中</td>
                </tr>
                <tr>
                    <td>サターンリターン</td>
                    <td class="center">開発中</td>
                    <td class="center">開発中</td>
                    <td class="center">開発中</td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>

    <div class="section planet">
        <div class="overlay">
            <h2>開発者</h2>
            <div class="section-inner">
                <h3>オガティ</h3>
                <div class="info">
                     <p>
                         Web業界に勤務するシステムエンジニア。個人としてもブロガー、電子書籍執筆など幅広く活動。<br>
                         2014年より占星術師みけまゆみの元で本格的な占星術を学び、占星術師としての活動を開始。<br>
                         理系男性エンジニア＋占星術という珍しさが注目を集める。<br>
                         既存のホロスコープ作成ソフトが気に入らなかったため、2015年末から独自の占星術ソフト「microcosm」の開発プロジェクトを開始する事を決意。
                     </p>
                     <p>
                         <a href="https://ogatism.jp/">ブログ「ogatism」</a><br>
                         <a href="https://www.amazon.co.jp/%E7%B7%92%E5%BD%A2%E9%9B%84%E4%BA%8C/e/B00OBDISS8/">Amazon著者ページ</a><br>
                         <a href="https://wowme.jp/gigs/2035">占い鑑定依頼はこちらまで</a><br>
                     </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="dl">
    <h2>ダウンロード</h2>
        <div class="section-inner">
        <div class="dl">
            <h3>microcosm Lite</h3>
            <div>バージョン: 0.4.2</div>
            <div>対応OS: windows7/windows8.1/windows10</div>
            <div>※起動には.net Framework 4.5以上が必要です</div>
            <div class="dl-link">
                <a href="https://ogatism.jp/file/microcosm042.zip">ダウンロード</a><br>
                <a href="https://www.microsoft.com/ja-JP/download/details.aspx?id=42643" target="_blank">.net Frameworkをダウンロードする</a>
            </div>
        </div>
        <div class="dl">
            <h3>microcosm</h3>
            <div>バージョン: -</div>
            <div>対応OS: Windows10</div>
            <div class="dl-link">開発中</div>
        </div>
        <div class="dl">
            <h3>microcosm for Mac</h3>
            <div>バージョン: 1.0</div>
            <div>対応OS: Mac OS X</div>
            <div class="dl-link"><a href="https://geo.itunes.apple.com/jp/app/microcosm/id1182966687?mt=12"><img src="/img/Download_on_the_Mac_App_Store_Badge_JP_165x40.svg"></a></div>
        </div>
        </div>
    </div>

    <div class="section color">
    <h2>FAQ</h2>
        <div class="section-inner">
        <dl>
            <dt class="faq">チャートを自分のサイトやブログに載せて良いですか？</dt>
            <dd>当ソフトはGPL v2ライセンスですので、使用に関する制限はありません。ご自由にお使いください。</dd>
            <dt class="faq">この機能が欲しい、この天体を表示させたい</dt>
            <dd>内容によっては今後のバージョンで検討するかもしれないので個別に相談いただければと思います。</dd>
            <dt class="faq">Is there an English version?</dt>
            <dd>No. But I want to support English language someday.</dd>
        </dl>
        </div>
    </div>

    <div class="section">
    <h2>ヘルプ</h2>
        <div class="section-inner center">
            <a href="http://microcosm.ogatism.com/help/">ヘルプはこちら(まだ作成中ですが)</a>
        </div>
    </div>

    <div class="section color2">
    <h2>問い合わせ</h2>
        <div class="section-inner center">
        当ソフトはまだ開発中の部分が多いため、バグも多数潜んでいると思われます。<br>
        不明点がございましたら、info◆ogatism.jp(@に変換)までお願いいたします。
        </div>
    </div>

    <div class="footer color">
        <div>西洋占星術師用ホロスコープ作成ソフト「microcosm」</div>
        <div>  (c) yuji ogata / ogatism</div>
    </div>
</div>
</body>
</html>
