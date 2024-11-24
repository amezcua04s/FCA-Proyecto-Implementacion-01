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
2. El usuario sin autenticar ingresa sus credenciales en los campos correspondientes

        Correo:                 ejemplo@dominio.com

        Contraseña:             ********

   |||||||||Continuar|||||||||
   |-|-|-|-|-|:-:|:-:|:-:|-|-|-|:-:|-|-|-|-|-|
   >> Tomar vista como referencia
   ---
3. El usuario da click en __*Continuar*__
4. El sistema verificará que los datos ingresados sean correctos
5. El sistema redirigirá al usuario autenticado a la página principal

## Sub-flujos 
__S-1 En caso de que el usuario ingrese un correo que no respete el formato esperado__
1. El sistema mostrará que el formato de correo es incorrecto
2. El caso de uso continua en el paso 2
---
__S_2 En caso de que el usuario ingrese un correo sin registrar en el sistema__
1. El sistema mostrará que ese correo no está registrado en el sistema en forma de un modal
1. El caso de uso continua en el paso 2
---
__S-3 En caso de que el usuario ingrese una contraseña incorrecta__
1. El sistema mostrará que la contraseña es incorrecta y que la ingrese de nuevo
2. El caso de uso continuará en el paso 2
---
__S-4 En caso de que el usuario haya solicitado un cambio de contraseña__
1. El sistema le permitirá ingresar con las credenciales temporales
2. El sistema redirigirá al usuario a una pantalla donde deberá escribir la nueva contraseña
3. El sistema mostrará en forma de formulario la contraseña nueva y su confirmación
        
        Correo:                 ejemplo@dominio.com

        Contraseña:             _______________

        Confirmar contraseña:   _______________

   |||||||||Continuar|||||||||
   |-|-|-|-|-|:-:|:-:|:-:|-|-|-|:-:|-|-|-|-|-|

   I. En caso de que el usuario no ingrese contraseñas que coincidan

   II. El sistema indicará que no coinciden y que lo intente de nuevo

   III. El flujo continua en el subflujo S-4 en el paso 3

4. El sistema guardará la contraseña nueva para futuros ingresos
5. El caso de uso termina


### Excepciones
>> TO DO