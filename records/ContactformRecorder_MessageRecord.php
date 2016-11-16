<?php
/**
 * Contactform Recorder plugin for Craft CMS
 *
 * @author    Dominik
 * @copyright Copyright (c) 2016 Dommmel
 * @link      https://github.com/dommmel
 * @package   ContactformRecorder
 * @since     1.0.0
 */

namespace Craft;

class ContactformRecorder_MessageRecord extends BaseRecord
{
    /**
     * Returns the name of the database table the model is associated with (sans table prefix). By convention,
     * tables created by plugins should be prefixed with the plugin name and an underscore.
     *
     * @return string
     */
    public function getTableName()
    {
        return 'contactformrecorder_message';
    }

    /**
     * Returns an array of attributes which map back to columns in the database table.
     *
     * @access protected
     * @return array
     */
    protected function defineAttributes()
    {
        return array(
            'message' => array(AttributeType::Mixed, 'model' => 'ContactFormModel')
        );
    }
    
}