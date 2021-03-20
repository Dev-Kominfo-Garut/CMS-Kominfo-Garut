<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Models\Page as ModelsPage;
use TCG\Voyager\Traits\Translatable;

class Page extends ModelsPage
{
    use HasFactory;
    // use Translatable;

    // protected $translatable = ['title', 'body', 'meta_description', 'meta_keywords', 'seo_title'];

    /**
     * Statuses.
     */
    public const STATUS_ACTIVE = 'ACTIVE';
    public const STATUS_INACTIVE = 'INACTIVE';

    /**
     * List of statuses.
     *
     * @var array
     */
    public static $statuses = [self::STATUS_ACTIVE, self::STATUS_INACTIVE];

    protected $guarded = [];

    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->author_id && Auth::user()) {
            $this->author_id = Auth::user()->getKey();
        }

        return parent::save();
    }

    /**
     * Scope a query to only include active pages.
     *
     * @param  $query  \Illuminate\Database\Eloquent\Builder
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', static::STATUS_ACTIVE);
    }

    public function components()
    {
        return $this->hasMany(PageComponent::class)->orderBy('order', 'asc');
    }

    public function componentsActive()
    {
        return $this->hasMany(PageComponent::class)->where('status', 'active')->orderBy('order', 'asc');
    }
}
