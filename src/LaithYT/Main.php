<?php

declare(strict_types=1);

namespace LaithYT;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\tile\Sign;
use pocketmine\item\Item;
use pocketmine\level\Level;
use pocketmine\event\block\SignChangeEvent;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\mcpe\protocol\ModalFormResponsePacket;

class Main extends PluginBase implements Listener {
	
	 public function onEnable(){
	 	 $this->getServer()->getLogger()->info(" SkyWars Enabled ");
      $this->getServer()->getLogger()->info(" Distribution is prohibited without permission of the owner ");
     
   }
	
	
	
  
  
