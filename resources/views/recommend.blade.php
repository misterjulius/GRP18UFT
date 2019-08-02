@extends('layouts.admin')
@section('content')
<div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Recommender Analysis</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table_id" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Recommender</th>
                  <th># People Recommended</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                @foreach($recommender as $comp)

                  <td>{{$comp->Recommender}}</td>
                  
                  <td>{{$comp->Recom}}</td> 
                 
                  <td>
                     <?php 
                      if($comp->Recom>40){
                          ?>
                        <button class="btn btn-success">Activate Agent</button>
                     <?php
                      }
                        else{
                            ?>
                             <button class="btn btn-warning">Almost There</button>
                             <?php
                        }
                         ?>
                       </td>
                </tr>
                 @endforeach
                </tbody>
                <tfoot>
                <tr>
                  
                  <th>Recommender</th>
                  <th># People Recommended</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          @endsection