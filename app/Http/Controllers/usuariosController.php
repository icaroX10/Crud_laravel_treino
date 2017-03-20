<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

use App\Usuario;

class usuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required',
            'tipousuario' => 'required',
        ]);
        
        $usuario = new Usuario;
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->senha = bcrypt($request->senha);
        $usuario->tipousuario = $request->tipousuario;
        $usuario->save();
        if($usuario){
            return redirect('login')->with('message', 'Usuario Criado com sucesso!');    
        }else{
            return "Erro ao cadastrar";
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        if(!$usuario){
            abort(404);
        }
        return view('usuario.details')->with('detailpage', $usuario);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        if(!$usuario){
            abort(404);
        }
        return view('usuario.edit')->with('detailpage', $usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required',
            'tipousuario' => 'required',
        ]);
        
        $usuario = Usuario::find($id);
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;
        $usuario->tipousuario = $request->tipousuario;
        $usuario->save();
        return redirect('usuario')->with('message', 'Usuario editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect('index')->with('message', 'Usuario apagado com sucesso!');
    }
    
    public function login(Request $request)
    {
        return view('usuario.login');
    }
    
    public function logar(Request $request)
    {
        $email= $request->input('email');
        $senha = $request->input('senha');
        $todosuser = Usuario::all();
        
        $user = Usuario::where('email' , $email)->get();
        $tip_user = Usuario::find($email);
        foreach($user as $value){
          if(crypt($senha, $value->senha) == $value->senha){
            $request->session()->put('key', $value);
            $usuario = $request->session()->get('key');
            return view('usuario.index',['todosusuarios'=> $todosuser]);
         }else{
              echo "<script>alert('Email ou Senha incorreto ');</script>";
              return view('usuario.login');
          }
        } 
    }
    
    public function showAll(){
        $todosuser = Usuario::all();
        return view('usuario.index',['todosusuarios'=> $todosuser]);
    }
    
    public function logout(Request $request)
    {
        $request->session()->flush();
        return view('index');
    }
}
