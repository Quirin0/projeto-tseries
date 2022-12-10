<x-layout title='Adicionar'>
    <form action="/series/apagar" method="POST">
        @csrf
        <h1>Nova série</h1>
        <label for="nome">Nome da série:</label>
        <input type="text" name="nome" id="nome">
        <button>Enviar</button>
    </form>
</x-layout>