# ID
 - UC - 004: Iniciar sesión
   
## Actores
 * Usuario interesado a utilizar el sistema

## Precondiciones
 * El usuario que desea iniciar sesión debe tener credenciales registradas previamente en el sistema

## Postcondiciones
 * El sistema autenticará al usuario y le permitirá ingresar al sistema y realizar las acciones según este autorizado
   
## Tipo 
 * Funcional

## Partes interesadas e intereses:
 * Como interesado del sistema desea delimitar quién tiene acceso al sistema

## Breve descripción
- Un usuario con credenciales previamente registradas en el sistema desea hacer uso del sistema mediante el uso de sesión, el cuál requiere sus credenciales

## Disparador
- Cualquier persona con un navegador web ingresa al URL que dirige a la página de inicio de sesión

## Flujo normal de eventos (Happy Path)
1. El sistema solicita en forma de formulario los datos correspondientes
1. El usuario sin autenticar ingresa sus credenciales en los campos correspondientes

        Correo:                 ejemplo@dominio.com

        Contraseña:             ********

   |||||||||Continuar|||||||||
   |-|-|-|-|-|:-:|:-:|:-:|-|-|-|:-:|-|-|-|-|-|
   >> Tomar vista como referencia
   ---
2. El sistema verificará que los datos ingresados sean correctos
3. El sistema redirigirá al usuario autenticado a la página principal

## Sub-flujo 
__S-1 En caso de que el usuario ingrese un correo que no respete el formato esperado__
1. El sistema mostrará que el formato de correo es incorrecto
2. El caso de uso continua en el paso 2

__S_2 En caso de que el usuario ingrese un correo sin registrar en el sistema__
1. El sistema mostrará que ese correo no está registrado en el sistema en forma de un modal
1. El caso de uso continua en el paso 2

__S-3 En caso de que el usuario ingrese una contraseña incorrecta__
1. El sistema mostrará que la contraseña es incorrecta y que la ingrese de nuevo
2. El caso de uso continuará en el paso 2

### Excepciones
>> TO DO