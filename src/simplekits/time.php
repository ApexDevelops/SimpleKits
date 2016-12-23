<?php
namespace simplekits;


use pocketmine\scheduler\PluginTask;
use pocketmine\plugin\Plugin;
class time extends PluginTask{
	
	public function __construct(Plugin $owner){
		parent::__construct($owner);
	}
	
	public function onRun($currentTick){
		$this->getOwner()->timer();
	}
	
}