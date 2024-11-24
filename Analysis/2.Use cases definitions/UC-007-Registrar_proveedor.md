# ID
 - UC - 006: Registrar un proveedor 
 
## Actores
 * Administrador

## Precondiciones
 * El administrador debe estar autenticado en el sistema
 * El proveedor a registrar no debe estar registrado previamente en el sistema

## Postcondiciones
 * Un nuevo proveedor estará registrado en el sistema
   
## Tipo 
 * Primario

## Partes interesadas e intereses:
- El administrador desea registar un nuevo proveedor para llevar control de futuros proyectos

## Breve descripción
Se registrará un nuevo proveedor con la información importante de este para la gestión de futuros proyectos

## Disparador
El administrador ingresará al apartado de __*Proveedores*__, donde seleccionará la opción de __"Registrar"__

## Flujo normal de eventos (Happy Path)
1. El administrador ingresará al apartado de __*Proveedores*__
1. El administrador seleccionará el botón __"Registrar"__ dentro del apartado de proveedores
1. El sistema mostrará un formulario para el registro del proveedor, donde solicitará;  *Razón social*, *Persona Física o Moral*, *RFC*, *Domicilio Fiscal*, *Email* y *Teléfono*


         Razón social:        _______________

         * Tipo de persona    > Seleccione tipo de persona

         RFC:                 _______________

         Domicilio:           _______________

         Correo:              _______________

         Teléfono:            _______________
             
      |Regresar|||||||||Continuar|
      |:-:|:-:|:-:|:-:|:-:|-|-|-|-|:--------:|

*Para el tipo de persona realizar un menú desplegable**
>Tomar vista como referencia
---
3. Una vez llenados los campos, él administrador selecciona el botón __"Continuar"__
3. El sistema muestra de manera resumida los datos del nuevo proveedor y pregunta si desea __Continuar/Modificar/Cancelar__  la operación
4. El administrador confirma, el sistema muestra los resultados de la operación y el caso de uso termina

## Sub-flujos
__S-1 En caso de que el administrador deje algún campo vació y deseé continuar__
1. El sistema indicará que no se puede dejar ese campo vació si desea continuar con la operación
1. El sistema solicitará que ingrese los campos faltantes
1. El caso de uso continuará en el paso 3
---
__S-2 En caso de que el administrador ingresé información en un campo y no cumpla el formato__
1. El Sistema indicará que él formato del campo es inválido
1. Solicitará que ingrese de nuevo los campos incorrectos
1. El caso de uso continua en el paso 3
---
__S-3 En caso de que el administrador deseé modificar algún campo del proveedor por registrar__
1. El sistema mostrará nuevamente la pantalla de llenado de datos, con los datos ingresados previamente
2. El administrador modificará los campos que deseé
3. El administrador seleccionará el botón de __"Continuar"__
4. El caso de uso continua en el paso 4
---
__S-4 En caso de que el administrador cancele el registro__
1. El sistema indicará que se borro la información y limpiara los datos
2. El sistema regresará a la página de registro con los campos vacios
3. El caso de uso continua en el paso 1
---
### Excepciones
El administrador no llena ningún campo, o los llena de forma parcial y selecciona el botón __"Regresar"__, por lo que no se realiza ningún registro nuevo y vuelve a la pantalla de __*Proveedores*__
