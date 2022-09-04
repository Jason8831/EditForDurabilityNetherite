<?php

namespace Jason8831\Netherite\Armor;

use Jason8831\Netherite\Main;
use pocketmine\inventory\ArmorInventory;
use pocketmine\item\Armor;
use pocketmine\item\ArmorTypeInfo;
use pocketmine\item\ItemIdentifier;
use pocketmine\utils\Config;

class Leggings extends Armor
{
    public function __construct()
    {
        $config = new Config(Main::getInstance()->getDataFolder() . "config.yml", Config::YAML);
        parent::__construct(new ItemIdentifier($config->get("NetheriteLeggingsId"), $config->get("NetheriteLeggingsMeta")), "netheriteleggings", new ArmorTypeInfo($config->get("NethriteLeggingsProtection"), $config->get("NethriteLeggingsDurability"), ArmorInventory::SLOT_LEGS));
    }
}