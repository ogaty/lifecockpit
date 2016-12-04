<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>{{{$title or  'microcosm'}}}</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/microcosm.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-min.js"></script>
    <script type="text/javascript">
$(document).ready( function () {
    $('#compare').DataTable({
        searching: false,
        info: false,
        ordering: false,
        paging: false
    });
} );
    </script>
</head>
<body>
<div class="microcosm">
    <h1>占星術ソフト microcosm</h1>
    <hr>

    <div class="section">
        <div class="section-inner">
        microcosmは西洋占星術で使用されるホロスコープ作成支援ソフトです。<br>
        最新のシステムで快適に動作することを目的として作成しました。
        </div>
    </div>

    <div class="section color">
    <h2>お知らせ</h2>
        <div class="section-inner">
            <ul>
                <li>2016/12/xx mac版 ver1.0 リリースしました！</li>
            </ul>
        </div>
    </div>

    <div class="section">
    <h2>特徴</h2>
        <div class="section-inner">
        <div class="feature pure-g">
            <div class="item pure-u-1-3">
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
            <div class="item pure-u-1-3">
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
            <div class="item pure-u-1-3">
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
            <div class="item pure-u-1-3">
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
            <div class="item pure-u-1-3">
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
            <div class="item pure-u-1-3">
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
        <div class="imgs">
            <a href="/img/sample1.png">
                <img src="/img/sample1-mini.png">
            </a>
            <a href="/img/sample2.png">
                <img src="/img/sample2-mini.png">
            </a>
        </div>
    </div>

    <div class="section color2">
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

    <div class="section">
    <h2>機能比較</h2>
        <div class="section-inner">
        <table id="compare">
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

    <div class="section color">
        <h2>開発者</h2>
        <div class="section-inner">
        <h3>オガティ</h3>
        <div class="info">
             <div>
             Web業界に勤務するシステムエンジニア。個人としてもブロガー、電子書籍執筆など幅広く活動。<br>
             2014年より占星術師みけまゆみの元で本格的な占星術を学ぶ。<br>
             既存のホロスコープ作成ソフトが気に入らなかったため、独自の占星術ソフト「microcosm」の開発を始めるようになる。
             </div>
             <div>
             <a href="https://ogatism.jp/">ブログ「ogatism」</a><br>
             <a href="https://www.amazon.co.jp/%E7%B7%92%E5%BD%A2%E9%9B%84%E4%BA%8C/e/B00OBDISS8/">Amazon著者ページ</a><br>
             <a href="https://wowme.jp/gigs/2035">占い鑑定依頼はこちらまで</a><br>
             </div>
        </div>
        </div>
    </div>

    <div class="section">
    <h2>ダウンロード</h2>
        <div class="section-inner">
        <div class="dl">
            <h3>microcosm Lite</h3>
            <div>対応OS: windows7/windows8.1/windows10</div>
            <div class="dl-link"><a href="https://ogatism.jp/file/microcosm03.zip">ダウンロード</a></div>
        </div>
        <div class="dl">
            <h3>microcosm</h3>
            <div>対応OS: Windows10</div>
            <div class="dl-link">開発中</div>
        </div>
        <div class="dl">
            <h3>microcosm for Mac</h3>
            <div>対応OS: Mac OS X</div>
            <div class="dl-link">開発中</div>
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
            <dt class="faq">Is there English version?</dt>
            <dd>No. But I want to support English language someday.</dd>
        </dl>
        </div>
    </div>

    <div class="footer">
    <p>microcosm  (c) ogatism</p>
    </div>
</div>
</body>
</html>
