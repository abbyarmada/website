<?php

namespace CTP\Data;

use Webpatser\Uuid\Uuid;

abstract class UuidDataModel extends DataModel
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Uuid::generate(4);
        });
    }
}
