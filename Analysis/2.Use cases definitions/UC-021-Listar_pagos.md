# ID
 - UC - 021: Listar pagos 
 
## Actores
 * Administrados

## Precondiciones
 * El administrador debe estar autenticado en el sistema

## Postcondiciones
 * Se mostrarán todos los pagos que estén registrados en el sistema
   
## Tipo 
 * Funcional

## Partes interesadas e intereses:
- El administrador desea consultar todos los pagos registrados en el sistema con la posibilidad de gestionarlos

## Breve descripción
Se mostrarán todos los pagos que estén dados de alta en el sistema

## Disparador
El administrador ingresará a la pantalla de __*Pagos*__

## Flujo normal de eventos (Happy Path)
1. El administrador ingresa a la vista de __*Pagos*__
2. El sistema muestra en forma de lista, del más reciente al más antiguo de los pagos registrados
3. Mostrará el *Proveedor* (al que se le realizó el pago), *Proyecto* (al que pertenece), *Monto*, *Fecha*, *Método* (Déposito o Transferencia), *Referencia* y *Estatus* en forma de tabla
> Mostrar en listas de 10 en 10

|Proveedor|Proyecto|Monto|Fecha|Método|Referencia|Estatus|Acciones|
|-|-|-|-|-|-|-|-|
|Patito S.A. de C.V.|Proyecto final Implementación|$518,300|22/11/2024|Transferencia|Pago completo|Aceptado|[][][]|
> **Tomar tabla como referencia*


## Sub-flujos 
__S-1 En caso de que el usuario seleccione alguna opción de interacción con el registro__
1. El sistema invocará al caso de uso correspondiente
3. Fin del caso de uso
