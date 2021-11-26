<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>globelgri</title>
</head>
<style>
    div {
        background-color: white;
        height: auto;
        margin-top: 100px;
        width: 65%;
        margin-left: auto;
        margin-right: auto;
        padding-bottom: 20px;

    }

    .name {
        text-align: center;
        padding-top: 20px;
    }

    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 150;
        height: 150px;
        border-radius: 100%;
    }

    .title {
        text-align: center;
        top: 10px;
    }

    .description {
        text-align: center;
        margin-left: 60px;
        margin-right: 60px;
    }

    .dbtn {
        border: none;
        font-size: 14px;
        background: #f1c967;
        background: -webkit-linear-gradient(to right, #bd7f0a, #f1c967);
        background: linear-gradient(to right, #bd7f0a, #f1c967);
        color: white;
        margin-top: 10px;
             width: 100px;
           text-decoration: none;
        padding: 10px;
        padding-left: 20px;
        padding-right: 20px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        border-radius: 20px;

    }

    .dbtn:hover {
        cursor: pointer;
    }
   .address{
          text-align: center;
          font-size: 14px;
    }
</style>

<body style="background-color: #edf2f7;">
    <div>
        <h2 class="name">{{$agent->name}}</h2>
        <p class="address">Email: {{$agent->email}} | Phone: {{$agent->phone}}</p>
        @if(Auth::user()->image)
        <img src="{{asset(Auth::user()->image)}}" alt="img" width="150" height="150">
        @else
        <img src="https://via.placeholder.com/150x150" alt="img">
        @endif
        <h3 class="title">{{$m}}</h1>
            <p class="description">{{$agent->biography !='0' ? $agent->biography:'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.'}}</p>
            <p style="margin-left: 75px;">Thank you for using our application!</p>
            <p style="margin-left: 75px;line-height: 25px;">Regards,<br> globelgri</p>
            <a href="{{url('/admin/login')}}" type="tutton" class="dbtn">Go To Dashboard</a>
    </div>

</body>

</html>
