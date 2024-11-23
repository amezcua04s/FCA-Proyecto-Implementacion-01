# ID
 - UC - 003: Baja de un usuario
   
## Actores
 * Administrador

## Precondiciones
 * El administrador debe estar autenticado en el sistema
 * El usuario que desean dar de baja debe estar registrado en el sistema

## Postcondiciones
 * El usuario que se dará de baja cambiará su estatus a "inactivo", pero los datos seguirán existiendo pero ya no se mostrará como un usuario
   
## Tipo 
 * Secundario

## Partes interesadas e intereses:
- El administrador desea dar de baja el perfil de un usuario 

## Breve descripción
El administrador dará de baja a un usuario del sistema, esto gracias a sus permisos

## Disparador
El administrador, en la página dode se encuentran todos los usuarios, seleccionará el botón de "BAJA" en el usuario correspondiente 

## Flujo normal de eventos (Happy Path)
1. El administrador ingresará al apartado de usuarios
2. El administrador seleccionará la opción de "Eliminar" del perfil que deseé dar de baja
3. El sistema mostrará la información del usuario en pantalla


        Nombre:                 Michael

        Apellidos:              Smith

        Correo:                 ejemplo@dominio.com

        Contraseña:             ********

        * Tipo de usuario       > Usuario

   |Cancelar|||||||||Continuar|
   |:-:|:-:|:-:|:-:|:-:|-|-|-|-|:--------:|
>> Tomar vista como referencia
---
4. El administrador seleccionará "Continuar"
6. El caso de uso termina

## Sub-flujo 
__S-1 En caso de que el administrador seleccione la opción "Cancelar"__
1. El sistema regresará a la pantalla de usuarios 
1. El caso de uso terminará

### Excepciones
>> TO DO
