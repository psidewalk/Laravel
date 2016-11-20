@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Lista de Personagens de Game Of Thrones</div>

                    @if(Auth::check())
                      <!-- Table -->
                      <table class="table">
                          <tr>
                              <th>Personagem</th>
                              <th>Nome do Ator</th>
                          </tr>
                          @foreach($characters as $key => $value)
                            <tr>
                              <td>{{ $key }}</td><td>{{ $value }}</td>
                            </tr>
                          @endforeach
                      </table>
                    @endif
                    
            </div>
        </div>
            @if(Auth::guest())
                <a href="/login" class="btn btn-danger col-md-offset-4"> Voce precisa estar logado para ver a lista 😜😜 >></a>
            @endif
        </div>
    </div>
</div>

@endsection