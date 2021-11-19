<section>
    <div class="turnos">
        <div class="turno-titulos">
            <h2>Centro Médico Roca</h2>
            <p>Ingrese al sistema para tomar un turno</p>
        </div>

        <div class="login-register">
            <form action="/login" method="get">
                @csrf

                <input type="text" class="inp-val" name="dni-us" placeholder="DNI"><br>
                @error('dni-us')
                    <p>{{ $message }}</p>
                @enderror
                <input type="password"class="inp-val" placeholder="Contraseña"><br>
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
                <input type="submit" value="Ingresar" class="btn3">
            </form>
        </div>

        <a class="acc1">¿No tenés cuenta? Regístrate</a>
        <a href="{{ 'registro' }}" class="acc2">¿Olvidó su clave? haga click aquí</a>
    </div>
</section>