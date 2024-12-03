<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function __construct() {

        $this->middleware('auth');

    }

    public function continuar()
    {
        $user = auth()->user(); // Obtener el usuario autenticado

        // Verificar el valor de restablecer
        if ($user->restablecer == 1) {
            // Si restablecer es 1, redirigir a la pantalla de cambio de contraseña
            return view('dashboard.user.password', compact('user'));
        } else {
            // Si restablecer no es 1, redirigir a otra pantalla
            return view('welcome');
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::paginate(10);
        return view('dashboard.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $user = new User();
        return view('dashboard.user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'paterno' => 'required|string|max:255',
            'materno' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'nullable|string|min:8|confirmed',
            'admin' => 'required|boolean',
        ]);
    
        // Crear o actualizar el usuario
        $user = new User(); // O si estás actualizando un usuario: $user = User::find($id);
    
        $user->name = $validatedData['name'];
        $user->paterno = $validatedData['paterno'];
        $user->materno = $validatedData['materno'];
        $user->email = $validatedData['email'];
        $user->admin = $validatedData['admin'];
    
        if ($request->filled('password')) {
            $user->restablecer = true; // El usuario debe restablecer la contraseña
            $user->password = bcrypt($validatedData['password']); // Encriptar la contraseña
        }
    
        $user->save();
    
        return redirect()->route('usuarios.index')->with('success', 'Usuario creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.user.show', compact('user'));
    }

    /**
     * Muestra el perfil del usuario, autenticado
     * Permite el cambio de la contraseña
     */
    public function profile(string $id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.user.profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user = User::findOrFail($id);
    
        return view('dashboard.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUserRequest $request, $id)
    {
    
        $user = User::findOrFail($id);
    
        $request->validate([
            'password' => 'nullable|string|min:8|confirmed',  
            'name' => 'nullable|string|max:255',  
            'paterno' => 'nullable|string|max:255',  
            'materno' => 'nullable|string|max:255', 
            'email' => 'nullable|email|unique:users,email,' . $id,
            'admin' => 'nullable|boolean',  
        ]);
        
        //cambio de contraseña
        if ($request->has('password') && !empty($request->password)) {
            $user->password = bcrypt($request->password);
        } 

        //para restablecer contraseañ
        if ($request->password === $request->password_confirmation) {
            
            $user->password = bcrypt($request->password);
            
            $user->restablecer = false;
        }
    
        if ($request->has('name') && !empty($request->name)) {
            $user->name = $request->name;
        }
    
        if ($request->has('paterno') && !empty($request->paterno)) {
            $user->paterno = $request->paterno;
        }
    
        if ($request->has('materno') && !empty($request->materno)) {
            $user->materno = $request->materno;
        }
    
        if ($request->has('email') && !empty($request->email)) {
            $user->email = $request->email;
        }

        if ($request->has('admin')) {
            $user->admin = $request->admin;
        }

        if ($request->has('restablecer')) {
            $user->restablecer = $request->restablecer;
        }
    
        $user->save();
    
        return redirect()->route('usuarios.index')->with('status', 'Usuario actualizado con éxito');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('usuarios.index')->with('status', 'Usuario eliminado con éxito');
    }
}
