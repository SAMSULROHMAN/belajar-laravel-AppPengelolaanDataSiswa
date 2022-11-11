@extends('template')
@section('main')
    <div id="homepage">
        <h2>Siswa</h2>
        @include('_partial.flash_message')
        @if(!empty($siswa_list))
            <table class="table">
                <thead>
                    <tr>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Tgl Lahir</th>
                        <th>JK</th>
                        <th>Telepon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa_list as $siswa)
                        <tr>
                            <td>{{ $siswa->nisn }}</td>
                            <td>{{ $siswa->nama_siswa }}</td>
                            <td>{{ $siswa->tanggal_lahir->format('d-m-Y') }}</td>
                            <td>{{ $siswa->jenis_kelamin }}</td>
                            <td>{{ !empty($siswa->telepon->nomor_telepon) ? $siswa->telepon->nomor_telepon : '-' }}</td>
                            <td>
                                <div class="box-button">
                                    {{ link_to('siswa/'.$siswa->id,'Detail',['class' => 'btn btn-success btn-sm'])}}
                                </div>
                                <div class="box-button">
                                    {{ link_to('siswa/'.$siswa->id.'/edit','Edit',['class' => 'btn btn-warning btn-sm'])}}
                                </div>
                                <div class="box-button">
                                    {!! Form::model($siswa,['method' => 'DELETE','action' => ['SiswaController@destroy',$siswa->id]]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Tidak Ada Data Siswa</p>
        @endif

        <div class="table-nav">
            <div class="jumlah-data">
                <strong>Jumlah Siswa : {{ $jumlah_siswa }}</strong>
            </div>
            <div class="paging">
                {{ $siswa_list->links() }}
            </div>
        </div>
        <div class="botton-nav">
            <div>
                <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah</a>
            </div>
        </div>
    </div>
@stop
@section('footer')
    @include('footer')
@stop
