<?php

//require_once 'getCaptcha.php';

class categoryController extends Controller
{


    //�ɹ������б�
    public function caseListAction(){

        $data =$this->_model('data')->getlist(0,5,10);

        $this->_view('caseList.tpl.php',array('data'=>$data));
    }


    //ajax���ظ���
    public function moreAction(){

        $id = isset($_POST['id']) ? intval($_POST['id']) : 0;

        $catid = isset($_POST['catid']) ? intval($_POST['catid']) : 0;

        $data = $this -> _model('data') -> getlist($id,5,$catid);

        foreach($data as $k=>$val ){

            $data[$k]["inputtime"] = date('Y-m-d', $val['inputtime']);
        }

        exit(json_encode($data));

    }

    //����չʾ
    public function carListAction(){

        $data = $this->_model('data')->getlist(0,5,8);

        $this->_view('carList.tpl.php',array('data'=>$data));

    }

    //ľ��չʾ
    public function boxListAction(){

        $data = $this->_model('data')->getlist(0,5,9);

        $this->_view('boxList.tpl.php',array('data'=>$data));

    }

}