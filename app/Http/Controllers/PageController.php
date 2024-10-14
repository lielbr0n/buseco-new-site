<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;

Use App\Http\Requests\PageRequest;

use App\Models\Page;


class PageController extends Controller
{
    public function index(){
        $pages = Page::getPages();

        if(request()->search){
            $q = request()->input('search');
            
            /** Using laravel scout custom search */
            // $membersInfo = MembershipApplication::search($q)
            // ->paginate(10)
            // ->appends(['search' => $q]);

            /** For now search uses eloquent and raw query */
            $searchString = "%" . str_replace(" ", "%", $q) . "%"; //replace space with % wildcard.
            $pages = Page::query()
            ->where(DB::raw('concat(post_title)'), 'LIKE', $searchString)
            ->where('post_type', 'page')
            ->paginate(10)
            ->appends(['search' => $q]); //to append in url, for pagination
        }

        return view('admin.page.index', ['pages' => $pages]); 
    }

    public function createPageForm(){
        return view('admin.page.add-page-form'); 
    }

    public function createPage(PageRequest $request){
        if (Auth::check()) {
            $page = Page::create($request->validated());
            
            if($page){
                return redirect(route('page.edit', ['pageId' => $page->post_id ]))->with('postMessage', 'Saved Successfully!'); 
            }
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

        return back()->with('postMessage', 'Updated Successfully!');
    }

    public function deletePage($pageId){
        //find the post
        $pageInfo = Page::find($pageId); 

        $pageInfo->delete();

        return redirect(route('page.index'))->with('postMessage', 'Deleted Successfully!'); 
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