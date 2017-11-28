<?php
return array(
	//'配置项'=>'配置值'
	//设置禁止访问的模块
	'MODULE_DENY_LIST'	=> array('Common','Runtime'),
	//设置允许访问的模块
	'MODULE_ALLOW_LIST'	=> array('Home','Admin'),
	//设置操作方法后缀
	'ACTION_SUFFIX' => 'Action',
	//设置默认时区
	'DEFAULT_TIMEZONE' => 'Asia/Shanghai',
	//加载扩展函数库
	'LOAD_EXT_FILE' => 'functions',
	//加载扩展配置文件
	'LOAD_EXT_CONFIG' => 'version,db',
	//显示页面trace信息
	'SHOW_PAGE_TRACE' => true,
	 // 开启日志记录
	'LOG_RECORD' => true, // 开启日志记录
	// 只记录EMERG ALERT CRIT ERR 错误
	'LOG_LEVEL' =>'EMERG,ALERT,CRIT,ERR',
	// 日志记录类型 默认为文件方式
	'LOG_TYPE' =>  'File',
    'view_replace_str'       => [
        '__PUBLIC__'  => '/Public',
        '__UPLOAD__'  => '/upload',
    ],
    //定制错误页
    'TMPL_ACTION_ERROR'=>'../../../Public:404'
);