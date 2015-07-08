<?php namespace baibai\Http\Controllers;

use baibai\Http\Requests\EditUserRequest;
use baibai\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use baibai\Http\Requests\CreateUserRequest;

class UserController extends Controller {



    public function showUsers()
    {
        $users=User::paginate(15);
        return view('CRUD.Users.showUsers',compact('users'));
    }

    public function createUser()
    {
        $types=$this->types();
        return view('CRUD.Users.createUser',compact('types'));
    }

    public function saveUser(CreateUserRequest $request)
    {
        $user=User::create($request->all());
        return Redirect::back()->with('message','el usuario fue creado correctamente');
    }

    public function editUser($id)
    {
        $user=User::findOrFail($id);
        $types=$this->types();
        return view('CRUD.Users.editUser',compact('user','types'));
    }

    public function updateUser(EditUserRequest $request,$id)
    {
        $user=User::find($id);
        $user->fill($request->all());
        $user->save();
        return Redirect::back()->with('message','el usuario fue actualizado correctamente');
    }

    public function deleteUser($id){
        $user=User::find($id);
        if($user->delete())
        {
            $message='el usuario '.$user->full_name.'  fue eliminado exitosamente';
            return Redirect::back()->with('message',$message);
        }
        $message='el usuario '.$user->full_name.' no pudo ser eliminado';
        return Redirect::back()->with('message_error',$message);
    }

    private function types()
    {
        return $types=[
            ''          =>'seleccione Cuenta',
            '1'         =>'Super Administrador',
            '2'         =>'Administrador','3'=>'Tecnico',
            '4'         =>'Cliente'
        ];
    }

}
