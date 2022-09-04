<?php

namespace Jason8831\Netherite\Outils;

use Jason8831\Netherite\Main;
use pocketmine\block\BlockToolType;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\Pickaxe;
use pocketmine\item\ToolTier;
use pocketmine\utils\Config;

class PickaxeNetherite extends Pickaxe
{
    public function __construct()
    {
        $config = new Config(Main::getInstance()->getDataFolder() . "config.yml", Config::YAML);
        parent::__construct(new ItemIdentifier($config->get("NetheritePickaxeId"),$config->get("NetheritePickaxeMeta")), 0, ToolTier::DIAMOND());
    }
    
    public function getMaxDurability(): int
    {
        $config = new Config(Main::getInstance()->getDataFolder() . "config.yml", Config::YAML);
        return $config->get("NetheritePickaxeDurability");
    }

    public function getBlockToolType(): int
    {
        return BlockToolType::PICKAXE;
    }
}