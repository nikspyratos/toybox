<?php

declare(strict_types=1);

namespace App\Models\Interfaces;

use App\Models\Vote;

interface Votable
{
    public function handleVoteUpdate(Vote $vote): void;
}
