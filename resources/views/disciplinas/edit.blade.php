<form method='POST' action='/disciplinas/{{ $disciplina->id }}'>
  {{ csrf_field() }}

  {{ method_field('patch')}}
  


  Título:<input name='titulo' value='{{ $disciplina->titulo }}'><br>
  Ementa:<textarea name='ementa' value='{{ $disciplina->ementa }}'></textarea><br>
  <button type='submit'> Salvar </button>
  
</fomr>
