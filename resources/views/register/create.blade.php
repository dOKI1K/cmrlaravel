<x-layout>

    <section>
        <main>
            <form action="/register" method="post">
                @csrf
                
                <div>
                    
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required placeholder="Name">
                    @error('name')
                    <p>{{ $message }}</p>
                    @enderror
                    
                    <input type="text" name="username" id="username" value="{{ old('username') }}" required placeholder="Username">
                    @error('username')
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
                            
                    <button type="submit">Submit</button>
                </div>
            </form>
        </main>
    </section>

</x-layout>