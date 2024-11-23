# ID
 - UC - 005: Cerrar sesión
   
## Actores
 * Usuario/Administrador

## Precondiciones
 * El usuario/administrador esta autenticado en el sistema

## Postcondiciones
 * Ya no existe sesión activa
   
## Tipo 
 * Funcional

## Partes interesadas e intereses:
- Un usuario/administrador que se encuentra autenticado en el sistema desea finalizar su sesión

## Breve descripción
El usuario/administrador finalizará la sesión en esa pestaña, lo que permitirá tener un control de seguridad básico

## Disparador
El usuario/administrador selecciona la opción de "Logout" en la esquina superior derecha

## Flujo normal de eventos (Happy Path)
1. El usuario/administrador selecciona la opción de "Logout" en la esquina superior derecha
2. El sistema finaliza la sesión y regresa a la página de inicio de sesión
3. El caso de uso llama al "[UC-004Iniciar_sesion](./UC-004Iniciar_sesion.md)"
4. El caso de uso termina

## Sub-flujo 

### Excepciones
