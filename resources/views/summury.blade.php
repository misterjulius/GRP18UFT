@extends('layouts.admin')

@section('content')

<section class="content">
      <div class="row">
           
           <div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">District Analysis</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>District</th>
                  <th>Number of Agents</th>
                </tr>
                </thead>
                <tbody>
               
                <tr>
                
                @foreach($collection as $comp)

                  <td>{{$comp->District}}</td>
                  
                  <td>{{$comp->total}}</td> 
                  
                </tr>
                 @endforeach
                 
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

        </div>

     
    </section>    


@endsection
