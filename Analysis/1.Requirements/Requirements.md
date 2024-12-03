# Requisitos del aplicativo SAGOP
- Como administrador quiero __ingresar al sistema por medio de usuario y contraseña__, para
poder agregar, eliminar, actualizar y listar los pagos que obtiene y que realiza una empresa
de desarrollo de software.

- Quiero __registrar los datos para administrar los pagos y anticipos por proyecto activo__ que me
servirá para llevar un control de los pagos que se realizan a los proveedores y los anticipos
que los clientes realizan, así como administrar proyectos, mismos a los cuáles se le registrarán
esos pagos y anticipos.

---
## Campos a registrar
* __Proyectos__
1. Nombre del proyecto
1. Fecha de inicio del pryecto
1. Subtotal del proyecto 
1. IVA                  (Tanto el IVA como el subtotal serán valores calculados?)
1. Total
1. Concepto (A que se refiere con concepto)
1. Comentarios adicionales (De parte del stacke holder?, o de los desarrolladores)
---
* __Clientes__
1. Razón social
1. Persona Física o Moral
1. RFC
1. Domicilio Fiscal
1. Email
1. Teléfono
---
* __Proveedores__
1. Razón social
1. Persona Física o Moral
1. RFC
1. Domicilio
1. Email
1. Teléfono
---
* __Anticipos__
1. __Cliente__ quién realizo el anticipo
1. __Proyecto__ al que pertenece el anticipo
1. Monto del anticipo
1. Fecha del anticipo
1. Método (Déposito o Transferencia)
1. Referencia
---
* __Pagos__
1. __Proveedor__ al que se le realizó el pago
1. __Proyecto__ al que pertenece el pago
1. Monto del pago
1. Fecha del pago
1. Método (Déposito o Transferencia)
1. Referencia
---
* __Usuarios__
1. Nombre del usuario
1. Rol (Administrador o Usuario sin privilegios)
1. Email
1. Password

---
## Requisito de funcionalidad

* En caso de que el administrador __desee registrar un pago o anticipo__ primero deberá __listar los proyectos activos__ y si el proyecto existe podrá continuar con el registro, en caso contrario deberá antes registrar el proyecto.

* En caso de que el administrador desee registrar un proyecto se deberá llevar el __control de la cantidad de dinero por pagar del cliente y la cantidad de dinero a pagar a los proveedores__.

* En caso de que el administrador desee registrar un pago o anticipo __el sistema deberá de llevar el control del dinero restante por pagar del cliente y el dinero restante por pagar a los proveedores__.

* El sistema solo permitirá registrar pagos o anticipos para __proyectos activos__.

* Los anticipos deben reducir automáticamente el saldo por cobrar del cliente en el __proyecto correspondiente__; los pagos deben reducir automáticamente el saldo por pagar del __proyecto asociado__.

* Si el __administrador desea registrar un usuario__ sin privilegios u otro administrador únicamente deberá __solicitar el nombre, apellidos, correo electrónico, usuario y contraseña__.

* Si el administrador desea listar a los __usuarios registrados__, el sistema deberá mostrar el __nombre, rol y correo electrónico de cada usuario__, ocultando las contraseñas por seguridad.

* Si el administrador desea consultar los __detalles de un proyecto__, el sistema deberá mostrar la __información del cliente, los pagos realizados, los anticipos registrados y el saldo restante__.

* Si el administrador requiere cambiar la contraseña de un usuario, __el sistema deberá tener la opción de restablecer la contraseña__, cuando el administrador seleccione dicha opción, __el sistema deberá asignar una contraseña temporal__ y deberá solicitar en su próximo acceso que cambie de contraseña.

* Si el administrador intenta registrar un __usuario con un correo electrónico duplicado__, el sistema deberá impedir el registro y notificar que el correo ya está en uso.

* Si el administrador desea __eliminar un proyecto__, el sistema deberá verificar que no existan __pagos ni anticipos asociados__ antes de permitir la eliminación.

* En caso de que el administrador desee registrar un cliente o proveedor, el sistema deberá permitir seleccionar si se trata de una __persona física o moral__ antes de completar el registro.

*   Si el administrador desea consultar la lista de __anticipos o pagos registrados__, el sistema deberá permitir __filtrar por proyecto, cliente, proveedor o método de pago__.

*   En caso de que el administrador desee __actualizar la información de un cliente o proveedor__, el sistema deberá permitir modificar campos como email, teléfono y domicilio fiscal.

*   Si el administrador desea __listar anticipos o pagos__, el sistema deberá __mostrar las referencias y métodos de pago asociados para facilitar la identificación__.


  
