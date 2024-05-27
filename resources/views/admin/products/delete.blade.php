
<!-- Modal Structure -->
<div id="delete-{{ $produto->id }}" class="modal">
    <div class="modal-content">
        <h4><i class="material-icons">delete</i> Tem certeza?</h4>
        <div class="row">
            <p>Tem certeza que deseja excluir <strong>{{ $produto->name }}</strong> ?</p>
        </div> 

        <a href="#!" class="modal-close waves-effect waves-green btn blue right">Cancelar</a>
        
        <form action="{{ route('admin.delete', $produto->id) }}" method="post" enctype="multipart/form-data">
            @method('DELETE')
            @csrf
            <button type="submit" class="modal-close waves-effect waves-green btn red right">Excluir</button><br>
        </form>

    </div>
</div>