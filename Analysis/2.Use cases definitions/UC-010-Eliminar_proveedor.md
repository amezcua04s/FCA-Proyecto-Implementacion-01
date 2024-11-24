# ID
 - UC - 010: Eliminar proveedor 
 
## Actores
 * Administrador

## Precondiciones
 * El administrador debe estar autenticado en el sistema
 * El proveedor que se desea dar de baja debe estar previamente registrado en el sistema
 * El proveedor no debe de estar asociado a ningún proyecto activo

## Postcondiciones
 * El proveedor que se dará de baja cambiará su estatus a "inactivo", pero los datos y registros en los que el proveedor haya participado no se cambiarán, sin posibilidad de reactivarse
   
## Tipo 
 * Secundario

## Partes interesadas e intereses:
- El administrador desea dar de baja a un proveedor

## Breve descripción
El administrador dará de baja a un proveedor del sistema, ya no podrá ser utilizado para futuros proyectos, ni pagos

## Disparador
El administrador ingresará al apartado de __*Proveedores*__, donde seleccionará el botón de __"Baja"__ en el proveedor correspondiente

## Flujo normal de eventos (Happy Path)
1. El administrador ingresará al apartado de __*Proveedores*__
2. El administrador seleccionará el botón de __"Baja"__ del proveedor que deseé dar de baja
3. El sistema mostrará la información del proveedor en pantalla

      Razón social:         Patito S.A. de C.V.

      * Tipo de persona     > Moral

      RFC:                  EXT990101NI1

      Domicilio:            Calle 5 de Mayo número 23, Colonia Centro, Guadalajara, Jalisco, C.P. 44100.

      Correo:               ejemplo@dominio.com

      Teléfono:             (+52)5512345678

      Activo                [X] 
   |Cancelar|||||||||Continuar|
   |:-:|:-:|:-:|:-:|:-:|-|-|-|-|-|
   
   >*Tomar tabla como referencia***
---
4. El administrador seleccionará __"Continuar"__
5. El sistema mostrará un recuadro avisando que el proveedor no podrá reactivarse una vez se dé de baja
5. El administrador confirmará la operación
6. El caso de uso termina

## Sub-flujos 
__S-1 En caso de que el administrador seleccione la opción "Cancelar"__
1. El sistema regresará a la pantalla de __*Proveedores*__ 
1. El caso de uso terminará

### Excepciones
>> TO DO