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
    microcosmは西洋占星術で使用されるホロスコープ作成支援ソフトです。<br>
    </div>

    <h2>特徴</h2>
    <div class="section">
        <div class="feature pure-g">
            <div class="item pure-u-1-3">
                windows,mac両対応
            </div>
            <div class="item pure-u-1-3">
                swiss Ephemeris使用
            </div>
            <div class="item pure-u-1-3">
                柔軟なオーブ設定
            </div>
            <div class="item pure-u-1-3">
                他ソフトインポート
            </div>
            <div class="item pure-u-1-3">
                CPSサポート
            </div>
            <div class="item pure-u-1-3">
                GPLライセンス
            </div>
        </div>
    </div>

    <h2>ラインナップ</h2>
    <div class="section">
    <dl>
        <dt>microcosm lite</dt>
        <dd>旧windowsでも動作可能なバージョンです。機能追加やサポートは最低限となります。</dd>
        <dt>microcosm</dt>
        <dd>windows storeで配布されるwindows10用バージョンです。</dd>
        <dt>microcosm for Mac</dt>
        <dd>Mac OSX用バージョンです。</dd>
    </div>

    <h2>機能比較</h2>
    <div class="section">
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
    <h2>ダウンロード</h2>

    <div class="footer">
    (c) ogatism
    </div>
</div>
</body>
</html>
