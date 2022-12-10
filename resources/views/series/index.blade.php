<x-layout title='Séries'>
<a href="/series/criar">Adicionar</a>    

<ul>
    @foreach ($series as $serie)
       <li>{{ $serie->nome }} <a href="/series/apagar" class="">apagar</a></li>
    @endforeach
    </ul>
</x-layout>