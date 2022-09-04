<?php

namespace Jason8831\Netherite;

use Jason8831\Netherite\Armor\Boots;
use Jason8831\Netherite\Armor\Chestplate;
use Jason8831\Netherite\Armor\Helemet;
use Jason8831\Netherite\Armor\Leggings;
use Jason8831\Netherite\Outils\AxeNetherite;
use Jason8831\Netherite\Outils\HoeNetherite;
use Jason8831\Netherite\Outils\PickaxeNetherite;
use Jason8831\Netherite\Outils\ShovelNetherite;
use Jason8831\Netherite\Outils\SwordNetherite;
use pocketmine\event\Listener;
use pocketmine\item\ItemFactory;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener
{

    public Config $config;

    /**
     * @var Main
     */
    private static $instance;

    public function onEnable(): void
    {

        self::$instance = $this;

        $this->getLogger()->info("§f[§l§4EditForNetherite§r§f]: activée");
        $this->saveResource("config.yml");

        ItemFactory::getInstance()->register(new Helemet(), true);
        ItemFactory::getInstance()->register(new Chestplate(), true);
        ItemFactory::getInstance()->register(new Leggings(), true);
        ItemFactory::getInstance()->register(new Boots(), true);

        ItemFactory::getInstance()->register(new SwordNetherite(), true);
        ItemFactory::getInstance()->register(new PickaxeNetherite(), true);
        ItemFactory::getInstance()->register(new ShovelNetherite(), true);
        ItemFactory::getInstance()->register(new AxeNetherite(), true);
        ItemFactory::getInstance()->register(new HoeNetherite(), true);
    }

    public static function getInstance(): self{
        return self::$instance;
    }
}