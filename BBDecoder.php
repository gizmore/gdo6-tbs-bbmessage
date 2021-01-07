<?php
namespace GDO\TBSBBMessage;

final class BBDecoder
{
    private $message;
    
    public function __construct($message)
    {
        $this->message = $message;
    }
    
    public function decode()
    {
        return $this->message;
    }
    
}
