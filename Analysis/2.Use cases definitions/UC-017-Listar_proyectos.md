# ID
 - UC - 017: Listar proyectos 
 
## Actores
 * Usuario 

## Precondiciones
 * El usuario debe estar autenticado en el sistema

## Postcondiciones
 * Se mostrarán todos los proyectos que estén registrados en el sistema
   
## Tipo 
 * Funcional

## Partes interesadas e intereses:
- El usuario desea consultar todos los proyectos registrados en el sistema con la posibilidad de gestionarlos

## Breve descripción
Se mostrarán todos los proyectos que estén dados de alta en el sistema

## Disparador
El usuario ingresará a la pantalla de __*Proyectos*__

## Flujo normal de eventos (Happy Path)
1. El administrador ingresa a la vista de __*Proyectos*__
2. El sistema muestra en forma de lista, del más reciente al más antiguo de los proyectos registrados
3. Mostrará el *Nombre*, *Fecha de inicio*, *Total*, *Concepto*, *Comentarios* y *Estatus*
> Mostrar en listas de 6 en 6

|Nombre|Fecha de inicio|Total|Concepto|Comentarios|Estatus|Acciones|
|-|-|-|-|-|-|-|
|Proyecto final Implementación|22/11/2024|$518,300|Página web|Sin comentarios|En progreso|[][][]|
> **Tomar tabla como referencia*
4. El caso de uso termina

## Sub-flujos 
__S-1 En caso de que el usuario seleccione alguna opción de interacción con el registro__
1. El sistema invocará al caso de uso correspondiente
3. Fin del caso de uso