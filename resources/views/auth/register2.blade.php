@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           
            <div class="card">
                <div class="card-header"><h4> <strong> Register Form</strong></h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register4') }}">
                        @csrf
                        <div class=" d-md-flex flex-md-equal w-100 h-100 my-md-0 pl-md-0 ">
                            <div class=" mx-auto px-auto  w-100">
                                <div class="form-group row">
                                    <label for="sponsorcode" class="col-md-3 col-form-label text-md-right">{{ __('Sponsor Code') }}</label>
        
                                    <div class="col-md-8">
                                        <input id="sponsorcode" type="text" class="form-control" style="text-transform: capitalize" name="sponsorcode" value="{{$sponsorcode}}" autocomplete="sponsorcode">
                                        
                                        @if(session('errormessage'))
                                            <span role="alert">
                                                <strong >{{ session('errormessage') }}</strong>
                                            </span>
                                            
                                        @endif        
                                    </div>      
                                </div>


                        <div class="form-group row">
                            <label for="lastname" class="col-md-3 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-8">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" style="text-transform: capitalize" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" >

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <label for="midname" class="col-md-2 col-form-label text-md-right">{{ __('Middle Initial') }}</label>

                            <div class="col-md-1">
                                <input id="midname" type="text" class="form-control @error('midname') is-invalid @enderror" maxlength="1" style="text-transform:uppercase" name="midname" value="{{ old('midname') }}" required autocomplete="midname" >

                                @error('midname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            
                        </div>

                        <div class="form-group row">
                            
                            <label for="firstname" class="col-md-3 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-8">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" style="text-transform: capitalize" value="{{ old('firstname') }}" required autocomplete="firstname"  >

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <label for="gender" class="col-md-2 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-1">
                                <select id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender"  required autocomplete="gender">
                                    @if (old('gender') != '')
                                        @if (old('gender') == 'M')
                                            <option value=''>-- Select Gender --</option>
                                            <option value='M' selected>M</option>
                                            <option value='F'>F</option>     
                                        @else
                                            <option value=''>-- Select Gender --</option>
                                            <option value='M'>M</option>
                                            <option value='F' selected>F</option>     
                                        @endif
                                    @else
                                        <option value='' selected>-- Select Gender --</option>
                                        <option value='M'>M</option>
                                        <option value='F'>F</option>     
                                    @endif   

                                     

                                </select>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            
                        </div>

                        <div class="form-group row">
                            <label for="birthdate" class="col-md-3 col-form-label text-md-right">{{ __('Birth Date') }}</label>

                            <div class="col-md-8">
                                <input id="birthdate" type="Date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" required autocomplete="birthdate"  >

                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>                    
                        

                        <div class="form-group row">
                            <label for="homeaddress" class="col-md-3 col-form-label text-md-right">{{ __('Home Address') }}</label>
    
                                <div class="col-md-8">
                                    <input id="homeaddress" type="homeaddress" class="form-control @error('homeaddress') is-invalid @enderror" name="homeaddress" value="{{ old('homeaddress') }}" required autocomplete="homeaddress">
    
                                    @error('homeaddress')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                           <div class="col-md-8">
                               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="(ex. example@email.com)">

                               @error('email')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                       </div>

                        <div class="form-group row">
                            <label for="contactnumber" class="col-md-3 col-form-label text-md-right">{{ __('Contact Number') }}</label>
                            {{-- <div class="col-md-1">
                                <input type="text" class="form-control" style="text-transform:uppercase" value="+63" readonly>
                            </div>                           --}}
                            <div class="col-md-8">
                                <input  type="text" id="contactnumber" type="contactnumber" class="form-control @error('contactnumber') is-invalid @enderror"  maxlength="10" name="contactnumber" value="{{ old('contactnumber') }}" required autocomplete="contactnumber" >

                                @error('contactnumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>invalid Contact number</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                            <div class=" mx-auto px-auto  w-50">
                              <div class="row text-center">
                                <div class="col-12" >
                                    <img src="{{ asset("image/Logo/lenitest5.jpg")}}"  class="img-fluid"  alt="Responsive image">
                                </div>
                              </div>
                            </div>
                          </div>

                        <hr> {{-- Break Line --}}
                        <div class=" d-md-flex flex-md-equal w-100 h-100 my-md-0 pl-md-0 ">
                            <div class=" mx-auto px-auto  w-100">
                               
                               

                        <div class="form-group row">
                        <label for="username" class="col-md-3 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-8">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" >

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                             </div>
                         </div>


                        

                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            
                        </div>
                        <div class="form-group row">
                        <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                        </div>
                        </div>
                        <div class=" mx-auto px-auto  w-50">
                            <div class="row text-center">
                                <div class="col-12" >
                                    <img src="{{ asset("image/Logo/lenitest6.jpg")}}"  class="img-fluid" alt="Responsive image">
                                </div>
                              </div>
                        </div>
                    </div>
                        {{-- <div class="form-group row">
                            <label for="user_role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <select id="user_role" type="text" class="form-control @error('user_role') is-invalid @enderror" name="user_role"  required autocomplete="user_role" autofocus>
                                    <option value="{{ old('user_role', 'Admin') }}">Admin</option>
                                    
                                    @foreach ($companies as $item)
                                    <option value="{{ old('user_role', 'User') }}">{{$item}}</option>     
                                    @endforeach

                                    <option value="{{ old('user_role', 'User') }}">User</option>                                
                                </select>

                                @error('user_role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}
                        
                        @if ($questionList->count() != 0)
                        <hr>    
                        @foreach ($questionList as $question)
                        
                            <div class="col-md-8 offset-md-2">
                                <div class="form-group ">
                                    <label class="text-danger col-form-label-lg">{{$question->seqnum}}.</label>   
                                    <label>{{$question->qdescription}}</label>
                                    
                                    @foreach ($answerList as $item)
                                        @if($item->qcode == $question->qcode)
                                            <div class="form-check">          
                                                <input class="form-check-input" type="radio" name="selectedAnswers[{{$question->qcode}}]" for="Radio{{$question->qcode}}" id="Radio{{$question->qcode}}{{$item->acode}}" value="{{$item}}" required>
                                                <label class="form-check-label" for="Radio{{$question->qcode}}{{$item->acode}}">
                                                    {{$item->adescription}}
                                                </label>
                                            </div>                              
                                        @endif
                                    @endforeach
                                   
                                </div>
                            </div>
                        @endforeach              
                                                        
                        @else
                        <input class="hidden" type="hidden" name="selectedAnswers" value="" >
                                
                        @endif

 
                        

                        <hr>
                        <div class="text-left">

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                
                            <h4>Welcome,</h4>
                            <br>
                            <h5>Kayo po ay member na ng QC 4 LENI MOVEMENT</h5>
                            <br>
                            <h5>Bagamat napaka daming volunteer group na tumutulong kay LENI, tayo po ay mag fofocus sa actual na networking ng botante na kaya natin ipangako na boboto at mag-kakampanya para kay LENI.</h5>
                            <br>
                            <h5>Bawat isa po sa atin ay inaasahan na makakuha ng at least 10 boto para kay LENI.</h5>
                            <br>
                            <h5>Kapag nakapag kombinsi po tayo ng botante sana isulat sa ating LIST OF VOLUNTEERS at padalhan po ng inyong link.</h5>
                         

                            </div>
                        </div>
                        <hr>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                
                                
                                <h5> Kami po ay nakatuon sa proteksyon at pangangalaga ng inyong personal na impormasyon. Sa inyong pagsali at pagbigay ng mga detalye, kayo po ay pumapayag na iproseso ang inyong impormasyon para sa ating nais na layunin.</h5>
                                <br>
                                <div class="row col-12">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="agreement" required>
                                    <label class="custom-control-label" for="customCheck1"> <h5> Opo, ako ay pumapayag</h5> </label>
                                    @error('agreement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                
                                
    
                                </div>
                            </div>
                            
                        </div>
                        

                        <hr>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
