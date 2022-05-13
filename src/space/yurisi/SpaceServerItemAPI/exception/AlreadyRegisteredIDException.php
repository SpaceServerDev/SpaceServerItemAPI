<?php

namespace space\yurisi\SpaceServerItem\exception;

class AlreadyRegisteredIDException extends \RuntimeException {
    public function __construct($message = "", $code = 0, \Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}