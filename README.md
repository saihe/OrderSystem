# OrderSystem
注文システム。共同開発。


### Ver0.2
- 20160401
	+ 1. AccessDBのシングルトン化
	+ 2. SelectDBをSelectControllerから実行
	+ 3. MainControllerからSelectControllerを呼び、SelectControllerの中でSQL文を作成
	+ 4. Viewへの出力はUtilの中にあるPHPページをincludeすることで出力
	+ 5. Viewにナビゲーションバーを追加
	+ 6. どこのディレクトリにアクセスしてもMainControllerに飛ぶ
	+ 7. MainControllerに飛ばすときにancerというパラメータをGETメソッドで送信
	+ 8. MainContorlelrの中でancerパラメータを取得しリンク先をルーティング
	+ 9. 例外発生時はクッキーにエラーメッセージを保管し、top.phpに飛ばして表示
- 20160331
    + 1. MainControllerからDBレコードを取得、クッキー(SESSION)に格納
    + 2. menu.phpへ遷移した後に、クッキーからDBレコードを取得、ダンプ
- 20160324
    + 1. ディレクトリトラバーサル対策として各ディレクトリにindex.phpを配置。header()でアプリトップへ飛ばすようにした。
- 20160323
    + 1. Access.phpとCotroller.phpの動き変更
- 20160323
    + 1. 例外クラス作成
- 20160313
    + ドキュメント再作成。
    + ディレクトリ構成再構築。
    
### Ver0.1
- 20160313
	+ 1. データベースから商品情報を取得し、PHPを使い動的にフォームを作成。
	+ 2. JavaScriptを使用しクライアントブラウザ上で商品をいくつ選択したのかわかるようにした。

