<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PageComponent extends Model
{

    public function highestOrderComponent($pageId)
    {
        $order = 1;

        $item = $this->where('page_id', '=', $pageId)
            ->orderBy('order', 'DESC')
            ->first();

        if (!is_null($item)) {
            $order = intval($item->order) + 1;
        }

        return $order;
    }

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function type()
    {
        return $this->belongsTo(ModelDesign::class, 'model_design_id', 'id');
    }

    public function items()
    {
        return $this->hasMany(ComponentItem::class)->orderBy('order', 'asc');
    }

    public function itemsActive()
    {
        return $this->hasMany(ComponentItem::class)->where('status', 'shoow')->orderBy('order', 'asc');
    }
}
