@extends('layouts.frontend.app')
@section('content')
<!-- main -->
<main>
    <!-- findFormBlock -->
        <div class="container">
          
        </div>
    
    <!-- twoColumns -->
    <section class="twoColumns container">
        <!-- contentFiltersHeadingWrap -->
        <header class="contentFiltersHeadingWrap row">
            <div class="col-xs-12 col-sm-10">

                <h1 class="fontNeuron">Blog</h1>
            </div>
        </header>
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <!-- content -->
                <div id="content">
                    <div class="post-detail">
                        <!-- newsPostColumn -->
                        <article class="accountData newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
                            <div class="aligncenter">
                           
                                     @if ($blog->image == 0)
                                         <img src="{{asset('dist/img/photo1.png')}}" style="height: 400px" alt="image">
                                    @else
                                              <img src="{{asset($blog->image)}}" style="height:400px"
                                    alt="image description">
                                    @endif
                            </div>
                            <h2 class="fontNeuron">{{$blog->title}}</h2>
                               <strong>Date:</strong> <time datetime="2011-01-12">{{$blog->created_at->format('d-m-y')}}</time>
                            <p>{!!$blog->description!!}</p>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <!-- sidebar -->
                <aside id="sidebar">
                    <!-- widgetCalc -->
                    {{-- <section class="widget widgetPadding widgetCalc bgWhite">
                        <!-- widgetCalcForm -->
                        <form action="#" class="widgetSearchForm">
                            <div class="form-group">
                                <input type="text" class="form-control elemenBlock" placeholder="Search">
                                <button type="submit"
                                    class="elemenBlock btn btnSecondary fontNeuron text-uppercase bdr-none"><i
                                        class="fi flaticon-search"></i></button>
                            </div>
                        </form>
                    </section> --}}
                    <section class="widget widgetPadding widgetCalc bgWhite">
                        <h3 class="fontNeuron fwBold text-capitalize">Categories</h3>
                        <ul class="list-unstyled widgetCategoryList">
                            <li><a href="#">2016 Trend</a></li>
                            <li><a href="#">Creative Design</a></li>
                            <li><a href="#">Home Decor</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Modern Style</a></li>
                        </ul>
                    </section>
                    <!-- widgetRecentPosts -->
                    <section class="widget widgetPadding widgetRecentPosts bgWhite">
                        <h3 class="fontNeuron fwBold text-capitalize">Recent Post</h3>
                        <!-- widgetRecentPostsList -->
                        <ul class="list-unstyled widgetRecentPostsList padlReset">
                            <li>
                                <div class="alignleft">
                                    <a href="#"><img src="{{asset('frontend/images/p1.jpg')}}"
                                            style="height:80;width:110px" alt="image description"></a>
                                </div>
                                <div class="descrWrap">
                                    <h4 class="fontNeuron fwBold"><a href="#">Villa on Hollywood</a></h4>
                                    <p>February 9, 2017</p>
                                </div>
                            </li>
                            <li>
                                <div class="alignleft">
                                    <a href="#"><img src="{{asset('frontend/images/home01.jpeg')}}"
                                            style="height:80;width:110px" alt="image description"></a>
                                </div>
                                <div class="descrWrap">
                                    <h4 class="fontNeuron fwBold"><a href="#">4 Bedroom New House</a></h4>
                                    <p>February 9, 2017</p>
                                </div>
                            </li>
                            <li>
                                <div class="alignleft">
                                    <a href="#"><img src="{{asset('frontend/images/4.jpg')}}"
                                            style="height:80;width:110px" alt="image description"></a>
                                </div>
                                <div class="descrWrap">
                                    <h4 class="fontNeuron fwBold"><a href="#">Eagle Apartments</a></h4>
                                    <p>February 9, 2017</p>
                                </div>
                            </li>
                        </ul>
                    </section>
                    <section class="widget widgetPadding widgetCalc bgWhite">
                        <h3 class="fontNeuron fwBold text-capitalize">Our Photos</h3>
                        <ul class="list-unstyled widgetInstaList">
                            <li><a href="#"><img src="{{asset('frontend/images/p1.jpg')}}"
                                        style="width: 90px;  height:70px" class="img-responsive"
                                        alt="image description"></a></li>
                            <li><a href="#"><img src="{{asset('frontend/images/p2.jpg')}}"
                                        style="width: 90px;  height:70px" class="img-responsive"
                                        alt="image description"></a></li>
                            <li><a href="#"><img src="{{asset('frontend/images/p3.jpg')}}"
                                        style="width: 90px;  height:70px" class="img-responsive"
                                        alt="image description"></a></li>
                            <li><a href="#"><img src="{{asset('frontend/images/p4.jpg')}}"
                                        style="width: 90px;  height:70px " class="img-responsive"
                                        alt="image description"></a></li>
                            <li><a href="#"><img src="{{asset('frontend/images/p5.jpg')}}"
                                        style="width: 90px;  height:70px" class="img-responsive"
                                        alt="image description"></a></li>
                            <li><a href="#"><img src="{{asset('frontend/images/home0.jpg')}}"
                                        style="width: 90px;  height:70px" class="img-responsive"
                                        alt="image description"></a></li>
                        </ul>
                    </section>
                </aside>
            </div>
        </div>
    </section>

</main>
@endsection
