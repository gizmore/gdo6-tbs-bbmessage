<?php
namespace GDO\TBSBBMessage;

/**
 * Decode BBCode Messages into html output.
 * Performance is not mandatory.
 * @author livinskull
 */
final class BBDecoder
{
    private $message;
    
    public function __construct($message)
    {
        $this->message = $message;
    }
    
    public function decode()
    {
        # Call BBDecoder here
        return $this->message;
    }
    
}
