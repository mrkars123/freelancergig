<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use App\Category;
use Illuminate\Support\Facades\Validator;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id','ASC')->get();
        return view('admin.category.index',compact('categories'));
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
        $validator = Validator::make($request->all(), [
            'cat_name' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'status' => 401,
                'errors' => $validator->messages(),
            ]);
        }
        else{
            $category = new Category();
            $category->cat_name = $request->input('cat_name');
            $category->slug = $this->slug_generator($request->slug);
            $category->save();
            return response()->json([
                'status' => 230,
                'messages' => 'Category Added Successfully'
            ]);
        }
    }
    public function slug_generator($string){
        $string = str_replace(' ', '-', $string);
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

        return strtolower(preg_replace('/-+/', '-', $string));
     }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);

        if ($category) {
            return response()->json([
                'status' => 200,
                'cat_name' => $category,
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'messages' => 'Category Not Found',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'cat_name' => 'required'
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        }
        else{
            $category = Category::find($id);
            if ($category) {

                $category->cat_name = $request->cat_name;
                $category->save();

                return response()->json([
                    'status' => 200,
                    'messages' => 'Category Updated Successfully',
                ]);
            }else{
                return response()->json([
                    'status' => 404,
                    'messages' => 'Category Not Found',
                ]);
            }
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return response()->json([
            'status' => 200,
            'messages' => 'User Deleted Successfully'
        ]);
    }
}
