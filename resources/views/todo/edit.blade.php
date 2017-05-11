<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">
    <h2 class="page-header">ToDo編集</h2>
    {!! Form::open(['route' => ['todo.update', $todo->id], 'method' => 'PUT']) !!}
    <div class="form-group">
        {!! Form::input('text', 'title', $todo->title, ['required', 'class' => 'form-control']) !!}
    </div>
    <button type="submit" class="btn btn-success pull-right">更新</button>
    {!! Form::close() !!}
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</div>
</body>
</html>