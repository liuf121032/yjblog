<?php
if(version_compare(PHP_VERSION,'5.4.0','<')){
	header("Content-Type: text/html; charset=UTF-8");
	die('HYPHP2.0 不支持 5.4以下的PHP版本.  当前你的PHP版本：' . PHP_VERSION);
}

define('HYBBS_V'			,'2.0.23');

define('INDEX_PATH' 		, str_replace('\\', '/', dirname(__FILE__)).'/');
//define('PATH','App/');
define('DEBUG'      ,(is_file(INDEX_PATH . 'DEBUG'))?false:true);
define('PLUGIN_ON'  ,true);
define('PLUGIN_ON_FILE',true);
define('PLUGIN_MORE_LANG_ON',true);

require  'HY/HYPHP.php';
/*
Swal1 提示框 升级到Swal2
修复 - 手机模板修改个人资料和密码
新特性 - 禁止登陆 封号功能
新特性 - 禁言
优化 - 插件安装卸载函数 新规范
优化 - 插件页 插件开关UI
优化 - 插件如果存在安装函数 必须安装后 才会显示插件开关
优化 - 安装程序 提示错误
优化 - 记录文章和评论的二次编辑修改时间
优化 - 后台用户页面添加操作按钮 可清空用户数据内容
优化 - 后台分类权限页面 修改后清理forum缓存
优化 - 分类页面显示
框架 - 优化Tpl模板标签引擎 区分大小写的问题
框架 - 引入HYPHP1 PHP异常处理事务
框架 - 修复页面不存在 输出的状态码
 */