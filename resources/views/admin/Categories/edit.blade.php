@extends('admin.layouts.master')

@section('content')


<div class="main-content d-flex justify-content-center align-items-center">


    <div class="container-fluid">


        <div class="row">


            <div class="col-lg-12">

              <div class="form-element base-control mb-30">
                            <h4 class="font-20 mb-4">ایجاد دسته بندی جدید</h4>

                            <!-- Form -->
                            <form action="{{route('categories.update', $category)}}" method="POST">

                              @csrf
                              @method('PATCH')

                                                              <!-- Form Group -->
                                                              <div class="form-group mb-4">
                                                                  <label for="exampleSelect1" class="mb-2 bold d-block">دسته ی والد</label>
                                                                  <div class="custom-select style--two">
                                                                      <select name="category_id" class="theme-input-style" id="exampleSelect1">
                                                                          <option disabled selected>دسته ی والد را انتخاب کنید</option>


                                                                          @foreach($categories as $parent)


                                                                          <option
                                                                             @if($parent->id==$category->category_id)
                                                                                selected
                                                                                @endif
                                                                         value="{{$parent->id}}">{{$parent->title}}</option>

                                                                          @endforeach


                                                                      </select>
                                                                  </div>
                                                              </div>
                                                              <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="form-group mb-4">
                                    <label for="email1" class="mb-2 bold">عنوان</label>
                                    <input type="text" name="title" class="theme-input-style" id="email1" value="{{$category->title}}" ">
                                </div>
                                <!-- End Form Group -->


                                <!-- Button Group -->
                                <div class="button-group pt-1">
                                     <input type="submit" class="btn long" value="ثبت تغییرات">
                                    <button type="reset" class="link-btn bg-transparent mr-3 soft-pink">لغو</button>
                                </div>
                                <!-- End Button Group -->
                            </form>
                            <!-- End Form -->
                        </div>



    </div>



  </div>

</div>

</div>
@endsection
