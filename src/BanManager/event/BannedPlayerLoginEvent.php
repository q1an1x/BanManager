<?php

namespace BanManager\event;

use BanManager\utils\Ban;
use pocketmine\event\player\PlayerEvent;
use pocketmine\Player;

class BannedPlayerLoginEvent extends PlayerEvent {
    /** @var Ban */
    protected $ban;

    public function __construct(Player $player, Ban $ban){
        $this->player = $player;
        $this->ban = $ban;
    }

    public function getBan() : Ban{
        return $this->ban;
    }
}