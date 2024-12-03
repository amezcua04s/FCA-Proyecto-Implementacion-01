<!-- @startuml

left to right direction
actor "Usuario" as fc
rectangle clientesSagop{
  
    usecase "UC-014: Baja_cliente" as UC14
    usecase "UC-013: Listar_clientes" as UC13
    usecase "UC-012: Modificar_cliente" as UC12  
    usecase "UC-011: Registrar_cliente" as UC11
    
    UC14-down.>UC13: <<Extend>>
    UC12-down.>UC13: <<Extend>> 
    

}

fc->UC11
fc->UC12
fc->UC13
fc->UC14



@enduml -->
# Diagrama de caso de uso de Clientes
### Diagrama donde el usuario realiza el CRUD de clientes
![image](https://github.com/user-attachments/assets/c535d438-0b59-4e92-8cd8-0db23d3420a9)


