@include('head')
@include('header')
<main class="flex-shrink-0">
    <div class="container">
        <form method="POST" action="{{route('enviado')}}">
          @csrf
          <h2 class="text-center">Enviar mail al autor</h2>
          <div class="form-group">
            <label for="usr">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>
          <div class="form-group">
            <label for="pwd">Tu correo:</label>
            <input type="text" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="usr">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
          </div>
          <br>
          <div class="form-group">
            <textarea class="form-control" rows="5" id="comment" name="contenido" placeholder="Escribe el contenido aquí..."></textarea>
          </div>
          <br>
          <button type="submit" class="btn btn-primary mx-auto d-block">Enviar</button>
        </form>
      </div>
</main>
@include('footer')