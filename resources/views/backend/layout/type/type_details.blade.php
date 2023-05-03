@extends('master')
@section('content')





<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Medicine
            <small>Type Details</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Users</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12 col-xs-12">


                <a href="{{route('type')}}" class="btn btn-primary">Back</a>
                <a href="{{route('type.edit',$type->id)}}" class="btn btn-info">Edit</a>
                <br /> <br />
                <div>

                    {{-- @if($errors->any())
            @foreach($errors->all() as $error)
               <div>
                   <p class="alert alert-danger">{{error}}</p>
                </div>
                @endforeach

                @endif

                @if(session()->has('msg'))
                <p class="alert alert-success">{{session()->get('msg')}}</p>
                @endif --}}

            </div>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Type Details</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form role="form" action="" method="post" id="createForm">
                        @csrf
                        <div class="form-group">
                            <label for="brand_name">Medicine Type</label>
                            <input type="text" class="form-control" id="category_name" name="medicine_type"
                                placeholder="Enter medicine type" autocomplete="off" required=""
                                value="{{$type->medicine_type}}">
                        </div>
                        <div class="form-group">
                            <label for="active">Status</label>
                            <select class="form-control" id="active" name="active">
                                <option @if ($type->status == "Active")selected @endif value="Active">Active</option>
                                <option @if ($type->status == "inactive")selected @endif value="inactive">Inactive
                                </option>
                            </select>
                        </div>

                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- col-md-12 -->
</div>
<!-- /.row -->


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->



</div>
@endsection
