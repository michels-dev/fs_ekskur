<?php

namespace App\Http\Controllers;

use App\Models\EkskurTemporer;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class EkskurTemporerController extends Controller
{
    use ValidatesRequests;

    public function FormEkskurTemporer() {
        $temporers = EkskurTemporer::all();

        return view('pages.form-ekskur-temporer', compact('temporers'));
    }

    public function StoreEkskurTemporer(Request $request) {
        $this->validate($request, [
            'sekolah' => 'required|string',
            'periode' => 'required|string',
            'npwp' => 'required|string',
            'nik' => 'required|string',
            'nama_lengkap' => 'required|string',
            'jenis_ekskur' => 'required|string',
            'honor' => 'required|string',
            'nama_bank' => 'required|string',
            'norek' => 'required|string',
            'atas_nama' => 'required|string',
        ]);
        // dd($request);
            EkskurTemporer::create([
            'sekolah' => $request->input('sekolah'),
            'periode' => $request->input('periode'),
            'npwp' => $request->input('npwp'),
            'nik' => $request->input('nik'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'jenis_ekskur' => $request->input('jenis_ekskur'),
            'honor' => $request->input('honor'),
            'nama_bank' => $request->input('nama_bank'),
            'norek' => $request->input('norek'),
            'atas_nama' => $request->input('atas_nama'),
        ]);

        return redirect()->route('pages.form-ekskur-temporer');
    }

    public function ShowEkskurTemporer($id) {
        $data = EkskurTemporer::find($id);

        return view('pages.update-ekskur-temporer', compact('data'));
    }

    public function UpdateEkskurTemporer(Request $request, $id) {
        $this->validate($request, [
            'sekolah' => 'required|string',
            'periode' => 'required|string',
            'npwp' => 'required|string',
            'nik' => 'required|string',
            'nama_lengkap' => 'required|string',
            'jenis_ekskur' => 'required|string',
            'honor' => 'required|string',
            'nama_bank' => 'required|string',
            'norek' => 'required|string',
            'atas_nama' => 'required|string',
        ]);

        $data = EkskurTemporer::find($id);

        $data->update([
            'sekolah' => $request->input('sekolah'),
            'periode' => $request->input('periode'),
            'npwp' => $request->input('npwp'),
            'nik' => $request->input('nik'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'jenis_ekskur' => $request->input('jenis_ekskur'),
            'honor' => $request->input('honor'),
            'nama_bank' => $request->input('nama_bank'),
            'norek' => $request->input('norek'),
            'atas_nama' => $request->input('atas_nama'),
        ]);

        return redirect()->route('pages.form-ekskur-temporer');
    }

    public function DestroyEkskurTemporer($id) {
        $data = EkskurTemporer::find($id);

        $data->delete();

        return redirect()->route('pages.form-ekskur-temporer');
    }
}
