@extends('layouts.admin.layouts')
@section('content')
@include('layouts.admin.includes.sidebar')
<!-- Header -->
@include('layouts.admin.includes.header')
<style>
    @media only screen and (max-width: 600px) {
        #profile_form
        {
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
                            <h3 class="card-title">Add Blog</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="blogform" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Blog Tile</label>
                                    <input type="text" name="title" class="form-control" value=""
                                        required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-8" style="margin-left: 15%">
                                    <div class="custom-file">

                                        <input type="file" class="custom-file-input" name="image"
                                            onchange="readURL(this);" accept="image/*">
                                        <label class="custom-file-label" for="thumbnail">Choose file</label>
                                    </div>
                                    <div class="img-thumbnail  text-center" id="imagepreview">
                                        <img src="" style="height: 80px; width: 80px;"
                                            class="img-fluid" id="one">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                            <div class="form-group">
                                  <label for="exampleInputEmail1">Description</label>
                              <textarea class="textarea" placeholder="Place some text here" name="description"></textarea>
                            </div>
                            </div>
                              
                            
                            <!-- /.card-body -->
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
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#one')
                    .attr('src', e.target.result)
                    .width(80)
                    .height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        $('#blogform').on('submit', function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                
                url: '{{route("admin.blog.store")}}',
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

