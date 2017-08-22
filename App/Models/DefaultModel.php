<?php

namespace Models;
use Core\Framework\Database\DBConnection, Core\FrameworkException;

class DefaultModel extends \Core\Framework\MVC\Model {
    
    private $db = null;
    private $query = null;
    private $results = null;
    
    public function __construct() {
        $this->setData(
                [
                    'settings' => [
                        'pageTitle' => 'MyShop',
                        'css' => 'mainstyle.css',
                        'head_js' => 'mainheadscript.js',
                        'body_js' => 'mainbodyscript.js',
                        'model' => 'DefaultModel',
                        'view' => 'DefaultView',
                        'controller' => 'DefaultController'
                    ],
                    'params' => [],
                    'results' => []
                ]
        );
        
        try {
            $this->db = DBConnection::get()->getDB();
            $this->query = $this->db->prepare("SELECT * FROM `products`;");
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
        //var_dump($this->results);
        $this->addResults($this->results);
    }
    
    public function __toString() {
        return 'This is DefaultModel.';
    }
}
