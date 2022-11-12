@extends('template')
@section('main')
<div id="kelas">
    <h2>Tambah Kelas</h2>
    {!! Form::open(['url' => 'kelas']) !!}
        @include('kelas.form',['submitButtonText' => 'Simpan'])
    {!! Form::close() !!}
</div>

@stop

@section('footer')
    @include('footer')
@stop
