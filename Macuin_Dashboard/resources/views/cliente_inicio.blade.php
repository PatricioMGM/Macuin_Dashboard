@extends('layouts.template')
@section('title', 'Inicio')

@section('style')
    .tarjetas {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* Reducir el tamaño mínimo de las tarjetas */
    grid-gap: 20px;
    }

    .card {
        background-color: white;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);
        transition: transform 0.3s ease; /* Agregar transición al hacer hover */
        border-radius: 15px;
        overflow: hidden; /* Ocultar el contenido que sobresale */
        position: relative; /* Añadir posición relativa */
        height: 61px;
        z-index: 1; /* Añade esta línea */
    }
    
    .container {
    padding: 10px; /* Reducir el espacio dentro del contenedor */
    }

    .button-container {
    text-align: center; /* Centrar los botones */
    margin-top: 10px; /* Espacio con el contenido superior */
    }

    .button {
    background-color: #007BFF;
    border: none;
    color: white;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius: 20px;
    }

    .button:hover {
    background-color: #0056b3;
    }

    h2 {
    font-size: 30px !important;
    margin-bottom: 20px !important;
    text-align: center;
    font-weight: bold !important;
    }

    /* Estilos para el botón de agregar ticket */
    #agregar-ticket-button {
    text-align: center;
    margin-bottom: 20px;
    }

    .button-group {
    font-size: 12px; /* Tamaño de fuente para los botones en grupo */
    padding: 6px 12px; /* Espaciado interno de los botones en grupo */
    margin: 2px; /* Espaciado entre los botones en grupo */
    }

    .i-button {
    background-color: #007BFF;
    border: none;
    color: white;
    padding: 8px; /* Ajusta el padding según sea necesario */
    width: 30px; /* Ancho del botón */
    height: 30px; /* Alto del botón */
    border-radius: 50%; /* Establece el radio de borde para hacerlo redondo (un óvalo en este caso) */
    position: relative; /* Establece la posición relativa */
    top: 9px; /* Ajusta la posición vertical del botón */
    }

    .i-button i {
    position: relative; /* Establece la posición relativa para el icono */
    top: -15px; /* Ajusta la posición vertical del icono */
    left: -8px; /* Ajusta la posición horizontal del icono */
    }

    .description{
        font-size: 13px;   
    }

    .content-wrapper:hover {
        transform: scale(1.1); 
        height: 100%;
        background-color: white;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);
        border-radius: 15px;
        padding: 10px;
        z-index: 2; /* Añade esta línea */
    }


@endsection

@section('content')
    <h2>Listado de Tickets <button class="i-button" onclick="agregarTicket()"><i class="bi bi-plus-circle"></i></button> </h2>
    <!-- Botón para agregar un nuevo ticket -->
    <div class="tarjetas">
        @foreach($tickets as $ticket)
            <div class="card">
                <div class="container">
                    <div class="content-wrapper"> <!-- Contenedor adicional -->
                        <p><b>Clasificación: </b>{{$ticket->clasificacion}}</p>
                        <p><b>Fecha de Creación: </b>2024-02-13</p>
                        <p class="description"><b>Descripcion: </b> {{$ticket->detalles}}</p>
                        <div class="button-container"> <!-- Contenedor de botones -->
                            <button class="button button-group" onclick="editarTicket(1)">Editar</button>
                            <button class="button button-group" onclick="cancelarTicket(1)">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>    
@endsection

@section('script')
    function editarTicket(id) {
    alert("Editar ticket con ID: " + id);
    }

    function cancelarTicket(id) {
    alert("Cancelar ticket con ID: " + id);
    }

    function agregarTicket() {
        window.location.href = '{{ route("Cliente.create") }}';
    }

    document.addEventListener('DOMContentLoaded', (event) => {
        // Tu código aquí
        // Selecciona todos los elementos con la clase 'content-wrapper'
        var contentWrappers = document.querySelectorAll('.content-wrapper');
        var cards = document.querySelectorAll('.card');
        
        // Itera sobre cada elemento 'content-wrapper'
        for (let i = 0; i < contentWrappers.length; i++) {
            // Añade un event listener para el evento 'mouseover'
            contentWrappers[i].addEventListener('mouseover', function() {
                // Encuentra el elemento padre con la clase 'card' y cambia su propiedad 'overflow' a 'visible'
                this.closest('.card').style.overflow = 'visible';
            });

            // Añade un event listener para el evento 'mouseout'
            contentWrappers[i].addEventListener('mouseout', function() {
                // Encuentra el elemento padre con la clase 'card' y cambia su propiedad 'overflow' a 'hidden'
                this.closest('.card').style.overflow = 'hidden';
            });
        }

        for (let i = 0; i < contentWrappers.length; i++) {
            cards[i].addEventListener('mouseover', function() {
                // Cambia la propiedad 'overflow' de '.card' a 'visible' y 'z-index' a '2'
                this.style.zIndex = '2';
            });
    
            // Añade un event listener para el evento 'mouseout'
            cards[i].addEventListener('mouseout', function() {
                // Cambia la propiedad 'overflow' de '.card' a 'hidden' y 'z-index' a '1'
                this.style.zIndex = '1';
            });
        }
        

    });
    

    

@endsection
