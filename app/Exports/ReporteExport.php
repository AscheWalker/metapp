<?php

namespace App\Exports;

use App\Logs;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class ReporteExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
		$datos = DB::table('logs')
					->leftJoin('users', 'logs.Id-usuario', '=', 'users.id')
					->leftJoin('sesiones', 'logs.Id-sesion', '=', 'sesiones.id')
					->leftJoin('actividades', 'logs.Id-actividad', '=', 'actividades.id')
					->leftJoin('logs__tipos', 'logs.Id-tipo', '=', 'logs__tipos.id')
					->select(
							'logs.id as ID',
							'logs.Id-usuario as Id Usuario',
							'logs.Id-tipo as Tipo',
							'users.name as Usuario',
							'logs.Id-sesion as Sesion',
							'logs.Id-actividad as Actividad',
							'logs.Valor as Valor'
							)
					->get();
		
        return $datos;
    }
}
