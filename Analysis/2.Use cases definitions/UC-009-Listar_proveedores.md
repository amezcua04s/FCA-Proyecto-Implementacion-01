# ID
 - UC - 009: Listar proveedores 
 
## Actores
 * Administrador

## Precondiciones
 * El administrador debe estar autenticado en el sistema

## Postcondiciones
 * Se mostrarán todos los proveedores que esten registrados en el sistema
   
## Tipo 
 * Funcional

## Partes interesadas e intereses:
- El administrador desea ver todos los proveedores que esten registrados en el sistema con posibilidad de gestionarlos

## Breve descripción
Se mostrarán todos los proveedores que estén dados de alta en el sistema

## Disparador
El administrador ingresará a la pantalla de __*Proveedores*__

## Flujo normal de eventos (Happy Path)
1. El administrador ingresa a la vista de __*Proveedores*__
2. El sistema muestra en forma de lista, del más reciente al más antiguo de los proveedores registrados
3. Mostrará la *Razón*, *Tipo*, *RFC*, *Domicilio*, *Correo*, *Teléfono* y *Estatus*
> Mostrar en listas de 10 en 10

|Razón|Tipo|RFC|Domicilio|Correo|Telefono|Estatus|Acciones|
|-|-|-|-|-|-|-|-|
|Patito S.A. de C.V.|Moral|EXT990101NI1|Calle 5 de Mayo número 23, Colonia Centro, Guadalajara, Jalisco, C.P. 44100.|ejemplo@dominio.com|(+52)5512345678|Activo|[][][]|
> **Tomar tabla como referencia*
3. El caso de uso termina

## Sub-flujos 
__S-1 En caso de que el usuario seleccione alguna opción de interacción con el registro__

1. El sistema invocará al caso de uso correspondiente
3. Fin del caso de uso