@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Order</div>

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
                                                   <th>Reference</th>
                                                   <th>Mobile</th>
                                                   <th>Amount</th>
                                                   
                                                  
                                               </tr>
                                               <!-- SELECT `id`, `ref`, `mobile`, `amount`, `created_at`, `updated_at` FROM `payments` WHERE 1 -->
                                           </thead>
                                           <tbody>
                                               @foreach($payment as $payment)
                                               <tr>
                                                   <td>{{$payment->ref}}</td>
                                                   <td>{{$payment->mobile}}</td>
                                                   <td>{{$payment->amount}}</td>
                                                  
                                                   <td>{{$payment->created_at}}</td>
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
