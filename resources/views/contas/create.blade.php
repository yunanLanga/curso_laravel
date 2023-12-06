<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yuran</title>
</head>
<body>
      <h2>Cadastrar a conta </h2>
     

      @if($errors->any())
        <span style="color: #ff0000">
             @foreach($errors->all() as $error)
               {{ $error }}<br>
             @endforeach
        </span>
      @endif

      <br> 

<form action="{{ route('conta.store') }}" method="POST">
   @csrf
   <label>Nome:</label>
   <input type="text" name="nome" id="nome" placeholder="Nome da conta"  value="{{old('nome')}}"><br><br>
   <label>Valor:</label>
   <input type="text" name="valor" id="valor" placeholder="valor da conta"  value="{{old('valor')}}"><br><br>
   <label>Vencimento:</label>
   <input type="date" name="vencimento" id="vencimento" value="{{old('vencimento')}}"><br><br>
   <button type="submit">cadastrar</button>
</form>
<a href="{{ route('conta.index') }}">Voltar</a>

</body>
</html>