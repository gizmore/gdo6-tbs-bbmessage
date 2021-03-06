<?php
use GDO\TBSBBMessage\Module_TBSBBMessage;
/** @var $field \GDO\UI\GDT_Message **/
$n = $field->num;
?>
<div class="codegui_panel" id="tbscodegui_panel_<?=$n?>_font">
<h6>Set font-family</h6><div><span>Font-family: <select id="tbscodegui_std_<?=$n?>_font_family" size="1" class="combobox_1"><option value="Arial">Arial</option><option value="Courier New">Courier New</option><option value="Garamond">Garamond</option><option value="Times New Roman">Times New Roman</option><option value="Verdana" selected="selected">Verdana</option></select></span> 
</div>
<input type="button" class="button" onclick="TBSCodeGUI_Font(tbscodegui_edit_<?=$n?>, '<?=$n?>')" value="Insert!" title="Set the font!" />
</div>
<div class="codegui_panel" id="tbscodegui_panel_<?=$n?>_size">
<h6>Change font-size</h6><div><span>Size: <input id="tbscodegui_std_<?=$n?>_size_val" type="text" size="4" value="10" class="edit_1" /> in pt</span> 
</div>
<input type="button" class="button" onclick="TBSCodeGUI_Size(tbscodegui_edit_<?=$n?>, '<?=$n?>')" value="Insert!" title="Set the font-size!" />
</div>
<div class="codegui_panel" id="tbscodegui_panel_<?=$n?>_fgcolor">
<h6>Set text color</h6><div><span>Color: <input id="tbscodegui_std_<?=$n?>_fgcolor_color" type="text" size="7" value="#000000" class="edit_1" style="width:60px;" /> <img src="<?=Module_TBSBBMessage::instance()->wwwPath('img/gui/code_colorchooser.gif')?>" width="18" height="18" class="button" onclick="TBSCodeGUI_OpenColorChooser(document.getElementById('tbscodegui_std_1_fgcolor_color'))" title="Open ColorChoose-Dialog" style="margin-bottom:2px;" alt="*" /></span> 
</div>
<input type="button" class="button" onclick="TBSCodeGUI_FGColor(tbscodegui_edit_<?=$n?>, '<?=$n?>')" value="Insert!" title="Set text-color!" />
</div>
<div class="codegui_panel" id="tbscodegui_panel_<?=$n?>_paragraph">
<h6>Mark paragraph</h6><div><span>Alignment: <select id="tbscodegui_std_<?=$n?>_paragraph_align" size="1" class="combobox_1"><option value="left" selected="selected">Left</option><option value="center">Center</option><option value="right">Right</option><option value="justify">Justify</option></select></span> 
<span>Indent: <input type="text" size="2" style="width:30px;" id="tbscodegui_std_<?=$n?>_paragraph_indent" class="edit_1" value="0" /></span> 
</div>
<input type="button" class="button" onclick="TBSCodeGUI_Paragraph(tbscodegui_edit_<?=$n?>, '<?=$n?>')" value="Insert!" title="Mark as paragraph!" />
</div>
<div class="codegui_panel" id="tbscodegui_panel_<?=$n?>_list">
<h6>Insert list</h6><div><span>Type: <select id="tbscodegui_std_<?=$n?>_list_type" size="1" class="combobox_1"><option value="o">circle</option><option value="*">disc</option><option value="[]">square</option><option value="">none</option><option value="1" selected="selected">decimal</option><option value="a">lower-alpha</option><option value="A">upper-alpha</option><option value="i">lower-roman</option><option value="I">upper-roman</option></select></span> 
<span>Start: <input type="text" size="2" id="tbscodegui_std_<?=$n?>_list_start" class="edit_1" value="1" /></span> 
</div>
<input type="button" class="button" onclick="TBSCodeGUI_List(tbscodegui_edit_<?=$n?>, '<?=$n?>')" value="Insert!" title="Insert the list!" />
</div>
<div class="codegui_panel" id="tbscodegui_panel_<?=$n?>_quote">
<h6>Specify a quote</h6><div><span>From: <input id="tbscodegui_std_<?=$n?>_quote_from" type="text" size="30" value="" class="edit_1" /></span> 
<span>Link: <input id="tbscodegui_std_<?=$n?>_quote_link" type="text" size="30" value="" class="edit_1" /></span> 
</div>
<input type="button" class="button" onclick="TBSCodeGUI_Quote(tbscodegui_edit_<?=$n?>, <?=$n?>)" value="Insert!" title="Mark the selection as a quote!" />
</div>
<div class="codegui_panel" id="tbscodegui_panel_<?=$n?>_link">
<h6>Insert hyperlink</h6><div><span>Target-URL: <input id="tbscodegui_std_<?=$n?>_link_href" type="text" size="30" value="-selection-" class="edit_1" /></span> 
</div>
<input type="button" class="button" onclick="TBSCodeGUI_Link(tbscodegui_edit_<?=$n?>, <?=$n?>)" value="Insert!" title="Insert the hyperlink!" />
</div>
<div class="codegui_panel" id="tbscodegui_panel_<?=$n?>_email">
<h6>Insert EMail-link</h6><div><span>Address: <input id="tbscodegui_std_<?=$n?>_email_address" type="text" size="30" value="-selection-" class="edit_1" /></span> 
</div>
<input type="button" class="button" onclick="TBSCodeGUI_EMail(tbscodegui_edit_<?=$n?>, <?=$n?>)" value="Insert!" title="Insert the EMail-link!" />
</div>
<div class="codegui_panel" id="tbscodegui_panel_<?=$n?>_image">
<h6>Insert image</h6><div><span>Image-URL: <input id="tbscodegui_std_<?=$n?>_image_src" type="text" size="30" value="-selection-" class="edit_1" /></span> 
<span>Margin: <input id="tbscodegui_std_<?=$n?>_image_margin" type="text" size="2" style="width:30px;" value="0" class="edit_1" /></span> 
<span>Border-Width: <input id="tbscodegui_std_<?=$n?>_image_borderwidth" type="text" size="2" style="width:30px;" value="1" class="edit_1" /></span> 
<span>Border-Style: <select id="tbscodegui_std_<?=$n?>_image_borderstyle" size="1" class="combobox_1"><option value="none">none</option><option value="dotted">dotted</option><option value="dashed">dashed</option><option value="solid" selected="selected">solid</option><option value="double">double</option><option value="groove">groove</option><option value="ridge">ridge</option><option value="inset">inset</option><option value="outset">outset</option></select></span> 
<span>Border-Color: <input id="tbscodegui_std_<?=$n?>_image_bordercolor" type="text" size="7" style="width:60px;" value="#000000" class="edit_1" /> <img src="/files/images/icons/code_colorchooser.gif" width="18" height="18" class="button" onclick="TBSCodeGUI_OpenColorChooser(document.getElementById('tbscodegui_std_1_image_bordercolor'))" title="Open ColorChoose-Dialog" style="margin-bottom:2px;" alt="*" /></span> 
</div>
<input type="button" class="button" onclick="TBSCodeGUI_Image(tbscodegui_edit_<?=$n?>, '<?=$n?>')" value="Insert!" title="Insert the image!" />
</div>
<div class="codegui_panel" id="tbscodegui_panel_<?=$n?>_hline">
<h6>Insert horizontal line</h6><div><span>Height: <input id="tbscodegui_std_<?=$n?>_hline_height" type="text" size="2" style="width:30px;" value="1" class="edit_1" /></span> 
<span>Style: <select id="tbscodegui_std_<?=$n?>_hline_style" size="1" class="combobox_1"><option value="dotted">dotted</option><option value="dashed" selected="selected">dashed</option><option value="solid">solid</option><option value="double">double</option></select></span> 
<span>Color: <input id="tbscodegui_std_<?=$n?>_hline_color" type="text" size="7" style="width:60px;" value="#000000" class="edit_1" /> <img src="/files/images/icons/code_colorchooser.gif" width="18" height="18" class="button" onclick="TBSCodeGUI_OpenColorChooser(document.getElementById('tbscodegui_std_1_hline_color'))" title="Open ColorChoose-Dialog" style="margin-bottom:2px;" alt="*" /></span> 
</div>
<input type="button" class="button" onclick="TBSCodeGUI_HLine(tbscodegui_edit_<?=$n?>, '<?=$n?>')" value="Insert!" title="Insert the line!" />
</div>
<?php return ''; ?>
