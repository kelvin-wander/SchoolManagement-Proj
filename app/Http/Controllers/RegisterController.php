<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function general_info()
    {
        return view('pages.auth.register.general-info');
    }

    public function general_infoPost(Request $request)
    {
        $data = $request->validate([
            'fname' => 'required|string',
            'mname' => 'nullable|string',
            'lname' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'gender' => 'required',
            'age' => 'required|numeric',
            'occupation' => 'required|string',
        ]);

        session(['register_data' => $data]);
        return redirect()->route('register.mobile-info');
    }

    public function mobile_info()
    {
        return view('pages.auth.register.mobile-info');
    }

    public function mobile_infoPost(Request $request)
    {
        $count = $request->input('mobile_count');
        $rules = ['mobile_count' => 'integer|required'];

        for ($i = 1; $i<=$count; $i++){

            $rules["mobile_number_{$i}"] = "required|string|max:12";
            $rules["service_provider_{$i}"] = "required|string";
        }
        $data = $request->validate($rules);

        $merged = array_merge(session('register_data'), ['mobiles' => $data]);
        session(['register_data' => $merged]);

        return redirect()->route('register.bank-info');
    }

    public function bank_info()
    {
        return view('pages.auth.register.bank-info');
    }

    public function bank_infoPost(Request $request)
    {
        $count = $request->input('account_count');
        $rules = ['account_count'=>'integer|required'];

        for ($i=1; $i<=$count; $i++){
            $rules["bank_account_number_{$i}"] = "string|required";
            $rules["bank_{$i}"] = "string|required";
        }
        $data = $request->validate($rules);

        $merged = array_merge(session('register_data'), ['accounts' => $data]);
        session(['register_data' => $merged]);

        return redirect()->route('register.password');
    }

    public function password()
    {
        if (!session('register_data')) {
            return redirect()->route('register.general-info');
        }
        return view('pages.auth.register.password');
    }

    public function passwordPost(Request $request)
    {
        $data = $request->validate([
            'password' => 'required|string|confirmed|min:6',
        ]);

        $finalData = session('register_data');
        $userData = [
                    'fname' => $finalData['fname'],
                    'mname' => $finalData['mname'],
                    'lname' => $finalData['lname'],
                    'email' => $finalData['email'],
                    'occupation' => $finalData['occupation'],
                    'gender' => $finalData['gender'],
                    'age' => $finalData['age'],
                    'password' => Hash::make($data['password']),
                    'mnos_monitored' => $finalData['mobiles']['mobile_count'],
                    'accs_monitored' => $finalData['accounts']['account_count'],
                    'email_verified_at' => now(),
                ];

        if($finalData['mobiles']['mobile_count'] == 1) {
            $userData['p_no1'] = $finalData['mobiles']['mobile_number_1'];
            $userData['serv_prov_for_pno1'] = $finalData['mobiles']['service_provider_1'];
        } elseif($finalData['mobiles']['mobile_count'] == 2) {
            $userData['p_no1'] = $finalData['mobiles']['mobile_number_1'];
            $userData['serv_prov_for_pno1'] = $finalData['mobiles']['service_provider_1'];
            $userData['p_no2'] = $finalData['mobiles']['mobile_number_2'];
            $userData['serv_prov_for_pno2'] = $finalData['mobiles']['service_provider_2'];
        } elseif($finalData['mobiles']['mobile_count'] == 3) {
            $userData['p_no1'] = $finalData['mobiles']['mobile_number_1'];
            $userData['serv_prov_for_pno1'] = $finalData['mobiles']['service_provider_1'];
            $userData['p_no2'] = $finalData['mobiles']['mobile_number_2'];
            $userData['serv_prov_for_pno2'] = $finalData['mobiles']['service_provider_2'];
            $userData['p_no3'] = $finalData['mobiles']['mobile_number_3'];
            $userData['serv_prov_for_pno3'] = $finalData['mobiles']['service_provider_3'];
        }
            
        if($finalData['accounts']['account_count'] == 1) {
            $userData['bank_acc1'] = $finalData['accounts']['bank_account_number_1'];
            $userData['bank_for_acc1'] = $finalData['accounts']['bank_1'];
        } elseif($finalData['accounts']['account_count'] == 2) {
            $userData['bank_acc1'] = $finalData['accounts']['bank_account_number_1'];
            $userData['bank_for_acc1'] = $finalData['accounts']['bank_1'];
            $userData['bank_acc2'] = $finalData['accounts']['bank_account_number_2'];
            $userData['bank_for_acc2'] = $finalData['accounts']['bank_2'];
        } elseif($finalData['accounts']['account_count'] == 3) {
            $userData['bank_acc1'] = $finalData['accounts']['bank_account_number_1'];
            $userData['bank_for_acc1'] = $finalData['accounts']['bank_1'];
            $userData['bank_acc2'] = $finalData['accounts']['bank_account_number_2'];
            $userData['bank_for_acc2'] = $finalData['accounts']['bank_2'];
            $userData['bank_acc3'] = $finalData['accounts']['bank_account_number_3'];
            $userData['bank_for_acc3'] = $finalData['accounts']['bank_3'];
        }
        $user = User::create($userData);

        session()->forget('register_data');
        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
