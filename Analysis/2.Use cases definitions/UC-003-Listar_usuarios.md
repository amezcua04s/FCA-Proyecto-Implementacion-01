# ID
 - UC - 003: Listar usuarios 
 
## Actores
 * Usuario

## Precondiciones
 * El usuario debe estar autenticado en el sistema

## Postcondiciones
 * Se mostrarán todos los usuarios registrados en el sistema
   
## Tipo 
 * Funcional

## Partes interesadas e intereses:
- El usuario desea ver todos los usuarios que cuenten con credenciales en el sistema

## Breve descripción
Se mostrarán todos los usuarios que esten dados de alta en el sistema

## Disparador
El usuario ingresará a la pantalla de __*Usuarios*__

## Flujo normal de eventos (Happy Path)
1. El usuario ingresa a la vista de __*Usuarios*__
2. El sistema muestra en forma de lista, del más reciente al más antiguo los usuario registrados
3. Mostrará el *Nombre*, *Apellidos*, *Correo*, *Rol* y *Estatus*
> Mostrar en listas de 10 en 10

|Nombre|Apellidos|Correo|Rol|Estatus|Acciones|
|-|-|-|-|-|-|
|Michael|Smith J.|ejemplo@dominio.com|Usuario|Activo|[][][]|
> **Tomar tabla como referencia*
3. El caso de uso termina

## Sub-flujos 
__S-1 En caso de que el usuario seleccione alguna opción de interacción con el registro__
1. El sistema debe verificar que el usuario cuente con los permisos necesarios
2. El sistema invocará al caso de uso correspondiente
3. El caso de uso termina