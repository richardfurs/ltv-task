<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>LTV Junior Test</h1>

        @include('inc/messages')

        <form action="/store" method="post" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group" {{ $errors->has('name') ? 'has-error' : ''}}>
                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" id="name" value="{{ old('name') }}">
                {!! $errors->first('name', '<p class="alert-danger">:message</p>') !!}
            </div>
            <div class="form-group" {{ $errors->has('surname') ? 'has-error' : ''}}>
                <label for="surname">Surname</label>
                <input name="surname" type="text" class="form-control" id="surname" value="{{ old('surname') }}">
                {!! $errors->first('surname', '<p class="alert-danger">:message</p>') !!}
            </div>
            <div class="form-group" {{ $errors->has('birth_date') ? 'has-error' : ''}}>
                <label for="birth-date">Date of birth</label>
                <input name="birth_date" type="text" class="form-control datepicker"
                       id="birth-date" value="{{ old('birth_date') }}" data-date-end-date="0d">
                {!! $errors->first('birth_date', '<p class="alert-danger">:message</p>') !!}
            </div>
            <div class="custom-file">
                <input name="image" type="file">
            </div>
            {!! $errors->first('image', '<p class="alert-danger">:message</p>') !!}
            <button type="submit" class="btn btn-primary" style="margin-top: 20px">Submit</button>
        </form>
    </div>

<script type="text/javascript" src="{{asset('js/script.js')}}"></script>

</body>
</html>
