<?php
class Products extends db{
    public function search($keyword){
        $sql = self::$connection->prepare("SELECT * FROM products
        WHERE `description` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s",$keyword);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}
