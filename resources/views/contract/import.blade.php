

    <form action="{{ route('contract.store') }}" method='POST' enctype="multipart/form-data">
        @csrf
        <input type="text" placeholder="Nombre" name="nombre"/>
        @error('nombre')
        <p id="nombre">{{$message}}</p>
        @enderror
        <input type="date" placeholder="fecha" name="fecha"/>
        @error('fecha')
        <p id="fecha">{{$message}}</p>
        @enderror
        <input name="file" type="file"/>
        @error('file')
        <p id="files">{{$message}}</p>
        @enderror
        <input type="submit" value="Enviar"/>

    </form>
