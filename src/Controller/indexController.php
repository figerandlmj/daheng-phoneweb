<?php

//require_once 'getCaptcha.php';

class indexController extends Controller 
{

    //首页
    public function indexAction()
    {
        $nav = $this->_model('data')->getnav();
        $carbanner = $this->_model('data')->getbanners(0,100,8);
        $boxbanner = $this->_model('data')->getbanners(0,100,9);
        $casebanner = $this->_model('data')->getbanners(0,100,10);
        $news =$this->_model('data')->getnews(0,5,7);


        $company_info = $this->_model('data')->getpage(16);
        $case =$this->_model('data')->getlist(0,6,10);
        $newsall =$this->_model('data')->getnews(0,6,7);

        $carall = $this->_model('data')->getlist(0,6,8);

        $boxall = $this->_model('data')->getlist(0,6,9);


//        $this -> _view("index.tpl.php",array('nav'=>$nav,'carbanner'=>$carbanner,'boxbanner'=>$boxbanner,'casebanner' =>$casebanner,'news'=>$news));
//        $this->_view('index_new.tpl.php',array('nav'=>$nav,'carbanner'=>$carbanner,'boxbanner'=>$boxbanner,'casebanner' =>$casebanner,'news'=>$news,'company'=>$company_info,'case'=>$case,'newsall'=>$newsall,'carall'=>$carall,'boxall'=>$boxall));
        $this->_view('new_index.tpl.php',array('nav'=>$nav,'carbanner'=>$carbanner,'boxbanner'=>$boxbanner,'casebanner' =>$casebanner,'news'=>$news,'company'=>$company_info,'case'=>$case,'newsall'=>$newsall,'carall'=>$carall,'boxall'=>$boxall));
//        $this->_view('new_index.tpl.php');
    }
    //货物包装
    public function goodsAction()
    {
        $nav = $this->_model('data')->getnav();
        $carbanner = $this->_model('data')->getbanners(0,100,8);
        $boxbanner = $this->_model('data')->getbanners(0,100,9);
        $casebanner = $this->_model('data')->getbanners(0,100,10);
        $news =$this->_model('data')->getnews(0,5,7);


        $company_info = $this->_model('data')->getpage(16);
        $case =$this->_model('data')->getlist(0,6,10);
        $newsall =$this->_model('data')->getnews(0,6,7);

        $carall = $this->_model('data')->getlist(0,6,8);

        $boxall = $this->_model('data')->getlist(0,6,9);


//        $this -> _view("index.tpl.php",array('nav'=>$nav,'carbanner'=>$carbanner,'boxbanner'=>$boxbanner,'casebanner' =>$casebanner,'news'=>$news));
//        $this->_view('index_new.tpl.php',array('nav'=>$nav,'carbanner'=>$carbanner,'boxbanner'=>$boxbanner,'casebanner' =>$casebanner,'news'=>$news,'company'=>$company_info,'case'=>$case,'newsall'=>$newsall,'carall'=>$carall,'boxall'=>$boxall));
        $this->_view('goods.php',array('nav'=>$nav,'carbanner'=>$carbanner,'boxbanner'=>$boxbanner,'casebanner' =>$casebanner,'news'=>$news,'company'=>$company_info,'case'=>$case,'newsall'=>$newsall,'carall'=>$carall,'boxall'=>$boxall));
//        $this->_view('new_index.tpl.php');
    }

    //新闻列表
    public function newsListAction(){
        $nav = $this->_model('data')->getnav();
        $news =$this->_model('data')->getnews(0,5,7);

        $this->_view('newsList.tpl.php',array('nav'=>$nav,'news'=>$news));
    }

    //新闻ajax加载更多
    public function newsmoreAction(){
//        $json = array('flag'=>0);
        $id = isset($_POST['id']) ? intval($_POST['id']) : 0;

        $data = $this -> _model('data') -> getnews($id,5,7);

        foreach($data as $k=>$val ){

            $data[$k]["inputtime"] = date('Y-m-d', $val['inputtime']);
        }

        exit(json_encode($data));

    }

    //新闻详情
    public function newsDetailAction(){

        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $catid = isset($_GET['catid']) ? intval($_GET['catid']) : 0;

        $data = $this->_model('data')->getone($id,$catid);

        $hit = $this->_model('data')->gethits($catid,$id);

        $this->_view('newsDetail.tpl.php',array('data'=>$data,'hit'=>$hit));






    }

    //关键词搜索
    public function searchAction(){



        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';

            $data = $this->_model('data')->getkeyword($keyword);
//            var_dump($keyword);



//            $this->_view('search.tpl.php',array('data'=>$data));

        }

        $this->_view('search.tpl.php',array('data'=>$data));
    }
}