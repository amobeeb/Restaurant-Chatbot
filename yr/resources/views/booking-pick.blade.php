@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Bookings</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="container">
                            <div class="row">
                                    {{-- SELECT `id`, `name`, `email`, `mobile`, `service`, `price`, `date`, `time`, `created_at`, `updated_at` FROM `bookings` WHERE 1 --}}
                                <div class="col-md-10">
                                       <table class="table">
                                           <thead>
                                               <tr>
                                                   <th>Name</th>
                                                   <th>Email</th>
                                                   <th>Mobile</th>
                                                   <th>Food Booked</th>
                                                   <th>Price</th>
                                                   <th>Date</th>
                                                   <th>Booked Date</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               @foreach($booking as $booking)
                                               <tr>
                                                   <td>{{$booking->name}}</td>
                                                   <td>{{$booking->email}}</td>
                                                   <td>{{$booking->mobile}}</td>
                                                   <td>{{$booking->service}}</td>
                                                   <td>{{$booking->price}}</td>
                                                   <td>{{$booking->date}}</td>
                                                   <td>{{$booking->created_at}}</td>
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
@endsection
