@extends('pages.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <form method="POST" action="/Q2/Update/{{$edititem->Id}}">
                    @method('PUT');
                    @csrf
                    <div class="col-12 text-left mb-2">
                        <h5>Sales Person: </h5>
                        <input type="text" name="SalesPerson" class="col-8" value="{{$edititem->SalesPerson}}">
                    </div>
                    <div class="col-12 text-left mb-2">
                      <h5>Item 1: </h5>
                      <input type="number" name="Item1" class="col-8" value="{{$edititem->Item1}}">
                  </div>
                  <div class="col-12 text-left mb-2">
                    <h5>Item 2: </h5>
                    <input type="number" name="Item2" class="col-8" value="{{$edititem->Item2}}">
                </div>
                <div class="col-12 text-left mb-2">
                  <h5>Item 3: </h5>
                  <input type="number" name="Item3" class="col-8" value="{{$edititem->Item3}}">
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
