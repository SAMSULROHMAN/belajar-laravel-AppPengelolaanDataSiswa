<?php

namespace App\Http\Controllers;

use App\Hobi;
use Illuminate\Http\Request;
use App\Siswa;
use App\Telepon;
use App\Kelas;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa_list = Siswa::orderBy('nama_siswa','asc')->paginate(5);
        $jumlah_siswa = $siswa_list->count();
        return view('siswa.index', compact('siswa_list','jumlah_siswa'));
        //return view('siswa.index')->with('siswa',$siswa);
    }

    public function create()
    {
        $list_kelas = Kelas::pluck('nama_kelas','id');
        $list_hobi = Hobi::pluck('nama_hobi','id');
        return view('siswa.create',compact('list_kelas','list_hobi'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        // Pake trait ValidateRequest
        $this->validate($request,[
            'nisn' => 'required|string|size:4|unique:siswa,nisn',
            'nama_siswa' => 'required|string|max:30',
            'tanggal_lahir' => 'required|date',
            'nomor_telepon' => 'sometimes|numeric|digits_between:10,15|unique:telepon,nomor_telepon',
            'jenis_kelamin' => 'required|in:L,P',
            'id_kelas' => 'required',
        ]);

        $siswa = Siswa::create($input);
        $telepon = new Telepon();
        $telepon->nomor_telepon = $request->input('nomor_telepon');
        $siswa->telepon()->save($telepon);

        $siswa->hobi()->attach($request->input('hobi_siswa'));

        return redirect('siswa');
    }

    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show',compact('siswa'));
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $list_kelas = Kelas::pluck('nama_kelas','id');
        if (!empty($siswa->telepon->nomor_telepon)) {
            $siswa->nomor_telepon = $siswa->telepon->nomor_telepon;
        }
        $list_hobi = Hobi::pluck('nama_hobi','id');
        return view('siswa.edit',compact('siswa','list_kelas','list_hobi'));
    }

    public function update($id,Request $request)
    {
        $siswa = Siswa::findOrFail($id);

        $input = $request->all();

        $this->validate($request, [
            'nisn' => 'required|string|size:4|unique:siswa,nisn,'.$request->input('id'),
            'nama_siswa' => 'required|string|max:30',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'nomor_telepon' => 'sometimes|numeric|digits_between:10,15|unique:telepon,nomor_telepon,'.$request->input('id').',id_siswa',
            'id_kelas' => 'required'
        ]);

        $siswa->update($request->all());

        $telepon = $siswa->telepon;
        $telepon->nomor_telepon = $request->input('nomor_telepon');
        $siswa->telepon()->save($telepon);

        $siswa->hobi()->sync($request->input('hobi_siswa'));
        return redirect('siswa');
    }
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('siswa');
    }

    public function dateMutator()
    {
        $siswa = Siswa::findOrFail(1);
        $nama = $siswa->nama_siswa;
        $tanggal_lahir = $siswa->tanggal_lahir->format('d-m-Y');
        $ulang_tahun = $siswa->tanggal_lahir->addYears(30)->format('d-m-Y');
        return "Siswa {$nama} lahir pada {$tanggal_lahir} .<br>
        Ulang Tahun ke-30 jatuh pada {$ulang_tahun}";

    }
}
