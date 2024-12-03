<!-- @startuml

left to right direction
actor "Usuario" as fc
rectangle pagosYAnticiposSagop{
  
    usecase "UC-026: Cancelar_Anticipos" as UC26   
    usecase "UC-025: Listar_Anticipos" as UC25
    usecase "UC-024: Modificar_Anticipos" as UC24 
    usecase "UC-023: Registrar_Anticipos" as UC23 
    usecase "UC-022: Cancelar_Pagos" as UC22 
    usecase "UC-021: Listar_Pagos" as UC21 
    usecase "UC-020: Modificar_Pago" as UC20 
    usecase "UC-019: Registrar_Pago" as UC19 
    usecase "UC-017: Listar_Proyectos" as UC17
    usecase "UC-009: Listar_Proveedor" as UC9 
    usecase "UC-013: Listar_clientes" as UC13

    UC19-down.>UC17: <<Include>>
    UC19-down.>UC9: <<Include>>

    UC23-down.>UC17:<<Include>>
    UC23-down.>UC13:<<Include>>

}

fc->UC19
fc->UC20
fc->UC21
fc->UC22
fc->UC23
fc->UC24
fc->UC25
fc->UC26



@enduml -->
# Diagrama de casos de uso de Anticipos y Pagos
### Diagrama donde el usuario realiza el CRUD de los anticipos y pagos 
![image](https://github.com/user-attachments/assets/44fe6368-03b4-4b50-8858-d63b4b7ebdeb)

