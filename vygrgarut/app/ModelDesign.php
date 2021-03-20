<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ModelDesign extends Model
{
    public function components()
    {
        return $this->hasMany(ComponentPage::class)->orderBy('order', 'asc');
    }
}
