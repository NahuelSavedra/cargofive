

    <form action="{{ route('contract.store') }}" method='POST' enctype="multipart/form-data">
        @csrf
        <input type="text" placeholder="Nombre" name="nombre"/>
        <input type="date" placeholder="fecha" name="fecha"/>
        <input name="file" type="file"/>
        <input type="submit" value="Enviar"/>
    </form>
