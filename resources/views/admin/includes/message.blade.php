@if($message = Session::get('sucesso'))
    <div class="card green darken-1">
        <div class="card-content white-text">
            <span class="card-title">Excluido!</span>
            <p>
                {{ $message }}
            </p>
        </div>
    </div>
@endif