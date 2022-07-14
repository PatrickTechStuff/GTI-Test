{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <input id="sponsorcode" type="hidden" class="form-control @error('sponsorcode') is-invalid @enderror" style="text-transform: capitalize" name="sponsorcode" value="{{$sponsorcode}}" required autocomplete="sponsorcode" readonly>
                        

                        <div class="form-group row">
                            <label for="lastname" class="col-md-3 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-4">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" style="text-transform: capitalize" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" >

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="midname" class="col-md-2 col-form-label text-md-right">{{ __('Middle Initial') }}</label>

                            <div class="col-md-1">
                                <input id="midname" type="text" class="form-control @error('midname') is-invalid @enderror" maxlength="1" style="text-transform:uppercase" name="midname" value="{{ old('midname') }}" required autocomplete="midname" >

                                @error('midname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            
                            <label for="firstname" class="col-md-3 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-4">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" style="text-transform: capitalize" value="{{ old('firstname') }}" required autocomplete="firstname"  >

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="gender" class="col-md-2 col-form-label text-md-right">{{ __('Gender') }}</label>

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
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="birthdate" class="col-md-3 col-form-label text-md-right">{{ __('Birth Date') }}</label>

                            <div class="col-md-4">
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
    
                                <div class="col-md-7">
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

                           <div class="col-md-7">
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
                            <div class="col-md-1">
                                <input type="text" class="form-control" style="text-transform:uppercase" value="+63" readonly>
                            </div>                          
                            <div class="col-md-6">
                                <input  type="text" id="contactnumber" type="contactnumber" class="form-control @error('contactnumber') is-invalid @enderror"  maxlength="10" name="contactnumber" value="{{ old('contactnumber') }}" required autocomplete="contactnumber" placeholder="(10 Digit Number)">

                                @error('contactnumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>invalid Contact number</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr> 
                        
                        <div class="form-group row">
                        <label for="username" class="col-md-3 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-7">
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

                            <div class="col-md-7">
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

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                        </div>
                    
                        
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

                        <hr>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
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
@endsection --}}
