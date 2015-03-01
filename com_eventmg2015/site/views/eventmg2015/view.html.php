<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class EventMG2015ViewEventMG2015 extends JViewLegacy
{
	function display($tpl = null)
	{
        $model = &$this->getModel();
        $greeting = $model->getGreeting();        
		$this->msg = $greeting; 
        parent::display($tpl);		
	}
}
