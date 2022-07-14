@extends('pages.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <form method="POST" action="/Q1/Output">
                        @csrf
                        <div class="col-12 text-left mb-2">
                            <h4>Input Number: </h4>
                            <input type="number" name="InputNumber" class="col-8" value="">
                        </div>
                        <div class="col-12 text-left">
                            <button type="submit" class=" col-md-3 btn btn-dark">
                                Submit
                            </button>
                        </div>
                    </form>
                 

                </div>
            
              
            </div>
        </div>
    </div>
</div>
@endsection
