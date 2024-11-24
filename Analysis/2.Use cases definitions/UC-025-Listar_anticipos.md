# ID
 - UC - 025: Listar anticipos 
 
## Actores
 * Administrador

## Precondiciones
 * El administrador debe estar autenticado en el sistema

## Postcondiciones
 * Se mostrarán todos los pagos que estén registrados en el sistema
   
## Tipo 
 * Funcional

## Partes interesadas e intereses:
- El administrador desea consultar todos los anticipos registrados en el sistema con la posibilidad de gestionarlos

## Breve descripción
Se mostrarán todos los anticipos que estén registrados en el sistema 

## Disparador
El administrador ingresará a la pantalla de __*Anticipos*__

## Flujo normal de eventos (Happy Path)
1. El administrador ingresa a la vista de __*Anticipos*__
2. El sistema muestra en forma de lista, del más reciente al más antiguo de los anticipos registrados
3. Mostrará el *Cliente* (qué realizo el anticipo), *Proyecto* (al cuál pertenece el anticipo), *Monto*, *Fecha*, *Método* (Déposito o Transferencia), *Referencia* y *Estatus* en forma de tabla
> Mostrar en listas de 10 en 10

|Cliente|Proyecto|Monto|Fecha|Método|Referencia|Estatus|Acciones|
|-|-|-|-|-|-|-|-|
|Juan Alonso|Proyecto final Implementación|$518,300|22/11/2024|Transferencia|Pago completo|Aceptado|[][][]|
> **Tomar tabla como referencia*

## Sub-flujos 
__S-1 En caso de que el usuario seleccione alguna opción de interacción con el registro__
1. El sistema invocará al caso de uso correspondiente
3. Fin del caso de uso