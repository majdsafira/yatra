<?php



namespace App\Http\Controllers;



use Session;

use App\Models\User;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;



class LoginController extends Controller

{

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function index()

    {

        return view('login');

    }



    /**

     * Write code on Method

     *

     * @return response()

     */

    public function registration()

    {

        return view('signup');

    }

    public function register(Request $request)

    {

        $name = $request->get('name');
        $email = $request->get('email');
        $password = $request->get('password');

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);
        return redirect('login')->with('success', 'successfully registered');
    }



    /**

     * Write code on Method

     *

     * @return response()

     */

    public function postLogin(Request $request)

    {

        $request->validate([

            'email' => 'required',

            'password' => 'required',

        ]);



        $users = User::all();
        $password =request('password');

        foreach ($users as $user){
            if(request('email') == $user->email && $password == $user->password){
                Session::put('user', $user);
                return redirect('home')->with( 'message','You have Successfully loggedin');
        }
    }

        return redirect("login")->with('message','Oppes! You have entered invalid credentials');

    }



    /**

     * Write code on Method

     *

     * @return response()

     */

    public function postRegistration(Request $request)

    {

        $request->validate([

            'name' => 'required',

            'email' => 'required|email|unique:users',

            'password' => 'required|min:6',

        ]);



        $data = $request->all();

        $check = $this->create($data);



        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');

    }



    /**

     * Write code on Method

     *

     * @return response()

     */

    public function dashboard()

    {

        if(Auth::check()){

            return view('dashboard');

        }



        return redirect("login")->withSuccess('Opps! You do not have access');

    }



    /**

     * Write code on Method

     *

     * @return response()

     */

    public function create(array $data)

    {

      return User::create([

        'name' => $data['name'],

        'email' => $data['email'],

        'password' => Hash::make($data['password'])

      ]);

    }



    /**

     * Write code on Method

     *

     * @return response()

     */

    public function logout() {

        Session::flush();

        Auth::logout();



        return Redirect('login');

    }

}

