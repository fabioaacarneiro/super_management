<h3>suppliers</h3>


@extends('site.layouts.basic')
@section('title', $title)
@section('content')
    @isset($suppliers)

        @forelse($suppliers as $indice => $suplier)
            Iteração atual: {{ $loop->iteration }}
            Fornecedor: {{ $suplier['name'] }}
            <br>
            Status: {{ $suplier['status'] }}
            <br>
            CNPJ: {{ $suplier['cnpj'] ?? '' }}
            <br>
            Telefone: ({{ $suplier['ddd'] ?? '' }}) {{ $suplier['phone'] ?? '' }}
            <br>
            @if ($loop->first)
                <p style="color: black;"><strong>Registro mais antigo</strong></p>
            @elseif ($loop->last)
                <p style="color: black;"><strong>Registro mais recente</strong></p>
            @endif
            <hr>
        @empty
            Não existem fornecedores cadastrados!!!
        @endforelse
    @endisset
@endsection
