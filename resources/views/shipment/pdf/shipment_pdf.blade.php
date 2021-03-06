<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        html{
            margin: 5px;
            padding:0;
            font-size: 12px;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

.table th,
.table td {
padding: 0.15rem;
vertical-align: top;
border-top: 1px solid #dee2e6;
}

.table thead th {
vertical-align: bottom;
border-bottom: 2px solid #dee2e6;
}

.table tbody + tbody {
border-top: 2px solid #dee2e6;
}

.table-sm th,
.table-sm td {
padding: 0.3rem;
}

.table-bordered {
border: 1px solid #dee2e6;
}

.table-bordered th,
.table-bordered td {
border: 1px solid #dee2e6;
}

.table-bordered thead th,
.table-bordered thead td {
border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
background-color: rgba(0, 0, 0, 0.05);
}

.table-hover tbody tr:hover {
color: #212529;
background-color: rgba(0, 0, 0, 0.075);
}

.table-primary,
.table-primary > th,
.table-primary > td {
background-color: #b8daff;
}

.table-primary th,
.table-primary td,
.table-primary thead th,
.table-primary tbody + tbody {
border-color: #7abaff;
}

.table-hover .table-primary:hover {
background-color: #9fcdff;
}

.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
background-color: #9fcdff;
}

.table-secondary,
.table-secondary > th,
.table-secondary > td {
background-color: #d6d8db;
}

.table-secondary th,
.table-secondary td,
.table-secondary thead th,
.table-secondary tbody + tbody {
border-color: #b3b7bb;
}

.table-hover .table-secondary:hover {
background-color: #c8cbcf;
}

.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
background-color: #c8cbcf;
}

.table-success,
.table-success > th,
.table-success > td {
background-color: #c3e6cb;
}

.table-success th,
.table-success td,
.table-success thead th,
.table-success tbody + tbody {
border-color: #8fd19e;
}

.table-hover .table-success:hover {
background-color: #b1dfbb;
}

.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
background-color: #b1dfbb;
}

.table-info,
.table-info > th,
.table-info > td {
background-color: #bee5eb;
}

.table-info th,
.table-info td,
.table-info thead th,
.table-info tbody + tbody {
border-color: #86cfda;
}

.table-hover .table-info:hover {
background-color: #abdde5;
}

.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
background-color: #abdde5;
}

.table-warning,
.table-warning > th,
.table-warning > td {
background-color: #ffeeba;
}

.table-warning th,
.table-warning td,
.table-warning thead th,
.table-warning tbody + tbody {
border-color: #ffdf7e;
}

.table-hover .table-warning:hover {
background-color: #ffe8a1;
}

.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
background-color: #ffe8a1;
}

.table-danger,
.table-danger > th,
.table-danger > td {
background-color: #f5c6cb;
}

.table-danger th,
.table-danger td,
.table-danger thead th,
.table-danger tbody + tbody {
border-color: #ed969e;
}

.table-hover .table-danger:hover {
background-color: #f1b0b7;
}

.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
background-color: #f1b0b7;
}

.table-light,
.table-light > th,
.table-light > td {
background-color: #fdfdfe;
}

.table-light th,
.table-light td,
.table-light thead th,
.table-light tbody + tbody {
border-color: #fbfcfc;
}

.table-hover .table-light:hover {
background-color: #ececf6;
}

.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
background-color: #ececf6;
}

.table-dark,
.table-dark > th,
.table-dark > td {
background-color: #c6c8ca;
}

.table-dark th,
.table-dark td,
.table-dark thead th,
.table-dark tbody + tbody {
border-color: #95999c;
}

.table-hover .table-dark:hover {
background-color: #b9bbbe;
}

.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
background-color: #b9bbbe;
}

.table-active,
.table-active > th,
.table-active > td {
background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover {
background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
background-color: rgba(0, 0, 0, 0.075);
}

.table .thead-dark th {
color: #fff;
background-color: #343a40;
border-color: #454d55;
}

.table .thead-light th {
color: #495057;
background-color: #e9ecef;
border-color: #dee2e6;
}

.table-dark {
color: #fff;
background-color: #343a40;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
border-color: #454d55;
}

.table-dark.table-bordered {
border: 0;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
background-color: rgba(255, 255, 255, 0.05);
}

.table-dark.table-hover tbody tr:hover {
color: #fff;
background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
.table-responsive-sm {
display: block;
width: 100%;
overflow-x: auto;
-webkit-overflow-scrolling: touch;
}
.table-responsive-sm > .table-bordered {
border: 0;
}
}

@media (max-width: 767.98px) {
.table-responsive-md {
display: block;
width: 100%;
overflow-x: auto;
-webkit-overflow-scrolling: touch;
}
.table-responsive-md > .table-bordered {
border: 0;
}
}

@media (max-width: 991.98px) {
.table-responsive-lg {
display: block;
width: 100%;
overflow-x: auto;
-webkit-overflow-scrolling: touch;
}
.table-responsive-lg > .table-bordered {
border: 0;
}
}

@media (max-width: 1199.98px) {
.table-responsive-xl {
display: block;
width: 100%;
overflow-x: auto;
-webkit-overflow-scrolling: touch;
}
.table-responsive-xl > .table-bordered {
border: 0;
}
}

.table-responsive {
display: block;
width: 100%;
overflow-x: auto;
-webkit-overflow-scrolling: touch;
}

.table-responsive > .table-bordered {
border: 0;
}

.table-responsive {
display: block;
width: 100%;
overflow-x: auto;
-webkit-overflow-scrolling: touch;
}

.table-responsive > .table-bordered {
border: 0;
}

.text-center{
    text-align: center;
    margin:0;
    padding:0;
}

#watermark {
    position: fixed;
    opacity: 0.1;

    /**
        Set a position in the page for your image
        This should center it vertically
    **/
    /* bottom:   10cm;
    left:     5.5cm; */

     /* Change image dimensions*/
    width:    2cm;
    height:   1cm;

    /** Your watermark should be behind every content**/
    z-index:  -1000;
}

.text-bottom{
    vertical-align: text-bottom;
}

.fondo{
   background-color:  #e4edfa;
}

#logo{
    position: fixed;
    top: 1px;
    left: 580px;
    /* bottom: 0; */
    /* right: 500px; */
}


#logo1{
    position: fixed;
    top: 550px;
    left: 580px;
    /* bottom: 0; */
    /* right: 500px; */
}

    </style>
</head>
<body>




    <h4 class="text-center">Transportes MYM Caldera S.A</h4>

    <div id="logo" class="text-right">
        <img width="200px" height="80px" src="data:image/png;base64,{{ $logo }}" alt="logo">
    </div>

    <div id="logo1" class="text-right">
        <img width="200px" height="80px" src="data:image/png;base64,{{ $logo }}" alt="logo">
    </div>

    <table class="table table-bordered">

        <tr class="fondo">
            <td colspan="5">
                <strong>Datos de cliente</strong>
            </td>
        </tr>

        <tr class="text-left">
            <td colspan="2">Cliente: {{ $customer->name }}</td>
            <td colspan="2">Telefono: {{ $customer->phone }}</td>
        </tr>

        <tr class="fondo">
            <td colspan="5">
                <strong>Datos de despacho</strong>
            </td>
        </tr>

        <tr>
            <td colspan="1">Origen: {{ $shipment->origin }}</td>
            <td colspan="1">Destino: {{ $shipment->destination }}</td>
            <td colspan="1">Fecha colocacion: {{ date_format(date_create($shipment->shipment_date),'d-m-Y') }}</td>
        </tr>

        <tr class="fondo">
            <td colspan="5">
                <strong>Datos de equipo a usar</strong>
            </td>
        </tr>

        <tr>
            <td># Contenedor: {{ $shipment->container_number }}</td>
            <td># Chasis: {{ $shipment->chasis_number }}</td>
            <td># Placa: {{ $shipment->container_plate }}</td>
            <td>Tamaño: {{ $shipment->container_size }}</td>
            <td>Ejes: {{ $shipment->container_axle }}</td>
        </tr>

        <tr class="fondo">
            <td colspan="5">
                <strong>Datos de chofer</strong>
            </td>
        </tr>

        <tr>
            <td colspan="1">Chofer: {{ $driver->name }}</td>
            <td colspan="1">Placa: {{ $shipment->vehicle_plate }}</td>
            <td colspan="1">Cédula: {{ $driver->dni }}</td>
            <td colspan="2">Teléfono: {{ $driver->phone }}</td>
        </tr>

        <tr class="fondo">
            <td colspan="5">
                <strong>Instrucciones</strong>
            </td>
        </tr>

        <tr>
            <td colspan="5">{{ $shipment->instructions}}</td>
        </tr>



        <br>

        <tr>
            <td colspan="5">
                <p>
                    Cualquier accidente o incidente, falta o violacion de las leyes de carreteras o transito que cause responsabilidad crinimal, civil, penal o de trabajo, daños a terceras personas o propiedad ajena publica, es por cuenta de y la total y unica responsabilidad del chofer y del transportista propietario del vehiculo que remolca la unidad.
                </p>
            </td>

        </tr>

        <tr>
            <td colspan="5">
                1. EL CLIENTE ESTA DE ACUERDO EN QUE LAS CONDICIONES DEL EQUIPO SON IDEALES PARA EL TRANSPORTE DE SUS MERCANCIAS.
            </td>
        </tr>

        <tr>
            <td colspan="5">
                1. EL CLIENTE ASUME LA RESPONSABILIDAD POR CUALQUIER DAÑO, PERDIDA O ROBO QUE PUEDA SUFRIR EL EQUIPO DURANTE QUE ESTE BAJO SU CUSTODIA.
            </td>
        </tr>

        <tr>
            <td class="text-bottom">
                __________________________________<br>
                ACEPTACION CLIENTE
            </td>

            <td class="text-bottom">
                __________________________________<br>
                CONDUCTOR
            </td>

            <td class="text-bottom">
                __________________________________<br>
                DESPACHADOR <br>
                {{ $user->name }} <br>
                {{ $user->phone }} <br>
                {{ $user->email }}
            </td>
        </tr>

    </table>

    <br>
    <br>
    <br>

    <h4 class="text-center">Transportes MYM Caldera S.A</h4>
    <table class="table table-bordered">

        <tr class="fondo">
            <td colspan="5">
                <strong>Datos de cliente</strong>
            </td>
        </tr>

        <tr class="text-left">
            <td colspan="2">Cliente: {{ $customer->name }}</td>
            <td colspan="2">Telefono: {{ $customer->phone }}</td>
        </tr>

        <tr class="fondo">
            <td colspan="5">
                <strong>Datos de despacho</strong>
            </td>
        </tr>

        <tr>
            <td colspan="1">Origen: {{ $shipment->origin }}</td>
            <td colspan="1">Destino: {{ $shipment->destination }}</td>
            <td colspan="1">Fecha colocacion: {{ date_format(date_create($shipment->shipment_date),'d-m-Y') }}</td>
        </tr>

        <tr class="fondo">
            <td colspan="5">
                <strong>Datos de equipo a usar</strong>
            </td>
        </tr>

        <tr>
            <td># Contenedor: {{ $shipment->container_number }}</td>
            <td># Chasis: {{ $shipment->chasis_number }}</td>
            <td># Placa: {{ $shipment->container_plate }}</td>
            <td>Tamaño: {{ $shipment->container_size }}</td>
            <td>Ejes: {{ $shipment->container_axle }}</td>
        </tr>

        <tr class="fondo">
            <td colspan="5">
                <strong>Datos de chofer</strong>
            </td>
        </tr>

        <tr>
            <td colspan="1">Chofer: {{ $driver->name }}</td>
            <td colspan="1">Placa: {{ $shipment->vehicle_plate }}</td>
            <td colspan="1">Cédula: {{ $driver->dni }}</td>
            <td colspan="2">Teléfono: {{ $driver->phone }}</td>
        </tr>

        <tr class="fondo">
            <td colspan="5">
                <strong>Instrucciones</strong>
            </td>
        </tr>

        <tr>
            <td colspan="5">{{ $shipment->instructions}}</td>
        </tr>



        <br>

        <tr>
            <td colspan="5">
                <p>
                    Cualquier accidente o incidente, falta o violacion de las leyes de carreteras o transito que cause responsabilidad crinimal, civil, penal o de trabajo, daños a terceras personas o propiedad ajena publica, es por cuenta de y la total y unica responsabilidad del chofer y del transportista propietario del vehiculo que remolca la unidad.
                </p>
            </td>

        </tr>

        <tr>
            <td colspan="5">
                1. EL CLIENTE ESTA DE ACUERDO EN QUE LAS CONDICIONES DEL EQUIPO SON IDEALES PARA EL TRANSPORTE DE SUS MERCANCIAS.
            </td>
        </tr>

        <tr>
            <td colspan="5">
                1. EL CLIENTE ASUME LA RESPONSABILIDAD POR CUALQUIER DAÑO, PERDIDA O ROBO QUE PUEDA SUFRIR EL EQUIPO DURANTE QUE ESTE BAJO SU CUSTODIA.
            </td>
        </tr>

        <tr>
            <td class="text-bottom">
                __________________________________<br>
                ACEPTACION CLIENTE
            </td>

            <td class="text-bottom">
                __________________________________<br>
                CONDUCTOR
            </td>

            <td class="text-bottom">
                __________________________________<br>
                DESPACHADOR <br>
                {{ $user->name }} <br>
                {{ $user->phone }} <br>
                {{ $user->email }}
            </td>
        </tr>

    </table>




</body>
</html>
