# ID
 - UC - 012: Modificar un cliente 
 
## Actores
 * Administrador

## Precondiciones
 * El administrador debe estar autenticado en el sistema
 * El cliente a modificar debe estar previamente registrado en el sistema

## Postcondiciones
 * El proveedor a modificar tendrá datps diferentes a los que previamente tenía
   
## Tipo 
 * Secundario

## Partes interesadas e intereses:
- El administrador desea modificar la información del cliente para tener un control más exacto de este

## Breve descripción
El administrador modificará dato o datos de un proveedor peviamente registrado, esto en caso de que sea necesario cambiar información del contacto y mantener mayor certeza de la información guardada

## Disparador
El administrador ingresará al apartado de __*Clientes*__, seleccionara el botón __"Editar"__ en el cliente correspondiente

## Flujo normal de eventos (Happy Path)
1. El administrador ingresará al apartado de __*Clientes*__
1. El administrador selecciona el botón __"Editar"__ del cliente correspondiente
2. El sistema mostrará la información del cliente, donde el administrador podrá sobreescribir la información existente

         Razón social:         Patito S.A. de C.V.

         * Tipo de persona     > Moral

         RFC:                  EXT990101NI1

         Domicilio:            Calle 5 de Mayo número 23, Colonia Centro, Guadalajara, Jalisco, C.P. 44100.

         Correo:               ejemplo@dominio.com

         Teléfono:             (+52)5512345678

         Activo                [X] 
   |Regresar|||||||||Guardar|
   |:-:|:-:|:-:|:-:|:-:|-|-|-|-|-|
      >*Para el tipo de persona realizar un menú desplegable**
   
   >*Tomar vista como referencia***
---
4. El administrador sobrescribirá los datos que se deseen modificar
5. El administrador selecciona el botón de __"Guardar"__
7. El sistema pregunta si desea continuar, ya que si realiza cambios no podrá regresar a la información anterior si no de forma manual... __Cancelar/Modificar/Continuar__ la operación
8. El administrador confirma, el sistema guarda los cambios y muestra un mensaje del resultado de la operación
9. El caso de uso termina

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
1. El sistema regresará a la pantalla de __*Clientes*__
1. El caso de uso terminará

### Excepciones
> TO DO