<?phpclass AccessGoods{	//フィールド	private $pdo;	private $res;	private $result;	//コンストラクタ	public function __construct(){		try{			//接続準備			$USER = "root";			$PW   = "root";			$DB   = "goods";			$HOST = "localhost";			$dnsinfo = "mysql:dbname={$DB};host={$HOST};charset=utf8";			//DB接続			$this -> pdo = new PDO($dnsinfo,$USER,$PW);			//配列初期化			$this -> result = array();			//接続成功で1を返す			$this -> res = "1";		}catch(PDOException $e){			$this -> res = $e->getMessage();		}	}	//クエリ実行	function doSelect($sql) {		try{			//クエリ実行			$stmt = $this ->  pdo -> prepare($sql);			$this -> res = $stmt -> execute(null);			//データベースのテーブル取得			$i = 0;			while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){				//1行ずつ配列に追加				$this -> result[$i] = $row;				$i++;			}		}catch (PDOExeption $e){			$this -> res = $e -> getMassage();		}		//データベースのテーブル返す		return $this -> result;	}}?>