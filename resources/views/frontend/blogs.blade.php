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
    <form action="#" class="findFormBlock findFormBlock2 bgLightDark hasShadowTop offsetHeaderTop">
        <div class="container">
            <div class="row align-center d-flex">
                <div class="col-xs-12 col-sm-5 col-md-4 col-lg-5">
                    <div class="form-group">
                        <input type="text" class="form-control elemenBlock noBdr sizeMedium"
                            placeholder="Enter address e.g. street, city and state or zip">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-2">
                    <div class="form-group">
                        <i class="fi flaticon-target icnInput"></i>
                        <input type="text" class="form-control elemenBlock noBdr sizeMedium" placeholder="All Cities">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-2">
                    <div class="form-group">
                        <select data-placeholder="All Areas" class="chosen-select noBdr sizeMedium">
                            <option value="1">All Areas</option>
                            <option value="2">All Areas</option>
                            <option value="2">All Areas</option>
                            <option value="2">All Areas</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3">
                    <div class="btnsWrap">
                        <!-- otherFeaturesOpener -->
                        <a class="btnPlus otherFeaturesOpener text-capitalize noTopBottom" role="button"
                            data-toggle="collapse" href="#otherFeaturescollapse" aria-expanded="false"
                            aria-controls="otherFeaturescollapse">
                            <i class="fas btnIcn fa-plus-circle text-info opener"></i>
                            <i class="fas fa-minus-circle closer btnIcn text-info"></i>
                            Advanced
                        </a>
                        <a href="{{route('home_for_sale')}}" type="button"
                            class="btn  buttonSmall text-uppercase fontNeuron hidden-xs"
                            style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">SEARCH</a>
                    </div>
                </div>
            </div>
            <!-- orderRow -->
            <div class="row">
                <div class="col-xs-12">
                    <!-- otherFeaturesCollapse -->
                    <div class="collapse otherFeaturesCollapse" id="otherFeaturescollapse">
                        <!-- checkList -->
                        <ul class="list-unstyled checkList text-primary">
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Air conditioning</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Cofee pot</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Fan</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Hi-fi</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Balcony</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Computer</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Fridge</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Internet</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Bedding</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Cot</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Grill</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Iron</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Cable TV</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Dishwasher</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Hairdryer</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Juicer</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Cleaning after exit</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">DVD</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Heating</span>
                                </label>
                            </li>
                            <li>
                                <label class="fwNormal customLabelCheck">
                                    <input type="checkbox" class="customFormInputReset">
                                    <span class="fakeCheckbox"></span>
                                    <span class="fakeLabel">Lift</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
                    <button type="button" class="btn btnDark text-uppercase fontNeuron">SEARCH</button>
                </div>
            </div>
        </div>
    </form>
    <!-- twoColumns -->
    <section class="twoColumns container">
        <!-- contentFiltersHeadingWrap -->
        <header class="contentFiltersHeadingWrap row">
            <div class="col-xs-12 col-sm-10">
                <h1 class="fontNeuron">Blog</h1>
            </div>
        </header>
        <div class="row">
            <div class="col-xs-12 col-md-4 col-md-push-8">
                <!-- sidebar -->
                <aside id="sidebar">
                    <!-- widgetCalc -->
                    <section class="widget widgetPadding widgetCalc bgWhite">
                        <!-- widgetCalcForm -->
                        <form action="#" class="widgetSearchForm">
                            <div class="form-group">
                                <input type="text" class="form-control elemenBlock" placeholder="Search">
                                <a href="{{route('home_for_sale')}}" type="submit"
                                    class="elemenBlock btn btnSecondary fontNeuron text-uppercase bdr-none"><i
                                        class="fi flaticon-search"></i></a>
                            </div>
                        </form>
                    </section>
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
                    @foreach ($blogs as $row)
                    <div class="col-xs-12 col-sm-6">
                        <!-- newsPostColumn -->
                        <article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
                            <div class="aligncenter">
                                <a href="{{route('single_blog',['id' => $row->id])}}">
                                    <img src="{{asset($row->image)}}" style="height: 230px" alt="image description">
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
                    {{-- <div class="col-xs-12 col-sm-6">
										<!-- newsPostColumn -->
										<article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
											<div class="aligncenter">
												<a href="{{route('single_blog')}}">
                    <img src="{{asset('frontend/images/home0.jpg')}}" style="height: 233px" alt="image description">
                    </a>
                </div>
                <h2 class="fontNeuron"><a href="{{route('single_blog')}}">Getting Started Designing Apps for the Apple
                        Watch</a></h2>
                <p>
                    <a href="{{route('home_for_sale')}}" class="btn btnSmall "
                        style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">Ali
                        Tufan</a>
                    <time datetime="2011-01-12">February 9, 2017</time>
                    <a href="#" class="commentsCount">12 comment</a>
                </p>
                <p>Integer mattis magna volutpat euismod habitant mi faucibus elementum proin mi, lobortis iaculis dolor
                    torquent...</p>
                <footer class="PostColumnFoot">
                    <a href="{{route('single_blog')}}" class="elemenBlock readMore text-capitalize">Read Article <i
                            class="fi flaticon-arrows readMoreIcn"></i></a>
                </footer>
                </article>
            </div>
            <div class="col-xs-12 col-sm-6">
                <!-- newsPostColumn -->
                <article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
                    <div class="aligncenter">
                        <a href="{{route('single_blog')}}">
                            <img src="{{asset('frontend/images/home01.jpeg')}}" alt="image description">
                        </a>
                    </div>
                    <h2 class="fontNeuron"><a href="{{route('single_blog')}}">Take Away You Can Get From</a></h2>
                    <p>
                        <a href="{{route('home_for_sale')}}" class="btn btnSmall"
                            style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">Ali
                            Tufan</a>
                        <time datetime="2011-01-12">February 9, 2017</time>
                        <a href="#" class="commentsCount">12 comment</a>
                    </p>
                    <p>Integer mattis magna volutpat euismod habitant mi faucibus elementum proin mi, lobortis iaculis
                        dolor torquent...</p>
                    <footer class="PostColumnFoot">
                        <a href="{{route('single_blog')}}" class="elemenBlock readMore text-capitalize">Read Article <i
                                class="fi flaticon-arrows readMoreIcn"></i></a>
                    </footer>
                </article>
            </div>
            <div class="col-xs-12 col-sm-6">
                <!-- newsPostColumn -->
                <article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
                    <div class="aligncenter">
                        <a href="{{route('single_blog')}}">
                            <img src="{{asset('frontend/images/2.jpg')}}" style="height: 236px" alt="image description">
                        </a>
                    </div>
                    <h2 class="fontNeuron"><a href="{{route('single_blog')}}">One Thing That Is Really Make This Blog
                            ...</a></h2>
                    <p>
                        <a href="{{route('home_for_sale')}}" class="btn btnSmall"
                            style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">Ali
                            Tufan</a>
                        <time datetime="2011-01-12">February 9, 2017</time>
                        <a href="#" class="commentsCount">12 comment</a>
                    </p>
                    <p>Integer mattis magna volutpat euismod habitant mi faucibus elementum proin mi, lobortis iaculis
                        dolor torquent...</p>
                    <footer class="PostColumnFoot">
                        <a href="{{route('single_blog')}}" class="elemenBlock readMore text-capitalize">Read Article <i
                                class="fi flaticon-arrows readMoreIcn"></i></a>
                    </footer>
                </article>
            </div>
            <div class="col-xs-12 col-sm-6">
                <!-- newsPostColumn -->
                <article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
                    <div class="aligncenter">
                        <a href="{{route('single_blog')}}">
                            <img src="{{asset('frontend/images/4.jpg')}}" alt="image description">
                        </a>
                    </div>
                    <h2 class="fontNeuron"><a href="{{route('single_blog')}}">This Week I Thought It Would Be Good
                            ...</a></h2>
                    <p>
                        <a href="{{route('home_for_sale')}}" class="btn btnSmall"
                            style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">Ali
                            Tufan</a>
                        <time datetime="2011-01-12">February 9, 2017</time>
                        <a href="#" class="commentsCount">12 comment</a>
                    </p>
                    <p>Integer mattis magna volutpat euismod habitant mi faucibus elementum proin mi, lobortis iaculis
                        dolor torquent...</p>
                    <footer class="PostColumnFoot">
                        <a href="{{route('single_blog')}}" class="elemenBlock readMore text-capitalize">Read Article <i
                                class="fi flaticon-arrows readMoreIcn"></i></a>
                    </footer>
                </article>
            </div>
            <div class="col-xs-12 col-sm-6">
                <!-- newsPostColumn -->
                <article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
                    <div class="aligncenter">
                        <a href="{{route('single_blog')}}">
                            <img src="{{asset('frontend/images/5.jpg')}}" alt="image description">
                        </a>
                    </div>
                    <h2 class="fontNeuron"><a href="{{route('single_blog')}}">The Leader In Real Estate Information
                            Systems</a></h2>
                    <p>
                        <a href="{{route('home_for_sale')}}" class="btn btnSmall"
                            style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">Ali
                            Tufan</a>
                        <time datetime="2011-01-12">February 9, 2017</time>
                        <a href="#" class="commentsCount">12 comment</a>
                    </p>
                    <p>Integer mattis magna volutpat euismod habitant mi faucibus elementum proin mi, lobortis iaculis
                        dolor torquent...</p>
                    <footer class="PostColumnFoot">
                        <a href="{{route('single_blog')}}" class="elemenBlock readMore text-capitalize">Read Article <i
                                class="fi flaticon-arrows readMoreIcn"></i></a>
                    </footer>
                </article>
            </div>
            <div class="col-xs-12 col-sm-6">
                <!-- newsPostColumn -->
                <article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
                    <div class="aligncenter">
                        <a href="{{route('single_blog')}}">
                            <img src="{{asset('frontend/images/p2.jpg')}}" alt="image description">
                        </a>
                    </div>
                    <h2 class="fontNeuron"><a href="{{route('single_blog')}}">How to design a minimal but productive
                            home office</a></h2>
                    <p>
                        <a href="{{route('home_for_sale')}}" class="btn btnSmall"
                            style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">Ali
                            Tufan</a>
                        <time datetime="2011-01-12">February 9, 2017</time>
                        <a href="#" class="commentsCount">12 comment</a>
                    </p>
                    <p>Integer mattis magna volutpat euismod habitant mi faucibus elementum proin mi, lobortis iaculis
                        dolor torquent...</p>
                    <footer class="PostColumnFoot">
                        <a href="{{route('single_blog')}}" class="elemenBlock readMore text-capitalize">Read Article <i
                                class="fi flaticon-arrows readMoreIcn"></i></a>
                    </footer>
                </article>
            </div>
            <div class="col-xs-12 col-sm-6">
                <!-- newsPostColumn -->
                <article class="newsPostColumn newsPostColumn2 bgWhite bdr-none mb-30">
                    <div class="aligncenter">
                        <a href="{{route('single_blog')}}">
                            <img src="{{asset('frontend/images/p1.jpg')}}" style="height: 230px"
                                alt="image description">
                        </a>
                    </div>
                    <h2 class="fontNeuron"><a href="{{route('single_blog')}}">6 Tips to help you sell your house</a>
                    </h2>
                    <p>
                        <a href="{{route('home_for_sale')}}" class="btn btnSmall"
                            style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white">Ali
                            Tufan</a>
                        <time datetime="2011-01-12">February 9, 2017</time>
                        <a href="#" class="commentsCount">12 comment</a>
                    </p>
                    <p>Integer mattis magna volutpat euismod habitant mi faucibus elementum proin mi, lobortis iaculis
                        dolor torquent...</p>
                    <footer class="PostColumnFoot">
                        <a href="{{route('single_blog')}}" class="elemenBlock readMore text-capitalize">Read Article <i
                                class="fi flaticon-arrows readMoreIcn"></i></a>
                    </footer>
                </article>
            </div> --}}
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
