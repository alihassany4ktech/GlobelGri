@extends('layouts.frontend.app')
@section('content')
<style>
    .latestPostsBlock .btnHolder .btn {
        min-width: 239px;
    }

    .latestPostsBlock .holder .btn {
        min-width: 60px;
        /* height: 1vh; */
    }

    .mo .col {
        width: 600px;
    }

</style>
<main>
      
    <section class="bgWhite ourAgentBlock">
          <div class="container mt-5">
          <h1 class="fontNeuron blockH text-uppercase" style="margin-top:50px"><span class="bdrBottom">SUB</span> <span
                    class="textSecondary">SCRIPTIONS</span> <br><small style="color:deepskyblue;font-size:16px">Subscription Required To Access Dashboard.So First Purchase Subscription</small></h1>
                    
      </div>
        <div class="container">
            
            <div class="row">
                <?php
            $subscriptions = App\Subscription::Where('agent_role','=',Auth::user()->role)->get();
            ?>
                <!-- subscriptionSlider -->
                @if ($subscriptions->isEmpty())
                <div class="container mt-5">
                         <p>Not Foud</p>
                    
                    </div>
                    
                @else
                    <div class="four-slider slickSlider profilesSlider">
                    @foreach ($subscriptions as $row)
                    <div>
                        <div class="col-xs-12 col-sm-2 col-md-4"
                            style="margin-left:10px;background-color: #dcf2f7;width:95%;">
                            <h3 class="fontNeuron fwBold text-capitalize" style="text-align: center;margin-top:20px">
                                {{$row->title}}</h3>
                            <p style="text-align: center">{!!$row->description!!}</p>

                            <div class="row text-center" style="margin-bottom: 10px">
                                <span class="textSecondary">Price:</span> ${{$row->price}} | <span
                                    class="textSecondary">Valid Property:</span> {{$row->valid_property}}
                            </div>
                            <div class="text-center">
                        <a type="button" href="{{url('/subscription/purchase/'.$row->id)}}" class="status fontNeuron btn center" style="border:none ;background: #f1c967;  background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967); background: linear-gradient(to right, #bd7f0a, #f1c967);margin-top:10px; margin-bottom:15px;color:white">Purchase</a>

                            </div>
                        </div>
                        
                    </div>
                    @endforeach

                </div>
                @endif
            </div>
        </div>
    </section>
  
</main>
@endsection
