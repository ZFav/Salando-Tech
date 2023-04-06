<div class="container py-4">

    <form action="{{route('send')}}" method="POST">

        @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
        @csrf
        
      <div class="mb-3">
        <label class="form-label">ID</label>
        <input class="form-control" type="text" name="id_product" placeholder="id" readonly value="{{$item['id']}}" />
      </div>
  
      <div class="mb-3">
        <label class="form-label">Nome</label>
        <input class="form-control" type="text"  name="name_product" placeholder="id" readonly value="{{$item['title']}}" />
      </div>
    
      <div class="mb-3">
        <label class="form-label">Prezzo</label>
        <input class="form-control" type="number" placeholder="Costo: " name="price" readonly value="{{$item['price']}}" />
      </div>
      
      <div class="mb-3">
        <label class="form-label">Nome</label>
        <input class="form-control" type="text" placeholder="Nome" name="name" value="{{old('name')}}" />
      </div>

      <div class="mb-3">
        <label class="form-label">Cognome</label>
        <input class="form-control" type="text" placeholder="Cognome" name="surname" value="{{old('surname')}}" />
      </div>

      <div class="mb-3">
        <label class="form-label">Telefono</label>
        <input class="form-control" type="number" placeholder="Numero" name="phone" value="{{old('phone')}}" />
      </div>
  
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input class="form-control" type="email" placeholder="Email" name="email" value="{{old('email')}}" />
      </div>
      
      <div class="d-grid">
        <button class="btn btn-primary btn-lg" type="submit" >Invia</button>
        <button class="btn btn-light btn-lg" type="reset" >Reset</button>
      </div>
  
    </form>
  
  </div>