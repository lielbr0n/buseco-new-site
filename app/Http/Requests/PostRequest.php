<?php

namespace App\Http\Requests;

use App\Models\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;


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
        $post_slug_validation = ['required', 'lowercase', 'unique:post,post_slug', 'max:100']; //validation if create(insert data), no pageId

        //validation if update, there is pageId
        if(request()->postId){
            //if the post_slug field is not modified, then it will ignore this validation
            $post_slug_validation = ['required', 'max:100', 'lowercase', 'string', Rule::unique(Post::class)->ignore(request()->postId, 'post_id')];
        }
        
        return [
           // 'post_title' => ['required','max:150'], 
            'post_title' => ['required'],  //set to no limit 255 
            'post_slug' =>  $post_slug_validation,
            'post_content' => ['required'],
            'post_category' => ['required', 'max:50'],
            'post_excerpt' => ['max:255'],
            'post_status' => ['required']
        ];
    }

    public function validated($key = null, $default = null){
        //dd($this->post());
        $validated = parent::validated($key, $default);
        
        $user = $this->user();

        if($this->filepath){
            $feature_img_path = Str::of($this->filepath)->replace(url('/'), ''); //remove the "base_url" - localhost:8000, only the path of photo will be save on DB.
        }

        $removedCharacters = Str::of($this->post_slug)->replaceMatches('/[.,"=<>%!&:;*+?^${}()|[\]]++/', ''); //remove characters in the string
        $post_slug = Str::of($removedCharacters)->replaceMatches('!\s+!', ' ')->replace(' ', '-')->lower(); //first replaceMatches is to remove double space, second is to replace all space with "-"
        $finalPostSlug = Str::of($post_slug)->replaceEnd('-', '');

        //if method is not patch(create post), there is post_author_id and post_author_name field.
        //else patch(update post), then post_author_id and post_author_name field are removed.
        $merge_validated_arr = $this->_method !== 'patch' ? 
        //if create post array
        array_merge($validated, [
            'post_title' => $this->post_title,
            'post_slug' => $finalPostSlug->value,
            'post_content' => $this->post_content,
            'post_author_id' => $user->id,
            'post_author_name' => $user->name,
            'post_excerpt' => $this->post_excerpt ? $this->post_excerpt : NULL,
            'post_category' => $this->post_category,
            'post_tags' => '',
            'post_status' => $this->post_status,
            'post_option' => $this->post_show_posttitle,
            'post_feature_image' => $this->filepath ? $feature_img_path->value : NULL,
            'post_type' => 'post'
        ]) : 
        //if update post array
        array_merge($validated, [
            'post_title' => $this->post_title,
            'post_slug' => $finalPostSlug->value,
            'post_content' => $this->post_content,
            'post_excerpt' => $this->post_excerpt ? $this->post_excerpt : NULL,
            'post_category' => $this->post_category,
            'post_tags' => '',
            'post_status' => $this->post_status,
            'post_option' => $this->post_show_posttitle,
            'post_feature_image' => $this->filepath ? $feature_img_path->value : NULL,
            'post_type' => 'post'
        ]); 

        return $merge_validated_arr;
        // return array_merge($validated, [
        //     'post_title' => $this->post_title,
        //     'post_slug' => $finalPostSlug->value,
        //     'post_content' => $this->post_content,
        //     ($this->_method !== 'patch' ? "post_author_id" : "") => ($this->_method !== 'patch' ? $user->id : ""),
        //     ($this->_method !== 'patch' ? "post_author_name" : "") => ($this->_method !== 'patch' ? $user->name : ""),
        //     //'post_author_id' => $user->id,
        //     //'post_author_name' => $user->name,
        //     //'post_author_id' => !request()->postId { $this->post_author_id },
        //     //'post_author_name' => $this->post_author_name,
        //     'post_excerpt' => $this->post_excerpt ? $this->post_excerpt : NULL,
        //     'post_category' => $this->post_category,
        //     'post_tags' => '',
        //     // 'post_template' => $this->post_template,
        //     'post_status' => $this->post_status,
        //     'post_option' => $this->post_show_posttitle,
        //     'post_feature_image' => $this->filepath ? $feature_img_path : NULL,
        //     'post_type' => 'post'
        // ]);
    }
}
