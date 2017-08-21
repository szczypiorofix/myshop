<?php

namespace Core\Framework\MVC;

/**
 * Abstrakcyjna klasa Modelu.
 * @author Piotr Wróblewski <poczta@wroblewskipiotr.pl>
 * @see Core\Framework\MVC\Controller
 */
abstract class Model {
 
    /**
     * Tablica z danymi strony, która przekazywana jest do widoku.
     * @var array Tablica asocjacyjna, zawierająca 2 główne tablice:
     * 'settings' - dane strukturalne
     * 'params' - parametry metody kontrolera.
     */
    private $data = array(
        'settings' => array(
            'pageTitle' => 'MyShop',
            'css' => 'mainstyle.css',
            'js' => 'mainscript.js',
            'model' => 'DefaultModel',
            'view' => 'DefaultView',
            'controller' => 'DefaultController'
        ),
        'params' => array()
    );
    
    /**
     * Metoda zwracająca całą tablicę z danymi.
     * @return array
     */
    public function getData() {
        return $this->data;
    }
    
    public function setData($data) {
        $this->data = $data;
    }
    
    /**
     * Metoda przypisująca dane modelu, widoku i kontrolera do odpowiadającym im wartościom w tablicy $data.
     * @param \Core\Framework\MVC\Model $model
     * @param \Core\Framework\MVC\View $view
     * @param \Core\Framework\MVC\Controller $controller
     */
    public function setSettingsMVC(\Core\Framework\MVC\Model $model, \Core\Framework\MVC\View $view, \Core\Framework\MVC\Controller $controller) {
        $this->data['settings']['model'] = $model->__toString();
        $this->data['settings']['view'] = $view->__toString();
        $this->data['settings']['controller'] = $controller->__toString();
    }
    /**
     * Metoda zwracająca część tablicy $data, która odpowiada tylko za przekazywane parametry.
     * @return array
     */
    public function getParams() {
        return $this->data['params'];
    }

    public function addParams($params) {
        $this->data['params'] += $params;
    }

    public function setParams($params) {
        $this->data['params'] = $params;
    }

    /**
     * Metoda zwracająca część tablicy $data, która odpowiada tylko za pzekazywane dane strukturalne.
     * @return array
     */
    public function getSettings() {
        return $this->data['settings'];
    }

    public function addSettings($settings) {
        $this->data['settings'] += $settings;
    }

    public function setSettings($settings) {
        $this->data['settings'] = $settings;
    }
}
