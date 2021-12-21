<?php
class ModelCatalog extends Model{

    public function get_data($start = 0, $page = 25){

        $result = [];
        $sql = 'SELECT * FROM products LIMIT '.$start.', '.$page;
        $result = DB::getAssocResult($sql);
        return $result;

    }

    public function get_count_pages() {

        $sql = "SELECT * FROM `products`";
        $result = DB::executeSql($sql);
        $total = ceil($result / 25); // всего записей
        return $total;
    }


}
