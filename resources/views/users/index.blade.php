@extends('layouts.app')
@section('content')
<div class="col-md-8 col-md-offset-2">
<div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Acessos</div>
                <div class="panel-body">
                <form action="{{url('users/')}}">
                    <table class="table">   
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nome</td>
                                <td>Thumbnail</td>
                                <td>Descricao</td>
                            </tr>
                            
                        </thead>
                        <tbody>
                    @forelse ($users as $item)
                            <tr>
                                <td><a href="{{ url('/item') }}/{{ $item->id }}" class="btn btn-primary">{{ $item->id }}</a></td>
                                <td>{{ $item->name }}</td>
                                <td><img src="{{ $item->thumbnail->path }}.{{ $item->thumbnail->extension }}" ></td>
                                <td>{{ $item->description }}</td>
                            </tr>
                        @empty
                            <td>Nenhum dado Encontrado</td>
                        @endforelse
                        </tbody>
                    </table>
                </form>
               
                <br />
                 </div>
        </div>
    </div>
    </div>

@endsection
