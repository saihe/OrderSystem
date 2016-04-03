//表示spanタグ
var spans = [];
//フォーム送信hiddenパラメータ
var hiddens = [];
//注文情報orders.name = amounts
var orders = [];

//タグなど取得
function onLoad(){
  for(var key in document.getElementsByTagName("span")){
    //注文個数表示span
    if(key.includes("span")){
      spans[key.substr(4, 6)] = document.getElementById(key);
    }
    //商品名表示span
    if(key.includes("product")){
      orders[key.substr(7, 11)] = 0;
    }
  }
  //hiddenタグ
  for(var key in document.getElementsByTagName("input")){
    if(key.includes("hidden")){
      hiddens[key.substr(6, 10)] = document.orderForm[key];
    }
  }
}

//+,-ボタンで数量加減算
function calc(id, name, operator){
  if(operator == "+" && orders[name] >= 0){
    orders[name]++;
  }
  if(operator == "-" && orders[name] > 0){
    orders[name]--;
  }
  spans[id].textContent = orders[name];
  hiddens[id].value = spans[id].textContent;
}

//注文ボタン
function order(){
  //確認ダイアログに表示する文字列作成
  var tmp = "";
  for(key in orders){
    if(orders[key] != 0){
      tmp += key + ": " + orders[key] + "個\n";
    }
  }
  tmp += "\n以上を注文しますよろしいですか？"

  //YES: 送信, NO: キャンセル
  if(confirm(tmp)){
    var param = "";
    for(key in hiddens){
      if(hiddens[key] != 0){
        param += "&" + "order=" + key + hiddens[key];
      }
    }
    return true;
  }
  else{
    alert("キャンセルしました");
    return false;
  }
}
