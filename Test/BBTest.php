<?php
namespace GDO\TBSBBMessage\Test;

use GDO\Tests\TestCase;
use GDO\UI\GDT_Message;
use GDO\TBSBBMessage\Module_TBSBBMessage;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertTrue;
use GDO\TBSBBMessage\BBDecoder;

final class BBTest extends TestCase
{
    public function testDecoderBasics()
    {
        $input = '[b]<b>old[/b]';
        $msg = GDT_Message::make()->var($input);
        assertEquals('<b>&lt;b&gt;old</b>', $msg->getVarOutput(), 'Test if [b]old works in bb decoder and if html is escaped properly.');
    }
    
    public function testSmileys()
    {
        $module = Module_TBSBBMessage::instance();
        foreach (array_keys($module->getSmileys()) as $code)
        {
            $input = $code;
            $msg = GDT_Message::make()->var($input);
            assertEquals('<img src="'.$module->hrefSmiley($code).'" alt="'.html($code).'" class="tbsbb-smiley" />', $msg->getVarOutput(), "Test if {$input} smiley decodes nicely.");
        }
    }
    
    public function testNoSmileys()
    {
        $input = "[nosmile]:)[/nosmile]";
        $output = (new BBDecoder($input))->decode();
        assertEquals(':)', $output, 'Test if nosmile bbcode is working.');
    }
    
}
