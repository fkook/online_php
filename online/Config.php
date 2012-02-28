<?php
/**
 * 配置文件
 * @author fkook
 * 
 */
//数据库配置
$CONFIG['system']['db'] = array(
		'host'=>'localhost',
		'user'=>'root',
		'password'=>'',
		'database'=>'test'
		
);

$CONFIG['system']['route'] = array(
								'URL_MODE' => 1,
								'DEFAULT_CONTROL' => 'index',
								'DEFAULT_ACTION' => 'index'
);


$smartyconf = array(
			'template_dir' => ROOT_PATH.'/view/templates',
			'compile_dir'  => ROOT_PATH.'cache/templates_c',
			'cache_dir'	   => ROOT_PATH.'/cache/html_cache',
			'cache'		   => TRUE,
			'debugging'    => FALSE
);




?>