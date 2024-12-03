<!-- @startuml

left to right direction
actor "Usuario" as fc
rectangle proyectosSagop{
  
    usecase "UC-018: Cancelar_Proyectos" as UC18
    usecase "UC-017: Listar_Proyectos" as UC17
    usecase "UC-016: Modificar_Proyecto" as UC16
    usecase "UC-015: Registrar_Proyecto" as UC15  

    UC18-down.>UC17: <<Extend>>
    UC16-down.>UC17: <<Extend>> 
    

}

fc->UC15
fc->UC16
fc->UC17
fc->UC18


@enduml -->
# Diagrama de caso de uso de Proyectos
### Diagrama donde el usuario realiza el CRUD de los proyectos
![image](https://github.com/user-attachments/assets/d49a63dd-9970-4e74-9bb8-3e9b85734515)

