<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Response;
use App\Category;
use App\SubCategory;
use Illuminate\Support\Facades\Validator;
class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $categories = Category::where('status', 1)->orderBy('id','ASC')->get();
        $subcategories = SubCategory::all();
        return view('admin.subcategory.index',compact('categories','subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $validator = \Validator::make($request->all(), [
            'sub_cat' => 'required',
            'cat_id' => 'required',
        ]);
        
        if (!$validator->passes()) {
            return response()->json([
                'status' => 401,
                'errors' => $validator->messages(),
            ]);
        }
        else{
            $category = new SubCategory();
            $category->cat_id = $request->cat_id;
            $category->sub_cat = $request->sub_cat;
            $category->save();
            return response()->json([
                'status' => 230,
                'messages' => 'Category Added Successfully',
                'error' => $validator->errors()->toArray()
            ]);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subcategor, $id)
    {
        $categories = Category::where('status', 1)->get();
        $subcategory = SubCategory::find($id);
        return view('admin.subcategory.edit')
            ->with('subcategory',$subcategory)
            ->with('categories',$categories)
        ;
    }

    /**

    $categories = Category::where('status', 1)->get();
    $subcate = SubCategory::find($id);
    return view('admin.subcategory.edit',compact('subcategory','categories','subcate'));


     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $subcategory = SubCategory::find($id);
        $subcategory->cat_id = $request->input('cat_id');
        $subcategory->sub_cat = $request->input('sub_cat');
        $subcategory->update();

        return redirect('admin/subcategory')->with('status', 'SubCategory Saved Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = SubCategory::find($id);
        $subcategory->delete();
        return response()->json([
            'status' => 200,
            'messages' => 'User Deleted Successfully'
        ]);
    }
}