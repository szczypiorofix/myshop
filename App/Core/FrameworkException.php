<?php

namespace Core;

/**
 * Description of FrameworkException
 *
 * @author Piotr Wróblewski <poczta@wroblewskipiotr.pl>
 */
class FrameworkException extends \Exception {
    
    protected $title;
    protected $message;
    
    public function __construct(string $title, string $message = "", int $code = 0, \Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
        $this->title = $title;
        $this->message = $message;
    }
    
    public function showError() {
        return
    '<div>
        <h2 style="text-align: center;">Uuups, coś poszło nie tak jak powinno !!!</h2>
        <table>
            <thead>
                <tr>
                    <th>Treść</th>
                    <th>Plik</th>
                    <th>Linia</th>
                    <th>Kod</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>'.$this->title.'</td>
                    <td>'.parent::getFile().'</td>
                    <td>'.parent::getLine().'</td>
                        <td>'.parent::getTraceAsString().'</td>
                </tr>
            </tbody>
        </table>
    </div>';
    }
}
