function TBSCodeGUI_ShowPanel(InstID, PanelName) {
  if (!((id=eval("tbscodegui_panel_"+InstID))==-1))
    document.getElementById(id).style.display="none";
  eval("tbscodegui_panel_"+InstID+"=\""+PanelName+"\";");
  document.getElementById(PanelName).style.display="block";
}
function TBSCodeGUI_SwapSmilies(InstID) {
  if (eval("tbscodegui_smilies_on_"+InstID+"=!tbscodegui_smilies_on_"+InstID+";"))
    eval("tbscodegui_smilies_"+InstID).style.display="block";
  else
    eval("tbscodegui_smilies_"+InstID).style.display="none";
}
function TBSCodeGUI_HLine(Control, InstID) {
  Height=document.getElementById("tbscodegui_std_"+InstID+"_hline_height");
  Style=document.getElementById("tbscodegui_std_"+InstID+"_hline_style");
  Color=document.getElementById("tbscodegui_std_"+InstID+"_hline_color");
  Text="[hline";
  Text=Text+" height='"+Height.value+"'";
  Text=Text+" style='"+Style.options[Style.selectedIndex].value+"'";
  Text=Text+" color='"+Color.value+"'";
  Text=Text+"]";
  Control.frameSelection(Text);
}
function TBSCodeGUI_Image(Control, InstID) {
  Source=document.getElementById("tbscodegui_std_"+InstID+"_image_src");
  Margin=document.getElementById("tbscodegui_std_"+InstID+"_image_margin");
  BorderWidth=document.getElementById("tbscodegui_std_"+InstID+"_image_borderwidth");
  BorderStyle=document.getElementById("tbscodegui_std_"+InstID+"_image_borderstyle");
  BorderColor=document.getElementById("tbscodegui_std_"+InstID+"_image_bordercolor");
  Text="[image";
  Text=Text+" margin='"+Margin.value+"'";
  Text=Text+" border-width='"+BorderWidth.value+"'";
  Text=Text+" border-style='"+BorderStyle.options[BorderStyle.selectedIndex].value+"'";
  Text=Text+" border-color='"+BorderColor.value+"'";
  Text=Text+"]";
  if (Source.value=='-selection-')
    Control.frameSelection(Text, "[/image]");
  else
    Control.frameSelection(Text+Source.value+"[/image]");
}
function TBSCodeGUI_Link(Control, InstID) {
  Target=document.getElementById("tbscodegui_std_"+InstID+"_link_href");
  if (Target.value=='-selection-')
    Control.frameSelection("[link]", "[/link]");
  else
    Control.frameSelection("[link='"+Target.value+"']", "[/link]");
}
function TBSCodeGUI_EMail(Control, InstID) {
  Target=document.getElementById("tbscodegui_std_"+InstID+"_email_address");
  if (Target.value=='-selection-')
    Control.frameSelection("[email]", "[/email]");
  else
    Control.frameSelection("[email='"+Target.value+"']", "[/email]");
}
function TBSCodeGUI_Size(Control, InstID) {
  Size=document.getElementById("tbscodegui_std_"+InstID+"_size_val");
  Control.frameSelection("[size='"+Size.value+"']", "[/size]");
}
function TBSCodeGUI_FGColor(Control, InstID) {
  Color=document.getElementById("tbscodegui_std_"+InstID+"_fgcolor_color");
  Control.frameSelection("[color='"+Color.value+"']", "[/color]");
}
function TBSCodeGUI_Paragraph(Control, InstID) {
  Align=document.getElementById("tbscodegui_std_"+InstID+"_paragraph_align");
  Text="[p align='"+Align.options[Align.selectedIndex].value+"'";
  Indent=document.getElementById("tbscodegui_std_"+InstID+"_paragraph_indent");
  if (Indent.value!="0")
    Text=Text+" indent='"+Indent.value+"'";
  Text=Text+"]";
  Control.frameSelection(Text, "[/p]");
}
function TBSCodeGUI_List(Control, InstID) {
  Style=document.getElementById("tbscodegui_std_"+InstID+"_list_type");
  Text="[list type='"+Style.options[Style.selectedIndex].value+"'";
  Start=document.getElementById("tbscodegui_std_"+InstID+"_list_start");
  if (Start.value!="1")
    Text=Text+" start='"+Start.value+"'";
  Text=Text+"]";
  Control.frameSelection(Text, "[/list]");
}
function TBSCodeGUI_Font(Control, InstID) {
  Family=document.getElementById("tbscodegui_std_"+InstID+"_font_family");
  Text="[font='"+Family.options[Family.selectedIndex].value+"']";
  Control.frameSelection(Text, "[/font]");
}
function TBSCodeGUI_Quote(Control, InstID) {
  From=document.getElementById("tbscodegui_std_"+InstID+"_quote_from");
  Link=document.getElementById("tbscodegui_std_"+InstID+"_quote_link");
  Text="[quote";
  if (From.value!="")
    Text+=" from='"+From.value+"'";
  if (Link.value!="")
    Text+=" link='"+Link.value+"'";
  Text+="]";
  Control.frameSelection(Text, "[/quote]");
}
color_choose_control = -1;
function TBSCodeGUI_OpenColorChooser(Edit) {
  color_choose_control=Edit;
  Chooser=window.open("/files/tbscodes/colorchooser.html", "color_chooser", "height=450,width=450,location=no,menubar=yes,resizable=yes,toolbar=no,scrollbars=no,status=no");
}





//var EC_NoRanges=((navigator.userAgent.indexOf("Opera") != -1) || (navigator.userAgent.indexOf("Netscape") != -1));
var EC_NoRanges=!(document.selection);
function EC_InsertTextRangeSel(TextElement, StartText, EndText) {
  if (EC_NoRanges) {
    TextElement.value = TextElement.value + StartText + EndText;
  } else {
    TextElement.focus();
    var RangeSel = document.selection.createRange();
    var RangeBefore = document.body.createTextRange();
    RangeBefore.moveToElementText(TextElement);
    var RangeAfter = RangeBefore.duplicate();
    RangeBefore.setEndPoint("EndToStart", RangeSel);
    RangeAfter.setEndPoint("StartToEnd", RangeSel);
    //Update
    RangeSel.text=StartText+RangeSel.text+EndText;
    RangeSel.setEndPoint("StartToEnd", RangeBefore);
    RangeSel.setEndPoint("EndToStart", RangeAfter);
    RangeSel.moveStart("character", StartText.length);
    if (RangeSel.text!="") {
      RangeSel.moveEnd("character", -EndText.length);
    }
    RangeSel.select(); 
  }
  TextElement.focus();
}
function EC_InsertTextSel(TextElement, InsertText) {
  EC_InsertTextRangeSel(TextElement, InsertText, "");
}
function EC_ShowById(ControlId) {
  document.getElementById(ControlId).style.visibility="visible";
}
function EC_HideById(ControlId) {
  document.getElementById(ControlId).style.visibility="hidden";
}
color_choose_control = -1;
function EC_Dialog_ColorChooser(Edit) {
  color_choose_control=Edit;
  Chooser=window.open("/files/tbscodes/colorchooser.html", "color_chooser", "height=450,width=450,location=no,menubar=yes,resizable=yes,toolbar=no,scrollbars=no,status=no");
}

var tbscodegui_edit_1;
var tbscodegui_panel_1=-1;






/* Textareas */
function TTextArea(id) {
  this.id = id;
  this.node = eval(document.getElementById(this.id));
}
TTextArea.prototype.frameSelection = function(sBefore, sAfter) {
  if (typeof sBefore == "undefined")
    sBefore = "";
  if (typeof sAfter  == "undefined")
    sAfter  = "";
  this.node.focus();
  if (typeof document.selection != "undefined") { /* Internet Explorer */
    /* Replace selection */
    var Range = document.selection.createRange();
    var RangeBefore = document.body.createTextRange();
    RangeBefore.moveToElementText(this.node);
    var RangeAfter = RangeBefore.duplicate();
    RangeBefore.setEndPoint("EndToStart", Range);
    RangeAfter.setEndPoint("StartToEnd", Range);
    Range.text = sBefore + Range.text + sAfter;
    /* Update selection */
    Range.setEndPoint("StartToEnd", RangeBefore);
    Range.setEndPoint("EndToStart", RangeAfter);
    Range.moveStart("character", sBefore.length);
    if (Range.text != "")
      Range.moveEnd("character", -sAfter.length);
    Range.select(); 
  }
  else if (typeof this.node.selectionStart != "undefined") { /* Gecko */
    /* Save scroll-position */
    var saveScroll = (typeof this.node.scrollTop != "undefined"), scrollTop, scrollLeft;
    if (saveScroll) {
      scrollTop  = this.node.scrollTop;
      scrollLeft = this.node.scrollLeft;
    }
    /* Replace selection */
    var Start = this.node.selectionStart;
    var End = this.node.selectionEnd;
    var Sel = this.node.value.substring(Start, End);
    this.node.value = this.node.value.substr(0, Start) + sBefore + Sel + sAfter + this.node.value.substr(End);
    /* Update selection */
    this.node.setSelectionRange(Start + sBefore.length, End + sBefore.length);
    /* Update scroll-position */
    if (saveScroll) {
      this.node.scrollTop  = scrollTop;
      this.node.scrollLeft = scrollLeft;
    }
  }
  else
    this.node.value += sBefore + sAfter;
  this.node.focus();
  hideAllPanels();
}




function hideAllPanels() {
	var nodes = document.querySelectorAll('.codegui_panel');
	for (var i in nodes) {
		nodes[i].style.display = 'none';
	}
}
