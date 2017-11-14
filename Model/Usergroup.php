<?php
namespace Model;
use HY\Model;
!defined('HY_PATH') && exit('HY_PATH not defined.');
class Usergroup extends Model {
    public function get_row($gid,$name = '*'){
        return $this->find($name,['gid'=>$gid]);
    }
    // $id 用户组ID 返回权限数组
    public function read_json($gid){
        //{hook m_usergroup_read_json_1}
        $json = $this->select("json",[
            "gid"=>$gid
        ]);
        //{hook m_usergroup_read_json_2}
        return json_decode($json,true);
    }

    
    public function gid_to_name($gid){
        //{hook m_usergroup_id_to_name_1}
        return $this->get_row($gid,'name');
    }
    public function format(&$usergroup){
        //{hook m_usergroup_format_1}
        if(empty($usergroup))
            return;
        //{hook m_usergroup_format_2}
        $tmp = $usergroup;
        $usergroup = array();
        //{hook m_usergroup_format_3}
        foreach ($tmp as $k => $v) {
            $usergroup[intval($v['gid'])] = $v;
        }
    }
    //{hook m_usergroup_fun}
}
