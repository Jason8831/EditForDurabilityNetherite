<?php

namespace Jason8831\Netherite\Outils;

use Jason8831\Netherite\Main;
use pocketmine\block\BlockToolType;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\Shovel;
use pocketmine\item\ToolTier;
use pocketmine\utils\Config;

class ShovelNetherite extends Shovel
{
    public function __construct()
    {
        $config = new Config(Main::getInstance()->getDataFolder() . "config.yml", Config::YAML);
        parent::__construct(new ItemIdentifier($config->get("NetheriteShovelId"),$config->get("NetheriteShovelMeta")), 0, ToolTier::DIAMOND());
    }

    public function getMaxDurability(): int
    {
        $config = new Config(Main::getInstance()->getDataFolder() . "config.yml", Config::YAML);
        return $config->get("NetheriteShovelDurability");
    }

    public function getBlockToolType(): int
    {
        return BlockToolType::SHOVEL;
    }
}