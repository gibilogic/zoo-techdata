<?php

/**
 * @version     tmpl/edit.php 2013-07-09 09:49:00Z zanardi
 * @package     Techdata element for Zoo
 * @author      GiBiLogic <info@gibilogic.com>
 * @authorUrl   http://www.gibilogic.com
 * @copyright   (C) 2013 GiBiLogic snc
 * @license     GNU/GPL v2 or later
 */
defined('_JEXEC') or die();

$fields = array_map("trim",explode(",",$this->config->get('fields')));
?>
<div>
<?php foreach ($fields as $field): ?>
    <?php $field_lang_key = strtoupper(str_replace(" ","_",$field)); ?>
    <label><?php echo JText::_("ZOO_TECHDATA_$field_lang_key") ?></label><?php echo $this->app->html->_('control.text', $this->getControlName($field), $this->get($field), 'title="'.JText::_('Length').'" placeholder="'.JText::_($field).'"'); ?><br />
<?php endforeach ?>
</div>
