<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePageRequest extends FormRequest
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
        return [
            'post_title' => 'required|max:255',
            'post_slug' => 'required|unique:post,post_slug|max:255',
            'post_content' => 'required',
        ];
    }

    public function validated($key = null, $default = null){
        $validated = parent::validated($key, $default);
       
        $user = $this->user();
       // dd($validated);

        return array_merge($validated, [
            'post_title' => $this->post_title,
            'post_slug' => $this->post_slug,
            'post_content' => $this->post_content,
            'post_author_id' => $user->id,
            'post_author_name' => $user->name,
            'post_excerpt' => 'excerpt',
            'post_category' => 'page',
            'post_tags' => '',
        ]);
    }
}
