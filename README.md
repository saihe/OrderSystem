# OrderSystem
注文システム。共同開発。


#Ver0.1
1. データベースから商品情報を取得し、PHPを使い動的にフォームを作成。
2. JavaScriptを使用しクライアントブラウザ上で商品をいくつ選択したのかわかるようにした。

#Ver0.2
- 20160313
    + 1. ドキュメント再作成。
    + 2. ディレクトリ構成再構築。
-20160323
    +1. 例外クラス作成
-20160323
    +1. Access.phpとCotroller.phpの動き変更
-20160324
    +1. ディレクトリトラバーサル対策として各ディレクトリにindex.phpを配置。header()でアプリトップへ飛ばすようにした。
-20160331
    +1. MainControllerからDBレコードを取得、クッキー(SESSION)に格納
    +2. menu.phpへ遷移した後に、クッキーからDBレコードを取得、ダンプ
