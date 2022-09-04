<?php

namespace Jason8831\Netherite\Armor;

use Jason8831\Netherite\Main;
use pocketmine\inventory\ArmorInventory;
use pocketmine\item\Armor;
use pocketmine\item\ArmorTypeInfo;
use pocketmine\item\ItemIdentifier;
use pocketmine\utils\Config;

class Boots extends Armor
{
    public function __construct()
    {
        $config = new Config(Main::getInstance()->getDataFolder() . "config.yml", Config::YAML);
        parent::__construct(new ItemIdentifier($config->get("NetheriteBootsId"), $config->get("NetheriteBootsId")), "netheritechestplate", new ArmorTypeInfo($config->get("NethriteBootsProtection"), $config->get("NethriteBootsDurability"), ArmorInventory::SLOT_CHEST));
    }
}