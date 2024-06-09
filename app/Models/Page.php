<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'post';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'post_author_id',
        'post_author_name',
        'post_title',
        'post_content',
        'post_slug',
        'post_excerpt',
        'post_category',
        'post_tags',
        'post_template',
        'post_status',
        'post_option'
    ];

    protected $primaryKey = 'post_id';
}
