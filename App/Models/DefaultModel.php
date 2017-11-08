<?php

namespace Models;
use Core\Framework\Database\DBConnection, Core\FrameworkException;

class DefaultModel extends \Core\Framework\MVC\Model {
    
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
                        'css' => ['variables.css', 'style.css', 'default.css', 'cart.css', 'login-register.css'],
                        'head_js' => ['mainheadscript.js'],
                        'head_script' => '',
                        'body_js' => ['mainbodyscript.js'],
                        'body_script' => '',
                        'model' => 'DefaultModel',
                        'view' => 'DefaultView',
                        'controller' => 'DefaultController'
                    ],
                    'params' => $params,
                    'results' => []
                ]
        );
        
        try {
            $this->db = DBConnection::get()->getDB();
            if (DBConnection::isError()) {
                echo 'ERROR!';
                exit();
            }
            $this->query = $this->db->prepare("SELECT * FROM `shop_products`;");
            $this->query->execute();
            $this->results = $this->query->fetchAll();
        }
        catch (\PDOException $exc) {
            try {
                throw new FrameworkException("Błąd PDO:<br>".$exc);
            } catch (FrameworkException $ex) {
                echo $ex->showError();
            }
        }
        $this->addResults($this->results);
    }
    
    public function __toString() {
        return 'This is DefaultModel.';
    }
}
