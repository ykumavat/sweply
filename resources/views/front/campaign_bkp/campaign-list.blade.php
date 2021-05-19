@extends('front.layout.dashboard-master')    
@section('main_content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">       
            <div class="content-body">
                <div>   
                @include('flash-message')   
                    <div class="card mb-0"> 
                        <div class="m-2">
                            <div class="row">
                                <div class="users-list-filter col-6">
                                    <div class="breadcrumb-main-bx">      
                                        <h3>Campaign</h3>
                                        <div class="breadcrumb-wrapper ">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="{{url('/')}}/user/dashboard">Home</a>
                                                </li>
                                                <li class="breadcrumb-item active">Campaign
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-6">
                                    <div class="search-action-btn">
                                        <div class="filtter-btn">
                                            <div class="btn-group">
                                                <div class="dropdown">
                                                    <button class="btn btn-warning dropdown-toggle mr-1 waves-effect waves-light" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Filter 
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                                                     
                                                        <a class="dropdown-item" href="#">Week</a>
                                                        <a class="dropdown-item" href="#">Month</a>
                                                        <a class="dropdown-item" href="#">Year</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="search-filter-bx">
                                            <div class="search-bar">                               
                                                <input placeholder="Common Search" type="text" class="form-control round" id="myInputTextField">
                                                <div class="form-control-position">
                                                    <i class="feather icon-search px-1"></i>
                                                </div>                                                                   
                                            </div>
                                        </div>
                                        <div class="">
                                            <a href="{{url('/')}}/user/create-ads" class="btn btn-primary add-form-btn btn-add-bussiness" >
                                                <span class="text-nowrap">Add Campaign</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                            
                        <div class="position-relative table-responsive">
                            <table class="table b-table data-table">                            
                                <thead role="rowgroup" class="">                                
                                    <tr role="row" class="">
                                        <th role="columnheader" scope="col" tabindex="0" aria-colindex="1" aria-sort="none" class="">
                                            <div>ID</div>
                                        </th>
                                        <th role="columnheader" scope="col" tabindex="0" aria-colindex="1" aria-sort="none" class="">
                                            <div>Channel</div>
                                        </th>
                                        <th role="columnheader" scope="col" tabindex="0" aria-colindex="2" aria-sort="none" class="">
                                            <div>Campaign</div>
                                        </th>
                                        <th role="columnheader" scope="col" tabindex="0" aria-colindex="3" aria-sort="none" class="">
                                            <div>Heading</div>
                                        </th>
                                        <th role="columnheader" scope="col" tabindex="0" aria-colindex="5" aria-sort="none" class="">
                                            <div>Budget (SAR)</div>
                                        </th>
                                        <th role="columnheader" scope="col" tabindex="0" aria-colindex="5" aria-sort="none" class="">
                                            <div>User</div>
                                        </th>
                                            <th role="columnheader" scope="col" tabindex="0" aria-colindex="5" aria-sort="none" class="">
                                            <div>Business</div>
                                        </th>
                                        <th role="columnheader" scope="col" aria-colindex="6" class="">
                                            <div>Invoice</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody role="rowgroup">
                                </tbody>                            
                            </table>
                        </div>
                        <div class="mx-2 mb-2 showing-entries-section">
                            <div class="row">
                                <div class="d-flex align-items-center justify-content-center justify-content-sm-start col-sm-6 col-12"><span class="text-muted">Showing 1 to 10 of 50 entries</span>
                                </div>							
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>
    </div>


<script type="text/javascript">
    $(document).ready(function(){
        var table = $('.data-table').DataTable({
            "bDestroy": true,
            processing: true,
            serverSide: true,
            ajax: {
              url: "{{url('/')}}/user/load-campaign",
              data: function (d) {
                    d.status = $('#status').val(),
                    d.search = $('input[type="search"]').val()
                }
            },
             bAutoWidth: false, 
             "ordering": false,
             "bInfo":false,
             "bLengthChange": false,
             "paging": true,
             "bPaginate": false,
             "pageLength": 5,
            columns: [
                {data: 'id', name: 'id'},
                {data: 'channel_name', name: 'channel_name'},
                {data: 'campaign_name', name: 'campaign_name'},
                {data: 'heading', name: 'heading'},
                {data: 'campaign_budget', name: 'campaign_budget'},
                {data: 'user_name', name: 'user_name'},
                {data: 'business_name', name: 'business_name'},
                {data: 'built_action_btns', name: 'built_action_btns'},

            ]
        });
        
        $('#status').change(function(){
            table.draw();
        });

        oTable = $('.data-table').DataTable();   
        $('#myInputTextField').keyup(function(){
              oTable.search($(this).val()).draw() ;
        })

         $.fn.dataTable.ext.errMode = 'none';

        $('.data-table').on( 'error.dt', function ( e, settings, techNote, message ) {
             console.log( 'An error has been reported by DataTables: ', message );
        } ) ;

        $('.edit-btn').click(function(){
            alert($(this).attr('data-id')); 
        });
    });


</script>

@endsection