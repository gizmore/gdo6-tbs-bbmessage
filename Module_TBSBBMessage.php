<?php
namespace GDO\TBSBBMessage;

use GDO\Core\GDO_Module;
use GDO\UI\GDT_Message;
use GDO\File\GDT_Path;

/**
 * BBCode Message decoder module.
 * Hook into GDT_Message::$DECODER
 * @author gizmore
 */
final class Module_TBSBBMessage extends GDO_Module
{
    public function getTheme()
    {
        return 'tbsbbcode';
    }
    
    ############
    ### Init ###
    ############
    public function onInit()
    {
        GDT_Message::$DECODER = [$this, 'decodeMessage'];
    }
    
    public function onIncludeScripts()
    {
        $this->addJavascript('js/tbs-bbcode.js');
        $this->addCSS('css/tbs-bbcode.css');
    }

    public function onLoadLanguage()
    {
        return $this->loadLanguage('lang/tbsbb');
    }
    
    ##############
    ### Config ###
    ##############
    public function getConfig()
    {
        return [
            GDT_Path::make('smiley_mapping')->existingFile()->initial($this->filePath('smiley_mapping.php')),
        ];
    }
    public function getSmileyMapping() { return $this->getConfigVar('smiley_mapping'); }
    
    
    ###############
    ### Smileys ###
    ###############
    public function getSmileys()
    {
        return include($this->getSmileyMapping());
    }
    
    ###############
    ### Decoder ###
    ###############
    public function decodeMessage($s)
    {
        $decoder = new BBDecoder($s);
        return $decoder->decode();
    }

}
