@extends('layouts.main')
@section('title', 'João SH')
@section('content')

<h1>Título</h1>
@if (10 > 5)
<p>A condição é true</p>
@endif

<p>{{ $nome }}</p>

@if($nome == "Pedro")
<p>O nome é Pedro</p>
@elseif ($nome == "João Pedro")
<p>O nome é {{ $nome }}, ele tem {{ $idade }} anos e sua profissão é {{ $profissao }}</p>
@else
<p>O nome não é Pedro</p>
@endif

@for ($i = 0; $i < count($arr); $i++) <p>{{ $arr[$i] }} - {{ $i }}</p>
    @if ($i == 2)
    <p>O i é 2</p>
    @endif
    @endfor

    @foreach ($nomes as $nome)
    <p>{{ $loop->index }}</p>
    <p>{{ $nome }}</p>
    @endforeach

    @php
    $name = "João";
    echo $name;
    @endphp

    {{-- Este é o comentário do Blade --}}
    <!-- Comentário Blade -->