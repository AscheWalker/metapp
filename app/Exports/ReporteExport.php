<?php

namespace App\Exports;

use App\Logs;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReporteExport implements FromCollection, WithHeadings
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
							'logs.Id-tipo as Tipo',
							'logs.Id-usuario as Id Usuario',
							'users.name as Usuario',
							'logs.Id-sesion as Sesion',
							'logs.Id-actividad as Actividad',
							'logs.Valor as Valor'
							)
					->get();
		
        return $datos;
    }
	
	public function headings(): array
    {
        return [
            'ID',
			'Tipo',
            'Id Usuario',
			'Usuario',
			'Sesion',
			'Actividad',
			'Valor'
        ];
    }
}
