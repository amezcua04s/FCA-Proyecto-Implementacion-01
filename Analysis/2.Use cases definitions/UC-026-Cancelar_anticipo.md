# ID
 - UC - 026: Cancelar anticipo 
 
## Actores
 * Administrador

## Precondiciones
 * El administrador debe estar autenticado en el sistema
 * El anticipo que se cancelará debe estar previamente registrado en el sistema
 * El anticipo que se cancelará debe estar con estatus activo en el sistema

## Postcondiciones
 * El ancticipo que será cancelado se mostrará como "Reembolso", y se quitará de los proyectos que afectada para que las cantidades no se vean afectadas, sin posibilidad de cambiar de estatus nuevamente
   
## Tipo 
 * Secundario

## Partes interesadas e intereses:
- El cliente que realizó el anticipo desea un reembolso

## Breve descripción
El administrador cancelará un anticipo debido a que el cliente realizó un reembolso, no habrá posibilidad de cambiar de estatus nuevamente

## Disparador
El administrador ingresará al apartado de __*Anticipos*__, donde seleccionará el botón de __"Baja"__ en el proyecto correspondiente

## Flujo normal de eventos (Happy Path)
1. El administrador ingresará al apartado de __*Anticipos*__
2. El administrador seleccionará el botón de __"Baja"__ en el proyecto correspondiente
3. El sistema mostrará la información del anticipo

         Cliente       > Juan Alonso 

         Proyecto      > Proyecto final Implementación

         Monto:        $518,300

         Fecha:        > 22/11/2024

         Método:       > Transferencia

         Referencia:   Página web

         Estatus:      > Aceptado
             
      |Regresar|||||||||Continuar|
      |:-:|:-:|:-:|:-:|:-:|-|-|-|-|:--------:|

>*Tomar vista como referencia**

4. El administrador seleccionará __"Continuar"__
5. El sistema mostrará un recuadro avisando que el anticipo no podrá reactivarse una vez se dé de baja
5. El administrador confirmará la operación
6. El caso de uso termina

## Sub-flujos 
__S-1 En caso de que el administrador seleccione la opción "Cancelar"__
1. El sistema regresará a la pantalla de __*Pagos*__ 
1. El caso de uso terminará

### Excepciones
