<?php
/**
 * 
 */
class Controller {
	
	function Run()
	{
		$this->Analysis();
		$control = $_GET['c'];
		$action = $_GET['a'];
		$controlFile = ROOT_PATH .'/Controllers/' . $control . '.class.php';
		if (!file_exists($controlFile)) {
			exit('error ,控制器不存在'. $controlFile);
			
		}
		include($controlFile);
		$class = ucwords($control);
		if (!class_exists($class)) {
			exit('未定义控制器的类'. $class);
			
		}
		//echo $class;
		$instace = new $class;
		//var_dump($instace);
		//echo $action;
		if (!method_exists($instace, $action)) {
			exit('不存在的方法'. $action);
		}
		$instace -> $action();
		
	}
	
	
	public function Analysis()
	{
		global $CONFIG;
		if ($CONFIG['system']['route']['URL_MODE'] == 1) {
			$contro = !empty($_GET['c']) ? trim($_GET['c']) : '';
			$action = !empty($_GET['a']) ? trim($_GET['a']) : '';
		}elseif($CONFIG['system']['route']['URL_MODE'] == 2){
			if (isset($_SERVER['PATH_INFO'])) {
				$path = trim($_SERVER['PATH_INFO'], '/');
				$paths = explode('/', $path);
				$control = array_shift($paths);
				$action = array_shift($paths);
			}
			
		}
		$_GET['c'] = $control = !empty($control) ? $control : $CONFIG['system']['route']['DEFAULT_CONTROL'];
		
		$_GET['a'] = $action = @empty($action) ? $action : $CONFIG['system']['route']['DEFAULT_ACTION'];
	}
	
	
}





?>