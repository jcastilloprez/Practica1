Práctica 1: Creación y despliegue de una aplicación en un PaaS
=========
Realizada por: José Manuel Castillo Pérez
=========
Esta práctica ha sido publicada bajo licencia GNU GENERAL PUBLIC LICENSE Version 3
=========
El PaaS en el cuál voy a desplegar la práctica es OpenShift, ya que esta plataforma la utilice para realizar el ejercio 14. El principal motivo ha sido que es una plataforma muy extendida y que soporta el lenguaje de programación PHP, aparte de otros muchos lenguajes y ha sido el lenguaje sobre el cuál he desplegado mi aplicación. 

La licencia bajo la que he publicado mi aplicación es GNU GPL v3 que nos permite realizar todas las modificaciones que queramos sobre la misma, así como realizar copias y distribuirlas. OpenShift tiene una licencia Apache License 2.0 pero nos permite su uso con proyectos en los cuáles tengan la licencia GNU GPL v3. 

La aplicación que he realizado está desarrollada en PHP y es una mini calculadora básica, es decir, solamente podemos realizar las cuentas de suma, resta, multiplicación y división. Está formada por un formulario en el cuál nos pide que introduzcamos dos valores, estos valores están validados con JavaScript para obligar al usuario a que introduzca números y no introduzca ni cadenas de caracteres, ni deje algún campo sin valor. Una vez que el usuario introduzca los dos valores y pulse el botón de la operación que quiere realizar con esos dos valores, se le mostrará el resultado de su operación. 

Para realizar la práctica, lo primero que necesitamos es tener una cuenta en OpenShift. Al haber echo todos los ejercicios esa cuenta ya la tenemos creada, puesto que era el ejercicio 13. A continuación, accedemos a la página de OpenShift, nos registramos y creamos una nueva aplicación de PHP. 

El siguiente paso es clonar el proyecto que acabamos de crear para poder modificarlo y poner nuestra aplicacion. Esto se hace con la siguiente orden:
 git clone ssh://52614b605004468f93000038@practica1-jcastilloprez.rhcloud.com/~/git/practica1.git/

Una vez bajado el proyecto accedemos a él y en la carpeta php que contiene tenemos que introducir el código de nuestra aplicación. Después solo queda subir los cambios con las siguientes órdenes:
	git add .
	git commit -a -m 'Practica 1'
	git push

Una vez realizados esos pasos accedemos a la página web de la aplicación y vemos como se ejecuta en ella. En mi caso, es la siguiente URL:
 http://practica1-jcastilloprez.rhcloud.com/
