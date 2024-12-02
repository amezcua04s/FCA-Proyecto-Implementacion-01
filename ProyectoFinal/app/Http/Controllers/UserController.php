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
            return view('dahboard.user.password', compact('user'));
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
    public function update(StoreUserRequest $request, $id, $option)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user->password = bcrypt($request->password);
        $user->restablecer = false;
        $user->save();
        return redirect()->route('usuarios.index')->with('status', 'Contraseña actualizada con éxito');
        
        
        $data = $request->validated();

        // Si la contraseña no está vacía, encripta y actualiza
        if (!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        // Actualiza el usuario con los datos validados
        $user->update($data);

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
