@extends('template')

@section('main')
    <div id="hobi">
        <h2>Tambah Hobi</h2>
        {!! Form::open(['url' => 'hobi']) !!}
            @include('hobi.form',['submitButtonText' => 'Simpan'])
        {!! Form::close() !!}
    </div>
@endsection

@section('footer')
    @include('footer')
@endsection
