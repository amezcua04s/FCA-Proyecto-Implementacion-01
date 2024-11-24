# ID
 - UC - 014: Baja de cliente
 
## Actores
 * Administrador

## Precondiciones
 * El administrador debe estar autenticado en el sistema
 * El cliente que se desea dar de baja debe estar previamente registrado en el sistema
 * El cliente no debe de estar asociado a ningún proyecto activo

## Postcondiciones
 * El cliente que se dará de baja cambiará su estatus a "Inactivo", pero los datos y registros en los que el cliente haya participado no se cambiarán, sin posibilidad de reactivarse
   
## Tipo 
 * Secundario

## Partes interesadas e intereses:
- El administrador desea dar de baja a un cliente

## Breve descripción
El administrador dará de baja a un cliente del sistema, ya no podrá ser utilizado para futuros proyectos, ni pagos

## Disparador
El administrador ingresará al apartado de __*Clientes*__, donde seleccionará el botón de __"Baja"__ en el cliente correspondiente

## Flujo normal de eventos (Happy Path)
1. El administrador ingresará al apartado de __*Clientes*__
2. El administrador seleccionará el botón de __"Baja"__ del cliente que deseé dar de baja
3. El sistema mostrará la información del cliente en pantalla

      Razón social:         Juan Alonso

      * Tipo de persona     > Física

      RFC:                  XEXX010101000

      Domicilio:            Avenida Insurgentes Sur 100, Colonia Hipódromo Condesa, Alcaldía Cuauhtémoc, Ciudad de México, C.P. 06100.

      Correo:               ejemplo@dominio.com

      Teléfono:             (+52)5512345678

      Activo                [X] 
   |Regresar|||||||||Continuar|
   |:-:|:-:|:-:|:-:|:-:|-|-|-|-|-|
   
   >*Tomar tabla como referencia***
---
4. El administrador seleccionará __"Continuar"__
5. El sistema mostrará un recuadro avisando que el cliente no podrá reactivarse una vez se dé de baja
5. El administrador confirmará la operación
6. El caso de uso termina

## Sub-flujos
__S-1 En caso de que el administrador seleccione la opción "Cancelar"__
1. El sistema regresará a la pantalla de __*Clientes*__ 
1. El caso de uso terminará

### Excepciones
>> TO DO