<?php

namespace Jason8831\Netherite\Outils;

use Jason8831\Netherite\Main;
use pocketmine\block\BlockToolType;
use pocketmine\item\Hoe;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\ToolTier;
use pocketmine\utils\Config;

class HoeNetherite extends Hoe
{
    public function __construct()
    {
        $config = new Config(Main::getInstance()->getDataFolder() . "config.yml", Config::YAML);
        parent::__construct(new ItemIdentifier($config->get("NetheriteHoueId"),$config->get("NetheriteHoueMeta")), 0, ToolTier::DIAMOND());
    }

    public function getMaxDurability(): int
    {
        $config = new Config(Main::getInstance()->getDataFolder() . "config.yml", Config::YAML);
        return $config->get("NetheriteHoueDurability");
    }

    public function getBlockToolType(): int
    {
        return BlockToolType::HOE;
    }
}