# ID
 - UC - 003: Baja de un usuario
   
## Actores
 * Administrador

## Precondiciones
 * El administrador debe estar autenticado en el sistema
 * El usuario que desean dar de baja debe estar registrado en el sistema

## Postcondiciones
 * El usuario que se dará de baja cambiará su estatus a "inactivo", pero los datos seguirán existiendo pero se mostrará como un usuario inactivo, sin posibilidad de reactivarse
   
## Tipo 
 * Secundario

## Partes interesadas e intereses:
- El administrador desea dar de baja el perfil de un usuario 

## Breve descripción
El administrador dará de baja a un usuario del sistema, esto gracias a sus permisos

## Disparador
El administrador, en la página dode se encuentran todos los usuarios, seleccionará el botón de __"Baja"__ en el usuario correspondiente 

## Flujo normal de eventos (Happy Path)
1. El administrador ingresará al apartado de __*Usuarios*__
2. El administrador seleccionará el botón de __"Baja"__ del perfil que deseé dar de baja
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
4. El administrador seleccionará __"Continuar"__
5. El sistema mostrará un recuadro avisando que el usuario no podrá reactivarse una vez se dé de baja
5. El administrador confirmará la operación
6. El caso de uso termina

## Sub-flujos
__S-1 En caso de que el administrador seleccione la opción "Cancelar"__
1. El sistema regresará a la pantalla de __*Usuarios*__ 
1. El caso de uso terminará

### Excepciones
>> TO DO
