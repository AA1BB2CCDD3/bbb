<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

jimport( 'joomla.application.component.model' );

class EventMG2015ModelEventMG2015 extends JModelItem
{
	protected $message;
	
    public function getGreeting()
    {	
		$data="";
	
		if(ereg ("([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})", $_REQUEST["datemg"])==false)
			return "";
	
		$items=$this->getItems($_REQUEST["datemg"]);
		
		$data ="<h2>".JText::_($_REQUEST["datemg"])."</h2>";
		$data .="<ul id='id_com_eventmg'>";
		foreach ($items as $item) {
			$data .="<li><a href='index.php?option=com_content&view=article&id=".$item->id."&Itemid=238&lang=lt'>".JText::_($item->title)."</a></li>";
		}
		$data .="</ul>";
	
        return $data;
    }
	
	private function getItems($date)
    {		
		$jinput = JFactory::getApplication()->input;
		$id     = $jinput->get('id', 1, 'INT');
			
        // get a reference to the database
		$db = &JFactory::getDBO();		
		 
		$query = '
		SELECT 
			day(a.created) AS day,
			year( a.created) AS year,
			month( a.created ) AS month,
			a.id, date( a.created ) AS data,
			time(a.created) AS time,
			a.title AS title
		FROM `#__content` as a WHERE state=1 and catid="'.$id.'" and DATE(a.created) = "'.$date.'" order by a.created ';
 
        $db->setQuery($query);
        $items = ($items = $db->loadObjectList())?$items:array();
        return $items;
    } //end getItems	
}