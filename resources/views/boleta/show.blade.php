<div style="height: 160px;"></div>
<h1>Boletos de {{ Auth::user()->username }} {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} </h1>
<div style="margin-right: auto;
margin-left: auto; width:680px;background: cyan;border-radius:20px;box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);">
    <div class="logo-box"><img src="{{ asset('img/logo.png') }}"  alt="Logo-CityTours"><h2>Vuela pega y esquiva con CityTour</h2>
    </div>
    <div style="background: white;">
  <table>
    <tbody>
    <tr>
        <th scope="col" style="height: 25px;"></th>  
        <td></td>
        <th scope="col" style="height: 25px;"></th>    
        <td></td>
        <th scope="col" style="height: 25px;"></th>   
        <td></td>
        <th scope="col" style=" width: 79px;
        position: absolute;
        height: 84px;">Total</th>  
        <tr><td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="width: 79px;
            position: absolute;
            height: 84px; text-align:center; font-size:45px;">  {{ $ultima->total }}</td>
        </tr>
    </tr>
    </tr>
        <tr>
            <th scope="col" >Departamento</th> 
            <td>  {{ $ultima->departamento }}</td> 
            <th scope="col" >Lugar Turístico</th>
            <td>  {{ $ultima->lugar_turistico }}</td>
        </tr>
        <tr>
            <th scope="col" style="height: 25px;"></th>  
            <td></td>
            <th scope="col" ></th>  
            <td></td>
        </tr>
        <tr>
            <th scope="col" >Fecha de vuelo</th>
            <td>  {{ $ultima->date }}</td>
            <th scope="col" >Hora de vuelo</th>
            <td>  {{ $ultima->time }}</td>
        </tr>
        <tr>
            <th scope="col" ></th>  
            <td></td>
            <th scope="col" ></th>  
            <td></td>
            <th scope="col" >Sub-Total</th>  
            <td>  {{ $ultima->subtotal }}</td>
        </tr>
        <tr>
            <th scope="col" >Precio de asiento</th>
            <td>  {{ $ultima->price }}</td>
            <th scope="col" >Cantidad de acientos</th>  
            <td>  {{ $ultima->quantity }}</td>
            <th scope="col" >Descuento</th>  
            <td>  {{ $ultima->discount }}</td>
        </tr>
</tbody>
</table>
</div>
</div>
<div style="height: 45px;"></div>