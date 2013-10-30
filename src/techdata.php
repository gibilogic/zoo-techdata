<?php

/**
 * @version     techdata.php 2013-10-30 10:52:00 UTC zanardi
 * @package     Techdata element for Zoo
 * @author      GiBiLogic <info@gibilogic.com>
 * @authorUrl   http://www.gibilogic.com
 * @copyright   (C) 2013 GiBiLogic snc
 * @license     GNU/GPL v2 or later
 */
defined('_JEXEC') or die();

// register ElementRepeatable class
App::getInstance('zoo')->loader->register('ElementRepeatable', 'elements:repeatable/repeatable.php');

/**
 *  @class ElementTechdata
 *      The techdata element class
 */
class ElementTechdata extends ElementRepeatable implements iRepeatSubmittable
{

    /**
     * Check if element has a value
     *
     * @param array $params configuration options
     * @return boolean
     */
    protected function _hasValue($params = array())
    {
        //$techdata = $this->get('value', '');
        //return !empty($techdata);
        return true;
    }

    /**
     * Check if a specific field has at least a value in one of the repeatable
     * rows
     *
     * @param string $field
     * @return boolean
     */
    public function hasFieldValue($field)
    {
        $value = array();
        foreach ($this as $self) {
            if ($self[$field]) {
                return true;
            }
        }
        return join(",", $value);
    }

    /**
     * Render the full element
     *
     * @param array $params configuration options
     * @return string The html for the element
     */
    public function render($params = array())
    {
        $this->fields = array_map("trim", explode(",", $this->config->get('fields')));
        foreach ($this->fields as $key => $field) {
            if (!$this->hasFieldValue($field)) {
                unset($this->fields[$key]);
            }
        }

        if (!count($this->fields)) {
            return '';
        }

        $header_layout = $this->getLayout('render_header.php');
        $footer_layout = $this->getLayout('render_footer.php');
        $html = $this->renderLayout($header_layout)
                . parent::render($params)
                . $this->renderLayout($footer_layout);
        return $html;
    }

    /**
     * Render each instance of the element
     *
     * @param array $params configuration options
     * @return string The html for the field
     */
    protected function _render($params = array())
    {
        if ($layout = $this->getLayout('render.php')) {
            return $this->renderLayout($layout);
        }
    }

    /**
     * Render the repeatable edit form field.
     *
     * @return string The html for the input field
     */
    protected function _edit()
    {
        return $this->_editForm();
    }

    /**
     * Render the repeatable submission form field
     *
     * @param array $params configuration options
     * @return string The html for the element submission form
     */
    public function _renderSubmission($params = array())
    {
        return $this->_editForm($params->get('trusted_mode'));
    }

    /**
     * Render the form field
     *
     * @param array $params configuration options
     * @return string The html for the element edit form
     */
    protected function _editForm($trusted_mode = true)
    {
        if ($layout = $this->getLayout('edit.php')) {
            return $this->renderLayout($layout, compact('trusted_mode')
            );
        }
    }

}
