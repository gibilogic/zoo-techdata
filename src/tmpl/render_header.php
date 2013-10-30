<?php
/**
 * @version     tmpl/render_header.php 2013-07-09 09:49:00Z zanardi
 * @package     Techdata element for Zoo
 * @author      GiBiLogic <info@gibilogic.com>
 * @authorUrl   http://www.gibilogic.com
 * @copyright   (C) 2013 GiBiLogic snc
 * @license     GNU/GPL v2 or later
 */
defined('_JEXEC') or die();

?>
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
