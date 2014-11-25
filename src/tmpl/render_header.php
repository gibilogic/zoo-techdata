<?php
/**
 * @version     tmpl/render_header.php 2014-03-19 10:24:00 UTC zanardi
 * @package     Techdata element for Zoo
 * @author      GiBiLogic <info@gibilogic.com>
 * @authorUrl   http://www.gibilogic.com
 * @copyright   (C) 2013-2014 GiBiLogic snc
 * @license     GNU/GPL v3 or later
 */
defined('_JEXEC') or die();

?>
<h3><?php echo JText::_("ZOO_TECHDATA_TITLE") ?></h3>
<table>
    <thead>
        <tr>
            <?php foreach ($this->fields as $field): ?>
                <?php $field_lang_key = strtoupper(str_replace(" ", "_", $field)); ?>
                <th><?php echo JText::_("ZOO_TECHDATA_$field_lang_key") ?></th>
            <?php endforeach ?>
        </tr>
    </thead>
    <tbody>
