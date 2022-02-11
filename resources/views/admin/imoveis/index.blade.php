@extends('admin.layouts.main')

@section('conteudo-principal')

 <section class="section">

    <table class="highlight">
        <thead>
            <tr>
                <th>Cidade</th>
                <th>Bairro</th>
                <th>Título</th>
                <th>Opções</th>
            </tr>
        </thead>

            <tbody>
                @forelse ($imoveis as $imovel)
                    <tr>
                        <td>{{$imovel->cidade->nome}}</td>
                        <td>{{$imovel->bairro}}</td>
                        <td>{{$imovel->titulo}}</td>
                        <td>
                            Editar - Remover
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Sem imóveis cadastrados</td>
                    </tr>
                @endforelse
            </tbody>
    </table>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect waves-light" href="{{route('admin.imoveis.create')}}">
            <i class="large material-icons">add</i>
        </a>
    </div>

 </section>

@endsection
