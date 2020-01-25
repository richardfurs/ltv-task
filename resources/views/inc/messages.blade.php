@if ($errors->first('birth-date') == 'Lai turpinātu, jābūt vismaz 18 gadus vecam')
    <div class="alert alert-danger">
      {{ $errors->first('birth-date') }}
    </div>
@endif
