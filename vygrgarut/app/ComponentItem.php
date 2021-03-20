<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ComponentItem extends Model
{
    public function component()
    {
        return $this->belongsTo(PageComponent::class);
    }

    public function highestOrderDataComponent($componentId)
    {
        $order = 1;

        $item = $this->where('page_component_id', '=', $componentId)
            ->orderBy('order', 'DESC')
            ->first();

        if (!is_null($item)) {
            $order = intval($item->order) + 1;
        }

        return $order;
    }
}
