<?php
/**
 * Created by PhpStorm.
 * User: jiahua
 * Date: 2017/7/24
 * Time: 14:52
 */
namespace Common\Model;
use Think\Model;
class UploadModel extends Model{
    private $_uploadObj = '';
    private $_uploadData = '';

    const UPLOAD = 'upload';

    public function __construct(){
        $this -> _uploadObj = new \Think\Upload();
        $this -> _uploadObj -> rootPath = './'.self::UPLOAD.'/';
        $this -> _uploadObj -> subName = date(Y).'/'.date(m).'/'.date(d);
    }

    public function upload($username){
        $res = $this->_uploadObj->upload();

        if($res){
            $data["name"] = $res['files']['savename'];
            $data["type"] = $res['files']['type'];
            $data["path"] = '/'.self::UPLOAD.'/'.$res['files']['savepath'].$res['files']['savename'];
            $data["updata_time"] = date("Y-m-d H:i:s");
            $data["author"] = $username;
            M("Files") -> add($data);
            return '/'.self::UPLOAD.'/'.$res['files']['savepath'].$res['files']['savename'];
            //return $this->getError();
        }else{
            return $this->getError();
        }
    }

    public function uploadimage($username){
        $res = $this->_uploadObj->upload();

        if($res){
            $data["name"] = $res['file']['savename'];
            $data["type"] = $res['file']['type'];
            $data["path"] = '/'.self::UPLOAD.'/'.$res['file']['savepath'].$res['file']['savename'];
            $data["updata_time"] = date("Y-m-d H:i:s");
            $data["author"] = $username;
            M("Files") -> add($data);
            return '/'.self::UPLOAD.'/'.$res['file']['savepath'].$res['file']['savename'];
            //return $this->getError();
        }else{
            return $this->getError();
        }
    }

    public function getFilenum(){
        $row["allnum"] = M("Files") -> count();
        $data["type"] = array("like","%image%");
        $row["picture"] = M("Files") -> where($data) -> count();
        return $row;
    }


}