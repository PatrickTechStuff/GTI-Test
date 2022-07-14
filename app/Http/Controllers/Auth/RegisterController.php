<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\RecruitTb;
use App\Models\QuestionTb;
use App\Models\MembersAnswerTb;
use Auth;
use Illuminate\Support\Facades\Http;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::PROF;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //temporary Change it "auth" to "guest"
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {   
        $validation =Validator::make($data, [
            // 'name' => ['required', 'string', 'max:,900'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            // 'user_role' => ['required', 'string', 'max:255'],
            'firstname'=> ['required', 'string', 'max:255'],
            // 'midname'=> ['required', 'string', 'max:255'],
            'lastname'=> ['required', 'string', 'max:255'],
            'homeaddress'=> ['required', 'string', 'max:255'],
            // 'gender'=> ['required', 'string', 'max:255'],
            'contactnumber'=> ['required', 'int'],
            'birthdate'=> ['required', 'date'],
            'agreement'=> ['required'],
        ]);

        
        return $validation;
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $data['name'] = ucwords(strtolower($data['lastname'])).", ".ucwords(strtolower($data['firstname']));
        $membercodeGenerate =  $this->generateUniqueCode($data['username']);
        if($data['agreement'] == "on"){
            $agreement = true;
        }

        $usercreate = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'user_role' => 'User',
            'firstname' => ucwords(strtolower($data['firstname'])),
            //'midname' => ucwords(strtolower($data['midname'])),
            'lastname' => ucwords(strtolower($data['lastname'])),
            'homeaddress'=> $data['homeaddress'],
            //'gender'=> $data['gender'],
            'contactnumber'=> $data['contactnumber'],
            'birthdate'=> $data['birthdate'],
            'sponsorcode'=>  $data['sponsorcode'],
            'membercode' => $membercodeGenerate,
            'recruitlimit' =>  10,
            'agreement'=> $agreement,
        ]);
        try {
            $answers = $data['selectedAnswers'];
        $questionList = QuestionTb::where('active', '=' , 'yes')->get()->sortBy('seqnum');
        foreach ($questionList as $question) {
            $membersAsnsers = new MembersAnswerTb;
            $membersAsnsers->username = $data['username'];
            $membersAsnsers->sponsorcode = $data['sponsorcode'];
            $membersAsnsers->membercode = $membercodeGenerate;
            $membersAsnsers->qcode = $question->qcode;
            $membersAsnsers->qdescription = $question->qdescription;
            try {                
                $answerstring = $answers[$question->qcode];
                $answer =  json_decode($answerstring, true);
                $membersAsnsers->acode = $answer['acode'];
                $membersAsnsers->adescription = $answer['adescription'];
                $membersAsnsers->save();
            } catch (\Throwable $th) {
                $membersAsnsers->acode = NULL;
                $membersAsnsers->adescription = NULL;
                $membersAsnsers->save();
            }
           
        }
        } catch (\Throwable $th) {
            //throw $th;
        }
        
        Auth::login($usercreate, true);
        return $usercreate;
    }
            
    public function generateUniqueCode($username)
    {
        do {
            $randomnum = random_int(100000000000, 999999999999);
            $code = "QC4L".$randomnum;
        } while (User::where("membercode", "=",$code)->first());
  
        return $code;
    }


    public function store4(Request $data)
    {
        $sponser = User::where("membercode", "=",$data['sponsorcode'])->first();
        if($sponser == NULL){
            return redirect()->route('register2')->with('errormessage','Invalid Sponsor Code')->withInput();
        }

        return $this->register($data);
        
        

    }

}
