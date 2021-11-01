<?php
use GDO\TBSBBMessage\Module_TBSBBMessage;
use GDO\Javascript\Javascript;
use GDO\UI\GDT_Message;

/** @var $field GDT_Message **/
$n = $field->num;

$module = Module_TBSBBMessage::instance();

echo "<div id=\"div_code_smilies_{$n}\">\n";
echo "<h6>Smilies</h6>\n";
foreach ($module->getSmileys() as $code => $img)
{
    $js = sprintf('javascript:tbscodegui_edit_%s.frameSelection(\'%s\');', $n, $code);
    $img = $module->wwwPath('img/smilies/'.$img);
    printf('<a href="%s"><img src="%s" title="%s" /></a>'.PHP_EOL, $js, $img, $code);
}
echo "</div>\n";

# Init smiley panel
$script_html = 'var tbscodegui_smilies_'.$n.' = document.getElementById("div_code_smilies_'.$n.'"); var tbscodegui_smilies_on_'.$n.' = true; TBSCodeGUI_SwapSmilies('.$n.');';
Javascript::addJSPostInline($script_html);

return '';
