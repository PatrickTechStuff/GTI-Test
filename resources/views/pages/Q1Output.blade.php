@extends('pages.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="col-12 text-left mb-2">
                        <h4>Input Number: </h4>
                        <h5>  {{$input}}</h5>
                    </div>
                    <div class="col-12 text-left">
                        <h4>Output Number: </h4>
                        <h5>  {{$output}}</h5>
                    </div>
                </div>
            
              
            </div>
        </div>
    </div>
</div>
@endsection