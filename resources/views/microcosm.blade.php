<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>{{{$title or  'microcosm'}}}</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
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
        </div>
    </div>

    <div class="section">
    <h2>特徴</h2>
        <div class="section-inner">
        <div class="feature pure-g">
            <div class="item pure-u-1-3">
                <div class="item-inner">
                    windows,mac両対応
                </div>
            </div>
            <div class="item pure-u-1-3">
                <div class="item-inner">
                    swiss Ephemeris使用
                </div>
            </div>
            <div class="item pure-u-1-3">
                <div class="item-inner">
                    柔軟なオーブ設定
                </div>
            </div>
            <div class="item pure-u-1-3">
                <div class="item-inner">
                    他ソフトインポート
                </div>
            </div>
            <div class="item pure-u-1-3">
                <div class="item-inner">
                    CPSサポート
                </div>
            </div>
            <div class="item pure-u-1-3">
                <div class="item-inner">
                    GPLライセンス
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="section color">
    <h2>スクリーンショット</h2>
    </div>

    <div class="section">
    <h2>ラインナップ</h2>
        <div class="section-inner">
        <dl>
        <dt>microcosm lite</dt>
        <dd>旧windowsでも動作可能なバージョンです。機能追加やサポートは最低限となります。</dd>
        <dt>microcosm</dt>
        <dd>windows storeで配布されるwindows10用バージョンです。</dd>
        <dt>microcosm for Mac</dt>
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
             <a href="https://ogatism.jp/">Amazon著者ページ</a><br>
             <a href="https://ogatism.jp/">占い鑑定依頼はこちらまで</a><br>
             </div>
        </div>
        </div>
    </div>

    <div class="section">
    <h2>ダウンロード</h2>
        <div class="section-inner">
        <div class="dl">
            <h3>microcosm Lite</h3>
            <p>対応OS: windows7/windows8.1/windows10</p>
            <div><a href="">ダウンロード</a></div>
        </div>
        <div class="dl">
            <h3>microcosm</h3>
            <p>対応OS: Windows10</p>
            <div>開発中</div>
        </div>
        <div class="dl">
            <h3>microcosm for Mac</h3>
            <p>対応OS: Mac OS X</p>
            <div>開発中</div>
        </div>
        </div>
    </div>

    <div class="section color">
    <h2>FAQ</h2>
        <div class="section-inner">
        <dl>
            <dt>チャートを自分のサイトやブログに載せて良いですか？</dt>
            <dd>当ソフトはGPL v2ライセンスですので、使用に関する制限はありません。ご自由にお使いください。</dd>
            <dt>この機能が欲しい、この天体を表示させたい</dt>
            <dd>内容によっては今後のバージョンで検討するかもしれないので個別に相談いただければと思います。</dd>
            <dt>Is there English version?</dt>
            <dd>No. But I want to support English language someday.</dd>
        </dl>
        </div>
    </div>

    <div class="footer">
    <p>microcosm</p>
    (c) ogatism
    </div>
</div>
</body>
</html>
