<?php
 
class EventCallback {
    public $callback;
    public $priority;
    public function __construct() {
        ;
    }
}
 
class EventHandler {
 
    // tablica na przechowywanie zarejestrowanych callbacków
    private static $events = array();
 
    /**
     * Metoda pozwala na zarejestrowanie callbacka w systemie
     * @param string $moduleName Nazwa modułu, którego dotyczy zdarzenie
     * @param string $eventName Nazwa zdarzenia
     * @param callable $callback Funkcja zwrotna, jako parametry powinna przyjmować $isCancelled oraz $eventData
     * @param integer $priority priorytet funkcji zwrotnej wśród innych w obrębie tego samego zdarzenia, domyślnie 5
     * (wywołania są sortowane wg tej liczby rosnąco i w takiej kolejności wykonywane)
     * @return boolean Informacja o tym czy rejestracja się powiodła czy nie
     */
    public static function registerEvent($moduleName, $eventName, $callback, $priority = 5) {
 
        // czy nie została podana nazwa modułu?
        if (empty($moduleName)) {
            return false;
        }
 
        // czy nie została podana nazwa zdarzenia?
        if (empty($eventName)) {
            return false;
        }
 
        // czy nie została podana funkcja zwrotna?
        if (empty($callback)) {
            return false;
        }
 
        // dodanie callbacka do tablicy zdarzeń
        self::$events[$moduleName][$eventName][] = array('callback' => $callback, 'priority' => (int)$priority);
        usort(self::$events[$moduleName][$eventName], 'self::compareEventPriority');
        return true;
    }
 
    /**
     * Metoda pobiera wszystkie funkcje zwrotne przypisane do danego zdarzenia oraz sortuje je
     * @param string $moduleName Nazwa modułu, którego dotyczy zdarzenie
     * @param string $eventName Nazwa zdarzenia
     * @return array Tablica zarejestrowanych funkcji zwrotnych posortowana rosnąco wg priorytetu
     */
    private static function getEvents($moduleName, $eventName) {
 
        // czy nie została podana nazwa modułu?
        if (empty($moduleName)) {
            return array();
        }
 
        // czy nie została podana nazwa zdarzenia?
        if (empty($eventName)) {
            return array();
        }
 
        // czy są jakieś zdarzenia w tym module?
        if (empty(self::$events[$moduleName])) {
            return array();
        }
 
        // czy są jakieś funkcje zwrotne dla tego zdarzenia?
        if (empty(self::$events[$moduleName][$eventName])) {
            return array();
        }
 
        // pobranie danych
        $events = self::$events[$moduleName][$eventName];
 
        // i zwrócenie tablicy
        return $events;
    }
 
    /**
     * Pomocnicza metoda do sortowania tablicy po polu "priority"
     * @param array $eventA Pierwszy element do porównania
     * @param array $eventB Drugi element do porównania
     * @return int Wartość -1, 0 lub 1 w zależności od tego czy $eventA jest większy, równy, czy mniejszy od $eventB
     */
    private static function compareEventPriority($eventA, $eventB) {
        if ($eventA['priority'] > $eventB['priority']) {
            return 1;
        } else if ($eventA['priority'] < $eventB['priority']) {
            return -1;
        }
        return 0;
    }
 
    /**
     * Metoda odelegowuje zdarzenie do zarejestrowanych funkcji zwrotnych
     * @param string $moduleName Nazwa modułu, którego dotyczy zdarzenie
     * @param string $eventName Nazwa zdarzenia
     * @param mixed $eventData Dane zdarzenia, które funkcje zwrotne mogą modyfikować
     * @return boolean True jeżeli zdarzenie ma zostać anulowane na życzenie funkcji zwrotnej
     */
    public static function dispatchEvents($moduleName, $eventName, &$eventData) {
 
        // pobranie zarejestrowanych funkcji zwrotnych
        $events = self::getEvents($moduleName, $eventName);
 
        // przejście pętlą po wszystkich funkcjach zwrotnych
        // przekazując za każdym razem $isCancelled oraz $eventData
        $isCancelled = false;
        foreach ($events as $event) {
            $callback = $event['callback'];
            if (is_array($callback)) {
                $callback[0]->{$callback[1]}($isCancelled, $eventData);
            } else {
                $callback($isCancelled, $eventData);
            }
        }
 
        // zwrócenie stanu anulowania zdarzenia
        return $isCancelled;
    }
 
}