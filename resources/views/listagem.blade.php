@extends('principal')

@section('conteudo')
<h1>Listagem de produtos</h1>
    <table class="table table-striped table-bordered table-hover">

    @forelse ($produtos as $p)
        <tr>
        <td>{{$p->nome}} </td>
        <td>{{$p->valor}} </td>
        <td>{{$p->descricao}} </td>
        <td>{{$p->quantidade}} </td>
        <td>
        <a href="/produtos/mostra/{{$p->id}}"
        <span class="glyphicon glyphicon-search"> </span>
        </a>
        </span>
            
        </td>
        </tr>
    @empty
        <p>Não exitem produtos</p>
    @endforelse
</table>

@stop
