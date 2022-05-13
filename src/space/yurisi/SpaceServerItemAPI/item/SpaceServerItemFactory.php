<?php
declare(strict_types=1);

namespace space\yurisi\SpaceServerItemAPI\item;

use pocketmine\item\Item;
use space\yurisi\SpaceServerItem\exception\AlreadyRegisteredIDException;

class SpaceServerItemFactory {

    private static array $items = [];

    public function init() {
        $this->register(new AssaultRifle(), SpaceServerItemIds::ASSAULT_RIFLE);
    }

    public static function register(SpaceServerItem $item, int $id) {
        if (isset(self::$items[$id])) {
            throw new AlreadyRegisteredIDException('id:' . $id . 'はすでに登録されています。');
        }
        self::$items[$id] = $item;
    }

    public function get(int $id, int $amount): ?Item {
        if (!isset(self::$items[$id])) {
            return null;
        }
        return clone self::$items[$id]::get($amount);
    }

}