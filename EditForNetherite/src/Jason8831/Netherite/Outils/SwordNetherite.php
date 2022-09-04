<?php

namespace Jason8831\Netherite\Outils;

use Jason8831\Netherite\Main;
use pocketmine\block\BlockToolType;
use pocketmine\item\ItemIdentifier;
use pocketmine\item\Sword;
use pocketmine\item\ToolTier;
use pocketmine\utils\Config;

class SwordNetherite extends Sword
{
    public function __construct()
    {
    $config = new Config(Main::getInstance()->getDataFolder() . "config.yml", Config::YAML);
        parent::__construct(new ItemIdentifier($config->get("NetheriteSwordId"),$config->get("NetheriteSwordMeta")), 0, ToolTier::DIAMOND());
    }

    public function getAttackPoints(): int
    {
        $config = new Config(Main::getInstance()->getDataFolder() . "config.yml", Config::YAML);
        return $config->get("NetheriteSwordDamage");
    }


    public function getMaxDurability(): int
    {
        $config = new Config(Main::getInstance()->getDataFolder() . "config.yml", Config::YAML);
        return $config->get("NetheriteSwordDurability");
    }

    public function getBlockToolType(): int
    {
        return BlockToolType::SWORD;
    }
}