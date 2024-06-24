<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
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
        'post_option',
        'post_type',
        'post_feature_image'
    ];

    protected $primaryKey = 'post_id';

    public static function getPost(){
        $posts = Post::orderByDesc('created_at')
        ->where('post_type', 'post')
        ->paginate(10);

        return $posts;
    }

    public static function getLatestPostNewsAndJobOpp($limit = 4){
        $latestPosts = Post::latest()
        ->where('post_type', 'post')
        ->where('post_category', 'news-articles')
        ->orWhere('post_category', 'job-opportunities')
        ->where('post_status', 'publish')
        ->limit($limit)
        ->get();

        return $latestPosts;
    }

    public static function getListPost(){
        $latestPosts = Post::orderByDesc('created_at')
        ->where('post_type', 'post')
        ->where('post_category', 'news-articles')
        ->orWhere('post_category', 'job-opportunities')
        ->where('post_status', 'publish')
        ->paginate(10);

        return $latestPosts;
    }

    public static function getLatestPost($limit = 4){
        $latestPosts = Post::latest()
        ->where('post_type', 'post')
        ->where('post_status', 'publish')
        ->limit($limit)
        ->get();

        return $latestPosts;
    }

    public static function getPostAdvisories($limit = 4){
        $latestAdvisory = Post::latest()
        ->where('post_type', 'post')
        ->where('post_category', 'public-advisory')
        ->where('post_status', 'publish')
        ->limit($limit)
        ->get();

        return $latestAdvisory;
    }
}
