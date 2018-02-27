@if (Session::has('success'))\
    <strong>Success !</strong> {{ Session::get('success') }}
@endif
@if (Session::has('fail'))
    <strong>Failed !</strong> {{ Session::get('fail') }}
@endif

@if (Session::has('info'))
    <strong>Note !</strong> {{ Session::get('info') }}
@endif

@if (count($errors) > 0)
    <strong>Failed !</strong> For the following reasons -
    <ul>
      @foreach ($errors->all() as $error)
        <li>
          {{ $error }}
        </li>
      @endforeach
    </ul>
@endif
