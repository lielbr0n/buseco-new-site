<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

Use App\Http\Requests\PageRequest;

use Illuminate\Support\Facades\Auth;

use App\Models\Page;


class PageController extends Controller
{
    public function index(){
        $pages = Page::getPages();

        return view('admin.page.index', ['pages' => $pages]); 
    }

    public function createPageForm(){
        return view('admin.page.add-page-form'); 
    }

    public function createPage(PageRequest $request){
        if (Auth::check()) {
            $membershipApp = Page::create($request->validated());
            
            return redirect(route('page.index')); 
        }
    }

    public function editPage($pageId){
        $pageInfo = Page::findOrFail($pageId);

        return view('admin.page.add-page-form', ['pageInfo' => $pageInfo]); 
    }

    public function updatePage(PageRequest $request, $pageId){
        //find the post
        $pageInfo = Page::findOrFail($pageId); 

        //fill the Page Model Data from PageRequest
        $pageInfo->fill($request->validated()); 
        
        //save the updated data
        $pageInfo->save();

        return view('admin.page.add-page-form', ['pageInfo' => $pageInfo]); 
    }

    public function deletePage($pageId){
        //find the post
        $pageInfo = Page::find($pageId); 

        $pageInfo->delete();

        return redirect(route('page.index')); 
    }

    public function BOD(){
        //return view('pages.bod');
    }

    // public function viewPage($pageName){
    //     if($pageName){
    //         $pageInfo = Page::where('post_slug', $pageName)->firstOrFail();
        
    //         return  view('pages.template-view-page', ['pageInfo' => $pageInfo]);
    //     }
    // }
}