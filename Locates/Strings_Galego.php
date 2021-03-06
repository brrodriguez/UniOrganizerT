<?php
require_once '../Twig/Autoloader.php';

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem( '../templates');
$twig = new Twig_Environment($loader, array('cache' =>  'cache','debug' =>  'true'));

//CADENAS UTILIZADAS EN CASTELLANO
$strings = array(

//MENSAJES BASE DE DATOS
 'Fallo al conectar a MySQL: (' => 'Non se puido conectar a MySQL: (',
 'La contraseña para este usuario es errónea' => 'O contrasinal para este usuario é incorrecto',
 'El usuario no existe' => 'O usuario non existe',
 'No se ha podido conectar con la base de datos' => 'Non se puido conectar á base de datos',
 'Inserción realizada con éxito' => 'Inserción realizada con éxito',
 'El usuario ya existe en la base de datos' => 'O usuario xa existe na base de datos',
 'Introduzca un valor para username del usuario' => 'Introduza un valor para o nome de usuario',
 'Error en la consulta sobre la base de datos' => 'Erro na consulta na base de datos',
 'El usuario se ha modificado con éxito' => 'O usuario foi modificado correctamente',
 'El usuario ha sido borrado correctamente' => 'O usuario foi borrado correctamente',
 'Ya existe un Usuario con ese userName' => 'Xa hai un usuario con ese nome',
 'Ya existe un Usuario con ese DNI' => 'Xa hai un usuario con ese DNI',
 'Ya existe un Usuario con ese E-mail' => 'Xa existe un usuario con ese correo electrónico',
 'No se ha podido conectar con la base de datos.' => 'Non se puido conectar á base de datos.',
 'Error en la consulta sobre la base de datos.' => 'Erro na consulta na base de datos.',
 'No se puede borrar porque no existe esa Alerta.' => 'Non se pode eliminar porque a alerta non existe.',
 'La Alerta fue borrada con éxito.' => 'A alerta foi borrada correctamente.',
 'No tienes los permisos necesarios' => 'Non tes os permisos necesarios',
 'Debe seleccionar un Curso' => 'Debes seleccionar un curso',
 'NumSesiones' => 'Número de Calendarios',

//MENU
 'Iniciar Sesion' => 'Comezar sesión',
 'Usuario' => 'Usuario',
 'Cerrar Sesión' => 'Pechar a sesión',
 'Cuenta' => 'Conta',
 'Mi Perfil' => 'O meu perfil',
 'Gestión de Usuarios' => 'Usuarios',
 'Gestión de Alertas' => 'Alertas',
 'Gestión de Calendarios' => 'Calendarios',
 'Gestión de Asignaturas' => 'Materias',
 'Gestión de Cursos' => 'Cursos',
    
//Acciones
 'Volver' => 'Volver',
 'Insertar' => 'Inserir',
 'Modificar' => 'Modificar',
 'Consultar' => 'Consultar',
 'Borrar' => 'Eliminar',
 'Ver' => 'Ver',
 'Seleccionar' => 'Seleccionar',
 'Cerrar' => 'Pechar',
 'Guardar' => 'Gardar',
 'Asignar' => 'Asignar',
 'ver' => 'Ver',
 
//USUARIOS
 'username' => 'Usuario',
 'password' => 'Contrasinal',
 'newPassword' => 'Nova contrasinal',
 'nombre' => 'Nome',
 'apellidos' => 'Apelidos',
 'tipoUsuario' => 'Tipo Usuario',
 'dni' => 'DNI',
 'niu' => 'NIU',
 'fechaNac' => 'Data Nac.',
 'email' => 'Email',
 'addAdministrador' => 'Engadir Administrador',
 'Administrador' => 'Administrador',
 'Estudiante' => 'Estudante',
 'Insertar usuario' => 'Inserir Usuario',
 'Insertar Usuario' => 'Inserir Usuario',
 'Insertar Administrador' => 'Inserir Administrador',
 'Modificar Usuario' => 'Modificar Usuario',
 'Eliminar Usuario' => 'Eliminar Usuario',
 'Eliminar Administrador' => 'Eliminar Administrador',
 'Ver Usuario' => 'Ver Usuario',
 'Modificar usuario' => 'Modificar Usuario',
 

//Alertas
 'idAlerta' => 'ID',
 'fechaHora' => 'Data',
 'asuntoAlerta' => 'Asunto',
 'Descripción' => 'Descrición',
 'descripcionAlerta' => 'Descrición',
 'Ver Alerta' => 'Ver Alerta',
 'Insertar Alerta' => 'Crear Alerta',
 'Borrar Alerta' => 'Borrar Alerta',
 'La alerta fue borrada con éxito.' => 'A alerta foi eliminada con éxito',
 'No se ha podido conectar con la base de datos en INSERT calendario_horas.' => 'Non se puido crear a alerta porque non existe ese día no calendario.',
 'Asunto' => 'Asunto',
 'Fecha' => 'Data',
 'Hora' => 'Hora',
 'Dias' => 'Dias',
 'Mensaje' => 'Mensaxe',
 'Crear' =>'Nova Alerta',
 'Aviso' =>'Introduce cantos días antes quere que o sistema lle recorde este evento.',

 
//Calendarios

 'Monday' => 'Luns',
 'Tuesday' => 'Martes',
 'Wednesday' => 'Mércores',
 'Thursday' => 'Xoves',
 'Friday' => 'Venres',
 'Saturday' => 'Sábado',
 'Sunday' => 'Domingo',
 'Anterior Semana' => 'Semana Anterior',
 'Próxima Semana' => 'Próxima Semana',
 'Filtrar' => 'Filtrar',
 'Examen' => 'Exame:',
 'nombreCalendario' => 'Nome',
 'idCalendario' => 'ID Calendario',
 'Modificar calendario' => 'Modificar Calendario',
 'Se ha insertado con éxito' => 'Engadiuse con éxito',
 'Iniciar sesion' => 'Iniciar sesión',
 'IniciarSesion' => 'Iniciar Sesión',
 'El calendario se ha modificado con éxito.' => 'O calendario foi modificado correctamente.',

//Asignaturas
 'nombreAsignatura' => 'Nome da Materia',
 'asignaturanombreCurso' => 'Nome Materia',
 'descripcionAsignatura' => 'Descrición da Materia',
 'asignaturadescCurso' => 'Descrición Materia',
 'saveform' => 'Gardar',
 'newAsignatura' => 'Nova Materia',
 'asignaturanombre' => 'Nome',
 'asignaturadescripcion' => 'Descrición',
 'asignaturamodificar' => 'Modificar',
 'asignaturaeliminar' => 'Eliminar',
 'Eliminar Asignatura' => 'Eliminar Materia',
 
//Cursos
 'nombreCurso2' => 'Nome do Curso',
 'descripcionCurso2' => 'Descrición do Curso',
 'cursoname' => 'Nome do Curso',
 'cursodesc' => 'Descrición do Curso',
 'savecurso' => 'Gardar',
 'newcurso' => 'Novo Curso',
 'obtenerCurso' => 'Importar Curso',
 'asignarcurso' => 'Asignar Materias a Curso',
 'seleccionaCurso' => 'Selecciona o curso desde o que desexas importar só as súas materias',
 'ó' => 'ou',
 'closecurso' => 'Pechar',
 'cursoname2' => 'Nome',
 'cursodesc2' => 'Descrición',
 'cursoasignar' => 'Asignar Materias',
 'cursomodificar' => 'Modificar',
 'cursoeliminar' => 'Eliminar',
 'Eliminar Curso' => 'Eliminar Curso',
 'Cursos' => 'Cursos',
 'nombreCurso' => 'Nome do Curso',
 'descripcionCurso' => 'Descrición',
 'AñadirAsignatura' => 'Engadir Materia',
 'AsignarAsignaturas' => 'Asignar Materias',
 'Asignatura'=>'Materia',
 'Guardar'=>'Gardar'

    
    
);
$twig->addGlobal('strings_Galego', $strings);
?>
