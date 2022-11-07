<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Telepon;
use App\Http\Requests\SiswaRequest;

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
        return view('siswa.create');
    }

    public function store(SiswaRequest $request)
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

    public function show(Siswa $siswa)
    {
        return view('siswa.show',compact('siswa'));
    }

    public function edit(Siswa $siswa)
    {
        $siswa->nomor_telepon = $siswa->telepon->nomor_telepon;
        return view('siswa.edit',compact('siswa'));
    }

    public function update(Siswa $siswa,SiswaRequest $request)
    {
        $input = $request->all();

        $siswa->update($request->all());

        if ($siswa->telepon) {
            if ($request->filled('nomor_telepon')) {
                $telepon = $siswa->telepon;
                $telepon->nomor_telepon = $request->input('nomor_telepon');
                $siswa->telepon()->save($telepon);
            } else {
                $siswa->telepon()->delete();
            }
        } else {
            if ($request->filled('nomor_telepon')) {
                $telepon = new Telepon();
                $telepon->nomor_telepon = $request->input('nomor_telepon');
                $siswa->telepon()->save($telepon);
            }
        }

        $siswa->hobi()->sync($request->input('hobi_siswa'));
        return redirect('siswa');
    }
    public function destroy(Siswa $siswa)
    {
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
