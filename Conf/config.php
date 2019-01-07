<?php
$common = array(
    'DEBUG_PAGE'=>true,
    'REWRITE'=>false,//伪静态规则

    'DOMAIN_NAME' => 'http://local.yjblog.com',

    'url_suffix'=>'.html',
    'url_explode'=>'/',
    'PLUGIN_DOWN'=>'http://bbs.hyphp.cn/' ,//官方下载服务器 ,这个不是你的域名填写地方 ，没事勿修改

    'HY_URL'=>array(
        'action'=>array(
            'thread'=>'t',
            'forum'=>'f',
            'my'=>'u',
        ),
        'method'=>array(
            'thread'=>array(
                'del'=>'d'
            )
        )
    ),
    'MORE_LANG_LIB_FILE'=>array(
        (defined('MYLIB_PATH') ? MYLIB_PATH : '') . 'more_lang_lib_conf/hybbs.php',
    ),

    //数据库类型
    "SQL_TYPE" => "mysql",
    //数据库名称
    "SQL_NAME" => "donghu",
    //数据库地址
    "SQL_IP"=>"localhost",
    //数据库账号
    'SQL_USER' => 'root',
    //数据密码
    'SQL_PASS' => '',
    //数据库字符集
    'SQL_CHARSET' => 'utf8',
    //数据库端口
    'SQL_PORT' => 3306,
    //数据库前缀
    'SQL_PREFIX' => 'hy_',
    //PDO配置
    'SQL_OPTION' => array(
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
        //PDO::ATTR_PERSISTENT => true //长连接
    ),
    'SQL_STORAGE_ENGINE'=>'MyISAM',

    //全站加密字符串, 请勿泄露 安装时会随机生成 , 注意备份!
    //目前用于用户信息COOKIE加密
    //缓存文件名加密
    //头像文件名加密
    'MD5_KEY' => 'zrmX0baUe1Omwa09',

    //管理员用户组 ID
    'ADMIN_GROUP' =>1,
    'lang_switch_on'=>true,

);

$temp = array();
if(LSystem == 'local'){
    $temp = array(
        //数据库类型
        "SQL_TYPE" => "mysql",
        //数据库名称
        "SQL_NAME" => "donghu",
        //数据库地址
        "SQL_IP"=>"localhost",
        //数据库账号
        'SQL_USER' => 'root',
        //数据密码
        'SQL_PASS' => 'Liufeng@123456',
    );
}else{
    $temp = array(
        //数据库类型
        "SQL_TYPE" => "mysql",
        //数据库名称
        "SQL_NAME" => "donghu",
        //数据库地址
        "SQL_IP"=>"localhost",
        //数据库账号
        'SQL_USER' => 'root',
        //数据密码
        'SQL_PASS' => 'liu1qaz0okm',
    );
}

$common  = array_merge($common,$temp);

return $common;
