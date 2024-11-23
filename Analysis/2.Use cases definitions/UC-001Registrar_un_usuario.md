# ID
 - UC - 001: Registrar un usuario
   
## Actores
 * Administrador

## Precondiciones
 * El administrador debe estar autenticado en el sistema

## Postcondiciones
 * Un nuevo usuario estará registrado con las credenciales correspondientes
   
## Tipo 
 * Primario

## Partes interesadas e intereses:
- El administrador desea registrar un nuevo usuario con la posibilidad de asignarle permisos o dejarlo como usuario 'default'
- Nuevo usuario, desea tener credenciales para acceder al sistema y poder realizar las operaciones que su rol le permitan

## Breve descripción
El admnistrador creará un nuevo usuario para que otro perfil pueda ingresar al sistema

---

## Disparador
- El administrador una vez autenticado, ingresará al apartado de Usuarios, donde seleccionará la opción de "Registrar"

## Flujo normal de eventos (Happy Path)

1. El administrador seleccionará la opción "Registrar" dentro del apartado de usuarios
2. El sistema lo redirigirá a una nueva pantalla
3. El sistema solicitará la siguiente información del nuevo usuario

nombre, apellidos, correo electrónico, usuario y contraseña.

        Nombre:                 _______________

        Apellidos:              _______________

        Correo:                 _______________

        Contraseña:             _______________

        Confirmar contraseña:   _______________

        * Tipo de usuario       
*Para el tipo de usuario realizar un menú desplegable**
>Tomar vista como referencia
---

4. Una vez llenados los campos, él administrador selecciona el botón "CONTINUAR"
4. El sistema muestra de manera resumida los datos del nuevo usuario y los permisos que este tendrá y pregunta si desea continuar/modificar/cancelar la operación
6. El administrador confirma y el caso de uso termina

## Sub-flujo 
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
3. El administrador seleccionará el botón de "CONTINUAR"
4. El caso de uso continua en el paso 5
---
__S-4 En caso de que el administrador cancele el registro__
1. El sistema indicará que se borro la información y limpiara los datos
2. El sistema regresará a la página de registro con los campos vacios
3. El caso de uso continua en el paso 1

### Excepciones
El administrador no llena ningún campo, o los llena de forma parcial y selecciona el botón "REGRESAR", por lo que no se realiza ningún registro nuevo y vuelve a la pantalla de usuarios
 