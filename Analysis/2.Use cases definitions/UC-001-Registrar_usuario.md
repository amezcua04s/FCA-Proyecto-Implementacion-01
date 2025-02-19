# ID
 - UC - 001: Registrar un usuario
   
## Actores
 * Administrador

## Precondiciones
 * El administrador debe estar autenticado en el sistema
 * El correo eléctronico a registrar no debe estar previamente registrado como usuario activo

## Postcondiciones
 * Un nuevo usuario estará registrado con las credenciales correspondientes
   
## Tipo 
 * Primario

## Partes interesadas e intereses:
- El administrador desea registrar un nuevo usuario 
- Nuevo usuario, desea tener credenciales para acceder al sistema 

## Breve descripción
El admnistrador creará un nuevo usuario con la posibilidad de asignarle permisos de administrador o dejarlo como usuario 'default'

---

## Disparador
El administrador ingresará al apartado de __*Usuarios*__, donde seleccionará la opción de __"Registrar"__

## Flujo normal de eventos (Happy Path)
1. El administrador ingresará al apartado de __*Usuarios*__
1. El administrador seleccionará el botón __"Registrar"__ dentro del apartado de usuarios
2. El sistema lo redirigirá a una nueva pantalla
3. El sistema solicitará la siguiente información del nuevo usuario; *Nombre*, *Apellidos*, *Correo eléctronico*, *Tipo de usuario* y *contraseña*

        Nombre:                 _______________

        Apellidos:              _______________

        Correo:                 _______________

        Contraseña:             _______________

        Confirmar contraseña:   _______________

        * Tipo de usuario       Seleccione tipo de usuario     
           
|Cancelar|||||||||Continuar|
|:-:|:-:|:-:|:-:|:-:|-|-|-|-|:--------:|

*Para el tipo de usuario realizar un menú desplegable**
>Tomar vista como referencia
---

4. Una vez llenados los campos, él administrador selecciona el botón __"Continuar"__
4. El sistema muestra de manera resumida los datos del nuevo usuario y los permisos que este tendrá y pregunta si desea __Continuar/Modificar/Cancelar__  la operación
6. El administrador confirma, el sistema muestra los resultados de la operación y el caso de uso termina

## Sub-flujos
__S-1 En caso de que el administrador ingresé un correo no válido__
1. Se ingresa un correo inválido
2. El sistema indica que no sigue el formato esperado (error)
3. Solicitará que lo intente nuevamente
4. El caso de uso continua en el paso 3
---
__S-2 En caso de que el Administrador ingrese contraseñas diferentes en ambos campos__
1. Se ingresan contraseñas que no coinciden
2. El sistema indica que no coinciden y pide que vuelva a ingresar la segunda contraseña
3. El caso de uso continua en el paso 3
---
__S-3 En caso de que el administrador deseé modificar algún campo del usuario por registrar__
1. El sistema mostrará nuevamente la pantalla de llenado de datos con todos los datos disponibles
2. El administrador modificará los campos que deseé
3. El administrador seleccionará el botón de __"Continuar"__
4. El caso de uso continua en el paso 5
---
__S-4 En caso de que el administrador cancele el registro__
1. El sistema indicará que se borro la información y limpiara los datos
2. El sistema regresará a la página de registro con los campos vacios
3. El caso de uso continua en el paso 1

### Excepciones
El administrador no llena ningún campo, o los llena de forma parcial y selecciona el botón __"Regresar"__, por lo que no se realiza ningún registro nuevo y vuelve a la pantalla de usuarios
 