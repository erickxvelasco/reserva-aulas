<?php
/**
 * Función que nos devuelve la fecha formateada en Español
 *
 * @param [type] $date
 * @return void
 */
use App\Models\Solicitud;
$array_aulas=array();
if(!function_exists('cargar_array_aulas')){
function cargar_array_aulas($date,$inicio,$final){
    $solicitudes=Solicitud::where('fecha',$date)
                            ->where('estado',0)//esta aceptado ya es una reserva
                            ->get();
    //dd($solicitudes);
    //hasta aqui tenemos todas las reservas de la fecha y rango de horas seleccionadas
    global $array_aulas;
    $array_aulas=[];
    foreach($solicitudes as $solicitud){
        if(($inicio>=$solicitud->inicio && $inicio<=$solicitud->final)||($final>=$solicitud->inicio && $final<=$solicitud->final)){
            //dd($solicitud->relacion_aulas);

            foreach($solicitud->relacion_aulas as $aux){
                array_push($array_aulas, $aux->aula);
            }
        }
        //dd($array_aulas);
        //recorremos la la tabla intermedia "solicitud_aulas"{id_solicitud,id_aula}
        //falta la relacion en el modelo hasmany
        //crear la tabla intermedia
        //guardar id_aula en un array
        //devolver array

    }
}
}
if(!function_exists('verificar_existe_aula')){
    function verificar_existe_aula($id_aula){
    global $array_aulas;
    $rpta=false;
    foreach($array_aulas as $aula){
        if($aula==$id_aula){
            $rpta=true;
        }
    }
    return $rpta;
}
}
if(!function_exists('devolver_hora')){
function devolver_hora($indice){
    $horas = ['06:45','07:30','08:15','09:00','09:45','10:30','11:15','12:00','12:45','13:30','14:15','15:00','15:45','16:30','17:15','18:00','18:45','19:30','20:15','21:00','21:45'];


    $dt=new DateTime($horas[$indice]);

    return $dt->format('H:i:s');
}
}
