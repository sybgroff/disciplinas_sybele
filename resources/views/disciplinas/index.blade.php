<html>
<body>

<a href='/disciplinas/create'>Cadastrar disciplina</a>

@foreach ($disciplinas as $disciplina)
    <li>{{ $disciplina->titulo }}</li>
@endforeach

</body>
</html>
