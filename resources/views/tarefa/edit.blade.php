@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Atualizar tarefa</div>

                <div class="card-body">
                    <form method="post" action="{{route('tarefa.update', ['tarefa' => $tarefa->id] )}}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label class="form-label">Tarefa</label>
                          <input value="{{$tarefa->tarefa ? $tarefa->tarefa : ''}}" type="text" class="form-control" name="tarefa">
                        </div>
                        {{$errors->has('tarefa') ? $errors->first('tarefa') : ''}}
                        <div class="mb-3">
                          <label class="form-label">Data limite conclusão</label>
                          <input value="{{$tarefa->data_limite_conclusao ? $tarefa->data_limite_conclusao : ''}}" type="date" class="form-control" name="data_limite_conclusao">
                        </div>
                        {{$errors->has('data_limite_conclusao') ? $errors->first('data_limite_conclusao') : ''}}
                        <br />
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

