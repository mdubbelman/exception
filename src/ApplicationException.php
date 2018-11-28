<?php

namespace MD\Exception;

class ApplicationException extends \Exception
{
    public function getMessageKey(): string
    {
        return $this->message;
    }

    public function getMessageData(): array
    {
        return [];
    }
}
