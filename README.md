# PersistanceDAO

Este proyecto es una aplicación web para consultar información de equipos y partidos de una competición. Está diseñado para mostrar cómo acceder y gestionar datos desde una base de datos utilizando PHP. La interfaz gráfica es sencilla y se centra en la funcionalidad de consulta de datos.

### Contenido del Repositorio

- **Carpeta scriptBasesDeDatos**: Contiene el script SQL para crear la base de datos y cargar datos iniciales.
- **Carpeta raiz**: Contiene todo el código fuente del proyecto.

### Requisitos

Asegúrate de tener instalado lo siguiente:

- Servidor web (p. ej., Apache)
- PHP
- MySQL (o cualquier otro sistema de gestión de bases de datos)

### Configuración

1. Clona este repositorio en tu servidor web o descarga el ZIP y extráelo en la ubicación adecuada.

2. Importa la base de datos ejecutando el script SQL en tu sistema de gestión de bases de datos.

3. Abre el archivo `src/config.php` y ajusta la configuración de la base de datos con tus credenciales.

### Uso

Accede a la página principal a través de tu servidor web. Verás un menú con dos opciones: "Equipos" y "Partidos". Desde aquí, puedes realizar las siguientes acciones:

#### Página de Equipos

- **Lista de Equipos**: Muestra la información de los equipos que participan en la competición, incluyendo su nombre y estadio.

#### Página de Partidos

- **Resultados de Partidos**: Muestra los resultados de los partidos entre los equipos en formato de quiniela (1x2).

### Base de datos

La creacion he introduccion de datos en la base de datos:

- **./scriptBaseDeDatos**: Carpeta donde se almacenan los scrips para la creacion de la base de datos y la insercion de datos.

