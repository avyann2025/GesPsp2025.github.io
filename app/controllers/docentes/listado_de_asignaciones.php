<?php
/**
 * Created by PhpStorm.
 * User: HILARIWEB
 * Date: 23/1/2024
 * Time: 10:54
 */
$sql_asignaciones = "SELECT * FROM asignaciones as asi 
INNER JOIN docentes as doc ON doc.id_docente = asi.docente_id
INNER JOIN personas as per ON per.id_persona = doc.persona_id
INNER JOIN usuarios as usu ON usu.id_usuario = per.usuario_id
INNER JOIN niveles as niv ON niv.id_nivel = asi.nivel_id
INNER JOIN grados as gra ON gra.id_grado = asi.grado_id
INNER JOIN materias as mat ON mat.id_materia = asi.materia_id
where asi.estado = '1' ";
$query_asignaciones = $pdo->prepare($sql_asignaciones);
$query_asignaciones->execute();
$asignaciones = $query_asignaciones->fetchAll(PDO::FETCH_ASSOC);