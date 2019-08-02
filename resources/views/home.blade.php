@extends('layouts.admin')

@section('content')
<section class="content-header">
     
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$Available}}</h3>

              <p>Registered Members</p>
            </div>
            <div class="icon">
              <i class="fa fa-group"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-info">View members <i class="fa fa-group"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Funds</h3>

              <p>Fund Registration</p>
            </div>
            <div class="icon">
              <i class="fa fa-money"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-secondary">Register Funds <i class="fa fa-money"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$Agents_Available}}</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-default">Add New Agent <i class="ion ion-person-add"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$Funds}}<sup style="font-size: 20px">Ugx</sup></h3>

              <p>Status</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer"  data-toggle="modal" data-target="#modal-default2">Treasury status <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>



       <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Agent List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table_id" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <!--<th>MIN</th>-->
                  <th>Name</th>
                  <th>Position</th>
                  <th>District</th>
                 <!-- <th>Amount</th>-->
                  <th>Due Date</th>
                  <!--<th>Status</th>-->
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                @foreach($View_Agents as $members)

                
                  <!--<td>{{$members->id}}</td>-->
                  <td>{{$members->Name}}</td>
                  <td>{{$members->Position}}</td>
                  <td>{{$members->District}}</td>
                  <!--<td>{{$members->Amount}}</td>-->
                  <td>{{$members->created_at}}</td> 
                  
                  <td>
                     
                     <form action="{{route('home.destroy', [$members->id])}}" method="POST">
                        @method('DELETE')
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="submit" class="btn btn-danger" value="Delete"/>
                      </form>
                  </td>
                </tr>
                 @endforeach
                </tbody>
                <tfoot>
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- /.box -->




         
               
               

                
                
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      
    </section>
    <!-- /.content -->



        <div class="modal modal-default fade" id="modal-default2">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body">
              <div class="box-body">
              <table id="table_id2" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>TRANSACTION ID</th>
                  <th>BANK</th>
                  <th>AMOUNT</th>
                  <th>DATE</th>
                 
                 
                </tr>
                </thead>
                <tbody>
                <tr>
                @foreach($View_Funds as $funds)

                
                  <td>{{$funds->T_ID}}</td>
                  <td>{{$funds->Bank}}</td>
                  <td>{{$funds->Amount}}</td>
                  <td>{{$funds->created_at}}</td>
                  
                 
             
                </tr>
                 @endforeach
                </tbody>
                <tfoot>
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
              </div>
              <div class="modal-footer">
              
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close </button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->





    <div class="modal modal-primary fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Agent Registration</h4>
              </div>
          <form action="{{route('home.store')}}" method="post" enctype="multipart/form-data">
            <div class="modal-body">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" placeholder="name" name="Name">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                            <div class="form-group">
                              <label>Gender</label>
                              <select class="form-control select2" style="width: 100%;" name="Gender">
                                <option selected="selected" value="Male">Male</option>
                                <option value="female">Female</option>
                                
                              </select>
                            </div>
                    </div>    
                   @include('AsignDistrict')
                    
                    
                   

                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Signature</label>
                            <input type="text" class="form-control"  placeholder="Signature " name="signature">
                        </div>
                    </div>
 
                   <!--  <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Profile Picture</label>
                            <input type="file" class="form-control" name="p_pic">
                        </div>
                    </div> -->

                           <!-- <div class="col-md-6">
                             <div class="form-group">
                               <label>Date:</label>

                                 <div class="input-group date">
                                   <div class="input-group-addon">
                                     <i class="fa fa-calendar"></i>
                                   </div>
                                  <input type="date" class="form-control pull-right" id="datepicker" name="datee">
                                 </div>
                
                             </div>
                           </div> -->
                          
                      </div>
                  </div>
                 
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit" value="Save" class="btn btn-primary">
              </div>
            </div>
            <!-- /.modal-content -->
            </form>
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <div class="modal modal-primary fade" id="modal-secondary">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Treasury</h4>
              </div>
              <form action="{{route('funds.store')}}" method="post" enctype="multipart/form-data">
              <div class="modal-body">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="row">
                     
                            <input type="hidden" class="form-control" value="<?php $randomString = str_random(25); echo($randomString); ?>"  name="T_ID">
                      
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Bank</label>
                            <select class="form-control select2" style="width: 100%;" name="Bank">
                                <option selected="selected" value="Centenary Bank">Centenary Bank</option>
                                <option value="Barclays Bank of Uganda">Barclays Bank of Uganda</option>
                                <option value="Diamond Trust Bank">Diamond Trust Bank</option>
                                <option value="KCB Bank Uganda Limited">KCB Bank Uganda Limited</option>
                                
                              </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Amount</label>
                            <input type="text" class="form-control"  placeholder="Ugx" name="Amount">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Donor/Well wisher</label>
                            <input type="text" class="form-control"  placeholder="Donor" name="donor">
                        </div>
                    </div>
                      </div>
                  </div>
                  
                 
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Save">
              </div>
            </div>
            </form>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <div class="modal modal-default fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Registered Members</h4>
              </div>
              <div class="modal-body">
              <div class="row">
        <div class="col-md-12">
              <table id="table_id3" class="table table-bordered">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>District</th>
                  <th>Date</th>
                  <th>Recommender</th>
                  <th>Agent</th>
                </tr>
                @foreach($View_members as $Mem)
                <tr>
            
                  <td>{{$Mem->member_id}}</td>
                  <td>{{$Mem->Name}}</td>
                  <td>
                   {{$Mem->Gender}}
                  </td>
                  <td>{{$Mem->District}}</td>
                  <td>{{$Mem->Date}}</td>
                  <td>{{$Mem->Recommender}}</td>
                    <td>
                      {{$Mem->Agent}}
                    </td>
                    @endforeach
                </tr>

              </table>
              </div> 
         </div>
     
           
            </div>
              <div class="modal-footer">
                
                <button type="button" class="btn btn-success"data-dismiss="modal">Save changes</button>
              </div>
            </div>
           
        </div>
        <!-- /.modal -->




       

    @endsection