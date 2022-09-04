<?php

namespace Jason8831\Netherite\Armor;

use Jason8831\Netherite\Main;
use pocketmine\inventory\ArmorInventory;
use pocketmine\item\Armor;
use pocketmine\item\ArmorTypeInfo;
use pocketmine\item\ItemIdentifier;
use pocketmine\utils\Config;

class Helemet extends Armor
{
    public function __construct()
    {

        $config = new Config(Main::getInstance()->getDataFolder() . "config.yml", Config::YAML);
        parent::__construct(new ItemIdentifier($config->get("NetheriteHelmetId"), $config->get("NetheriteHelmetMeta")), "netheritehelmet", new ArmorTypeInfo($config->get("NethriteHelmetProtection"), $config->get("NethriteHelmetDurability"), ArmorInventory::SLOT_HEAD));
    }
}