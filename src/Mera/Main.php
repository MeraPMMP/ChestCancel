<?php

namespace Mera;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\block\Block;
use pocketmine\item\Item;

class Main extends PluginBase implements Listener{
    public function onEnable(){
    $this->getLogger()->info("Eklenti Aktif, By MeraS");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onInteract(PlayerInteractEvent $pie){
    $p = $pie->getPlayer();
    $esya = $pie->getItem();
    $blok = $pie->getBlock();
    if($blok->getId() == Item::CHEST){
    if($esya->getId() == Item::DIAMOND_SWORD){
    $pie->setCancelled(true);
    $p->sendMessage("§cElmas Kılıç ile açamazsın!");
    }
    }
    }
}
