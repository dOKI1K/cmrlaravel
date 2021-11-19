<section>
    <div class="turnos">
        <div class="turno-titulos">
            <h2>Centro Médico Roca</h2>
            <p>Ingrese al sistema para tomar un turno</p>
        </div>

        <div class="login-register">
            <form action="/register" method="post">
                @csrf
                    
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required placeholder="Name">
                    @error('name')
                    <p>{{ $message }}</p>
                    @enderror
                    
                    <input type="text" name="dni" id="dni" value="{{ old('dni') }}" required placeholder="DNI">
                    @error('dni')
                    <p>{{ $message }}</p>
                    @enderror
                    
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="Email">
                    @error('email')
                    <p>{{ $message }}</p>
                    @enderror
                    
                    <input type="password" name="password" id="password" value="{{ old('password') }}" required placeholder="Password">
                    @error('password')
                            <p>{{ $message }}</p>
                    @enderror
                            
                    <input type="submit" value="Submit" class="btn3">
            </form>
        </div>

        <a href="{{ 'turnos' }}" class="acc2">¿Ya tenés cuenta? Inicia sesión acá</a>
    </div>
</section>