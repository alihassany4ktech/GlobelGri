@extends('layouts.frontend.app')
@section('content')
<style>
    .pagination>li>a:hover,
    .pagination>li>a:focus,
    .pagination>li>span:hover,
    .pagination>li>span:focus {
        z-index: 2;
        color: #fff;
        border: 1px solid #f1c967;
        background-color: #f1c967;
        background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967);
        background: linear-gradient(to right, #bd7f0a, #f1c967);
        color: white;
        /* border-color: #13293d; */
    }

    a:hover, a:focus {
    color: #bd7f0a;
    text-decoration: none;
}

</style>
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
                <h1 class="fontNeuron">Blogs</h1>
            </div>
        </header>
        <div class="row">
            <div class="col-xs-12 col-md-4 col-md-push-8">
                <!-- sidebar -->
                <aside id="sidebar">
                    <!-- widgetCalc -->
                    {{-- <section class="widget widgetPadding widgetCalc bgWhite">
                        <!-- widgetCalcForm -->
                        <form action="#" class="widgetSearchForm">
                            <div class="form-group">
                                <input type="text" class="form-control elemenBlock" placeholder="Search">
                                <a href="{{route('home_for_sale')}}" type="submit"
                                    class="elemenBlock btn btnSecondary fontNeuron text-uppercase bdr-none"><i
                                        class="fi flaticon-search"></i></a>
                            </div>
                        </form>
                    </section> --}}
                    {{-- <section class="widget widgetPadding widgetCalc bgWhite">
                        <h3 class="fontNeuron fwBold text-capitalize">Categories</h3>
                        <ul class="list-unstyled widgetCategoryList">
                            <li><a href="#">2016 Trend</a></li>
                            <li><a href="#">Creative Design</a></li>
                            <li><a href="#">Home Decor</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Modern Style</a></li>
                        </ul>
                    </section> --}}
                    <!-- widgetRecentPosts -->
                    <section class="widget widgetPadding widgetRecentPosts bgWhite">
                        <h3 class="fontNeuron fwBold text-capitalize">Recent Post</h3>
                        <!-- widgetRecentPostsList -->
                        <ul class="list-unstyled widgetRecentPostsList padlReset">
                            <li>
                                <div class="alignleft">
                                    <a href=""><img src="{{asset('frontend/images/3.jpg')}}"
                                            alt="image description"></a>
                                </div>
                                <div class="descrWrap">
                                    <h4 class="fontNeuron fwBold"><a href="#">Villa on
                                            Hollywood</a></h4>
                                    <p>February 9, 2017</p>
                                </div>
                            </li>
                            <li>
                                <div class="alignleft">
                                    <a href="#"><img src="{{asset('frontend/images/p1.jpg')}}"
                                            alt="image description"></a>
                                </div>
                                <div class="descrWrap">
                                    <h4 class="fontNeuron fwBold"><a href="#">4 Bedroom New
                                            House</a></h4>
                                    <p>February 9, 2017</p>
                                </div>
                            </li>
                            <li>
                                <div class="alignleft">
                                    <a href="#"><img src="{{asset('frontend/images/p2.jpg')}}"
                                            alt="image description"></a>
                                </div>
                                <div class="descrWrap">
                                    <h4 class="fontNeuron fwBold"><a href="#">Eagle
                                            Apartments</a></h4>
                                    <p>February 9, 2017</p>
                                </div>
                            </li>
                        </ul>
                    </section>
                    <section class="widget widgetPadding widgetCalc bgWhite">
                        <h3 class="fontNeuron fwBold text-capitalize">Our Photos</h3>
                        <ul class="list-unstyled widgetInstaList">
                            <li><a href="#"><img src="{{asset('frontend/images/3.jpg')}}"
                                        class="img-responsive" alt="image description"></a></li>
                            <li><a href="#"><img src="{{asset('frontend/images/p2.jpg')}}"
                                        class="img-responsive" alt="image description"></a></li>
                            <li><a href="#"><img src="{{asset('frontend/images/home01.jpeg')}}"
                                        class="img-responsive" alt="image description"></a></li>
                            <li><a href="#"><img src="{{asset('frontend/images/home01.jpeg')}}"
                                        class="img-responsive" alt="image description"></a></li>
                            <li><a href="#"><img src="{{asset('frontend/images/4.jpg')}}"
                                        class="img-responsive" alt="image description"></a></li>
                            <li><a href="#"><img src="{{asset('frontend/images/5.jpg')}}"
                                        class="img-responsive" alt="image description"></a></li>
                        </ul>
                    </section>
                </aside>
            </div>
            <div class="col-xs-12 col-md-8 col-md-pull-4">
                <!-- content -->
                <div id="content">
                   @if (isset($blogs))
                        @foreach ($blogs as $row)
                    <div class="col-xs-12 col-sm-6">
                        <!-- newsPostColumn -->
                        <article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
                            <div class="aligncenter">
                                <a href="{{route('single_blog',['id' => $row->id])}}">
                                    @if ($row->image == 0)
                                         <img src="{{asset('dist/img/photo1.png')}}" style="height: 230px" alt="image">
                                    @else
                                         <img src="{{asset($row->image)}}" style="height: 230px" alt="image">
                                    @endif
                                   
                                </a>
                            </div>
                            <h2 class="fontNeuron"><a href="{{route('single_blog',['id' => $row->id])}}">{{$row->title}}</a></h2>
				   <strong>Date:</strong> <time>{{$row->created_at->format('d-m-y')}}</time>
                        	<p>{!!$row->description!!}...</p>
                            <footer class="PostColumnFoot">
                                <a href="{{route('single_blog',['id' => $row->id])}}" class="elemenBlock readMore text-capitalize">Read
                                    Article <i class="fi flaticon-arrows readMoreIcn"></i></a>
                            </footer>
                        </article>
                    </div>

                    @endforeach
                    <small>Not Found</small>
                    @else 

                   @endif
            <div class="col-xs-12">
                <!-- navigation pagination -->
                <nav class="navigation pagination pagination1 fontNeuron" role="navigation">
                    <div class="nav-links">
                        {{$blogs->links()}}
                    </div>
                </nav>
            </div>
        </div>
        </div>
        </div>
    </section>
</main>
@endsection
