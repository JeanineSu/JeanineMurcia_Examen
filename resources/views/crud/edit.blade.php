@extends("layout")
@section("contenido")

    <fieldset>
        <legend>Datos de alumno</legend>
        <form action="{{route('alumnos.update', $alumno->id)}}" method="POST">
            @csrf
            @method('PUT')
            Nombre <input type="text" value="{{$alumno->nombre}}" name="nombre" id=""><br/>
            Apellido <input type="text" value="{{$alumno->apellido}}" name="apellido" id=""><br/>
            Dirección <input type="text" value="{{$alumno->direccion}}" name="direccion" id=""><br/>

            <input type="submit" value="Guardar edición">

        </form>
    </fieldset>
@endsection
