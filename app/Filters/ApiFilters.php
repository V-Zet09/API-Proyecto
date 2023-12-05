<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilters
{
    /**
     * @var array Lista de parámetros válidos para filtrar las consultas.
     */
    protected $safeParams = [];

    /**
     * @var array Mapa que relaciona los nombres de los parámetros de la solicitud con los nombres de las columnas del modelo.
     */
    protected $columnMap = [];

    /**
     * @var array Mapa que relaciona los operadores de filtro con los métodos de consulta Eloquent correspondientes.
     */
    protected $operatorMap = [];

    /**
     * Transforma los parámetros de la petición en condiciones de consulta Eloquent.
     *
     * @param Request $request
     * @return array
     */
    public function transform(Request $request): array
    {
        $eloQuery = [];

        foreach ($this->safeParams as $param => $operators) {
            // Obtener el valor del parámetro
            $query = $request->query($param);

            // Si el parámetro no está presente, continuar con el siguiente
            if (!isset($query)) {
                continue;
            }

            // Obtener el nombre de la columna correspondiente al parámetro
            $column = $this->columnMap[$param] ?? $param;

            foreach ($operators as $operator) {
                // Si el operador está presente con un valor, construir la condición de consulta
                if (isset($query[$operator])) {
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }

        return $eloQuery;
    }
}
