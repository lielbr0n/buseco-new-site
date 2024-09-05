<?php

namespace App\Http\Requests;

use App\Models\Page;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;


class PageRequest extends FormRequest
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
    
        $post_slug_validation = ['required', 'unique:post,post_slug', 'max:255']; //validation if create(insert data), no pageId

        //validation if update, there is pageId
        if(request()->pageId){
            //if the post_slug field is not modified, then it will ignore this validation
            $post_slug_validation = ['required', 'max:255', 'lowercase', 'string', Rule::unique(Page::class)->ignore(request()->pageId, 'post_id')];
        }
        
        return [
            'post_title' => ['required','max:255'], 
            'post_slug' =>  $post_slug_validation,
            'post_content' => ['required'],
            'post_category' => ['required'],
            'post_template' => ['required'],
            'post_status' => ['required']
        ];
    }

    public function validated($key = null, $default = null){
        $validated = parent::validated($key, $default);
        
        $user = $this->user();

        $removedCharacters = Str::of($this->post_slug)->replaceMatches('/[.,"=<>%!&:;*+?^${}()|[\]]++/', ''); //remove characters in the string
        $post_slug = Str::of($removedCharacters)->replaceMatches('!\s+!', ' ')->replace(' ', '-')->lower(); //first replaceMatches is to remove double space, second is to replace all space with "-"
        $finalPostSlug = Str::of($post_slug)->replaceEnd('-', '');

        return array_merge($validated, [
            'post_title' => $this->post_title,
            'post_slug' => $finalPostSlug,
            'post_content' => $this->post_content,
            'post_author_id' => $user->id,
            'post_author_name' => $user->name,
            'post_category' => $this->post_category,
            'post_tags' => '',
            'post_template' => $this->post_template,
            'post_status' => $this->post_status,
            'post_option' => $this->post_show_pagetitle,
            'post_type' => 'page'
        ]);
    }
}
