@extends('pages.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><a href="/Q2" class="btn btn-outline-dark">Refresh</a></th>

                              </tr>
                          <tr>
                            <th scope="col">Sales Person</th>
                            <th scope="col">Item 1</th>
                            <th scope="col">Item 2</th>
                            <th scope="col">Item 3</th>
                            <th scope="col"> Total</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($table as $item)
                            <tr>
                                <th scope="row">{{$item->SalesPerson}}</th>
                                <td>{{$item->Item1}}</td>
                                <td>{{$item->Item2}}</td>
                                <td>{{$item->Item3}}</td>
                                <td>{{$item->Total}}</td>
                                <form method="POST" action="/Q2/Destroy/{{$item->Id}}">
                                    @method('DELETE')
                                  @csrf
                                  <td><button type="submit" class="btn btn-outline-danger">x</button></td>
                                </form>
                                <form method="GET" action="/Q2/Edit/{{$item->Id}}">
                             
                                  @csrf
                                  <td><button type="submit" class="btn btn-outline-danger">Edit</button></td>
                                </form>
                              </tr>
                            @endforeach


                        
                      
                          <tr>
                            <th><a href="/Q2/Create" class="btn btn-outline-dark">+</a></th>
                          </tr>
                        </tbody>
                      </table>
                    

                </div>
            
              
            </div>
        </div>
    </div>
</div>
@endsection
