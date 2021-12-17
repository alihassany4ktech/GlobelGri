@extends('layouts.admin.layouts')
@section('content')
@include('layouts.admin.includes.sidebar')
<!-- Header -->
@include('layouts.admin.includes.header')
<style>
    @media only screen and (max-width: 600px) {
        #profile_form {
            margin-left: -4px !important;
        }
    }

</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <span id="result"></span>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6 align-self-center" id="profile_form" style="margin-left: 25%">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Subscription</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="subscriptionform">
                            @csrf
                            <input type="hidden" name="status" value="1" class="form-control">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title</label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Enter a title.." required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Price</label>
                                            <input type="number" min="1" name="price" class="form-control"
                                                placeholder="Enter a price.." required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Valid Property</label>
                                            <input type="number" min="1" name="valid_property" class="form-control"
                                                placeholder="Enter a valid property.." required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select class="form-control" name="agent_role" style="width: 100%;"
                                                autocomplete="off">

                                                @foreach ($roles as $row)
                                                <option value="{{$row->name}}">{{$row->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea id="summernote" class="form-control description"
                                                name="description" rows="3" cols="30"
                                                placeholder="Enter ..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" id="add" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        $('#subscriptionform').on('submit', function (event) {
            event.preventDefault();
            $.ajax({
                url: '{{route("admin.subscription.store")}}',
                method: 'post',
                data: $(this).serialize(),
                dataType: 'json',
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
