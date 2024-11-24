# ID
 - UC - 015: Registrar un proyecto
   
## Actores
 * Administrador

## Precondiciones
 * El administrador debe estar autenticado en el sistema
 * Debe existir al menos un proovedor y un cliente al que se les pueda asignar el proyecto
 * La fecha de inicio no puede ser menor a la fecha del día de hoy


## Postcondiciones
 * Un nuevo proyecto estará registrado en el sistema
   
## Tipo 
 * Primario

## Partes interesadas e intereses:
- El administrador desea registrar un nuevo proyecto para la gestión de este 

## Breve descripción
Se registrará un nuevo proyecto con la información importante para llevar su gestión

## Disparador
El administrador ingresará al apartado de __*Proyectos*__, donde seleccionará la opción de __"Registrar"__

## Flujo normal de eventos (Happy Path)
1. El administrador ingresará al apartado de __*Proyectos*__
2. El administrador seleccionará el botón __"Registrar"__ dentro del apartado de proyectos
3. El sistema mostrará un formulario para el registro del proyecto, donde solicitará; *Nombre*, *Fecha de inicio*, *Subtotal*, *IVA*, *Concepto* y *Comentarios* 


         Nombre:              _______________

         * Fecha de inicio    > Seleccione fecha

         Subtotal:            _______________

         IVA:                 _______________

         Total:               (Valor calculado)

         Concepto:            _______________
         
         Comentarios:         _______________
             
      |Regresar|||||||||Continuar|
      |:-:|:-:|:-:|:-:|:-:|-|-|-|-|:--------:|
      *Para la fecha realizar un menú desplegable**
>Tomar vista como referencia
---
4. Una vez llenados los campos, él administrador selecciona el botón __"Continuar"__
5. El sistema muestra de manera resumida los datos del nuevo proyecto y pregunta si desea __Continuar/Modificar/Cancelar__  la operación
6. El administrador confirma, el sistema muestra los resultados de la operación y el caso de uso termina

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
__S-3 En caso de que el administrador deseé modificar algún campo del proyecto por registrar__
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
El administrador no llena ningún campo, o los llena de forma parcial y selecciona el botón __"Regresar"__, por lo que no se realiza ningún registro nuevo y vuelve a la pantalla de __*Proyectos*__