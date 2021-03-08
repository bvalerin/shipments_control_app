<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        .text-left{
            text-align: left;
        }

        .text-right{
            text-align:right;
        }

        .text-center{
            text-align: center;
        }

        .w50{
            width:50%;
        }

        
        .w33{
            width:33.33%;
            float:left;
        }

        .w20{
            width:20%;
            float:left;
        }

        .fleft{
            float:left;
        }


        html{
            padding:0;
            margin:0;
        }

        .no-margin{
            margin:0;
        }

        .no-padding{
            padding:0;
        }

    </style>
</head>
<body>

    <h1 class="no-margin no-padding text-center">Transportes MYM Caldera S.A.</h1>
    <h2 class="w50 fleft no-margin no-padding">Cliente</h2>
    <h2 class="w50 fleft text-right no-margin no-padding">{{ $customer->name }}</h2>
    <br>
    <hr>
    <h3 class="w50 fleft no-margin no-padding">Direccion: {{ $customer->address }}</h3>
    <h3 class="w50 fleft text-right no-margin no-padding">Telefono: {{ $customer->phone }} </h3>
    <br> <br> <br>
    <h2 class="w50 fleft no-margin no-padding">Transporte</h2>
    <h3 class="w50 fleft text-right no-margin no-padding">Fecha: {{ date_format(date_create($shipment->shipment_date),'d-m-y') }}</h3>
    <br>
    <hr>
    <h3 class="w50 fleft no-margin no-padding">Origen: {{ $shipment->origin }}</h3>
    <h3 class="no-margin no-padding">Destino: {{ $shipment->destination }} </h3>

    <br>

    <br>
    <h2 class="no-margin no-padding">Datos de equipo a usar</h2>
    <hr>
    <div class="w20">
       <h3 class="no-margin no-padding"># Contenedor: {{ $shipment->container_number }}</h3>
    </div>

    <div class="w20">
        <h3 class="no-margin no-padding"># Contenedor: {{ $shipment->container_number }}</h3>
    </div>

    <div class="w20">
        <h3 class="no-margin no-padding"># Contenedor: {{ $shipment->container_number }}</h3>
    </div>

    <div class="w20">
        <h3 class="no-margin no-padding"># Contenedor: {{ $shipment->container_number }}</h3>
    </div>

    <div class="w20">
        <h3 class="no-margin no-padding"># Contenedor: {{ $shipment->container_number }}</h3>
    </div>



    <h2 class="no-margin no-padding">Instrucciones</h2>
    <hr>
    <p> {{ $shipment->instructions }} </p>



</body>
</html>