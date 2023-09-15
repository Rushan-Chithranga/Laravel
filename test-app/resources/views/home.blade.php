@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body bg-dark">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <div class="row text-center ">
                        <div class="col-sm-6 m-6" >
                            <img src="image/manager.png"  width="100" height="100">
                            <div class="mt-3">
                                <a href="/teacher">
                                    <figure>
                                    <figcaption style="text-align: center; font-weight:700;" class="btn btn-primary"> Manager</figcaption>
                                    </figure>
                                </a>

                            </div>
                           
                        </div>

                        <div class="col-sm-6 m-6" >
                            
                                <img src="image/cashier.png"  width="100" height="100">
                           
                                <div class="mt-3">
                                    <a href="#">
                                        <figer>
                                        <figcaption style="text-align: center; font-weight:700;" class="btn btn-primary"> Cashier</figcaption>
                                        </figer>
                                        </a>

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
