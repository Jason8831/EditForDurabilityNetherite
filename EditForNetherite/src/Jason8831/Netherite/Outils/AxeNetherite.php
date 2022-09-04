<?php

namespace Jason8831\Netherite\Outils;

use Jason8831\Netherite\Main;
use pocketmine\block\BlockToolType;
use pocketmine\item\Axe;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\ToolTier;
use pocketmine\utils\Config;

class AxeNetherite extends Axe
{
    public function __construct()
    {
        $config = new Config(Main::getInstance()->getDataFolder() . "config.yml", Config::YAML);
        parent::__construct(new ItemIdentifier($config->get("NetheriteAxeId"),$config->get("NetheriteAxeMeta")), 0, ToolTier::DIAMOND());
    }

    public function getMaxDurability(): int
    {
        $config = new Config(Main::getInstance()->getDataFolder() . "config.yml", Config::YAML);
        return $config->get("NetheriteAxeDurability");
    }

    public function getBlockToolType(): int
    {
        return BlockToolType::AXE;
    }
}