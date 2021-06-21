@extends('layouts.frontend.app')

@section('content')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> --}}

<style>
    .pagination > li > a:hover, .pagination > li > a:focus, .pagination > li > span:hover, .pagination > li > span:focus {
    z-index: 2;
    color: #fff;
    border:1px solid #f1c967 ;
    background-color: #f1c967;background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967);background: linear-gradient(to right, #bd7f0a, #f1c967); color:white;
    /* border-color: #13293d; */
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
                        <button type="button"
                            class="btn  buttonSmall text-uppercase fontNeuron hidden-xs" style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967); color:white;">SEARCH</button>
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
                    <button type="button" class="btn  text-uppercase fontNeuron" style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967);color:white;">SEARCH</button>
                </div>
            </div>
        </div>
    </form>
    <!-- content -->
    <section id="content" class="container pabIndent">
        <!-- contentFiltersHeadingWrap -->
        <header class="contentFiltersHeadingWrap row">
            <div class="col-xs-12 col-sm-10">
                <h1 class="fontNeuron">Profile</h1>

            </div>
 
        </header>
 
        <!-- userProfile -->
        <div class="userProfile">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-lg-3">
                    <!-- profileSidebar -->
                    <aside class="profileSidebar">
                        <header class="head">
                            <div class="imgProfile">
                                @if(Auth::user()->image)
                                <img src="{{asset(Auth::user()->image)}}" alt="" width="74" height="74">
                                @else 
                                <img src="https://via.placeholder.com/74x74" alt="" width="74" height="74">
                                @endif
                            </div>
                            <div class="info">
                                <span class="text">{{Auth::user()->name}}</span>
                            </div>
                        </header>
                        <ul class="navUser list-unstyled">
                            <li>
                                <a href="#">
                                    <i class="far fa-user"></i>
                                    <span>Account Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('agent.property')}}">
                                    <i class="fi flaticon-house"></i>
                                    <span>My Properties</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('agent.favourite.property')}}">
                                    <i class="far fa-heart"></i>
                                    <span>Favorited Properties</span>
                                </a>
                            </li>
                          
                           
                                <li>
                                <a href="{{route('property.create')}}">
                                    <i class="fa fa-plus"></i>
                                    <span>Saved Property</span>
                                </a>
                            </li>
                              <li>
                                <a href="{{route('agent.contact')}}">
                                    <i class="fa fa-address-book" aria-hidden="true"></i>
                                    <span>Contacts</span>
                                </a>
                            </li>
                         
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out-alt"></i>
                                    <span>Logout</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </aside>
                </div>
                </form>
                  <div class="col-xs-12 col-sm-8 col-lg-9">
                            <!-- accountData -->
                            <div class="accountData">
                              <div class="head">
                                <h4 class="fontNeuron">My Properties</h4>
                                @if(session()->has('delete_property'))
                                    <div class="alert alert-success" style="float: right">
                                        {{ session()->get('delete_property') }}
                                    </div>
                                @endif
                              </div>
  
                              <!-- propertiesList -->
                              <div class="propertiesList">
                                    @foreach ($data as $row)
                                        <article class="propertyRow">
                                  <div class="info">
                                    <div class="imgThumbnail">
                                      <a href="{{route('agent.single_property',['id' => $row->id])}}"><img src="{{asset($row->featured_photo)}}" style="height: 85px; width:110px" alt="Featured Image"></a>
                                    </div>
                                    <div class="textBox">
                                      <h4 class="fontNeuron"><a href="{{route('agent.single_property',['id' => $row->id])}}">{{$row->propert_title}}</a></h4>
                                      <address><i class="fi flaticon-pin-1"></i>{{$row->address}}</address>
                                      <div class="priceArea">
                                        <span class="price fontNeuron">${{$row->price}}</span>
                                        <time class="date" datetime="2017-02-27">{{$row->created_at->format('Y-m-d')}}</time>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="btnArea">
                                    <span class="status fontNeuron" style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967);">{{$row->property_type}}</span>
                                    <ul class="links list-unstyled">
                                      <li><a href="{{route('agent.single_property',['id' => $row->id])}}"><i class="fa fa-eye"></i>View</a></li>
                                      <li><a href="{{route('agent.edit_property',['id' => $row->id])}}"><i class="fa fa-edit"></i>Edit</a></li>
                                      <li><a href="{{route('agent.delete_property',['id' => $row->id])}}" class="delete"><i class="far fa-window-close"></i></a></li>
                                    </ul>
                                  </div>
                                </article>
                                    @endforeach
                                
                                <span id="result"></span>
                              </div>
                            </div>
                            <!-- pagination -->
                            {{ $data->links() }}
                          </div>
            </div>
        </div>
        </div>
        </div>
    </section>
</main>


@endsection
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{{-- @if(Session::has('delete_property'))
<script>
    toastr.success("{!!Session::get('delete_property')!!}");
    $('#result').html('<div class="alert alert-success">' "{!!Session::get('delete_property')!!}"'</div>');
</script>
@endif --}}
{{-- <script>
    $(document).ready(function () {

        $('#agentform').on('submit', function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({

                url: '{{route("agent.profile.update")}}',
                method: 'post',
                processData: false,
                contentType: false,
                data: formData,
                beforeSend: function () {
                    $('#add').attr('disabled', 'disabled');
                },
                success: function (data) {
                    if (data.success) {
                        $('#result').html('<div class="alert alert-success">' + data
                            .success + '</div>');
                    } else {
                        $('#result').html('<div class="alert alert-danger">' + data.error +
                            '</div>');
                    }

                }
            });
        });

        // change password
         $('#changepassword').on('submit', function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({

                url: '{{route("agent.password.update")}}',
                method: 'post',
                processData: false,
                contentType: false,
                data: formData,
                beforeSend: function () {
                    $('#add').attr('disabled', 'disabled');
                },
                success: function (data) {
                    if (data.success) {
                        $('#result').html('<div class="alert alert-success">' + data
                            .success + '</div>');
                    } else {
                        $('#result').html('<div class="alert alert-danger">' + data.error +
                            '</div>');
                    }

                }
            });
        });

   // social media update
         $('#social_media_form').on('submit', function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({

                url: '{{route("agent.social_media.update")}}',
                method: 'post',
                processData: false,
                contentType: false,
                data: formData,
                beforeSend: function () {
                    $('#add').attr('disabled', 'disabled');
                },
                success: function (data) {
                    if (data.success) {
                        $('#result').html('<div class="alert alert-success">' + data
                            .success + '</div>');
                    } else {
                        $('#result').html('<div class="alert alert-danger">' + data.error +
                            '</div>');
                    }

                }
            });
        });

    });

</script>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#one')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

</script> --}}
