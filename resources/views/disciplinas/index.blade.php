<html>
<body>

<a href='/disciplinas/create'>Cadastrar disciplina</a>

@foreach ($disciplinas as $disciplina)
    <li><a href='/disciplinas/{{ $disciplina->id }}'>{{ $disciplina->titulo }}</a></li>
@endforeach

</body>
</html>
