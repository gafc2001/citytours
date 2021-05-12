
       
       <form action="" method="POST">
              @csrf
              <label>
                     <p><strong>Lugar turistico seleccionado: {{$lugar->lugar_turistico}}</strong></p>  
              </label>
              <br>
              <p><strong>seleccione el horario: </strong>
                <select name="horario">
                <option value ="">{{$viaje[0]->time}}</option>
                <option value ="">{{$viaje[1]->time}}</option>
                <option value ="">{{$viaje[2]->time}}</option>
                </select>
            </p>
              <br>
              <button type="submit">Enviar mensaje</button>
          </form>



