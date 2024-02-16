@extends('layouts.template')
@section('title', 'Registrar Ticket')

@section('style')
        

        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .form-container h1 {
            text-align: center;
            color: #333333;
        }

        .form-container label {
            color: #555555;
        }

        .form-container input,
        .form-container textarea,
        .form-container select {
            width: 100%;
            box-sizing: border-box;
            /* Asegura que el padding no haga que los inputs sobrepasen el ancho del contenedor */
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #cccccc;
        }

        .form-container input[type="submit"] {
            background-color: rgb(0, 140, 255);
            color: white;
            cursor: pointer;
            width: 40%;
            margin-left: auto;
            margin-right: auto;
        }

        .form-container textarea {
            width: 100%;
            height: 100px;
            max-height: 100px;
            min-height: 100px;
            resizr: none;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        input,
        label,
        form,
        select,
        textarea {
            border-radius: 15px !important;
        }
@endsection

@section('content')
    <div class="form-container">
        <h1>Registrar Ticket</h1>
        <form action="{{ route('Cliente.store') }}" method="post">
            @csrf
            <label for="author_id">Usuario</label><br>
            <input type="number" id="author_id" name="author_id" readonly placeholder="Nombre del usuario"><br>
            <label for="departamento_id">Departamento</label><br>
            <input type="number" id="departamento_id" name="departamento_id" readonly placeholder="nombre del Departamento"><br>
            <label for="classification">Clasificación:</label><br>
            <select id="classification" name="classification">
                <option value="falla_office">Falla de Office</option>
                <option value="fallas_red">Fallas en la red</option>
                <option value="errores_software">Errores de software</option>
                <option value="errores_hardware">Errores de Hardware</option>
                <option value="mantenimientos_preventivos">Mantenimientos Preventivos</option>
                <option value="otro">otro</option>
            </select><br>
            <label for="detalles">Detalles:</label><br>
            <div style="text-align: center;">
                <textarea id="detalles" name="detalles"></textarea>
            </div><br>
            {{-- <label for="estado">Estado:</label><br>
            <select id="estado" name="estado">
                <option value="completado">Completado</option>
                <option value="asignado">Asignado</option>
                <option value="en_proceso">En Proceso</option>
                <option value="nunca_solucionado">Nunca Solucionado</option>
                <option value="cancelado_por_cliente">Cancelado por Cliente</option>
            </select><br> --}}
            <div style="text-align: center;">
                <input class="button" type="submit" value="Enviar">
            </div>
        </form>
    </div>
@endsection
