<?php /** @var $field \GDO\UI\GDT_Message **/ ?>
<?php
$n = $field->num;

if (!function_exists('tbsbbimg'))
{
    /**
     * Image path for gui img.
     * @param string $img
     * @return string
     */
    function tbsbbimg($img)
    {
        return GWF_WEB_ROOT . 'GDO/TBSBBMessage/img/gui/' . $img;
    }
}
?>
<table class="codegui_toolbar">
<tr>
<td><a href="javascript:tbscodegui_edit_<?=$n?>.frameSelection('[b]', '[/b]')" title="Marks text as bold." style="background-image:url(<?=tbsbbimg('code_bold.png')?>);"></a></td>
<td><a href="javascript:tbscodegui_edit_<?=$n?>.frameSelection('[i]', '[/i]')" title="Marks text as italic." style="background-image:url(<?=tbsbbimg('code_italic.png')?>);"></a></td>
<td><a href="javascript:tbscodegui_edit_<?=$n?>.frameSelection('[u]', '[/u]')" title="Marks text as underlined." style="background-image:url(<?=tbsbbimg('code_underline.png')?>);"></a></td>
<td><a href="javascript:tbscodegui_edit_<?=$n?>.frameSelection('[s]', '[/s]')" title="Marks text as striked-out." style="background-image:url(<?=tbsbbimg('code_strikeout.png')?>);"></a></td>
<td><a href="javascript:tbscodegui_edit_<?=$n?>.frameSelection('[sup]', '[/sup]')" title="Marks text as superscript." style="background-image:url(<?=tbsbbimg('code_sup.png')?>);"></a></td>
<td><a href="javascript:tbscodegui_edit_<?=$n?>.frameSelection('[sub]', '[/sub]')" title="Marks text as subscript." style="background-image:url(<?=tbsbbimg('code_sub.png')?>);"></a></td>
<td><a href="javascript:TBSCodeGUI_ShowPanel('<?=$n?>','tbscodegui_panel_<?=$n?>_font')" title="Set the text-font." style="background-image:url(<?=tbsbbimg('code_font.png')?>);"></a></td>
<td><a href="javascript:TBSCodeGUI_ShowPanel('<?=$n?>','tbscodegui_panel_<?=$n?>_size')" title="Changes the font-size" style="background-image:url(<?=tbsbbimg('code_size.png')?>);"></a></td>
<td><a href="javascript:TBSCodeGUI_ShowPanel('<?=$n?>','tbscodegui_panel_<?=$n?>_fgcolor')" title="Sets the color of text" style="background-image:url(<?=tbsbbimg('code_color.png')?>);"></a></td>
<td class="spacer2"></td>
<td><a href="javascript:TBSCodeGUI_ShowPanel('<?=$n?>','tbscodegui_panel_<?=$n?>_paragraph')" title="Specify a paragraph." style="background-image:url(<?=tbsbbimg('code_p.png')?>);"></a></td>
<td><a href="javascript:TBSCodeGUI_ShowPanel('<?=$n?>','tbscodegui_panel_<?=$n?>_list')" title="Inserts a list." style="background-image:url(<?=tbsbbimg('code_list.png')?>);"></a></td>
<td><a href="javascript:tbscodegui_edit_<?=$n?>.frameSelection('[li]', '[/li]')" title="Marks a new list-item" style="background-image:url(<?=tbsbbimg('code_li.png')?>);"></a></td>
<td class="spacer2"></td>
<td><a href="javascript:tbscodegui_edit_<?=$n?>.frameSelection('[smile]', '[/smile]')" title="Replaces special strings with smilies" style="background-image:url(<?=tbsbbimg('code_smile.png')?>);"></a></td>
<td><a href="javascript:tbscodegui_edit_<?=$n?>.frameSelection('[nosmile]', '[/nosmile]')" title="Deactivates Smilie-processing" style="background-image:url(<?=tbsbbimg('code_nosmile.png')?>);"></a></td>
<td><a href="javascript:TBSCodeGUI_SwapSmilies('<?=$n?>');" title="Shows/Hides the smilie-list" style="background-image:url(<?=tbsbbimg('code_smilies.png')?>);"></a></td>
<td class="spacer2"></td>
<td><a href="javascript:TBSCodeGUI_ShowPanel('<?=$n?>','tbscodegui_panel_<?=$n?>_quote')" title="Mark text as a quote" style="background-image:url(<?=tbsbbimg('code_quote.png')?>);"></a></td>
<td class="spacer2"></td>
<td><a href="javascript:TBSCodeGUI_ShowPanel('<?=$n?>','tbscodegui_panel_<?=$n?>_link')" title="Inserts a hyperlink" style="background-image:url(<?=tbsbbimg('code_link.png')?>);"></a></td>
<td><a href="javascript:TBSCodeGUI_ShowPanel('<?=$n?>','tbscodegui_panel_<?=$n?>_email')" title="Inserts an EMail-link" style="background-image:url(<?=tbsbbimg('code_email.png')?>);"></a></td>
<td><a href="javascript:TBSCodeGUI_ShowPanel('<?=$n?>','tbscodegui_panel_<?=$n?>_image')" title="Insert an image." style="background-image:url(<?=tbsbbimg('code_image.png')?>);"></a></td>
<td class="spacer2"></td>
<td><a href="javascript:TBSCodeGUI_ShowPanel('<?=$n?>','tbscodegui_panel_<?=$n?>_hline')" title="Insert a horizontal line." style="background-image:url(<?=tbsbbimg('code_hline.png')?>);"></a></td>
<td><a href="javascript:tbscodegui_edit_<?=$n?>.frameSelection('[\\[]', '')" title="Escaped &quot;[&quot; (prevents it to be interpreted as boardcode)" style="background-image:url(<?=tbsbbimg('code_[.png')?>);"></a></td>
<td><a href="javascript:tbscodegui_edit_<?=$n?>.frameSelection('[\\]]', '')" title="Escaped &quot;]&quot; (prevents it to be interpreted as boardcode)" style="background-image:url(<?=tbsbbimg('code_].png')?>);"></a></td>
</tr>
</table>
<?php return ''; ?>
