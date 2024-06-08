<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

Use App\Http\Requests\StorePageRequest;

use Illuminate\Support\Facades\Auth;

use App\Models\Page;


class PageController extends Controller
{
    public function index(){
        $pages = Page::orderByDesc('created_at')
        ->paginate(10);

        return view('admin.page.index', ['pages' => $pages]); 
    }

    public function createPageForm(){
        return view('admin.page.add-page-form'); 
    }

    public function createPage(StorePageRequest $request){
        if (Auth::check()) {
            $membershipApp = Page::create($request->validated());
            
            return redirect(route('page.index')); 
        }
    }

    public function editPage($pageId){
        $pageInfo = Page::findOrFail($pageId);
        //dd($page);

        return view('admin.page.add-page-form', ['pageInfo' => $pageInfo]); 
    }

    public function BOD(){
        //return view('pages.bod');
    }

    public function viewPage($pageName){
        if($pageName){
            $pageInfo = Page::where('post_slug', $pageName)->firstOrFail();
        
            return  view('pages.template-view-page', ['pageInfo' => $pageInfo]);
            //return  view('pages.template-view-page', ['pageInfo' => $pageInfo]);
           // return View::make('pages.template-view-page', array('pageInfo' => $pageInfo));
        }
    }
}