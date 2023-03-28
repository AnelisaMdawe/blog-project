<?php

namespace App\Models;

use http\Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property string $title
 */
class Post extends Model

    //use hasFactory;
    protected $guarded = [];

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query
                ->where('title', 'like', '%' . request($search) . '%')
                ->orWhere('body', 'like', '%' . Request($search) . '%');


        });

    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
