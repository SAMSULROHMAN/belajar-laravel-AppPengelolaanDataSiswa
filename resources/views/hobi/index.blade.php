@extends('template')

@section('main')
    <div id="hobi">
        <h2>Hobi</h2>
        @include('_partial.flash_message')
        @if (count($hobi_list) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Hobi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($hobi_list as $hobi)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $hobi->nama_hobi }}</td>
                            <td>
                                <div class="box-button">
                                    {{ link_to('hobi/'.$hobi->id.'/edit','Edit',['class' => 'btn btn-warning btn-sm'])}}
                                </div>
                                <div class="box-button">
                                    {!! Form::open(['method' => 'DELETE','action' => ['HobiController@destroy',$hobi->id]]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <p>Tidak Ada Data Hobi.....</p>
        @endif

        <div class="button-nav">
            <a href="{{ url('hobi.create')}}" class="btn btn-primary">Tambah</a>
        </div>
    </div>
@endsection

@section('footer')
    @include('footer')
@endsection
