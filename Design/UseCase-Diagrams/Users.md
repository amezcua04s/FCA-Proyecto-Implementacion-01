<!-- @startuml

left to right direction
actor "Administrador" as fc
rectangle usuariosSagop{
    usecase "UC-006: Cerrar_Sesion" as UC6
    usecase "UC-005: Iniciar sesión" as UC5
    usecase "UC-004: Baja_usuarios" as UC4
    usecase "UC-003: Listar_usuarios" as UC3
    usecase "UC-002: Modificar_Usuario" as UC2
    usecase "UC-001: Registrar_Usuario" as  UC1
        
    UC4-down.>UC3: <<Extend>>
    UC2-down.>UC3: <<Extend>> 
}

fc -> UC1
fc -> UC2
fc -> UC3
fc -> UC4
fc -> UC5
fc -> UC6

@enduml 
-->
#Diagrama en el que el administrador realiza el CRUD de usuarios
![image](https://github.com/user-attachments/assets/1a1ee75d-6d6f-473a-b96a-a193038197e7)

