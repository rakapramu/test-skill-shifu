@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('pegawai.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('pegawai.update', $data->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nip</label>
                            <input type="text" class="form-control" name="nip" value="{{ $data->nip }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir"
                                value="{{ $data->tempat_lahir }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tangga Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir"
                                value="{{ $data->tanggal_lahir }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Provinsi</label>
                            <select name="province_id" class="form-control" id="">
                                <option value="" disabled selected>--select province--</option>
                                @foreach ($province as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $data->province_id == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kota</label>
                            <select name="kota_id" class="form-control" id="">
                                <option value="" disabled selected>--select province--</option>
                                @foreach ($kota as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $data->kota_id == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kode Kota</label>
                            <input type="number" class="form-control" name="kode_kota" value="{{ $data->kode_kota }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat_lengkap" id="" cols="10" class="form-control">{{ $data->alamat_lengkap }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control" id="">
                                <option value="" disabled selected>--select province--</option>
                                <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Aktif</option>
                                <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
