<?php

/**
 *  信息
 */
class dataModel extends Model
{
    private $db_tablepre = 'dh_';

    //获取导航栏目
    public function getnav($limitFrom, $limitNumber){
        $limit = '';
        if (!empty($limitNumber)) {
            $limit = " LIMIT " . $limitFrom . "," . $limitNumber;
        }
        return $this -> _all("SELECT * FROM dh_category WHERE siteid=1 AND ismenu=1 ORDER BY listorder ASC" . $limit);

    }

    //获取首页车辆、木箱、成功案例banner展示
    public function getbanners($limitFrom, $limitNumber,$catid){
        $limit = '';
        if (!empty($limitNumber)) {
            $limit = " LIMIT " . $limitFrom . "," . $limitNumber;
        }
        return $this -> _all("SELECT c.*,n.* FROM dh_category c LEFT JOIN dh_news n ON c.catid=n.catid WHERE c.catid= ".$catid."  ORDER BY c.listorder ASC" . $limit);
    }

    //获取新闻列表
    public function getnews($limitFrom, $limitNumber,$catid){

        $limit = '';
        if (!empty($limitNumber)) {
            $limit = " LIMIT " . $limitFrom . "," . $limitNumber;
        }
        return $this -> _all("SELECT nd.id,nd.content,n.title,n.url,n.inputtime FROM dh_category c LEFT JOIN dh_news n ON c.catid=n.catid LEFT JOIN dh_news_data nd ON n.id=nd.id WHERE c.catid= ".$catid."  ORDER BY c.listorder ASC, n.inputtime DESC" . $limit);

    }

    //获取一条数据
    public function getone($id,$catid){

        return $this->_row("SELECT n.*,nd.*,c.catname FROM dh_news n LEFT JOIN dh_news_data nd ON n.id =nd.id LEFT JOIN dh_category c ON n.catid=c.catid WHERE n.id = $id AND n.catid = $catid");

    }

    //获取单页面数据
    public function getpage($catid){

        return $this->_row("SELECT p.*,c.catname FROM dh_page p LEFT JOIN dh_category c ON p.catid=c.catid WHERE p.catid = $catid");
    }

    //获取点击量
    public function gethits($catid,$id){

        $hitsid='c-1-'.$id;

        $sql = "SELECT views FROM dh_hits WHERE hitsid = '".$hitsid."' AND catid = $catid";

       return  $this->_row($sql);
    }

    //关键词查询
    public function getkeyword($keyword){

        $sql = "SELECT nd.*,n.*  FROM dh_keyword k LEFT JOIN dh_keyword_data kd ON k.id =kd.tagid LEFT JOIN dh_news_data nd ON kd.contentid = nd.id LEFT JOIN dh_news n ON nd.id = n.id WHERE k.keyword LIKE '%".$keyword."%'GROUP BY nd.id ORDER BY listorder DESC";


        return $this->_all($sql);

    }

    //获取成功案例
    public function getlist($limitFrom, $limitNumber,$catid){
        $limit = '';
        if (!empty($limitNumber)) {
            $limit = " LIMIT " . $limitFrom . "," . $limitNumber;
        }
        return $this -> _all("SELECT nd.*,n.* FROM dh_category c LEFT JOIN dh_news n ON c.catid=n.catid LEFT JOIN dh_news_data nd ON n.id=nd.id WHERE c.catid= ".$catid."  ORDER BY c.listorder ASC" . $limit);
    }

    //获取省
    public function getprovince(){

        return $this->_all("SELECT to_province_id,to_province_name FROM dh_city_price WHERE 1 GROUP BY to_province_id ORDER BY id DESC");
    }

    //获取市
    public function getcity($province_id){

        return $this->_all('SELECT to_city_name,item_send_price,item_self_price,lowest_price FROM dh_city_price WHERE to_province_id = '.$province_id.' ORDER BY id DESC');
    }


    //获取价格信息
    public function getprice($sql){

        return $this->_row($sql);

    }

    //插入估价记录
    public function inser_online($data){

            return $this->_insert('dh_online_price',$data);
    }

    // 根据省ID及市名获取城市
    public function getProvinceByName($province) {

        return $this->_all("SELECT DISTINCT to_province_id, to_province_name FROM " .  $this->db_tablepre . "city_price WHERE to_province_name LIKE '%" . $province . "%'");
    }

    // 根据省ID及市名获取城市
    public function getCityByNameAndProvinceId($province_id, $city_name) {

        return $this->_all("SELECT to_city_id, to_city_name FROM " .  $this->db_tablepre . "city_price WHERE to_province_id = " . $province_id . " AND to_city_name LIKE '%" . $city_name . "%'");
    }































    //获取一条货源信息
    public function getonegoods($id){

        return $this->_row("SELECT * FROM ".$this->table_goods ." WHERE id = $id");
    }

    //获取一条船源信息
    public function getoneship($id){

        return $this->_row('SELECT * FROM '. $this->table_ship ." WHERE id = $id");

    }

    //添加船源信息
    public function addship($data)
    {
        return $this -> _insert($this->table_ship, $data);
    }

    //添加船源信息
    public function addgoods($data)
    {
        return $this -> _insert($this->table_goods, $data);
    }
    //获取船源信息byuser
    public function getshipByUser($userid,$limitFrom, $limitNumber)
    {
        $limit = '';
        if (!empty($limitNumber)) {
            $limit = " LIMIT " . $limitFrom . "," . $limitNumber;
        }
        return $this -> _all("SELECT s.* FROM ship_info s LEFT JOIN user u ON u.phone = s.author  WHERE u.id = " . $userid . " ORDER BY s.id DESC " . $limit);
    }

    //获取货源信息byuser
    public function getgoodsByUser($userid,$limitFrom, $limitNumber)
    {
        $limit = '';
        if (!empty($limitNumber)) {
            $limit = " LIMIT " . $limitFrom . "," . $limitNumber;
        }
        return $this -> _all("SELECT s.* FROM goods_info s LEFT JOIN user u ON u.phone = s.author  WHERE u.id = " . $userid . " ORDER BY s.id DESC ". $limit);
    }

    //更新货源信息
    public function updategoods($data,$where)
    {
        return $this->_update($this->table_goods,$data,$where);
    }

    //更新船源信息
    public function updateship($data,$where){

        return $this->_update($this->table_ship,$data,$where);

    }

    /* 删除一条货源信息 */
    public function deletegoods($id) {

        return $this->_delete($this->table_goods, $id);
    }

    /* 删除一条船源信息 */
    public function deleteship($id) {

        return $this->_delete($this->table_ship, $id);
    }

    //更新用户表信息
    public function modifypsw($data,$where){

        return $this->_update($this->table_user,$data,$where);
    }
    //船源总数
    public function countship()
    {
        return $this->_sum("SELECT id FROM " . $this->table_ship . " WHERE 1");
    }
    //货源总数
    public function countgoods()
    {
        return $this->_sum("SELECT id FROM " . $this->table_goods . " WHERE 1");
    }
}