<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\models\Category;

use Illuminate\Http\Request;

use App\Http\Requests\NewCategoryRequest;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.Categories.index',[

        'categories'=>Category::all(),
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('admin.categories.create',[
      'categories'=>Category::all()
    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  NewCategoryRequest  $request
     * @return \Illuminate\Http\redirectResponse/\Illuminate\Routing\redirector
     */
    public function store(NewCategoryRequest $request)
    {
        Category::query()->create([
          'title'=>$request->get('title'),
          'category_id'=>$request->get('category_id')
        ]);
        return redirect(route('categories.index'));
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
    public function edit(Category $category)
    {
      return view('admin.Categories.edit',[
        'category'=>$category,
        'categories'=>Category::all()
      ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->update([
          'category_id'=>$request->get('category_id'),
          'title'=>$request->get('title')
        ]);
        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Category $category)
    {
         $category->delete();
          return redirect(route('categories.index'));

    }
}
