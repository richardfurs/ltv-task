<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>LTV Sagatavošanās darbs</h1>
        <form>
            <div class="form-group">
                <label for="name">Vārds</label>
                <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="surname">Uzvārds</label>
                <input type="text" class="form-control" id="surname">
            </div>
            <div class="form-group">
                <label for="birth-date">Dzimšanas datums</label>
                <input type="text" class="form-control datepicker" id="birth-date">
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang" lang="ru">
                <label class="custom-file-label" for="customFileLang">Pievienojiet attēlu</label>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 20px">Submit</button>
        </form>
    </div>

    <script type="text/javascript">
        $(function () {
            $('.datepicker').datepicker();
        });
    </script>
</body>
</html>
