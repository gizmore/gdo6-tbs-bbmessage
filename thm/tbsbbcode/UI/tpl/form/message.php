<?php
/** @var $field \GDO\UI\GDT_Message **/
use GDO\Javascript\Javascript;
?>
<div class="gdt-container<?=$field->classError()?>">
  <?=$field->htmlIcon()?>
  <label <?=$field->htmlForID()?>><?=$field->displayLabel()?></label>
  <div class="form-span-columns">
    <div><?=include('tbs_bb_bar.php')?></div>
    <div><?=include('tbs_bb_panels.php')?></div>
    <textarea
     <?=$field->htmlID()?>
     class="<?=$field->classEditor()?>"
     <?=$field->htmlFormName()?>
     rows="6"
     <?=$field->htmlRequired()?>
     <?=$field->htmlDisabled()?>
     ><?=html($field->getVar())?></textarea>
     <?=include('tbs_bb_smileypanel.php')?>
   </div>
  <?=$field->htmlError()?>
</div>
<?php
$script_html = 'tbscodegui_edit_'.$field->num.' = new TTextArea(\''.$field->id().'\');';
Javascript::addJSPostInline($script_html);
?>
