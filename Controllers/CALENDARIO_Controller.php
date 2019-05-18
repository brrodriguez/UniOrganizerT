<?php

//Controlador para la gestión de calendarios
include '../Models/CALENDARIO_Model.php';
include '../Models/ASIGNATURA_Model.php';
include_once '../Functions/LibraryFunctions.php';
require_once '../Twig/Autoloader.php';
header("Content-Type: text/html;charset=utf-8");

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem( '../templates');
$twig = new Twig_Environment($loader, array('cache' =>  'cache','debug' =>  'true'));

if (!IsAuthenticated()) {
    header('Location:../index.php');
}
include '../Locates/Strings_' . $_SESSION['IDIOMA'] . '.php';
registerGlobals($twig);

function get_data_form() {
	if (isset($_REQUEST['idCalendario'])) {
        $idCalendario = $_REQUEST['idCalendario'];
    } else {
        $idCalendario = "";
    }
	
    if (isset($_REQUEST['nombreCalendario'])) {
        $nombreCalendario = $_REQUEST['nombreCalendario'];
    } else {
        $nombreCalendario = "";
    }

    if (isset($_REQUEST['descripcionCalendario'])) {
        $descripcionCalendario = $_REQUEST['descripcionCalendario'];
    } else {
        $descripcionCalendario = "";
    }

    if (isset($_REQUEST['username'])) {
        $username = $_REQUEST['username'];
    } else {
        $username = "";
    }

    $calendario = new CALENDARIO_Model($idCalendario, $nombreCalendario, $descripcionCalendario, $username);
    return $calendario;
}

if (!isset($_REQUEST['accion'])) {
    $_REQUEST['accion'] = '';
}

switch ($_REQUEST['accion']) { //Actúa según la acción elegida
    case 'vistainsertar':
      
        if (!tienePermisos('../templates/CalendarioAdd.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/CALENDARIO_Controller.php'));
        } else {
			$uno = extraerCursos(1);
			$i=0;
			foreach ($uno as $key => $value) {
				if (strpos($value, 'Dereito constitucional II') !== false) {
					$asig = "Dereito constitucional II";
				}else{
					if (strpos($value, 'Novas tecno') !== false) {
						$asig = "Novas tecnoloxías aplicadas ao dereito";
					}else{
						if (strpos($value, 'Principios de eco') !== false) {
							$asig = "Principios de economía";
						}else{
							if (strpos($value, 'Fundamentos de contabilidade e finanzas') !== false) {
								$asig = "Fundamentos de contabilidade e finanzas";
							}else{
								if (strpos($value, 'Dereito constitucional I') !== false) {
									$asig = "Dereito constitucional I";
								}else{
									if (strpos($value, 'Historia do dereito') !== false) {
										$asig = "Historia do dereito";
									}else{
										if (strpos($value, 'Teor') !== false) {
											$asig = "Teoría do dereito";
										}else{
											if (strpos($value, 'romano') !== false) {
												$asig = "Dereito romano";
											}else{
												if (strpos($value, 'civil') !== false) {
													$asig = "Introdución ao dereito civil e dereito da persoa";
												}else{
													$asig = $value;
												}
											}
										}
									}
								}
							}
						}
					}
				}
				$primero[$i] = $asig;
				$i++; 
			}
			$dos = extraerCursos(2);
			$i=0;
			foreach ($dos as $key => $value) {
				if (strpos($value, 'Dereito civil I. Obrigas e contratos') !== false) {
					$asig = "Dereito civil I. Obrigas e contratos";
				}else{
					if (strpos($value, 'Dereito penal I') !== false) {
						$asig = "Dereito penal I";
					}else{
						if (strpos($value, 'Dereito internacional p') !== false) {
							$asig = "Dereito internacional público";
						}else{
							if (strpos($value, 'Dereito da Uni') !== false) {
								$asig = "Dereito da Unión Europea";
							}else{
								if (strpos($value, 'Dereito administrativo I') !== false) {
									$asig = "Dereito administrativo I";
								}else{
									if (strpos($value, 'Dereito penal II') !== false) {
										$asig = "Dereito penal II";
									}else{
										if (strpos($value, 'Sistema xudicial es') !== false) {
											$asig = "Sistema xudicial español e proceso civil";
										}else{
											if (strpos($value, 'Dereito civil II. Dereitos reais') !== false) {
												$asig = "Dereito civil II. Dereitos reais";
											}else{
												$asig = $value;
											}
										}
									}
								}
							}
						}
					}
				}
				$segundo[$i] = $asig;
				$i++; 
			}
			$tres = extraerCursos(3);
			$i=0;
			foreach ($tres as $key => $value) {
				if (strpos($value, 'Dereito civil III. Familia e') !== false) {
					$asig = "Dereito civil III. Familia e sucesións";
				}else{
					if (strpos($value, 'Dereito mercantil I') !== false) {
						$asig = "Dereito mercantil I";
					}else{
						if (strpos($value, 'Dereito administrativo II') !== false) {
							$asig = "Dereito administrativo II";
						}else{
							if (strpos($value, 'Dereito do traballo e da seguridade social') !== false) {
								$asig = "Dereito do traballo e da seguridade social";
							}else{
								if (strpos($value, 'Dereito procesual penal') !== false) {
									$asig = "Dereito procesual penal";
								}else{
									if (strpos($value, 'Dereito internacional privado') !== false) {
										$asig = "Dereito internacional privado";
									}else{
										if (strpos($value, 'Dereito financeiro e tributario I') !== false) {
											$asig = "Dereito financeiro e tributario I";
										}else{
											if (strpos($value, 'contenciosa-administrativa e social') !== false) {
												$asig = "Xurisdicións contenciosa-administrativa e social";
											}else{
												$asig = $value;
											}
										}
									}
								}
							}
						}
					}
				}
				$tercero[$i] = $asig;
				$i++;
			}
			$cuatro = extraerCursos(4);
			$i=0;
			foreach ($cuatro as $key => $value) {
				if (strpos($value, 'Dereito financeiro e tributario II') !== false) {
					$asig = "Dereito financeiro e tributario II";
				}else{
					if (strpos($value, 'Dereito mercantil II') !== false) {
						$asig = "Dereito mercantil II";
					}else{
						if (strpos($value, 'Dereito mercantil europeo') !== false) {
							$asig = "Dereito mercantil europeo";
						}else{
							if (strpos($value, 'Libre circulaci') !== false) {
								$asig = "Libre circulación de traballadores e políticas sociais europeas";
							}else{
								if (strpos($value, ' e medio ambiente') !== false) {
									$asig = "Unión Europea, constitución e medio ambiente";
								}else{
									if (strpos($value, 'Argumentaci') !== false) {
										$asig = "Argumentación e interpretación xurídica";
									}else{
										if (strpos($value, 'Dereito continental e dereito anglo') !== false) {
											$asig = "Dereito continental e dereito anglosaxón";
										}else{
											if (strpos($value, 'Dereito de defensa da competencia') !== false) {
												$asig = "Dereito de defensa da competencia";
											}else{
												if (strpos($value, 'Procesos especiais e ') !== false) {
													$asig = "Procesos especiais e métodos alternativos de solución de conflitos";
												}else{
													if (strpos($value, 'Dereito tributario da Uni') !== false) {
														$asig = "Dereito tributario da Unión Europea e internacional";
													}else{
														if (strpos($value, 'Litigaci') !== false) {
															$asig = "Litigación internacional e sostibilidade";
														}else{
															if (strpos($value, 'Dereito penal e procesual de menores') !== false) {
																$asig = "Dereito penal e procesual de menores";
															}else{
																if (strpos($value, 'Criminolox') !== false) {
																	$asig = "Criminoloxía e dereito penitenciario";
																}else{
																	if (strpos($value, 'Dereito de danos e responsabilidade civil') !== false) {
																		$asig = "Dereito de danos e responsabilidade civil";
																	}else{
																		if (strpos($value, 'ticas externas') !== false) {
																			$asig = "Prácticas externas";
																		}else{
																			if (strpos($value, 'Traballo de Fin de Grao') !== false) {
																				$asig = "Traballo de Fin de Grao";
																			}else{
																				$asig = $value;
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
				$cuarto[$i] = $asig;
				$i++;
			}
			$listaAsignaturas = extraerAsignaturas();
			$num = count($listaAsignaturas);
			$asignatura = new ASIGNATURA_Model("", "", "");
			$asignaturasBD = $asignatura->Listar();
			$cont = count($asignaturasBD);
			if($num!=$cont){
				foreach ($listaAsignaturas as $key => $value) {	
					if (strpos($value, 'Dereito constitucional II') !== false) {
						$asig = "Dereito constitucional II";
					}else{
						if (strpos($value, 'Dereito continental e dereito anglo') !== false) {
							$asig = "Dereito continental e dereito anglosaxón";
						}else{
							if (strpos($value, 'Principios de eco') !== false) {
								$asig = "Principios de economía";
							}else{
								if (strpos($value, 'Fundamentos de contabilidade e finanzas') !== false) {
									$asig = "Fundamentos de contabilidade e finanzas";
								}else{
									if (strpos($value, 'Dereito constitucional I') !== false) {
										$asig = "Dereito constitucional I";
									}else{
										if (strpos($value, 'Historia do dereito') !== false) {
											$asig = "Historia do dereito";
										}else{
											if (strpos($value, 'Teor') !== false) {
												$asig = "Teoría do dereito";
											}else{
												if (strpos($value, 'romano') !== false) {
													$asig = "Dereito romano";
												}else{
													if (strpos($value, ' e dereito da persoa') !== false) {
														$asig = "Introdución ao dereito civil e dereito da persoa";
													}else{
														if (strpos($value, 'Dereito civil I. Obrigas e contratos') !== false) {
															$asig = "Dereito civil I. Obrigas e contratos";
														}else{
															if (strpos($value, 'Dereito penal II') !== false) {
																$asig = "Dereito penal II";
															}else{
																if (strpos($value, 'Dereito internacional privado') !== false) {
																	$asig = "Dereito internacional privado";
																}else{
																	if (strpos($value, 'Dereito da Uni') !== false) {
																		$asig = "Dereito da Unión Europea";
																	}else{
																		if (strpos($value, 'Dereito administrativo II') !== false) {
																			$asig = "Dereito administrativo II";
																		}else{
																			if (strpos($value, 'Dereito penal I') !== false) {
																				$asig = "Dereito penal I";
																			}else{
																				if (strpos($value, 'Sistema xudicial es') !== false) {
																					$asig = "Sistema xudicial español e proceso civil";
																				}else{
																					if (strpos($value, 'Dereito civil II. Dereitos reais') !== false) {
																						$asig = "Dereito civil II. Dereitos reais";
																					}else{
																						if (strpos($value, 'Dereito civil III. Familia e') !== false) {
																							$asig = "Dereito civil III. Familia e sucesións";
																						}else{
																							if (strpos($value, 'Dereito mercantil II') !== false) {
																								$asig = "Dereito mercantil II";
																							}else{
																								if (strpos($value, 'Dereito administrativo I') !== false) {
																									$asig = "Dereito administrativo I";
																								}else{
																									if (strpos($value, 'Dereito do traballo e da seguridade social') !== false) {
																										$asig = "Dereito do traballo e da seguridade social";
																									}else{
																										if (strpos($value, 'Dereito procesual penal') !== false) {
																											$asig = "Dereito procesual penal";
																										}else{
																											if (strpos($value, 'Dereito internacional p') !== false) {
																												$asig = "Dereito internacional público";
																											}else{
																												if (strpos($value, 'Dereito financeiro e tributario II') !== false) {
																													$asig = "Dereito financeiro e tributario II";
																												}else{
																													if (strpos($value, 'contenciosa-administrativa e social') !== false) {
																														$asig = "Xurisdicións contenciosa-administrativa e social";
																													}else{
																														if (strpos($value, 'Dereito financeiro e tributario I') !== false) {
																															$asig = "Dereito financeiro e tributario I";
																														}else{
																															if (strpos($value, 'Dereito mercantil I') !== false) {
																																$asig = "Dereito mercantil I";
																															}else{
																																if (strpos($value, 'Dereito mercantil europeo') !== false) {
																																	$asig = "Dereito mercantil europeo";
																																}else{
																																	if (strpos($value, 'Libre circulaci') !== false) {
																																		$asig = "Libre circulación de traballadores e políticas sociais europeas";
																																	}else{
																																		if (strpos($value, ' e medio ambiente') !== false) {
																																			$asig = "Unión Europea, constitución e medio ambiente";
																																		}else{
																																			if (strpos($value, 'Argumentaci') !== false) {
																																				$asig = "Argumentación e interpretación xurídica";
																																			}else{
																																				if (strpos($value, 'Novas tecno') !== false) {
																																					$asig = "Novas tecnoloxías aplicadas ao dereito";
																																				}else{
																																					if (strpos($value, 'Dereito de defensa da competencia') !== false) {
																																						$asig = "Dereito de defensa da competencia";
																																					}else{
																																						if (strpos($value, 'Procesos especiais e ') !== false) {
																																							$asig = "Procesos especiais e métodos alternativos de solución de conflitos";
																																						}else{
																																							if (strpos($value, 'Dereito tributario da Uni') !== false) {
																																								$asig = "Dereito tributario da Unión Europea e internacional";
																																							}else{
																																								if (strpos($value, 'Litigaci') !== false) {
																																									$asig = "Litigación internacional e sostibilidade";
																																								}else{
																																									if (strpos($value, 'Dereito penal e procesual de menores') !== false) {
																																										$asig = "Dereito penal e procesual de menores";
																																									}else{
																																										if (strpos($value, 'Criminolox') !== false) {
																																											$asig = "Criminoloxía e dereito penitenciario";
																																										}else{
																																											if (strpos($value, 'Dereito de danos e responsabilidade civil') !== false) {
																																												$asig = "Dereito de danos e responsabilidade civil";
																																											}else{
																																												if (strpos($value, 'ticas externas') !== false) {
																																													$asig = "Prácticas externas";
																																												}else{
																																													if (strpos($value, 'Traballo de Fin de Grao') !== false) {
																																														$asig = "Traballo de Fin de Grao";
																																													}
																																												}
																																											}
																																										}
																																									}
																																								}
																																							}
																																						}
																																					}
																																				}
																																			}
																																		}
																																	}
																																}
																															}
																														}
																													}
																												}
																											}
																										}
																									}
																								}
																							}
																						}
																					}
																				}
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
					if(!(obtenerIdAsignatura($asig))){//Se comprueba si las asignaturas extraídas ya existen en el sistema y si no se crean
						$asignatura = new ASIGNATURA_Model("", $asig, "");
						$asignatura->Insertar();
					}
				}
			}
			$datos['selectasignaturas'] = "";
			$asignaturasBD = $asignatura->Listar();
			foreach ($asignaturasBD as $valor) {
				$datos['selectasignaturas'] .= "<option value=" . $valor['idAsignatura'] . ">" . $valor['nombreAsignatura'] . "</option>";
			}
			$template = $twig->loadTemplate('CalendarioAdd.html.twig');
            echo $template->render(array('strings' => $strings, 'datos' => $datos, 'primero' => $primero, 'segundo' => $segundo, 'tercero' => $tercero, 'cuarto' => $cuarto, 'username' => $_SESSION['login'], 'volver' => '../Controllers/CALENDARIO_Controller.php'));
        }
		break;
		
	case 'insertar':

        if (!tienePermisos('../templates/CalendarioAdd.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/CALENDARIO_Controller.php'));
        } else {
            $calendario = get_data_form();
			$respuesta = $calendario->insertarCalendario();
			$idCalendario = obtenerUltimoCalendario();

			$entregas1 = extraerEntregasPrimero();	
			$entregas2 = extraerEntregasSegundo();
			$entregas3 = extraerEntregasTercero();
			$entregas4 = extraerEntregasCuarto();

			$listaAsignaturas = $_POST["asignaturas"];
			$asignaturas = explode(",", $listaAsignaturas);
			$asignatura = new ASIGNATURA_Model("", "", "");
			$asignaturasBD = $asignatura->Listar();

			if($listaAsignaturas!=null){
				foreach ($asignaturas as $key => $value) {
					// Orden del Array
					// - Nombre de Asignatura
					if (strpos($value, 'Dereito constitucional II') !== false) {
						$asig = "Dereito constitucional II";
					}else{
						if (strpos($value, 'Dereito continental e dereito anglo') !== false) {
							$asig = "Dereito continental e dereito anglosaxón";
						}else{
							if (strpos($value, 'Principios de eco') !== false) {
								$asig = "Principios de economía";
							}else{
								if (strpos($value, 'Fundamentos de contabilidade e finanzas') !== false) {
									$asig = "Fundamentos de contabilidade e finanzas";
								}else{
									if (strpos($value, 'Dereito constitucional I') !== false) {
										$asig = "Dereito constitucional I";
									}else{
										if (strpos($value, 'Historia do dereito') !== false) {
											$asig = "Historia do dereito";
										}else{
											if (strpos($value, 'Teor') !== false) {
												$asig = "Teoría do dereito";
											}else{
												if (strpos($value, 'romano') !== false) {
													$asig = "Dereito romano";
												}else{
													if (strpos($value, ' e dereito da persoa') !== false) {
														$asig = "Introdución ao dereito civil e dereito da persoa";
													}else{
														if (strpos($value, 'Dereito civil I. Obrigas e contratos') !== false) {
															$asig = "Dereito civil I. Obrigas e contratos";
														}else{
															if (strpos($value, 'Dereito penal II') !== false) {
																$asig = "Dereito penal II";
															}else{
																if (strpos($value, 'Dereito internacional privado') !== false) {
																	$asig = "Dereito internacional privado";
																}else{
																	if (strpos($value, 'Dereito da Uni') !== false) {
																		$asig = "Dereito da Unión Europea";
																	}else{
																		if (strpos($value, 'Dereito administrativo II') !== false) {
																			$asig = "Dereito administrativo II";
																		}else{
																			if (strpos($value, 'Dereito penal I') !== false) {
																				$asig = "Dereito penal I";
																			}else{
																				if (strpos($value, 'Sistema xudicial es') !== false) {
																					$asig = "Sistema xudicial español e proceso civil";
																				}else{
																					if (strpos($value, 'Dereito civil II. Dereitos reais') !== false) {
																						$asig = "Dereito civil II. Dereitos reais";
																					}else{
																						if (strpos($value, 'Dereito civil III. Familia e') !== false) {
																							$asig = "Dereito civil III. Familia e sucesións";
																						}else{
																							if (strpos($value, 'Dereito mercantil II') !== false) {
																								$asig = "Dereito mercantil II";
																							}else{
																								if (strpos($value, 'Dereito administrativo I') !== false) {
																									$asig = "Dereito administrativo I";
																								}else{
																									if (strpos($value, 'Dereito do traballo e da seguridade social') !== false) {
																										$asig = "Dereito do traballo e da seguridade social";
																									}else{
																										if (strpos($value, 'Dereito procesual penal') !== false) {
																											$asig = "Dereito procesual penal";
																										}else{
																											if (strpos($value, 'Dereito internacional p') !== false) {
																												$asig = "Dereito internacional público";
																											}else{
																												if (strpos($value, 'Dereito financeiro e tributario II') !== false) {
																													$asig = "Dereito financeiro e tributario II";
																												}else{
																													if (strpos($value, 'contenciosa-administrativa e social') !== false) {
																														$asig = "Xurisdicións contenciosa-administrativa e social";
																													}else{
																														if (strpos($value, 'Dereito financeiro e tributario I') !== false) {
																															$asig = "Dereito financeiro e tributario I";
																														}else{
																															if (strpos($value, 'Dereito mercantil I') !== false) {
																																$asig = "Dereito mercantil I";
																															}else{
																																if (strpos($value, 'Dereito mercantil europeo') !== false) {
																																	$asig = "Dereito mercantil europeo";
																																}else{
																																	if (strpos($value, 'Libre circulaci') !== false) {
																																		$asig = "Libre circulación de traballadores e políticas sociais europeas";
																																	}else{
																																		if (strpos($value, ' e medio ambiente') !== false) {
																																			$asig = "Unión Europea, constitución e medio ambiente";
																																		}else{
																																			if (strpos($value, 'Argumentaci') !== false) {
																																				$asig = "Argumentación e interpretación xurídica";
																																			}else{
																																				if (strpos($value, 'Novas tecno') !== false) {
																																					$asig = "Novas tecnoloxías aplicadas ao dereito";
																																				}else{
																																					if (strpos($value, 'Dereito de defensa da competencia') !== false) {
																																						$asig = "Dereito de defensa da competencia";
																																					}else{
																																						if (strpos($value, 'Procesos especiais e ') !== false) {
																																							$asig = "Procesos especiais e métodos alternativos de solución de conflitos";
																																						}else{
																																							if (strpos($value, 'Dereito tributario da Uni') !== false) {
																																								$asig = "Dereito tributario da Unión Europea e internacional";
																																							}else{
																																								if (strpos($value, 'Litigaci') !== false) {
																																									$asig = "Litigación internacional e sostibilidade";
																																								}else{
																																									if (strpos($value, 'Dereito penal e procesual de menores') !== false) {
																																										$asig = "Dereito penal e procesual de menores";
																																									}else{
																																										if (strpos($value, 'Criminolox') !== false) {
																																											$asig = "Criminoloxía e dereito penitenciario";
																																										}else{
																																											if (strpos($value, 'Dereito de danos e responsabilidade civil') !== false) {
																																												$asig = "Dereito de danos e responsabilidade civil";
																																											}else{
																																												if (strpos($value, 'ticas externas') !== false) {
																																													$asig = "Prácticas externas";
																																												}else{
																																													if (strpos($value, 'Traballo de Fin de Grao') !== false) {
																																														$asig = "Traballo de Fin de Grao";
																																													}
																																												}
																																											}
																																										}
																																									}
																																								}
																																							}
																																						}
																																					}
																																				}
																																			}
																																		}
																																	}
																																}
																															}
																														}
																													}
																												}
																											}
																										}
																									}
																								}
																							}
																						}
																					}
																				}
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
					foreach($asignaturasBD as $clave => $valor){
						if($asig==$valor[1]){
							$idAsig1 = $valor[0];
						}
					}
					foreach($entregas1 as $entrega){					
						if (strpos($entrega[0], 'Dereito Constitucional I.') !== false) {
							$datos[0] = "Dereito constitucional I";
						}else{
							if (strpos($entrega[0], 'Nuevas Tecno') !== false) {
								$datos[0] = "Novas tecnoloxías aplicadas ao dereito";
							}else{
								if (strpos($entrega[0], 'PRINCIPIOS DE') !== false) {
									$datos[0] = "Principios de economía";
								}else{
									if (strpos($entrega[0], 'FUNDAMENTOS DE CONTABILIDADE E FINANZAS') !== false) {
										$datos[0] = "Fundamentos de contabilidade e finanzas";
									}else{
										if (strpos($entrega[0], 'DEREITO CONSTITUCIONAL II') !== false) {
											$datos[0] = "Dereito constitucional II";
										}else{
											if (strpos($entrega[0], 'HISTORIA DO DEREITO.') !== false) {
												$datos[0] = "Historia do dereito";
											}else{
												if (strpos($entrega[0], 'Teor') !== false) {
													$datos[0] = "Teoría do dereito";
												}else{
													if (strpos($entrega[0], 'romano') !== false) {
														$datos[0] = "Dereito romano";
													}else{
														if (strpos($entrega[0], 'civil') !== false) {
															$datos[0] = "Introdución ao dereito civil e dereito da persoa";
														}else{
															$datos[0] = $entrega[0];
														}
													}
												}
											}
										}
									}
								}
							}
						}
						foreach($asignaturasBD as $clave => $valor){
							if($datos[0]==$valor[1]){
								$idAsig2 = $valor[0];
							}
						}
						if($idAsig1===$idAsig2){//Se obtienen los datos de los exámenes para cada asignatura seleccionada
							$fecha1 = $entrega[1]->format('Y-m-d H:i:s');
							$calendario->crearEntregas($idCalendario, $idAsig2, $entrega[0], $fecha1);
							
						}								
					}

					foreach($entregas2 as $entrega){					
						if (strpos($entrega[0], 'Dereito civil I.') !== false) {
							$datos[0] = "Dereito civil I. Obrigas e contratos";
						}else{
							if (strpos($entrega[0], 'Dereito penal I') !== false) {
								$datos[0] = "Dereito penal I";
							}else{
								if (strpos($entrega[0], 'Dereito internacional p') !== false) {
									$datos[0] = "Dereito internacional público";
								}else{
									if (strpos($entrega[0], 'Dereito da Uni') !== false) {
										$datos[0] = "Dereito da Unión Europea";
									}else{
										if (strpos($entrega[0], 'Dereito administrativo I') !== false) {
											$datos[0] = "Dereito administrativo I";
										}else{
											if (strpos($entrega[0], 'Dereito penal II') !== false) {
												$datos[0] = "Dereito penal II";
											}else{
												if (strpos($entrega[0], 'Sistema xudicial') !== false) {
													$datos[0] = "Sistema xudicial español e proceso civil";
												}else{
													if (strpos($entrega[0], 'Dereito civil II') !== false) {
														$datos[0] = "Dereito civil II. Dereitos reais";
													}else{
														$datos[0] = $entrega[0];
													}
												}
											}
										}
									}
								}
							}
						}
						foreach($asignaturasBD as $clave => $valor){
							if($datos[0]==$valor[1]){
								$idAsig2 = $valor[0];
							}
						}
						if($idAsig1===$idAsig2){//Se obtienen los datos de los exámenes para cada asignatura seleccionada
							$fecha1 = $entrega[1]->format('Y-m-d H:i:s');
							$calendario->crearEntregas($idCalendario, $idAsig2, $entrega[0], $fecha1);
						}								
					}
					
					foreach($entregas3 as $entrega){					
						if (strpos($entrega[0], 'Dereito Civil III.') !== false) {
							$datos[0] = "Dereito civil III. Familia e sucesións";
						}else{
							if (strpos($entrega[0], 'Dereito Mercantil I.') !== false) {
								$datos[0] = "Dereito mercantil I";
							}else{
								if (strpos($entrega[0], 'Dereito Administrativo II') !== false) {
									$datos[0] = "Dereito administrativo II";
								}else{
									if (strpos($entrega[0], ' SS') !== false) {
										$datos[0] = "Dereito do traballo e da seguridade social";
									}else{
										if (strpos($entrega[0], 'Dereito Procesual Penal') !== false or strpos($entrega[0], 'Dereito procesual penal') !== false) {
											$datos[0] = "Dereito procesual penal";
										}else{
											if (strpos($entrega[0], 'Dereito Internacional Privado') !== false) {
												$datos[0] = "Dereito internacional privado";
											}else{
												if (strpos($entrega[0], 'Dereito Financeiro e Tributario') !== false) {
													$datos[0] = "Dereito financeiro e tributario I";
												}else{
													if (strpos($entrega[0], 'contenciosa-administrativa e social') !== false) {
														$datos[0] = "Xurisdicións contenciosa-administrativa e social";
													}else{
														$datos[0] = $entrega[0];
													}
												}
											}
										}
									}
								}
							}
						}
						foreach($asignaturasBD as $clave => $valor){
							if($datos[0]==$valor[1]){
								$idAsig2 = $valor[0];
							}
						}
						if($idAsig1===$idAsig2){//Se obtienen los datos de los exámenes para cada asignatura seleccionada
							$fecha1 = $entrega[1]->format('Y-m-d H:i:s');
							$calendario->crearEntregas($idCalendario, $idAsig2, $entrega[0], $fecha1);
						}								
					}
					
					foreach($entregas4 as $entrega){
						if (strpos($entrega[0], 'DEREITO FINANCEIRO') !== false) {
							$datos[0] = "Dereito financeiro e tributario II";
						}else{
							if (strpos($entrega[0], 'DEREITO MERCANTIL II') !== false) {
								$datos[0] = "Dereito mercantil II";
							}else{
								if (strpos($entrega[0], 'Dereito mercantil europeo') !== false) {
									$datos[0] = "Dereito mercantil europeo";
								}else{
									if (strpos($entrega[0], 'LIBRE ') !== false) {
										$datos[0] = "Libre circulación de traballadores e políticas sociais europeas";
									}else{
										if (strpos($entrega[0], 'n e medio ambiente') !== false) {
											$datos[0] = "Unión Europea, constitución e medio ambiente";
										}else{
											if (strpos($entrega[0], 'Argumentaci') !== false) {
												$datos[0] = "Argumentación e interpretación xurídica";
											}else{
												if (strpos($entrega[0], 'Dereito continental e dereito anglo') !== false) {
													$datos[0] = "Dereito continental e dereito anglosaxón";
												}else{
													if (strpos($entrega[0], 'Dereito de defensa da competencia') !== false) {
														$datos[0] = "Dereito de defensa da competencia";
													}else{
														if (strpos($entrega[0], 'PRO. ESP. E') !== false) {
															$datos[0] = "Procesos especiais e métodos alternativos de solución de conflitos";
														}else{
															if (strpos($entrega[0], 'DEREITO TRIBUTARIO DA') !== false) {
																$datos[0] = "Dereito tributario da Unión Europea e internacional";
															}else{
																if (strpos($entrega[0], 'INTERNACIONAL E SOSTIBILIDADE') !== false) {
																	$datos[0] = "Litigación internacional e sostibilidade";
																}else{
																	if (strpos($entrega[0], 'D. penal e procesual de menores') !== false) {
																		$datos[0] = "Dereito penal e procesual de menores";
																	}else{
																		if (strpos($entrega[0], 'DEREITO PENITENCIARIO') !== false) {
																			$datos[0] = "Criminoloxía e dereito penitenciario";
																		}else{
																			if (strpos($entrega[0], 'Dereito de danos e responsabilidade civil') !== false) {
																				$datos[0] = "Dereito de danos e responsabilidade civil";
																			}else{
																				if (strpos($entrega[0], 'ticas externas') !== false) {
																					$datos[0] = "Prácticas externas";
																				}else{
																					if (strpos($entrega[0], 'Traballo de Fin de Grao') !== false) {
																						$datos[0] = "Traballo de Fin de Grao";
																					}else{
																						$datos[0] = $entrega[0];
																					}
																				}
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
						foreach($asignaturasBD as $clave => $valor){
							if($datos[0]==$valor[1]){
								$idAsig2 = $valor[0];
							}
						}
						if($idAsig1===$idAsig2){//Se obtienen los datos de los exámenes para cada asignatura seleccionada
							$fecha1 = $entrega[1]->format('Y-m-d H:i:s');
							$calendario->crearEntregas($idCalendario, $idAsig2, $entrega[0], $fecha1);
						}								
					}
				}
			}
			$calendario = new CALENDARIO_Model("", "", "", "");
            $calendariosUsuario = $calendario->obtenerCalendariosUsuario($_SESSION['login']);
            $template = $twig->loadTemplate('CalendarioShowall.html.twig');
            echo $template->render(array('strings' => $strings, 'datos' => $calendariosUsuario, 'respuesta' => $respuesta, 'volver' => '../Controllers/CALENDARIO_Controller.php'));
        }
		break;
				
	case 'vistafiltrar':
      
        if (!tienePermisos('../templates/CalendarioFilter.html.twig')) {
			$template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/CALENDARIO_Controller.php'));
        } else {
			$template = $twig->loadTemplate('CalendarioFilter.html.twig');
            echo $template->render(array('strings' => $strings, 'volver' => '../Controllers/CALENDARIO_Controller.php'));
        }
        break;
		
	case 'filtrar':
      
        if (!tienePermisos('../templates/CalendarioFilter.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/CALENDARIO_Controller.php'));
        } else {
			$calendario = new CALENDARIO_Model("", "", "", "");
			$datos = $calendario->filtrar($_REQUEST['username'], $_REQUEST['nombreCalendario']);
			$template = $twig->loadTemplate('CalendarioShowall.html.twig');
            echo $template->render(array('strings' => $strings, 'datos' => $datos, 'volver' => '../Controllers/CALENDARIO_Controller.php'));
        }
		break;
		
	case 'vistaeliminar':

        if (!tienePermisos('../templates/CalendarioDelete.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/CALENDARIO_Controller.php'));
        } else {
            $calendario = get_data_form();
			$datos = $calendario->obtenerCalendarioDetalle($_REQUEST['id']);
			$template = $twig->loadTemplate('CalendarioDelete.html.twig');
            echo $template->render(array('strings' => $strings, 'datos' => $datos, 'volver' => '../Controllers/CALENDARIO_Controller.php'));
        }
        break;

    case 'eliminar':

        if (!tienePermisos('../templates/CalendarioDelete.html.twig')) {
            $template = $twig->loadTemplate('Mensaje.html.twig');
    		echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/CALENDARIO_Controller.php'));
        } else {
			$calendario = get_data_form();
			if(isset($_POST['eliminar'])){
				foreach($_POST['eliminar'] as $valor){
					$respuesta = $calendario->eliminarCalendario($valor);
				}
			}else{
				if(isset($_REQUEST['id'])){
					$respuesta = $calendario->eliminarCalendario($_REQUEST['id']);
				}else{
					$respuesta = null;
				}
			}
			$calendario = new CALENDARIO_Model("", "", "", "");
            $calendariosUsuario = $calendario->obtenerCalendariosUsuario($_SESSION['login']);
            $template = $twig->loadTemplate('CalendarioShowall.html.twig');
            echo $template->render(array('strings' => $strings, 'datos' => $calendariosUsuario, 'respuesta' => $respuesta, 'volver' => '../Controllers/CALENDARIO_Controller.php'));
        }
		break;
		
	case 'vistamodificar':

			if (!tienePermisos('../templates/CalendarioEdit.html.twig')) {
				$template = $twig->loadTemplate('Mensaje.html.twig');
				echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/CALENDARIO_Controller.php'));
			} else {
				$calendario = get_data_form();
				$datos1 = $calendario->obtenerCalendarioDetalle($_REQUEST['id']);
				$asignaturas = $calendario->obtenerAsignaturasCalendario($_REQUEST['id']);
				$asignatura = new ASIGNATURA_Model('','');
				$guias = extraerAsignaturasGuia();
				$i=0;
				$datos2 = NULL;
				foreach($asignaturas as $asignatura){
					$datos2[$i] = $asignatura;
					foreach($guias as $guia){
						if (strpos($guia[0], 'Dereito constitucional II') !== false) {
							$asig = "Dereito constitucional II";
						}else{
							if (strpos($guia[0], 'Dereito continental e dereito') !== false) {
								$asig = "Sistemas xurídicos contemporáneos: Dereito continental e dereito anglosaxón";
							}else{
								if (strpos($guia[0], 'Principios de eco') !== false) {
									$asig = "Principios de economía";
								}else{
									if (strpos($guia[0], 'Fundamentos de contabilidade e finanzas') !== false) {
										$asig = "Fundamentos de contabilidade e finanzas";
									}else{
										if (strpos($guia[0], 'Dereito constitucional I') !== false) {
											$asig = "Dereito constitucional I";
										}else{
											if (strpos($guia[0], 'Historia do dereito') !== false) {
												$asig = "Historia do dereito";
											}else{
												if (strpos($guia[0], 'Teor') !== false) {
													$asig = "Teoría do dereito";
												}else{
													if (strpos($guia[0], 'romano') !== false) {
														$asig = "Dereito romano";
													}else{
														if (strpos($guia[0], ' e dereito da persoa') !== false) {
															$asig = "Introdución ao dereito civil e dereito da persoa";
														}else{
															if (strpos($guia[0], 'Dereito civil I. Obrigas e contratos') !== false) {
																$asig = "Dereito civil I. Obrigas e contratos";
															}else{
																if (strpos($guia[0], 'Dereito penal II') !== false) {
																	$asig = "Dereito penal II";
																}else{
																	if (strpos($guia[0], 'Dereito internacional privado') !== false) {
																		$asig = "Dereito internacional privado";
																	}else{
																		if (strpos($guia[0], 'Dereito da Uni') !== false) {
																			$asig = "Dereito da Unión Europea";
																		}else{
																			if (strpos($guia[0], 'Dereito administrativo II') !== false) {
																				$asig = "Dereito administrativo II";
																			}else{
																				if (strpos($guia[0], 'Dereito penal I') !== false) {
																					$asig = "Dereito penal I";
																				}else{
																					if (strpos($guia[0], 'Sistema xudicial es') !== false) {
																						$asig = "Sistema xudicial español e proceso civil";
																					}else{
																						if (strpos($guia[0], 'Dereito civil II. Dereitos reais') !== false) {
																							$asig = "Dereito civil II. Dereitos reais";
																						}else{
																							if (strpos($guia[0], 'Dereito civil III. Familia e') !== false) {
																								$asig = "Dereito civil III. Familia e sucesións";
																							}else{
																								if (strpos($guia[0], 'Dereito mercantil II') !== false) {
																									$asig = "Dereito mercantil II";
																								}else{
																									if (strpos($guia[0], 'Dereito administrativo I') !== false) {
																										$asig = "Dereito administrativo I";
																									}else{
																										if (strpos($guia[0], 'Dereito do traballo e da seguridade social') !== false) {
																											$asig = "Dereito do traballo e da seguridade social";
																										}else{
																											if (strpos($guia[0], 'Dereito procesual penal') !== false) {
																												$asig = "Dereito procesual penal";
																											}else{
																												if (strpos($guia[0], 'Dereito internacional p') !== false) {
																													$asig = "Dereito internacional público";
																												}else{
																													if (strpos($guia[0], 'Dereito financeiro e tributario II') !== false) {
																														$asig = "Dereito financeiro e tributario II";
																													}else{
																														if (strpos($guia[0], 'contenciosa-administrativa e social') !== false) {
																															$asig = "Xurisdicións contenciosa-administrativa e social";
																														}else{
																															if (strpos($guia[0], 'Dereito financeiro e tributario I') !== false) {
																																$asig = "Dereito financeiro e tributario I";
																															}else{
																																if (strpos($guia[0], 'Dereito mercantil I') !== false) {
																																	$asig = "Dereito mercantil I";
																																}else{
																																	if (strpos($guia[0], 'Dereito mercantil europeo') !== false) {
																																		$asig = "Dereito mercantil europeo";
																																	}else{
																																		if (strpos($guia[0], 'Libre circulaci') !== false) {
																																			$asig = "Libre circulación de traballadores e políticas sociais europeas";
																																		}else{
																																			if (strpos($guia[0], ' e medio ambiente') !== false) {
																																				$asig = "Unión Europea, constitución e medio ambiente";
																																			}else{
																																				if (strpos($guia[0], 'Argumentaci') !== false) {
																																					$asig = "Argumentación e interpretación xurídica";
																																				}else{
																																					if (strpos($guia[0], 'Novas tecno') !== false) {
																																						$asig = "Novas tecnoloxías aplicadas ao dereito";
																																					}else{
																																						if (strpos($guia[0], 'Dereito de defensa da competencia') !== false) {
																																							$asig = "Dereito de defensa da competencia";
																																						}else{
																																							if (strpos($guia[0], 'Procesos especiais e ') !== false) {
																																								$asig = "Procesos especiais e métodos alternativos de solución de conflitos";
																																							}else{
																																								if (strpos($guia[0], 'Dereito tributario da Uni') !== false) {
																																									$asig = "Dereito tributario da Unión Europea e internacional";
																																								}else{
																																									if (strpos($guia[0], 'Litigaci') !== false) {
																																										$asig = "Litigación internacional e sostibilidade";
																																									}else{
																																										if (strpos($guia[0], 'Dereito penal e procesual de menores') !== false) {
																																											$asig = "Dereito penal e procesual de menores";
																																										}else{
																																											if (strpos($guia[0], 'Criminolox') !== false) {
																																												$asig = "Criminoloxía e dereito penitenciario";
																																											}else{
																																												if (strpos($guia[0], 'Dereito de danos e responsabilidade civil') !== false) {
																																													$asig = "Dereito de danos e responsabilidade civil";
																																												}else{
																																													if (strpos($guia[0], 'ticas externas') !== false) {
																																														$asig = "Prácticas externas";
																																													}else{
																																														if (strpos($guia[0], 'Traballo de Fin de Grao') !== false) {
																																															$asig = "Traballo de Fin de Grao";
																																														}
																																													}
																																												}
																																											}
																																										}
																																									}
																																								}
																																							}
																																						}
																																					}
																																				}
																																			}
																																		}
																																	}
																																}
																															}
																														}
																													}
																												}
																											}
																										}
																									}
																								}
																							}
																						}
																					}
																				}
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
						if($asignatura[1]==$asig){
							$asignatura['href'] = $guia[1];
							$datos2[$i] = $asignatura;
						}
					}
					$i++;
				}
				$asignatura = new ASIGNATURA_Model("", "", "");
				$asig = $asignatura->Listar();
				$datos['selectasignaturas'] = "";
				foreach ($asig as $valor) {
					$datos['selectasignaturas'] .= "<option value=" . $valor['idAsignatura'] . ">" . $valor['nombreAsignatura'] . "</option>";
				}
				$template = $twig->loadTemplate('CalendarioEdit.html.twig');
				echo $template->render(array('strings' => $strings, 'datos' => $datos, 'calendario' => $datos1, 'asignaturas' => $datos2, 'volver' => '../Controllers/CALENDARIO_Controller.php'));
			}
			break;
	
	case 'modificar':
		
			if (!tienePermisos('../templates/CalendarioEdit.html.twig')) {
				$template = $twig->loadTemplate('Mensaje.html.twig');
				echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/CALENDARIO_Controller.php'));
			} else {
				$calendario = get_data_form();
				$respuesta = $calendario->modificarCalendario($_REQUEST['id']);
				$entregas1 = extraerEntregasPrimero();	
				$entregas2 = extraerEntregasSegundo();
				$entregas3 = extraerEntregasTercero();
				$entregas4 = extraerEntregasCuarto();

				$asignatura = new ASIGNATURA_Model("", "", "");
				$asignaturasBD = $asignatura->Listar();

				//Recorremos todas las filas de 1 en 1
				$asign_data = $_POST;
				$asign_data_formated = array_chunk($asign_data, 1, false);
				foreach ($asign_data_formated as $key => $value) {
					//Una vez tenemos cada seccion del array
					//Guardamos la asignacion en la bd con sus correspondientes datos de forma que
					// Orden del Array
					// 0 - Id de Asignatura
					foreach($entregas1 as $entrega){					
						if (strpos($entrega[0], 'Dereito Constitucional I.') !== false) {
							$datos[0] = "Dereito constitucional I";
						}else{
							if (strpos($entrega[0], 'Nuevas Tecno') !== false) {
								$datos[0] = "Novas tecnoloxías aplicadas ao dereito";
							}else{
								if (strpos($entrega[0], 'PRINCIPIOS DE') !== false) {
									$datos[0] = "Principios de economía";
								}else{
									if (strpos($entrega[0], 'FUNDAMENTOS DE CONTABILIDADE E FINANZAS') !== false) {
										$datos[0] = "Fundamentos de contabilidade e finanzas";
									}else{
										if (strpos($entrega[0], 'DEREITO CONSTITUCIONAL II') !== false) {
											$datos[0] = "Dereito constitucional II";
										}else{
											if (strpos($entrega[0], 'HISTORIA DO DEREITO.') !== false) {
												$datos[0] = "Historia do dereito";
											}else{
												if (strpos($entrega[0], 'Teor') !== false) {
													$datos[0] = "Teoría do dereito";
												}else{
													if (strpos($entrega[0], 'romano') !== false) {
														$datos[0] = "Dereito romano";
													}else{
														if (strpos($entrega[0], 'civil') !== false) {
															$datos[0] = "Introdución ao dereito civil e dereito da persoa";
														}else{
															$datos[0] = $entrega[0];
														}
													}
												}
											}
										}
									}
								}
							}
						}
						foreach($asignaturasBD as $clave => $valor){
							if($datos[0]==$valor[1]){
								$idAsig = $valor[0];
							}
						}
						if($value[0]===$idAsig){//Se obtienen los datos de los exámenes para cada asignatura seleccionada
							$fecha1 = $entrega[1]->format('Y-m-d H:i:s');
							$calendario->crearEntregas($_REQUEST['id'], $idAsig, $entrega[0], $fecha1);
						}								
					}

					foreach($entregas2 as $entrega){					
						if (strpos($entrega[0], 'Dereito civil I.') !== false) {
							$datos[0] = "Dereito civil I. Obrigas e contratos";
						}else{
							if (strpos($entrega[0], 'Dereito penal I') !== false) {
								$datos[0] = "Dereito penal I";
							}else{
								if (strpos($entrega[0], 'Dereito internacional p') !== false) {
									$datos[0] = "Dereito internacional público";
								}else{
									if (strpos($entrega[0], 'Dereito da Uni') !== false) {
										$datos[0] = "Dereito da Unión Europea";
									}else{
										if (strpos($entrega[0], 'Dereito administrativo I') !== false) {
											$datos[0] = "Dereito administrativo I";
										}else{
											if (strpos($entrega[0], 'Dereito penal II') !== false) {
												$datos[0] = "Dereito penal II";
											}else{
												if (strpos($entrega[0], 'Sistema xudicial') !== false) {
													$datos[0] = "Sistema xudicial español e proceso civil";
												}else{
													if (strpos($entrega[0], 'Dereito civil II') !== false) {
														$datos[0] = "Dereito civil II. Dereitos reais";
													}else{
														$datos[0] = $entrega[0];
													}
												}
											}
										}
									}
								}
							}
						}
						foreach($asignaturasBD as $clave => $valor){
							if($datos[0]==$valor[1]){
								$idAsig = $valor[0];
							}
						}
						if($value[0]===$idAsig){//Se obtienen los datos de los exámenes para cada asignatura seleccionada
							$fecha1 = $entrega[1]->format('Y-m-d H:i:s');
							$calendario->crearEntregas($_REQUEST['id'], $idAsig, $entrega[0], $fecha1);
						}								
					}
					
					foreach($entregas3 as $entrega){					
						if (strpos($entrega[0], 'Dereito Civil III.') !== false) {
							$datos[0] = "Dereito civil III. Familia e sucesións";
						}else{
							if (strpos($entrega[0], 'Dereito Mercantil I.') !== false) {
								$datos[0] = "Dereito mercantil I";
							}else{
								if (strpos($entrega[0], 'Dereito Administrativo II') !== false) {
									$datos[0] = "Dereito administrativo II";
								}else{
									if (strpos($entrega[0], ' SS') !== false) {
										$datos[0] = "Dereito do traballo e da seguridade social";
									}else{
										if (strpos($entrega[0], 'Dereito Procesual Penal') !== false or strpos($entrega[0], 'Dereito procesual penal') !== false) {
											$datos[0] = "Dereito procesual penal";
										}else{
											if (strpos($entrega[0], 'Dereito Internacional Privado') !== false) {
												$datos[0] = "Dereito internacional privado";
											}else{
												if (strpos($entrega[0], 'Dereito Financeiro e Tributario') !== false) {
													$datos[0] = "Dereito financeiro e tributario I";
												}else{
													if (strpos($entrega[0], 'contenciosa-administrativa e social') !== false) {
														$datos[0] = "Xurisdicións contenciosa-administrativa e social";
													}else{
														$datos[0] = $entrega[0];
													}
												}
											}
										}
									}
								}
							}
						}
						foreach($asignaturasBD as $clave => $valor){
							if($datos[0]==$valor[1]){
								$idAsig = $valor[0];
							}
						}
						if($value[0]===$idAsig){//Se obtienen los datos de los exámenes para cada asignatura seleccionada
							$fecha1 = $entrega[1]->format('Y-m-d H:i:s');
							$calendario->crearEntregas($_REQUEST['id'], $idAsig, $entrega[0], $fecha1);
						}								
					}
					
					foreach($entregas4 as $entrega){
						if (strpos($entrega[0], 'DEREITO FINANCEIRO') !== false) {
							$datos[0] = "Dereito financeiro e tributario II";
						}else{
							if (strpos($entrega[0], 'DEREITO MERCANTIL II') !== false) {
								$datos[0] = "Dereito mercantil II";
							}else{
								if (strpos($entrega[0], 'Dereito mercantil europeo') !== false) {
									$datos[0] = "Dereito mercantil europeo";
								}else{
									if (strpos($entrega[0], 'LIBRE ') !== false) {
										$datos[0] = "Libre circulación de traballadores e políticas sociais europeas";
									}else{
										if (strpos($entrega[0], 'n e medio ambiente') !== false) {
											$datos[0] = "Unión Europea, constitución e medio ambiente";
										}else{
											if (strpos($entrega[0], 'Argumentaci') !== false) {
												$datos[0] = "Argumentación e interpretación xurídica";
											}else{
												if (strpos($entrega[0], 'Sistemas xur') !== false) {
													$datos[0] = "Sistemas xurídicos contemporáneos: Dereito continental e dereito anglosaxón";
												}else{
													if (strpos($entrega[0], 'Dereito de defensa da competencia') !== false) {
														$datos[0] = "Dereito de defensa da competencia";
													}else{
														if (strpos($entrega[0], 'PRO. ESP. E') !== false) {
															$datos[0] = "Procesos especiais e métodos alternativos de solución de conflitos";
														}else{
															if (strpos($entrega[0], 'DEREITO TRIBUTARIO DA') !== false) {
																$datos[0] = "Dereito tributario da Unión Europea e internacional";
															}else{
																if (strpos($entrega[0], 'INTERNACIONAL E SOSTIBILIDADE') !== false) {
																	$datos[0] = "Litigación internacional e sostibilidade";
																}else{
																	if (strpos($entrega[0], 'D. penal e procesual de menores') !== false) {
																		$datos[0] = "Dereito penal e procesual de menores";
																	}else{
																		if (strpos($entrega[0], 'DEREITO PENITENCIARIO') !== false) {
																			$datos[0] = "Criminoloxía e dereito penitenciario";
																		}else{
																			if (strpos($entrega[0], 'Dereito de danos e responsabilidade civil') !== false) {
																				$datos[0] = "Dereito de danos e responsabilidade civil";
																			}else{
																				if (strpos($entrega[0], 'ticas externas') !== false) {
																					$datos[0] = "Prácticas externas";
																				}else{
																					if (strpos($entrega[0], 'Traballo de Fin de Grao') !== false) {
																						$datos[0] = "Traballo de Fin de Grao";
																					}else{
																						$datos[0] = $entrega[0];
																					}
																				}
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
						foreach($asignaturasBD as $clave => $valor){
							if($datos[0]==$valor[1]){
								$idAsig = $valor[0];
							}
						}
						if($value[0]===$idAsig){//Se obtienen los datos de los exámenes para cada asignatura seleccionada
							$fecha1 = $entrega[1]->format('Y-m-d H:i:s');
							$calendario->crearEntregas($_REQUEST['id'], $idAsig, $entrega[0], $fecha1);
						}								
					}
				}
				$calendario = new CALENDARIO_Model("", "", "", "");
				$calendariosUsuario = $calendario->obtenerCalendariosUsuario($_SESSION['login']);
				$template = $twig->loadTemplate('CalendarioShowall.html.twig');
				echo $template->render(array('strings' => $strings, 'datos' => $calendariosUsuario, 'respuesta' => $respuesta, 'volver' => '../Controllers/CALENDARIO_Controller.php'));
			}
			break;

	case 'desasignar':

			if (!tienePermisos('../templates/CalendarioEdit.html.twig')) {
				$template = $twig->loadTemplate('Mensaje.html.twig');
				echo $template->render(array('strings' => $strings, 'respuesta' => 'No tienes los permisos necesarios', 'volver' => '../Controllers/CALENDARIO_Controller.php'));
			} else {
				$calendario = get_data_form();
				if(isset($_REQUEST['idAsig'])){
					$calendario->desasignarAsignatura($_REQUEST['id'], $_REQUEST['idAsig']);
				}else{
					if(isset($_POST['eliminar'])){
						if($_POST['eliminar'] != null){
							foreach($_POST['eliminar'] as $valor){
								$calendario->desasignarAsignatura($_REQUEST['id'], $valor);
							}
						}
					}
				}
				$controller = '<script> location.replace("../Controllers/CALENDARIO_Controller.php?accion=vistamodificar&id=';
				$controller2 = '"); </script>';
				$volver = $controller . $_REQUEST['id'] . $controller2;
				echo $volver;
				exit(0);
			}
			break;	

    default: 

         if (ConsultarTipoUsuario($_SESSION['login']) != 2) {
			//Carga una vista con todos los calendarios al ser administrador
			$calendario = new CALENDARIO_Model("", "", "", "");
			$datos = $calendario->obtenerCalendarios();
			$template = $twig->loadTemplate('CalendarioShowall.html.twig');
            echo $template->render(array('strings' => $strings, 'datos' => $datos, 'volver' => '../Controllers/CALENDARIO_Controller.php'));
        } else {
            //Si no, cargaría una vista exactamente igual pero solo vería sus calendarios
			$calendario = new CALENDARIO_Model("", "", "", "");
            $datos = $calendario->obtenerCalendariosUsuario($_SESSION['login']);
            $template = $twig->loadTemplate('CalendarioShowall.html.twig');
            echo $template->render(array('strings' => $strings, 'datos' => $datos, 'volver' => '../Controllers/CALENDARIO_Controller.php'));
        }
}
?>