<?php
use GDO\TBSBBMessage\Module_TBSBBMessage;
use GDO\Util\Javascript;

$module = Module_TBSBBMessage::instance();

echo "<div id=\"div_code_smilies\">\n";
echo "<h6>Smilies</h6>\n";
foreach ($module->getSmileys() as $code => $img)
{
    $js = sprintf('javascript:tbscodegui_edit_1.frameSelection(\'%s\');', $code);
    $img = $module->wwwPath('img/smilies/'.$img);
    printf('<a href="%s"><img src="%s" title="%s" /></a>'.PHP_EOL, $js, $img, $code);
}
echo "</div>\n";

# Init smiley panel
$script_html = 'var tbscodegui_smilies_1 = document.getElementById("div_code_smilies"); var tbscodegui_smilies_on_1 = true; TBSCodeGUI_SwapSmilies(1);';
Javascript::addJavascriptInline($script_html);

return '';
