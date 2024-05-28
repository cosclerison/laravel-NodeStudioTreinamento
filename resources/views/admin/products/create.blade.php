
   <!-- Modal Structure -->
   <div id="create" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">playlist_add_circle</i> Novo produto</h4>
      <form action="{{ route('admin.product.store') }}" class="col s12" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
        <div class="row">
          <div class="input-field col s6">
            <input 
              id="name" 
              name="name" 
              type="text" 
              class="validate"
              placeholder="Nome do Produto">
            <label for="name">Nome do Produto</label>
          </div>
          <div class="input-field col s6">
            <input 
              id="price" 
              name="price" 
              type="number" 
              class="validate"
              placeholder="Preço do Produto">
            <label for="price">preço do Produto</label>
          </div>
          <div class="input-field col s6">
            <input 
              id="description" 
              name="description" 
              type="text" 
              class="validate"
              placeholder="Preço do Produto">
            <label for="description">Descrição do Produto</label>
          </div>

          <div class="input-field col s12">
            <select name="id_category">
              <option value="" disabled selected>Selecione...</option>
              
              @foreach($categoryes as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach

            </select>
            <label>Categoria</label>
          </div>          
          
        </div> 

        <div class="file-field input-field">
          <div class="btn">
            <span>Imagem</span>
            <input type="file" name="image">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
       
        <button type="submit" class="waves-effect waves-green btn green right">Cadastrar</button>
        <a href="#!" class="modal-close waves-effect waves-green btn blue right">Cancelar</a></br>
    </div>
    
  </form>
  </div>