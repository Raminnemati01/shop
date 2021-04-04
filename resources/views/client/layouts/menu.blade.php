<div class="header section">

  <div class="bg-black d-none d-lg-block sticky-nav">
      <div class="container position-relative">
          <div class="row">
              <div class="col-md-12 align-self-center">
                  <div class="main-menu">
                      <ul>
                          <li class="dropdown"><a href="#">Home <i class="ion-ios-arrow-down"></i></a>
                              <ul class="sub-menu">
                                  <li><a href="index.html">Home 1</a></li>
                                  <li><a href="index-2.html">Home 2</a></li>
                              </ul>
                          </li>
                          <li><a href="about.html">About us</a></li>

                          <li class="dropdown position-static"><a href="#">دسته بندی محصولات <i
                                      class="ion-ios-arrow-down"></i></a>

                              <ul class="mega-menu d-block">
                                  <li class="d-flex">
                                        @foreach($categories as $category)
                                        @if($category->children->count()>0)
                                      <ul class="d-block">
                                          <li class="title"><a href="#">{{$category->title}}</a></li>

                                          @foreach($category->children as $childcategory)
                                          <li><a href="shop-3-column.html">{{$childcategory->title}}</a></li>
                                          @endforeach


                                      </ul>
                                          @endif
                                            @endforeach

                                  </li>

                                  <li>

                                      <ul class="menu-banner w-100">
                                          <li>
                                              <a class="p-0" href="shop-left-sidebar.html"><img class="img-responsive w-100" src="/client/images/banner/3.jpg" alt=""></a>
                                          </li>
                                          <li>
                                              <a class="p-0" href="shop-left-sidebar.html"><img class="img-responsive w-100" src="/client/images/banner/4.jpg" alt=""></a>
                                          </li>
                                      </ul>
                                  </li>
                              </ul>


                          </li>

                          <li class="dropdown"><a href="#">Pages <i class="ion-ios-arrow-down"></i></a>
                              <ul class="sub-menu">
                                  <li><a href="404.html">404 Page</a></li>
                                  <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                  <li><a href="faq.html">Faq Page</a></li>
                                  <li><a href="coming-soon.html">Coming Soon Page</a></li>
                              </ul>
                          </li>
                          <li class="dropdown "><a href="#">Blog <i class="ion-ios-arrow-down"></i></a>
                              <ul class="sub-menu">
                                  <li class="dropdown position-static"><a href="blog-grid-left-sidebar.html">Blog Grid
                                      <i class="ion-ios-arrow-right"></i></a>
                                      <ul class="sub-menu sub-menu-2">
                                          <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                          <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                      </ul>
                                  </li>
                                  <li class="dropdown position-static"><a href="blog-list-left-sidebar.html">Blog List
                                      <i class="ion-ios-arrow-right"></i></a>
                                      <ul class="sub-menu sub-menu-2">
                                          <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                          <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                      </ul>
                                  </li>
                                  <li class="dropdown position-static"><a href="blog-single-left-sidebar.html">Single
                                      Blog <i class="ion-ios-arrow-right"></i></a>
                                      <ul class="sub-menu sub-menu-2">
                                          <li><a href="blog-single-left-sidebar.html">Single Blog Left Sidebar</a>
                                          </li>
                                          <li><a href="blog-single-right-sidebar.html">Single Blog Right Sidebar</a>
                                          </li>
                                      </ul>
                                  </li>
                              </ul>
                          </li>
                          <li><a href="contact.html">Contact us</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

</div>
