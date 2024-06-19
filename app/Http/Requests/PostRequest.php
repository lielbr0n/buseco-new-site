<?php

namespace App\Http\Requests;

use App\Models\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
    
        $post_slug_validation = ['required', 'unique:post,post_slug', 'max:100']; //validation if create(insert data), no pageId

        //validation if update, there is pageId
        if(request()->postId){
            //if the post_slug field is not modified, then it will ignore this validation
            $post_slug_validation = ['required', 'max:100', 'lowercase', 'string', Rule::unique(Post::class)->ignore(request()->postId, 'post_id')];
        }
        
        return [
            'post_title' => ['required','max:150'], 
            'post_slug' =>  $post_slug_validation,
            'post_content' => ['required'],
            'post_category' => ['required', 'max:50'],
            'post_excerpt' => ['max:90'],
            'post_status' => ['required']
        ];
    }

    public function validated($key = null, $default = null){
        $validated = parent::validated($key, $default);
        
        $user = $this->user();

        if($this->filepath){
            $feature_img_path = trim($this->filepath, url('/')); //remove the "base_url" - localhost:8000, only the path of photo will be save on DB.
            $feature_img_path = '/'.$feature_img_path;
        }
       
        return array_merge($validated, [
            'post_title' => $this->post_title,
            'post_slug' => $this->post_slug,
            'post_content' => $this->post_content,
            'post_author_id' => $user->id,
            'post_author_name' => $user->name,
            'post_excerpt' => $this->post_excerpt ? $this->post_excerpt : NULL,
            'post_category' => $this->post_category,
            'post_tags' => '',
            // 'post_template' => $this->post_template,
            'post_status' => $this->post_status,
            'post_option' => $this->post_show_posttitle,
            'post_feature_image' => $this->filepath ? $feature_img_path : NULL,
            'post_type' => 'post'
        ]);
    }
}
