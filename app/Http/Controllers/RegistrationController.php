<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use App\Filters\RegistrationFilters;
use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use App\Http\Resources\RegistrationCollection;
use App\Http\Resources\RegistrationResource;


class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return RegistrationCollection
     */
    public function index(Request $request)
    {
        // Filtros de búsqueda
        $filter = new RegistrationFilters();
        $queryItems = $filter->transform($request);

        // Recuperar registros filtrados
        $registros = Registration::where($queryItems);
        $registros = $registros->paginate()->appends($request->query());

        // Retornar colección de registros paginados
        return new RegistrationCollection($registros);
    }

    public function create()
    {
        // Mostrar formulario de creación
        // ...
    }

    public function store(StoreRegistrationRequest $request)
    {
        // Validar y almacenar nuevo registro
        $registro = Registration::create($request->all());

        // Retornar recurso del registro creado
        return new RegistrationResource($registro);
    }

    public function show(Registration $registro)
    {
        // Mostrar registro específico
        // ...

        // Retornar recurso del registro
        return new RegistrationResource($registro);
    }

    public function edit(Registration $registro)
    {
        // Mostrar formulario de edición
        // ...
    }

    public function update(UpdateRegistrationRequest $request, Registration $registro)
    {
        // Validar y actualizar registro
        $registro->update($request->all());
        // ...
    }

    public function destroy(Registration $registro)
    {
        // Eliminar registro
        $registro->delete();

        // Retornar mensaje de éxito
        return response()->json(['message' => 'Registro eliminado exitosamente']);
    }
}
