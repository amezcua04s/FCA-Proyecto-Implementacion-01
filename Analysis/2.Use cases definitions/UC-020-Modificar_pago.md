# ID
 - UC - 020: Modificar pago 
 
## Actores
 * Administrador

## Precondiciones
 * El administrador debe estar autenticado en el sistema
 * El pago que se va a modificar debe estar previamente registrado en el sistema

## Postcondiciones
 * El pago a modificar tendrá información diferente a la que tenía antes de la operación 
   
## Tipo 
 * Secundario

## Partes interesadas e intereses:
- El administrador desea modificar la información de un pago con el fin de tener un control más exacto de este y las partes que afecta

## Breve descripción
El administrador modificará dato o datos de un pago previamente registrado, esto en caso de que sea necesario cambiar información y mantener mayor certeza de los datos almacenados

## Disparador
El administrador ingresará al apartado de __*Pagos*__, selecciona el botón __"Editar"__ en el pago correspondiente

## Flujo normal de eventos (Happy Path)
1. El administrador ingresará al apartado de __*Pagos*__
2. El administrador selecciona el botón __"Editar"__ del pago correspondiente
3. El sistema mostrará la información del pago donde el administrador podrá sobreescribir la información existente

         Proveedor   > Patito S.A. de C.V. 

         Proyecto    > Proyecto final Implementación

         Monto:        $518,300

         Fecha:        > 22/11/2024

         Método:       > Transferencia

         Referencia:   > Página web

         Estatus:      > Aceptado
             
      |Regresar|||||||||Guardar|
      |:-:|:-:|:-:|:-:|:-:|-|-|-|-|:--------:|

*Para el proveedor realizar un menú desplegable**

*Para el proyecto realizar un menú desplegable**

*Para la fecha realizar un menú desplegable**

*Para el método realizar un menú desplegable**

>*Tomar vista como referencia**
4. El administrador sobreescribirá o reemplazará los datos que se deseen modificar, a excepción del estatus
5. El administrador selecciona el botón de __"Guardar"__
6. El sistema pregunta si desea continuar, ya que si realiza cambios no podrá regresar a la información anterior si no de forma manual... __Cancelar/Modificar/Continuar__ la operación
7. El administrador confirma, el sistema guarda los cambios y muestra un mensaje del resultado de la operación
8. El caso de uso termina
---
## Sub-flujos 
__S-1 En caso de que el administrador ingrese un campo con formato inválido__
1. El sistema mostrará el error debajo del campo y solicitará que ingrese uno válido
2. El caso de uso continua en el paso 3
---
__S-2 En caso de que el administrador seleccione la opción "Modificar" a la hora de que el sistema pregunte si desea continuar__
1. El sistema regresará a la pantalla anterior con los datos que ya ha modificado para que continue con la sobreescritura
2. El caso de uso continua en el paso 3
---
__S-3 En caso de que el administrador selecciona la opción "Cancelar" a la hora de que el sistema pregunte si desea continuar__
1. El sistema regresará a la pantalla de __*Pagos*__
1. El caso de uso terminará

### Excepciones
> TO DO