@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Product</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                      
                                    <form method="post" action="/product/store">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">Food Name</label>
                                            <input type="text" class="form-control" name="service">
                                        </div>
                                            <div  class="form-group">
                                                <label for="">Food Price</label>
                                                <input type="text" class="form-control" name="service_price">
                                            </div>
                                            <div  class="form-group">
                                                    <label for="">Food Description</label>
                                                    <input type="text" class="form-control" name="service_desc">
                                                </div>
                                                <div  class="form-group">
                                                        {{-- <label for="">Food Description</label> --}}
                                                        <input type="submit" class="btn btn-success" >
                                                    </div>
                                    </form>
                                </div>

                                <div class="col-md-12 pt-3">
                                        <div class="card-header">Product List</div>

                                        <div class="card-body">
                                       <table class="table table-stripped">
                                           <thead>
                                               <tr>
                                                   <th>Food Name</th>
                                                   <th>Food Price</th>
                                                   <th>Food Description</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               @foreach($service as $service)
                                               <tr>
                                                   <td>{{$service->service}}</td>
                                                   <td>{{$service->service_price}}</td>
                                                   <td>{{$service->service_desc}}</td>
                                               </tr>
                                               @endforeach
                                           </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
