
       
       
       <form action="" method="POST">
              @csrf
              <label>
                     <p><strong>Tour seleccionado: {{$lugar->tour}}</strong></p>  
              </label>
              <br>
                  
              <p><strong>seleccione el horario:</strong>
                <select name="horario">
                <option value ="">{{$viaje[0]->time}}</option>
                <option value ="">{{$viaje[1]->time}}</option>
                </select>
            </p>
              <br>
              <button type="submit">Enviar mensaje</button>
          </form>



