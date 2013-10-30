<?php
/**
 * @version     tmpl/render.php 2013-07-19 06:58:00Z zanardi
 * @package     Techdata element for Zoo
 * @author      GiBiLogic <info@gibilogic.com>
 * @authorUrl   http://www.gibilogic.com
 * @copyright   (C) 2013 GiBiLogic snc
 * @license     GNU/GPL v2 or later
 */
defined('_JEXEC') or die();

?>
<tr>
    <?php foreach ($this->fields as $field): ?>
        <td><?php echo $this->get($field); ?></td>
    <?php endforeach ?>
</tr>
