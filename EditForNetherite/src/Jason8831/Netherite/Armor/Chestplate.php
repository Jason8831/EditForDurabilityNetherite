<?php

namespace Jason8831\Netherite\Armor;

use Jason8831\Netherite\Main;
use pocketmine\inventory\ArmorInventory;
use pocketmine\item\Armor;
use pocketmine\item\ArmorTypeInfo;
use pocketmine\item\ItemIdentifier;
use pocketmine\utils\Config;

class Chestplate extends Armor
{
    public function __construct()
    {
        $config = new Config(Main::getInstance()->getDataFolder() . "config.yml", Config::YAML);
        parent::__construct(new ItemIdentifier($config->get("NetheriteChestPlateId"), $config->get("NetheriteChestPlateMeta")), "netheritechestplate", new ArmorTypeInfo($config->get("NethriteChestPlateProtection"), $config->get("NethriteChestPlateDurability"), ArmorInventory::SLOT_CHEST));
    }
}