# ID
 - UC - 016: Modificar proyecto 
 
## Actores
 * Administrador

## Precondiciones
 * El administrador debe estar autenticado en el sistema
 * El proyecto que se desea modificar debe estar previamente registrado en el sistema

## Postcondiciones
 * El proyecto a modificar tendrá datos diferentes a los que previamente tenía
   
## Tipo 
 * Secundario

## Partes interesadas e intereses:
- El administrador desea modificar la información del proyecto con el fin de tener un control más exacto de este

## Breve descripción
El administrador modificara dato o datos de un proyecto previamente registrado, esto en caso de que sea necesario cambiar información y mantener mayor certeza de la información guardada

## Disparador
El administrador ingresará al apartado de __*Proyectos*__, seleccionara el botón __"Editar"__ en el proyecto correspondiente

## Flujo normal de eventos (Happy Path)
1. El administrador ingresará al apartado de __*Proyectos*__
2. El administrador selecciona el botón __*Editar*__ del proyecto correspondiente
3. El sistema mostrará la información del proyecto, donde el administrador podrá sobreescribir la información existente

         Nombre:              Proyecto final Implementación

         * Fecha de inicio    > 22/11/2024

         Subtotal:            $435,372

         IVA:                 $82,928

         Total:               $518,300

         Concepto:            Página web
         
         Comentarios:         Sin comentarios
            
         Estatus:             En progreso
      |Regresar|||||||||Guardar|
      |:-:|:-:|:-:|:-:|:-:|-|-|-|-|:--------:|
      *Para la fecha realizar un menú desplegable**
>*Tomar vista como referencia**
4. El administrador sobreescribirá los datos que se deseen modificar, además de la posibilidad de seleccionar otro tipo de fecha y otro tipo de estatus, a excepción de Cancelado
5. El administrador selecciona el botón de __"Guardar"__
6. El sistema pregunta si desea continuar, ya que si realiza cambios no podrá regresar a la información anterior si no de forma manual... __Cancelar/Modificar/Continuar__ la operación
7. El administrador confirma, el sistema guarda los cambios y muestra un mensaje del resultado de la operación
8. El caso de uso termina

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
1. El sistema regresará a la pantalla de __*Proyectos*__
1. El caso de uso terminará

### Excepciones
> TO DO