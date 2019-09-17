<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Customers extends Model
{
    protected $guarded = [];

    public function format()
    {

        return [
            'customer_id' => $this->id,
            'name' => $this->name,
            'created_by' => $this->user->name,
            'last_updated' => $this->updated_at->diffForHumans(),
            'id_user' => $this->user->id,
            'user_id' => $this->user_id,
        ];
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
