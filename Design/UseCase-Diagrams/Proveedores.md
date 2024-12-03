<!-- @startuml

left to right direction
actor "Usuario" as fc
rectangle proveedoresSagop{
    usecase "UC-010: Eliminar_Proveedor" as UC10
    usecase "UC-009: Listar_Proveedor" as UC9 
    usecase "UC-008: Modificar_proveedor" as UC8 
    usecase "UC-007: Registrar_Proveedeor" as UC7 
    
    UC10-down.>UC9: <<Extend>>
    UC8-down.>UC9: <<Extend>> 

}

fc->UC7
fc->UC8
fc->UC9
fc->UC10



@enduml -->
# Diagrama de casos de uso de Proveedores
### Diagrama en el que el usuario realiza el CRUD de los proveedores
![image](https://github.com/user-attachments/assets/57d17bd7-529a-4db1-a463-2b998696e410)

