@extends('master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">


        <h1>
            Payments
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Payment</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12 col-xs-12">

                <div id="messages"></div>



                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Payment</h3>
                    </div>
                    <!-- /.box-header -->
                    <form role="form" action="{{route('payments_supplier')}}" method="post">
                        {{-- enctype="multipart/form-data"> --}}
                        @csrf
                        <div class="box-body">



                            <div class="form-group">
                                <label for="date" class="form-label">Date</label>
                                <input required type="date" value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}"
                                 class="form-control" id="pay_date" name="pay_date">
                              </div>

                              <div class="form-group">
                                <label for="suppliername">Account Type</label>
                                <input readonly type="text" class="form-control" id="type" name="type" placeholder="" autocomplete="off" value="supplier">
                              </div>

                              <div class="form-group">
                                <label for="suppliername">Supplier</label>
                                <input readonly type="text" class="form-control" id="supplier_name" name="supplier_name" placeholder="" autocomplete="off" value="{{$buys->supplier->supplier_name}}">
                              </div>


                              <div class="form-group">
                                <label for="suppliername">Amount</label>
                                <input readonly type="text" class="form-control" id="amount" name="amount" placeholder="" autocomplete="off" value="{{$buys->total_price}}">
                              </div>







                            <div class="form-group">
                                <label for="suppliername">Pay</label>
                                <input type="text" class="form-control" id="pay" name="pay" placeholder="Pay" autocomplete="off">
                              </div>



                            <div class="form-group">
                                <label for="supplier_name">Payment Method</label>
                                <select type="text" class="form-control select_group"


                                id="pay_method" name="pay_method"
                                    placeholder="supplier" autocomplete="off">
                                    <option>Hand Cash</option>
                                    <option>Bank</option>
                                    <option>Bkash</option>
                                    <option>Rocket</option>
                                    <option>Nagad</option>

                            </select>

                            </div>


                            <div class="form-group">
                                <label for="suppliername">Refarance</label>
                                <input type="text" class="form-control" id="ref" name="ref" placeholder="Supplier name" autocomplete="off">
                              </div>


                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-money"> Payment</i></button>

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

<script type="text/javascript">
    $(document).ready(function () {
        $(".select_group").select2();
        $("#description").wysihtml5();

        $("#mainProductNav").addClass('active');
        $("#addProductNav").addClass('active');

        var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' +
            'onclick="alert(\'Call your custom code here.\')">' +
            '<i class="glyphicon glyphicon-tag"></i>' +
            '</button>';
        $("#product_image").fileinput({
            overwriteInitial: true,
            maxFileSize: 1500,
            showClose: false,
            showCaption: false,
            browseLabel: '',
            removeLabel: '',
            browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
            removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-1',
            msgErrorClass: 'alert alert-block alert-danger',
            // defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar">',
            layoutTemplates: {
                main2: '{preview} ' + btnCust + ' {remove} {browse}'
            },
            allowedFileExtensions: ["jpg", "png", "gif"]
        });

    });

</script>
<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      date_input.datepicker({
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      })
    })
  </script>

<div>
</div>

@endsection
