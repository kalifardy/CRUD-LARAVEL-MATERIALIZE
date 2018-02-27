@extends('layouts.index')
@section('content')

<div class="section">
	<div class="card-panel purple darken-3 white-text">CrudMaterialize | CRUD Laravel 5.5 dengan Materializecss</div>
</div>

<div class="section">
  {{-- FormJudul --}}
  <form action="{{ url('store') }}" method="POST">
  {!! csrf_field() !!}
    <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="judul">
            <label for="title">Judul</label>
          </div>
    </div>
      <div class="row">
        {{-- form text --}}
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="isi"></textarea>
          <label for="textarea1">Isi</label>
        </div>
      </div>
      <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Submit <i class="material-icons right">send</i></button>
  </form>
</div>

@endsection
