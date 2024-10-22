<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPostLogs extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_post_logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userId',
        'username',
        'userEmail',
        'postId',
        'postTitle',
        'modifiedFields',
        'operation'
    ];

    public $timestamps = false;

    public static function getPostLogs(){
        $userPostLogs = UserPostLogs::orderByDesc('date_created')
        ->paginate(20);

        return $userPostLogs;
    }

    public static function createPostLogs($postId, $postTitle, $method, $modifiedFields = NULL){
        $operation = '';
        if($method === 'POST'){
            $operation = "CREATE";
        }else if($method === 'PATCH'){
            $operation = "UPDATE";
        }else if($method === 'DELETE'){
            $operation = "DELETE";
        }

        $postLogs = array(
            'userId' => request()->user()->id,
            'username' => request()->user()->name,
            'userEmail' => request()->user()->email,
            'postId' => $postId,
            'postTitle' => $postTitle,
            'modifiedFields' => $modifiedFields ? serialize($modifiedFields) : NULL,
            'operation' => $operation
        );

        UserPostLogs::create($postLogs);
    }

    public static function getModifiedPostLogsByPostId($postId){
        $userPostLogs = UserPostLogs::orderByDesc('date_created')
        ->where('postId', $postId)
        ->where('operation', 'UPDATE')
        ->paginate(20);

        return $userPostLogs;
    }
}
