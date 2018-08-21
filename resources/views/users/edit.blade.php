@extends('layouts.app')
@section('content')
<div class="col-md-8 col-md-offset-2">
<div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Detalhes</div>
                <div class="panel-body">
                <form action="{{url('users/')}}">
                    <table class="table">   
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nome</td>
                                <td>Thumbnail</td>
                                <td>Descricao</td>
                                <td>Comics</td>
                            </tr>
                            
                        </thead>
                        <tbody>
                    @forelse ($users as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td><img src="{{ $item->thumbnail->path }}.{{ $item->thumbnail->extension }}" ></td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    <ul>
                                    @forelse ($item->comics->items as $comic)
                                        <li><a href="{{ $comic->resourceURI }}">{{ $comic->resourceURI }}</a></li>
                                        <li>{{ $comic->name }}</li>
                                    @empty
                                        <li>Nenhum dado Encontrado</li>
                                    @endforelse
                                    </ul>
                                </td>
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
    <a href='{{ url("/") }}' class="btn btn-primary">Voltar</a>
    </div>

@endsection
