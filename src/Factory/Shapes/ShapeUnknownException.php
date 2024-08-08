<?php

namespace App\Factory\Shapes;

class ShapeUnknownException extends \Exception {

    public function __construct(string $message, int $codeError) {
        $this->message = $message;
        $this->code = $codeError;
        return var_dump($this->getMessage());
    }

}