@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar nova tarefa</div>

                <div class="card-body">
                    <form method="post" action="{{route('tarefa.store')}}">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Tarefa</label>
                          <input value="{{old('tarefa') ? old('tarefa') : ''}}" type="text" class="form-control" name="tarefa">
                        </div>
                        {{$errors->has('tarefa') ? $errors->first('tarefa') : ''}}
                        <div class="mb-3">
                          <label class="form-label">Data limite conclusão</label>
                          <input value="{{old('data_limite_conclusao') ? old('data_limite_conclusao') : ''}}" type="date" class="form-control" name="data_limite_conclusao">
                        </div>
                        {{$errors->has('data_limite_conclusao') ? $errors->first('data_limite_conclusao') : ''}}
                        <br />
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

