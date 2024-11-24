# ID
 - UC - 002: Modificar usuario
   
## Actores
 * Administrador

## Precondiciones
 * El administrador debe estar autenticado en el sistema
 * El usuario a registrar debe estar previamente registrado en el sistema

## Postcondiciones
 * El ususario a modificar tendrá datos diferentes a los que previamente tenía
   
## Tipo 
 * Secundario

## Partes interesadas e intereses:
- El usuario desea cambiar datos sobre los registros de su perfil 

## Breve descripción
Un usuario desea modificar datos guardados en su perfil, por lo que el administrador, qué es el único capaz de hacerlo lo realizará

## Disparador
El administrador ingresará al apartado de __*Usuarios*__, seleccionara el botón __"Editar"__ en el usuario correspondiente

## Flujo normal de eventos (Happy Path)
1. El administrador ingresará al apartado de __*Usuarios*__
1. El administrador seleccionará el botón __"Editar"__ en el perfil del usuario correspondiente
4. El sistema mostrará la información del usuario además de opciones adicionales a modificar

        
        Nombre:                 Michael

        Apellidos:              Smith

        Correo:                 ejemplo@dominio.com

        Contraseña:             ********

        ¿Cambiar contraseña?   []

        * Tipo de usuario       > Usuario

        * Activo                [X]
   |Regresar|||||||||Guardar|
   |:-:|:-:|:-:|:-:|:-:|-|-|-|-|-|
---
*Para el tipo de usuario realizar un menú desplegable**

*Para cambiar contraseña realizar un cuadro interactivo [] y si se deja vació, entenderlo como __NO__**
>Tomar vista como referencia
---
5. El administrador sobreescribirá los datos que se deseen modificar y si lo requiere, seleccionara el cambio de la contraseña si así lo desea
6. El administrador selecciona el botón de __"Guardar"__
7. El sistema pregunta si desea continuar, ya que si realiza cambios no podrá regresar a la información anterior si no de forma manual... __Cancelar/Modificar/Continuar__ la operación
8. El administrador confirma, el sistema guarda los cambios y muestra un mensaje del resultado de la operación
9. El caso de uso termina

---
## Sub-flujos
__S-1 En caso de que el administrador ingrese un correo con formato inválido__
1. El sistema mostrará el error debajo del recuadro del correo eléctronico y solicitará que ingrese uno válido
2. El caso de uso continua en el paso 4

__S-2 En caso de que el administrador seleccione la opción de cambiar contraseña__
1. El sistema mostrará al final de la operación la nueva contraseña, avisando que se deberá cambiar en el próximo inicio de sesión
2. El caso de uso continua en el paso 7
---
__S-3 En caso de que el administrador seleccione la opción "Modificar" a la hora de que el sistema pregunte si desea continuar__
1. El sistema regresará a la pantalla anterior con los datos que ya ha modificado
2. El caso de uso continua en el paso 4
---
__S-4 En caso de que el administrador selecciona la opción "Cancelar" a la hora de que el sistema pregunte si desea continuar__
1. El sistema regresará a la pantalla de usuarios
1. El caso de uso terminará

### Excepciones
>> TO DO
