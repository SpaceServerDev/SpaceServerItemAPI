<?php
declare(strict_types=1);

namespace space\yurisi\SpaceServerItemAPI\item;

use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\Server;

class AssaultRifle implements SpaceServerItem {

    private int $id = SpaceServerItemIds::ASSAULT_RIFLE;

    public static function get(int $amount = 1): Item {
        $item = ItemFactory::getInstance()->get(467, 0, 1);
        $item->setCustomName("§bアサルトライフル");
        $item->getNamedTag()->setString("gun", "AK47");
        $serial = time().Server::getInstance()->getTick();
        $item->getNamedTag()->setString("serial", $serial);
        $item->setLore(["シリアルナンバー:" . $serial]);
        $item->getNamedTag()->setString("fullauto", "yes");
        return $item;
    }

    public function getId(): int {
        return $this->id;
    }

}