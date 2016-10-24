<?php

namespace CTP\Models;

use Illuminate\Database\Eloquent\Model;

class MailingList extends Model
{
    protected $table = 'mailing_list';
    public $dates = ['created_at', 'updated_at'];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}
