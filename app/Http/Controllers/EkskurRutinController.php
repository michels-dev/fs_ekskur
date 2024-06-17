<?php

namespace App\Http\Controllers;

use App\Models\EkskurRutin;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class EkskurRutinController extends Controller
{
    use ValidatesRequests;

    public function FormEkskurRutin() {
        $rutins = EkskurRutin::all();

        return view('pages.form-ekskur-rutin', compact('rutins'));
    }

    public function StoreEkskurRutin(Request $request) {
        $this->validate($request, [
            'sekolah' => 'required|string',
            'periode' => 'required|string',
            'nik' => 'required|string',
            'nama_lengkap' => 'required|string',
            'jenis_ekskur' => 'required|string',
            'honor' => 'required|string',
        ]);

            EkskurRutin::create([
            'sekolah' => $request->input('sekolah'),
            'periode' => $request->input('periode'),
            'nik' => $request->input('nik'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'jenis_ekskur' => $request->input('jenis_ekskur'),
            'honor' => $request->input('honor'),
        ]);

        // dd($data);

        return redirect()->route('pages.form-ekskur-rutin');
    }

    public function ShowEkskurRutin($id) {
        $data = EkskurRutin::find($id);

        return view('pages.update-ekskur-rutin', compact('data'));
    }

    public function UpdateEkskurRutin(Request $request, $id) {
        $this->validate($request, [
            'sekolah' => 'required|string',
            'periode' => 'required|string',
            'nik' => 'required|string',
            'nama_lengkap' => 'required|string',
            'jenis_ekskur' => 'required|string',
            'honor' => 'required|string',
        ]);

        $data = EkskurRutin::find($id);

        $data->update([
            'sekolah' => $request->input('sekolah'),
            'periode' => $request->input('periode'),
            'nik' => $request->input('nik'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'jenis_ekskur' => $request->input('jenis_ekskur'),
            'honor' => $request->input('honor'),
        ]);
        return redirect()->route('pages.form-ekskur-rutin');
    }

    public function DestroyEkskurRutin($id) {
        $data = EkskurRutin::find($id);

        $data->delete();

        return redirect()->route('pages.form-ekskur-rutin');
    }
}
