# FCA-Proyecto-Implementacion
Análisis, diseño e implementación del proyecto Final de la materia de implementación de sistemas [Contexto](https://drive.google.com/file/d/1O5cOFaRV7n2wDJfqKOi0Pm8qGWRhXSwQ/view?usp=sharing)

## Estructura del repositorio
* [Análisis](/Analysis/)
* [Diseño](/Design/)
* [Desarrollo](/ProyectoFinal/)
## Integrantes:
 * Amezcua Arévalo Santiagp
 * Cornejo Cornejo Gerardo Daniel
 * Gutiérrez Rivas Angel Eduardo
 * Ramírez Espejel Aldo
 * Ramos Morlet Iovanni José
 * Vázquez Díaz Yiria


## Para trabajar de forma remota
---
### Pre requisitos
#### Para instalar el entorno de trabajo

* [Instalar laragon](https://laragon.org/download/)
> Descargar Full version

* [Instalar git](https://git-scm.com/downloads/win)
> Descargar Standalone version

* [Instalar workbench](https://dev.mysql.com/downloads/file/?id=534624)
---
#### Para estar en el mismo entorno de trabajo
* [Instalar ultima version de PHP v8.3.14](https://windows.php.net/download#php-8.3)

> Descargar la version *Thread Safe* en su forma ZIP

Despues, dentro de las carpetas que componen laragon, ir a __*C:\laragon\bin\php*__ y agregar la versión que instalamos (una vez extraido del ZIP)


* [Instalar ultima version de NodeJS 22.1](https://nodejs.org/en/download/prebuilt-binaries)

Despues, dentro de las carpetas que componen laragon, ir a __*C:\laragon\bin\nodejs*__ y agregar la versión que instalamos (una vez extraido del ZIP)

* __Dentro de laragon, en el menú, en los apartados correpondientes de PHP y nodejs, seleccionar las versiones instaladas__
---
#### Para configurar todo el entorno de trabajo
* Terminal de laragon
``composer global require "laravel/installer"``
>----
* Una vez instalado, verificar que todo funcione correctamente creando un proyecto de prueba

``laravel new <nombre>``
> A la hora de crear, elegir las opciones 'none', '0', *'mysql' <- Si lo pide*

``cd <nombre>``
``npm install && npm run build``
``php artisan serve``

__Si todo salio bien, ya podrías ver tu página =)__

----
## Para descargar el proyecto y trabajarlo de forma local
* Crear una nueva carpeta donde descargaras todo el repositorio

- Dentro de esa carpeta inicializar git
``git init``
``git config --global user.name "<Usuario>"``
``git config --global user.email "<Email>"``
> ----
* Hacer un pull para instalar todo el repositorio de forma local
> Primero renombrar el nombre de la rama a main

``git branch -m main``

``git pull https://github.com/amezcua04s/FCA-Proyecto-Implementacion-01.git``


### Para subir cambios  
- Para hacer un commit de todos los cambios, debes estar en la carpeta donde se encuentren todos los archivos del proyecto

``git commit``
> El anterior comando te abrirá un nuevo archivo donde deberás poner los cambios que hiciste, de forma general, como lo he hecho en los primeros commits
----
__*IMPORTANTE*__
__La primera vez, y solo la primera vez que se vaya a hacer un commit, correr el siguiente comando para vincular con el repositorio__
``git remote add FCA-Proyecto-Implementacion https://github.com/amezcua04s/FCA-Proyecto-Implementacion-01.git``

- Antes de subir los cambios, hacer un git pull para estar en la versión más reciente del proyecto 
``git pull --no-rebase``

- Para subir los cambios
``git push --set-upstream FCA-Proyecto-Implementacion main``
