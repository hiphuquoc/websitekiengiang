<?php
namespace App\Http\Controllers\CTV;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Models\Ctv;
use App\Services\BuildInsertUpdateModel;

class AuthCTVController extends Controller {

    public function __construct(BuildInsertUpdateModel $BuildInsertUpdateModel){
        $this->BuildInsertUpdateModel  = $BuildInsertUpdateModel;
    }
      
    public function loginCtv(Request $request){
        $flag               = false;
        if(!empty($request->get('data'))){
            $dataForm       = [];
            foreach($request->get('data') as $value){
                $dataForm[$value['name']]   = $value['value'];
            }
            $phone          = $dataForm['phone'] ?? null;
            $password       = $dataForm['password'] ?? null;
            $infoCtv        = Ctv::get('*')
                                ->where('phone', $phone)
                                ->first();
            if(!empty($infoCtv)){
                $flag       = Hash::check($password, $infoCtv->password);
            }
        }
        echo $flag;
    }

    public function registryCtv(Request $request){
        $dataForm       = [];
        foreach($request->get('data') as $value){
            $dataForm[$value['name']]   = $value['value'];
        }
        /* insert ctv_info */
        $insertCtv      = $this->BuildInsertUpdateModel->buildArrayTableCtvInfo($dataForm);
        $idCtv          = Ctv::insertItem($insertCtv);
        $xhtml          = view('main.congTacVien.noticeRegistry')->render();
        echo $xhtml;
    }

    // public function registration()
    // {
    //     return view('auth.registration');
    // }
      
    // public function customRegistration(Request $request)
    // {  
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6',
    //     ]);
           
    //     $data = $request->all();
    //     $check = $this->create($data);
         
    //     return redirect("dashboard")->withSuccess('You have signed-in');
    // }

    public function createPasswordCtv(Request $request){
        $idCtv      = $request->get('id') ?? 10;
        $password   = 'hitourVN@mk123';
        /* cập nhật password cho CTV */
        Ctv::updateItem($idCtv, ['password' => Hash::make($password)]);
    }    
    
    // public function dashboard()
    // {
    //     if(Auth::check()){
    //         return view('dashboard');
    //     }
  
    //     return redirect("login")->withSuccess('You are not allowed to access');
    // }
    
    // public function signOut() {
    //     Session::flush();
    //     Auth::logout();
  
    //     return Redirect('login');
    // }
}