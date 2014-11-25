<?php

/**
 * @version     tmpl/edit.php 2014-11-25 09:40:00 UTC zanardi
 * @package     Techdata element for Zoo
 * @author      GiBiLogic <info@gibilogic.com>
 * @authorUrl   http://www.gibilogic.com
 * @copyright   (C) 2013-2014 GiBiLogic snc
 * @license     GNU/GPL v3 or later
 */
defined('_JEXEC') or die();

$fields = array_map("trim",explode(",",$this->config->get('fields')));
?>
<style type="text/css">
  div.element div.techdata-edit label {clear: left;display: block;float: left;width: 50%;text-align: right}
  div.element div.techdata-edit input {float: left;margin-left: 2%;width: 38%}
</style>
<div class="techdata-edit">
<?php foreach ($fields as $field): ?>
    <?php $field = str_replace('*','',$field); ?>
    <?php $field_lang_key = strtoupper(str_replace(" ","_",$field)); ?>
    <label><?php echo JText::_("ZOO_TECHDATA_$field_lang_key") ?></label><?php echo $this->app->html->_('control.text', $this->getControlName($field), $this->get($field), 'title="'.JText::_('Length').'" placeholder="'.JText::_($field).'"'); ?><br />
<?php endforeach ?>
</div>
