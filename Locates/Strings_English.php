<?php
require_once '../Twig/Autoloader.php';

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem( '../templates');
$twig = new Twig_Environment($loader, array('cache' =>  'cache','debug' =>  'true'));

//CADENAS UTILIZADAS EN CASTELLANO
$strings = array(

//MENSAJES BASE DE DATOS
 'Fallo al conectar a MySQL: (' => 'Fail to connect to MySQL',
 'La contraseña para este usuario es errónea' => 'The password for this user is wrong',
 'El usuario no existe' => 'This User does not exist',
 'No se ha podido conectar con la base de datos' => 'Unable to connect to the database',
 'Inserción realizada con éxito' => 'Insertion made successfully',
 'El usuario ya existe en la base de datos' => 'This user already exists in the database',
 'Introduzca un valor para username del usuario' => 'Enter a value for the user`s username',
 'Error en la consulta sobre la base de datos' => 'Error in the query on the database',
 'El usuario se ha modificado con éxito' => 'The user has been modified successfully',
 'El usuario ha sido borrado correctamente' => 'The user has been deleted correctly',
 'Ya existe un Usuario con ese userName' => 'A User already exists with that userName',
 'Ya existe un Usuario con ese DNI' => 'There is already a User with this DNI',
 'Ya existe un Usuario con ese E-mail' => 'There is already a User with that E-mail',
 'No se ha podido conectar con la base de datos.' => 'Could not connect to the database.',
 'Error en la consulta sobre la base de datos.' => 'Error in the query on the database.',
 'No se puede borrar porque no existe esa Alerta.' => 'It can not be deleted because that Alert does not exist.',
 'La Alerta fue borrada con éxito.' => 'The Alert was erased successfully.',
 'No tienes los permisos necesarios' => 'You do not have the necessary permits',
 'Debe seleccionar un Curso' => 'You must select a Course',
 'NumSesiones' => 'Number of Calendars',

//MENU
 'Iniciar Sesion' => 'Log in',
 'Usuario' => 'User',
 'Cerrar Sesión' => 'Sign off',
 'Cuenta' => 'Account',
 'Mi Perfil' => 'My profile',
 'Gestión de Usuarios' => 'Users',
 'Gestión de Alertas' => 'Alerts',
 'Gestión de Calendarios' => 'Calendars',
 'Gestión de Asignaturas' => 'Subjects',
 'Gestión de Cursos' => 'Courses',
 
//Acciones
 'Volver' => 'Return',
 'Insertar' => 'Insert',
 'Modificar' => 'Modify',
 'Consultar' => 'Consult',
 'Borrar' => 'Delete',
 'Ver' => 'Watch',
 'Seleccionar' => 'Select',
 'Cerrar' => 'Close',
 'Guardar' => 'Save',
 'Asignar' => 'Assign',
 'ver' => 'Watch',
 
//USUARIOS
 'username' => 'User',
 'password' => 'Password',
 'newPassword' => 'New password',
 'nombre' => 'Name',
 'apellidos' => 'Surnames',
 'tipoUsuario' => 'User Type',
 'dni' => 'ID',
 'niu' => 'NIU',
 'fechaNac' => 'Birth date',
 'email' => 'E-mail',
 'addAdministrador' => 'Add Administrator',
 'Administrador' => 'Administrator',
 'Estudiante' => 'Student',
 'Insertar usuario' => 'Insert User',
 'Insertar Usuario' => 'Insert User',
 'Insertar Administrador' => 'Add Administrator',
 'Modificar Usuario' => 'Modify User',
 'Eliminar Usuario' => 'Delete User',
 'Eliminar Administrador' => 'Remove Administrator',
 'Ver Usuario' => 'See User',
 'Modificar usuario' => 'Modify User',
 

//Alertas
 'idAlerta' => 'ID Alert',
 'fechaHora' => 'Date',
 'asuntoAlerta' => 'Affair',
 'Descripción' => 'Descripción',
 'descripcionAlerta' => 'Description',
 'Ver Alerta' => 'See Alert',
 'Insertar Alerta' => 'Create Alert',
 'Borrar Alerta' => 'Clear Alert',
 'La alerta fue borrada con éxito.' => 'The alert was successfully deleted',
 'No se ha podido conectar con la base de datos en INSERT calendario_horas.' => 'The Alert could not be created because there is no such day in the calendar.',
 'Asunto' => 'Affair',
 'Fecha' => 'Date',
 'Hora' => 'Hour',
 'Dias' => 'Days',
 'Mensaje' => 'Message',
 'Crear' =>'New Alert',
 'Aviso' =>'Enter how many days before you want the system to remind you of this event.',

 
//Calendarios

 'Monday' => 'Monday',
 'Tuesday' => 'Tuesday',
 'Wednesday' => 'Wednesday',
 'Thursday' => 'Thursday',
 'Friday' => 'Friday',
 'Saturday' => 'Saturday',
 'Sunday' => 'Sunday',
 'Anterior Semana' => 'Previous Week',
 'Próxima Semana' => 'Next week',
 'Filtrar' => 'Filter',
 'Examen' => 'Exam:',
 'nombreCalendario' => 'Name',
 'idCalendario' => 'ID Calendar',
 'Modificar calendario' => 'Modify Calendar',
 'Se ha insertado con éxito' => 'It has been inserted successfully',
 'Iniciar sesion' => 'Log in',
 'IniciarSesion' => 'Log in',
 'El calendario se ha modificado con éxito.' => 'The calendar has been modified successfully.',

//Asignaturas
 'nombreAsignatura' => 'Name of the Subject',
 'asignaturanombreCurso' => 'Subject Name',
 'descripcionAsignatura' => 'Description of the subject',
 'asignaturadescCurso' => 'Subject Description',
 'saveform' => 'Save',
 'newAsignatura' => 'New Subject',
 'asignaturanombre' => 'Name',
 'asignaturadescripcion' => 'Description',
 'asignaturamodificar' => 'Modify',
 'asignaturaeliminar' => 'Remove',
 'Eliminar Asignatura' => 'Remove Subject',
 
//Cursos
 'nombreCurso2' => 'Course Name',
 'descripcionCurso2' => 'Course Description',
 'cursoname' => 'Course Name',
 'cursodesc' => 'Course Description',
 'savecurso' => 'Save',
 'newcurso' => 'New course',
 'obtenerCurso' => 'Import Course',
 'asignarcurso' => 'Assign Subjects to Course',
 'seleccionaCurso' => 'Select the Course from which you want to import only your subjects',
 'ó' => 'or',
 'closecurso' => 'Close',
 'cursoname2' => 'Name',
 'cursodesc2' => 'Description',
 'cursoasignar' => 'Assign Subjects',
 'cursomodificar' => 'Modify',
 'cursoeliminar' => 'Remove',
 'Eliminar Curso' => 'Delete Course',
 'Cursos' => 'Courses',
 'nombreCurso' => 'Course Name',
 'descripcionCurso' => 'Description',
 'AñadirAsignatura' => 'Add Subject',
 'AsignarAsignaturas' => 'Assign Subjects',
 'Asignatura'=>'Subject',
 'Guardar'=>'Save'

    
    
);
$twig->addGlobal('strings_English', $strings);
?>