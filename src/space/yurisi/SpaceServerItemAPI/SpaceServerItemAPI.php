<?php
declare(strict_types=1);

namespace space\yurisi\SpaceServerItemAPI;

use pocketmine\plugin\PluginBase;
use space\yurisi\SpaceServerItemAPI\item\SpaceServerItemFactory;

class SpaceServerItemAPI extends PluginBase {

    private SpaceServerItemFactory $itemFactory;

    private static SpaceServerItemAPI $main;

    protected function onEnable(): void {
        $this->itemFactory = new SpaceServerItemFactory();
        $this->itemFactory->init();
        self::$main = $this;
    }

    public function getItemFactory(): SpaceServerItemFactory {
        return $this->itemFactory;
    }

    public function getInstance(): self {
        return self::$main;
    }

}