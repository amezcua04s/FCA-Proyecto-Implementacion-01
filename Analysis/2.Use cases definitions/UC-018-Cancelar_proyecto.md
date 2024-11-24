# ID
 - UC - 018: Cancelar proyecto
 
## Actores
 * Administrador

## Precondiciones
 * El administrador debe estar autenticado en el sistema
 * El proyecto que se desea dar de baja debe estar previamente registrado en el sistema

## Postcondiciones
 * El proyecto que se dará de baja cambiará su estatus a "Cancelado", pero los datos y registros que esten asociados con el proyecto no cambiarán, no existirá la posibilidad de cambiar el estatus a "Activo"
   
## Tipo 
 * Secundario

## Partes interesadas e intereses:
- El administrador desea cancelar un proyecto

## Breve descripción
El administrador cancelara a un proyecto en el sistema, no habrá posibilidad de cambiar de estatus nuevamente

## Disparador
El administrador ingresará al apartado de __*Proyectos*__, donde seleccionará el botón de __"Baja"__ en el proyecto correspondiente

## Flujo normal de eventos (Happy Path)
1. El administrador ingresará al apartado de __*Proyectos*__
2. El administrador seleccionará el botón de __"Baja"__ en el proyecto correspondiente
3. El sistema mostrará la información del proyecto

         Nombre:              Proyecto final Implementación

         * Fecha de inicio    > 27/11/2024

         Subtotal:            $435,372

         IVA:                 $82,928

         Total:               $518,300

         Concepto:            Página web
         
         Comentarios:         Sin comentarios
            
         Estatus:             Programado
      |Regresar|||||||||Continuar|
      |:-:|:-:|:-:|:-:|:-:|-|-|-|-|:--------:|
   >*Tomar vista como referencia**
4. El administrador seleccionará __"Continuar"__
5. El sistema mostrará un recuadro avisando que el proyecto no podrá reactivarse una vez se dé de baja
5. El administrador confirmará la operación
6. El caso de uso termina

## Sub-flujos
__S-1 En caso de que el administrador seleccione la opción "Cancelar"__
1. El sistema regresará a la pantalla de __*Proyectos*__ 
1. El caso de uso terminará

### Excepciones
> TO DO