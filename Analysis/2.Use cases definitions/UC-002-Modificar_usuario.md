# ID
 - UC - 002: Modificar usuario
   
## Actores
 * Administrador

## Precondiciones
 * El administrador debe estar autenticado en el sistema
 * El usuario a registrar debe estar previamente registrado en el sistema

## Postcondiciones
 * El ususario registrado tendrá información diferente a la que previamente tenía
   
## Tipo 
 * Secundario

## Partes interesadas e intereses:
- El usuario desea cambiar datos sobre los registros de su perfil 

## Breve descripción
Un usuario desea modificar datos guardados en su perfil, por lo que el administrador, qué es el único capaz de hacerlo lo realizará

## Disparador
El administrador, en la página dode se encuentran todos los usuarios, seleccionará el botón de "EDITAR" en el usuario correspondiente 

## Flujo normal de eventos (Happy Path)
1. El administrador ingresa a la vista de todos los usuarios
2. El administrador busca el perfil del usuario que desea modificar
3. El administrador selecciona la opción "EDITAR" en el perfil del usuario correspondiente
4. El sistema mostrará la información del usuario además de opciones adicionales a modificar

        
        Nombre:                 Michael

        Apellidos:              Smith

        Correo:                 ejemplo@dominio.com

        Contraseña:             ********

        ¿Cambiar contraseña?   []

        * Tipo de usuario       > Usuario
---
*Para el tipo de usuario realizar un menú desplegable**

*Para cambiar contraseña realizar un cuadro interactivo [] y si se deja vació, entenderlo como NO**
>Tomar vista como referencia

5. El administrador sobreescribirá los datos que se deseen modificar y si lo requiere, seleccionara el cambio de la contraseña
6. El administrador selecciona el botón de "GUARDAR"
7. El sistema muestra un antes y un después de los cambios y pregunta si desea __Continuar/Modificar/Cancelar__ la operación
8. El administrador confirma, el sistema guarda los cambios y muestra un mensaje del resultado de la operación
9. El caso de uso termina

---
## Sub-flujos
__S-1 En caso de que el administrador ingrese un correo eléctronico inválido__
1. El sistema mostrará el error debajo del recuadro del correo eléctronico y solicitará que ingrese uno válido
2. El caso de uso continua en el paos 4
---
__S-2 En caso de que el administrador seleccione la opción "Modificar" a la hora de que el sistema muestre los cambios__
1. El sistema regresará a la pantalla anterior con los datos que ya ha modificado
2. El caso de uso continua en el paso 4
---
__S-3 En caso de que el administrador selecciona la opción "Cancelar" a la hora de que el sistema muestre los cambios__
1. El sistema regresará a la pantalla de usuarios
1. El caso de uso terminará

### Excepciones
>> TO DO
