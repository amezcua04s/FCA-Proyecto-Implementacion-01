# ID
 - UC - 019: Registrar pago
 
## Actores
 * Administrador

## Precondiciones
 * El administrador debe estar autenticado en el sistema
 * El proveedor al que se le realizará el pago debe existir en el sistema
 * El proyecto al que pertenece el pago debe existir en el sistema

## Postcondiciones
 * Un nuevo pago será registrado a un proyecto, y se le restará al total del adeudo
   
## Tipo 
 * Primario 

## Partes interesadas e intereses:
- El administrador desea registrar un pago realizado a un proveedor por un proyecto

## Breve descripción
El administrador registrará un nuevo pago que le permita gestionar de forma puntual un proyecto

## Disparador
El administrador ingresará al apartado de __*Pagos*__, donde seleccionará la opción de __"Registrar"__ 

## Flujo normal de eventos (Happy Path)
1. El administrador ingresará al apartado de __*Pagos*__
2. El administrador seleccionará el boton __"Registrar"__ 
3. El sistema invocará al [UC-017-Listar_proyectos](./UC-017-Listar_proyectos.md)
4. El administrador seleccionará la opción __"Agregar"__ del proyecto deseado
3. El sistema mostrará un formulario para el registro del nuevo pago, donde se solicitará;*Proveedor* (al que se le realizó el pago),*Proyecto* (al que pertenece el pago), *Monto del pago*, *Fecha del pago*, *Método* y *Referencia*

         Proveedor     > Seleccione el proveeedor 

         Proyecto      > Seleccione el proyecto

         Monto:        _______________

         Fecha:        > Seleccione la fecha

         Método:       > Seleccione método

         Referencia:   _______________
             
      |Regresar|||||||||Continuar|
      |:-:|:-:|:-:|:-:|:-:|-|-|-|-|:--------:|

*Para el proveedor realizar un menú desplegable**

*Para el proyecto realizar un menú desplegable**

*Para la fecha realizar un menú desplegable**

*Para el método realizar un menú desplegable**

>*Tomar vista como referencia**
6. Una vez llenados los campos, él administrador selecciona el botón __"Continuar"__
5. El sistema muestra de manera resumida los datos del nuevo pago y pregunta si desea __Continuar/Modificar/Cancelar__  la operación
5. El administrador confirma, el sistema muestra los resultados de la operación y el caso de uso termina

## Sub-flujos 
__S-1 En caso de que el proyecto no exista__
1. El sistema dará la opción de __"Registrar proyecto"__ debajo de los proyectos existentes
2. El administrador seleccionará la opción 
3. El sistema invoca al [UC-015-Registrar_proyecto](./UC-015-Registrar_proyecto.md)
4. El caso de uso continua en el paso 5 una vez se registre el proyecto

---

__S-2 En caso de que no existan proveedores o no exista el proveedor deseado__
1. El sistema dará la opción de __"Regisrar proveedor"__ debajo del formulario
2. El administrador seleecionará la opción
3. El sistema invoca al [UC-007-Registrar_proveedor](./UC-007-Registrar_proveedor.md)
4. El caso de uso continua en el paso 5 una vez se registre el proveedor

---

__S-3 En caso de que el administrador deje algún campo vació y deseé continuar__
1. El sistema indicará que no se puede dejar ese campo vació si desea continuar con la operación
1. El sistema solicitará que ingrese los campos faltantes
1. El caso de uso continuará en el paso 3

---

__S-4 En caso de que el administrador ingresé información en un campo y no cumpla el formato__
1. El Sistema indicará que él formato del campo es inválido
1. Solicitará que ingrese de nuevo los campos incorrectos
1. El caso de uso continua en el paso 3

---

__S-5 En caso de que el administrador deseé modificar algún campo del pago por registrar__
1. El sistema mostrará nuevamente la pantalla de llenado de datos, con los datos ingresados previamente
2. El administrador modificará los campos que deseé
3. El administrador seleccionará el botón de __"Continuar"__
4. El caso de uso continua en el paso 4

---

__S-6 En caso de que el administrador cancele el registro__
1. El sistema indicará que se borro la información y limpiara los datos
2. El sistema regresará a la página de registro con los campos vacios
3. El caso de uso continua en el paso 1

---

### Excepciones
El administrador no llena ningún campo, o los llena de forma parcial y selecciona el botón __"Regresar"__, por lo que no se realiza ningún registro nuevo y vuelve a la pantalla de __*Pagos*__
