@extends('pages_layouts.user_layout')
@section('main')
        <form method="post" action="{{ route('create') }}">
            <fieldset>
                <legend>Форма</legend>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Заголовок</label>
                    <input name="title"  type="text" id="disabledTextInput" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="disabledSelect" class="form-label">Текст</label>
                    <div>
                    <textarea name="content" id="" cols="100" rows="10"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
            {{ csrf_field() }}
        </form>
@endsection
