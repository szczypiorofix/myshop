<?php

namespace Models;
use Core\Framework\Database\DBConnection, Core\FrameworkException;

class ProductModel extends \Core\Framework\MVC\Model {
    
    private $db = null;
    private $query = null;
    private $results = null;
    
    public function __construct() {
    }
    
    public function manageParams($params) {
        $this->setData(
                [
                    'settings' => [
                        'pageTitle' => 'MyShop',
                        'css' => 'style.css',
                        'head_js' => 'mainheadscript.js',
                        'body_js' => 'mainbodyscript.js',
                        'model' => 'ProductModel',
                        'view' => 'ProductView',
                        'controller' => 'ProductController'
                    ],
                    'params' => $params,
                    'results' => []
                ]
        );
        
        try {
            $this->db = DBConnection::get()->getDB();
            $this->query = $this->db->prepare("SELECT * FROM `shop_products` WHERE `code` =:code;");
            $this->query->bindParam(':code', $this->getParams()[0]);
            $this->query->execute();
            $this->results = $this->query->fetchAll();
            //var_dump($this->results);
        }
        catch (\PDOException $exc) {
            try {
                throw new FrameworkException("Błąd PDO:<br>".$exc);
            } catch (FrameworkException $ex) {
                echo $ex->showError();
            }
        }
        //var_dump($this->results);
        $this->addResults($this->results);
    }
    
    public function __toString() {
        return 'This is ProductModel.';
    }
}
