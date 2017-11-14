<?php
namespace Model;
use HY\Model;
!defined('HY_PATH') && exit('HY_PATH not defined.');
class Post extends Model {
    public function get_row($pid,$name = '*'){
        return $this->find($name,['pid'=>$pid]);
    }
    // 通过 评论ID 获取评论数据
    public function read($pid){
        //{hook m_post_read_1}
        return $this->get_row($pid);
    }
    //删除 某文章ID 的所有评论以及文章内容
    public function del_thread_all_post($tid){
        //{hook m_post_del_thread_all_post_1}
        return $this->delete(array(
            'tid'=>$tid
        ));
    }

    //通过 评论过ID 删除评论数据
    public function del($pid){
        //{hook m_post_del_1}
        return $this->delete(array(
            'pid'=>$pid
        ));
    }
    //{hook m_post_fun}
}
