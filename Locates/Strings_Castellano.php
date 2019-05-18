<?php
header("Content-Type: text/html;charset=utf-8");
//CADENAS UTILIZADAS EN CASTELLANO
$strings = array(

//MENSAJES BASE DE DATOS
 'Fallo al conectar a MySQL: (' => 'Fallo al conectar a MySQL: (',
 'La contraseña para este usuario es errónea' => 'La contraseña para este usuario es errónea',
 'El usuario no existe' => 'El usuario no existe',
 'El usuario ya existe' => 'El usuario ya existe',
 'No se ha podido conectar con la base de datos' => 'No se ha podido conectar con la base de datos',
 'Inserción realizada con éxito' => 'Inserción realizada con éxito',
 'El usuario ya existe en la base de datos' => 'El usuario ya existe en la base de datos',
 'Introduzca un valor para username del usuario' => 'Introduzca un valor para username del usuario',
 'Error en la consulta sobre la base de datos' => 'Error en la consulta sobre la base de datos',
 'El usuario se ha modificado con éxito' => 'El usuario se ha modificado con éxito',
 'El usuario ha sido borrado correctamente' => 'El usuario ha sido borrado correctamente',
 'Ya existe un Usuario con ese username' => 'Ya existe un Usuario con ese Username',
 'Ya existe un Usuario con ese DNI' => 'Ya existe un Usuario con ese DNI',
 'Ya existe un Usuario con ese E-mail' => 'Ya existe un Usuario con ese E-mail',
 'No se ha podido conectar con la base de datos.' => 'No se ha podido conectar con la base de datos.',
 'Error en la consulta sobre la base de datos.' => 'Error en la consulta sobre la base de datos.',
 'No se puede borrar porque no existe esa Alerta.' => 'No se puede borrar porque no existe esa Alerta.',
 'La Alerta fue borrada con éxito.' => 'La Alerta fue borrada con éxito.',
 'No tienes los permisos necesarios' => 'No tienes los permisos necesarios',
 'No se importó correctamente porque no se seleccionó ningún curso' => 'No se importó correctamente porque no se seleccionó ningún curso',
 'Debe seleccionar un Curso' => 'Debe seleccionar un Curso',
 'NumSesiones' => 'Número de Calendarios',
 'Error: ya existe un calendario con ese nombre.' => 'Error: ya existe un calendario con ese nombre.',
 'Asignaturas asignadas correctamente.' => 'Asignaturas asignadas correctamente.',
 'Asignaturas eliminadas correctamente.' => 'Asignaturas eliminadas correctamente.',
 'Calendario modificado correctamente.' => 'Calendario modificado correctamente.',
 'Calendario eliminado correctamente.' => 'Calendario eliminado correctamente.',
 'Error al insertar en tabla calendario_evento.' => 'Error al insertar en tabla calendario_evento.',
 'tituloPU' => 'Estás seguro?',
 'textoPU' => 'Si confirmas, se eliminará el registro de manera definitiva!',
 'botonCancel' => 'Cancelar',
 'botonOk' => 'Confirmar',
 'El calendario se ha modificado con éxito.' => 'El calendario se ha modificado con éxito.',
 'Modificación realizada con éxito' => 'Modificación realizada con éxito',
 'Éste evento ya existe' => 'Éste evento ya existe',
 'Acerca de UniOrganizer' => 'Acerca de UniOrganizer',
 'Aplicación para facilitar la gestión y organización a estudiantes universitarios.' => 'Aplicación para facilitar la gestión y organización a estudiantes universitarios.',
 'Contacto' => 'Contacto',
 
//MENU
 'Iniciar Sesion' => 'Iniciar Sesion',
 'Registrar' => 'Registrar',
 'Usuario' => 'Usuario',
 'Cerrar Sesión' => 'Cerrar Sesión',
 'Cuenta' => 'Cuenta',
 'Mi Perfil' => 'Mi Perfil',
 'Gestión de Usuarios' => 'Usuarios',
 'Gestión de Alertas' => 'Alertas',
 'Gestión de Eventos' => 'Eventos',
 'Gestión de Asignaturas' => 'Asignaturas',
 'Gestión de Calendarios' => 'Calendarios',
 'Calendario' => 'Calendario',
 'Gestionar' => 'Gestionar',
 'Información' => 'Información',
    
//Templates
'Vista Principal' => 'Vista Principal',
'Crear Alerta' => 'Crear Alerta',
'Editar Alerta' => 'Editar Alerta',
'Lista Asignaturas' => 'Lista Asignaturas',
'Lista Calendarios' => 'Lista Calendarios',
'Crear Calendario' => 'Crear Calendario',
'Editar Calendario' => 'Editar Calendario',
'Filtrar Calendarios' => 'Filtrar Calendarios',
'Crear Evento' => 'Crear Evento',
'Editar Evento' => 'Editar Evento',
'Filtrar Eventos' => 'Filtrar Eventos',
'Lista Eventos' => 'Lista Eventos',
'Crear Usuario' => 'Crear Usuario',
'Editar Usuario' => 'Editar Usuario',
'Ver Usuario' => 'Ver Usuario',
'Lista Usuarios' => 'Lista Usuarios',

//Acciones
 'Volver' => 'Volver',
 'Insertar' => 'Insertar',
 'Añadir' => 'Añadir',
 'Modificar' => 'Modificar',
 'Consultar' => 'Consultar',
 'Borrar' => 'Borrar',
 'Ver' => 'Ver',
 'Seleccionar' => 'Seleccionar',
 'Cerrar' => 'Cerrar',
 'Guardar' => 'Guardar',
 'Asignar' => 'Asignar',
 'ver' => 'ver',
 'Inicio' => 'Vista Principal',
 
//USUARIOS
 'username' => 'Usuario',
 'password' => 'Contraseña',
 'newPassword' => 'Contraseña Nueva',
 'nombre' => 'Nombre',
 'apellidos' => 'Apellidos',
 'tipoUsuario' => 'Tipo Usuario',
 'dni' => 'DNI',
 'niu' => 'NIU',
 'fechaNac' => 'Fecha Nac.',
 'email' => 'Email',
 'addAdministrador' => 'Añadir Administrador',
 'Administrador' => 'Administrador',
 'Estudiante' => 'Estudiante',
 'Insertar usuario' => 'Insertar Usuario',
 'Insertar Usuario' => 'Insertar Usuario',
 'Insertar Administrador' => 'Insertar Administrador',
 'Modificar Usuario' => 'Modificar Usuario',
 'Eliminar Usuario' => 'Eliminar Usuario',
 'Eliminar Administrador' => 'Eliminar Administrador',
 'Ver Usuario' => 'Ver Usuario',
 'Modificar usuario' => 'Modificar Usuario',
 

//Alertas
 'alertas' => 'Alertas',
 'idAlerta' => 'ID Alerta',
 'fechaHora' => 'Fecha',
 'asuntoAlerta' => 'Asunto',
 'Descripción' => 'Descripción',
 'descripcionAlerta' => 'Descripción',
 'Ver Alerta' => 'Ver Evento',
 'CrearAlerta' => 'Nueva Alerta',
 'Insertar Alerta' => 'Crear Evento',
 'Modificar Alerta' => 'Modificar Evento',
 'Añadir Alerta' => 'Crear Alerta',
 'Borrar Alerta' => 'Borrar Evento',
 'La alerta fue borrada con éxito.' => 'La alerta fue borrada con éxito.',
 'No se ha podido conectar con la base de datos en INSERT calendario_horas.' => 'No se pudo crear la Alerta porque no existe ese día en el calendario.',
 'Asunto' => 'Asunto',
 'Fecha' => 'Fecha',
 'HoraInicio' => 'H. Inicio',
 'HoraFin' => 'H. Fin',
 'Dias' => 'Dias',
 'Mensaje' => 'Mensaje',
 'Crear' =>'Crear',
 'Aviso' =>'Introduce cuantos días antes quieres que el sistema te recuerde este evento.',
 'idEvento' =>'ID Evento',
 'eliminarSeleccionadas' =>'Eliminar Seleccionadas',

 //Eventos
 'idEvento' => 'ID Evento',
 'fechaHora' => 'Fecha',
 'asuntoEvento' => 'Asunto',
 'Descripción' => 'Descripción',
 'descripcionEvento' => 'Descripción',
 'Ver Evento' => 'Ver Evento',
 'CrearEvento' => 'Nuevo Evento',
 'Insertar Evento' => 'Crear Evento',
 'Modificar Evento' => 'Modificar Evento',
 'Añadir Evento' => 'Crear Evento',
 'Borrar Evento' => 'Borrar Evento',
 'El evento fue borrado con éxito.' => 'El evento fue borrado con éxito',
 'No se ha podido conectar con la base de datos en INSERT calendario_horas.' => 'No se pudo crear el Evento porque no existe ese día en el calendario.',
 'Asunto' => 'Asunto',
 'Fecha' => 'Fecha',
 'HoraInicio' => 'Inicio',
 'HoraFin' => 'Fin',
 'Dias' => 'Dias',
 'Mensaje' => 'Mensaje',
 'Aviso' =>'Introduce cuantos días antes quieres que el sistema te recuerde este evento.',
 'curso' => 'Curso',
 'asignatura' => 'Asignatura',
 'Filtrar Eventos' => 'Filtrar Eventos',

//Calendario Principal

 'Monday' => 'Lunes',
 'Tuesday' => 'Martes',
 'Wednesday' => 'Miercoles',
 'Thursday' => 'Jueves',
 'Friday' => 'Viernes',
 'Saturday' => 'Sabado',
 'Sunday' => 'Domingo',
 'Anterior Semana' => 'Anterior Semana',
 'Próxima Semana' => 'Próxima Semana',
 'Filtrar' => 'Filtrar',
 'Refresh' => 'Recargar',
 'Examen' => 'Examen:',
 'nombreCalendario' => 'Nombre',
 'idCalendario' => 'ID Calendario',
 'Modificar calendario' => 'Modificar Calendario',
 'Se ha insertado con éxito' => 'Se ha insertado con éxito',
 'Iniciar sesion' => 'Iniciar sesión',
 'IniciarSesion' => 'Iniciar Sesión',

//Asignaturas
 'idAsignatura' => 'ID Asignatura',
 'nombreAsignatura' => 'Nombre de la Asignatura',
 'asignaturanombreCalendario' => 'Nombre Asignatura',
 'descripcionAsignatura' => 'Descripción de la Asignatura',
 'asignaturadescCalendario' => 'Descripción Asignatura',
 'saveform' => 'Guardar',
 'newAsignatura' => 'Nueva Asignatura',
 'asignaturanombre' => 'Nombre',
 'asignaturadescripcion' => 'Descripción',
 'asignaturamodificar' => 'Modificar',
 'asignaturaeliminar' => 'Eliminar',
 'Eliminar Asignatura' => 'Eliminar Asignatura',
 'Guia' => 'Guía Docente',
 
//Calendarios
 'Calendario' => 'Calendario',
 'nombreCalendario2' => 'Nombre del Calendario',
 'descripcionCalendario2' => 'Descripción del Calendario',
 'calendarioname' => 'Nombre del Calendario',
 'calendariodesc' => 'Descripción del Calendario',
 'savecalendario' => 'Guardar',
 'newcalendario' => 'Nuevo Calendario',
 'obtenerCurso' => 'Importar Curso Completo',
 'asignarcalendario' => 'Asignar Asignaturas a Calendario',
 'seleccionaCurso' => 'Selecciona el curso del que vas a importar todos los eventos',
 'seleccionaAsig' => 'Selecciona asignatura de la que vas a importar todos los eventos',
 'ó' => 'ó',
 'closecalendario' => 'Cerrar',
 'calendarioname2' => 'Nombre',
 'calendariodesc2' => 'Descripción',
 'calendarioasignar' => 'Asignar Asignaturas',
 'calendariomodificar' => 'Modificar',
 'calendarioeliminar' => 'Eliminar',
 'Eliminar Calendario' => 'Eliminar Calednario',
 'Calendarios' => 'Calendarios',
 'nombreCalendario' => 'Nombre del Calendario',
 'descripcionCalendario' => 'Descripción',
 'AñadirAsignatura' => 'Añadir Asignatura',
 'ImportarAsignatura' => 'Importar Asignatura',
 'ImportarCurso' => 'Importar Curso',
 'AsignarAsignaturas' => 'Añadir Asignaturas',
 'EliminarAsignaturas' => 'Eliminar Asignaturas',
 'eliminarSelec' => 'Eliminar Seleccionados',
 'desasignar'=>'Eliminar Seleccionadas',
 'Asignatura'=>'Asignatura',
 'Guardar'=>'Guardar',
 'filtrar'=>'Filtrar',
 'crear'=>'Crear',
 'avisoC'=>'*Solo se visualizan las asignaturas que tienen algún evento.',
 'Filtrar Calendarios'=>'Filtrar Calendarios',
 'VerEventos'=>'Ver Eventos'
    
);

?>
