<?php

/*
 * This file is part of the overtrue/laravel-favorite
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Overtrue\LaravelFavorite\Events;

use Illuminate\Database\Eloquent\Model;

class Event
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    public $favorite;

    /**
     * Event constructor.
     */
    public function __construct(Model $favorite)
    {
        $this->favorite = $favorite;
    }
}
