@extends('master')
@section('content')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Manage
            <small>Product Generic</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Product Generic</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12 col-xs-12">

                <div id="messages"></div>

              

                <div>

                    <div>

                        @if($errors->any())
                        @foreach($errors->all() as $error)
                           <div>
                               <p class="alert alert-danger">{{error}}</p>
                           </div>
                       @endforeach
                           
                      @endif
                           
                           @if(session()->has('msg'))
                       <p class="alert alert-success">{{session()->get('msg')}}</p>
                           @endif
            
                     </div>

                </div>

                <div class="box">
                    



                    <!-- /.box-header -->
                    <form role="form" action="{{route('generic.update',$generic->id)}}" method="post" id="createForm">
                      @csrf
                      @method('put')
                      <div class="modal-body">
      
                          <div class="form-group">
                              <label for="brand_name">Product Generic</label>
                              <input value="{{$generic->generic_name}}" type="text" class="form-control" id="category_name" name="generic_name"
                                  placeholder="Enter Product generic" autocomplete="off" required="">
                          </div>
                          <div class="form-group">
                              <label for="active">Status</label>
                              <select  class="form-control" id="active" name="active" value="{{$generic->status}}">
                                  <option value="Active">Active</option>
                                  <option value="inactive">Inactive</option>
                              </select>
                          </div>
                      </div>
      
                      <div class="modal-footer">
                        <a href="#"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></a>
                          
                          <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
      
                  </form>
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

<!-- create brand modal -->
<!-- /.modal -->

<!-- edit brand modal -->





</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>
<div class="control-sidebar-bg"></div>
</div>


@endsection
