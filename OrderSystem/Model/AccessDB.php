<?php//クラスインポートrequire_once "../Exception/OrderSystemException.php";class AccessDB{		private static $instance;		private $PDO;		private $res;		//以下3つの変数は定数とし、変更不可とする		private $USER = "root";		private $PW   = "root";		private $DNSINFO = "mysql:dbname=ordersystem;host=localhost;charset=utf8";		private function __construct() {			try{					$this -> PDO = new PDO($this -> DNSINFO, $this -> USER, $this -> PW);					$this -> PDO -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);					$this -> res = TRUE;			}catch(PDOException $e){					$this -> res = FALSE;					throw new OrderSystemException("S001");			}		}		public function toString(){			return "hoge";		}		public function getPDO(){			return $this -> PDO;		}		public function getRes(){			return $this -> res;		}		//シングルトン化		public static function getInstanse(){			if(self::$instance == null){				self::$instance = new AccessDB();			}			return self::$instance;		}}?>