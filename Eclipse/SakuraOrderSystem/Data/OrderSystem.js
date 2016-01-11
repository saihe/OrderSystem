/**
 *
 */
	//カウントボタン
	//hiddenフォームpost送信用
	var amounts = [];
	var prices = [];
	//spanタグ格納用
	var spans = [];
	//spanタグ表示用
	var counts = [];
	//合計金額
	var totals = [];
	var total;
	var postTotal;

	//読み込み
	function onLoad(){
		//spanタグすべて取得
		for(key in document.getElementsByTagName("span")){
			//Counter全て取得
			if(key.includes("Counter")){
				//spanタグのCounterを取得
				spans[key] = document.getElementById(key);
				//表示用カウントリセット
				counts[key] = 0;
				//hiddenフォーム取得
				amounts[key.substr(0, 9)] = document.getElementById(key.substr(0, 9));
				prices[key.substr(0, 4) + "Price"] = document.getElementById(key.substr(0, 4) + "Price");
				totals[key.substr(0, 4) + "Total"] = 0;
				postTotal = document.getElementById("postTotal");
			}
		}
		//合計金額
		total = document.getElementById("total");
	}

	//ボタンクリック
	function onClick(id, operator){
		//表示用カウント増やす
		if(operator == "+"){
			counts[id + "Counter"]++;
		}
		//表示用カウント減らす
		if(operator == "-"){
			counts[id + "Counter"]--;
			if(counts[id + "Counter"] < 1){
				counts[id + "Counter"] = 0;
			}
		}
		//spanタグに値をセット
		spans[id + "Counter"].textContent = counts[id + "Counter"];
		//hiddenフォームに値をセット
		amounts[id + "Count"].value = counts[id + "Counter"];
		totals[id + "Total"] = amounts[id + "Count"].value * prices[id + "Price"].value;
		//合計金額計算
		var t = 0;
		for(val in totals){
			t += totals[val];
		}
		//合計金額代入
		total.textContent = t;
		postTotal.value = t;
	}