<?php
declare(strict_types=1);

namespace space\yurisi\SpaceServerItemAPI\item;

use pocketmine\item\Item;

interface SpaceServerItem {

    public static function get(int $amount = 1): Item;

    public function getId();

}