<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_pekerjaan" class="form-label">{{ __('Id Pekerjaan') }}</label>
            <input type="text" name="id_pekerjaan" class="form-control @error('id_pekerjaan') is-invalid @enderror" value="{{ old('id_pekerjaan', $pekerjaan?->id_pekerjaan) }}" id="id_pekerjaan" placeholder="Id Pekerjaan">
            {!! $errors->first('id_pekerjaan', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nim" class="form-label">{{ __('Nim') }}</label>
            <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim', $pekerjaan?->nim) }}" id="nim" placeholder="Nim">
            {!! $errors->first('nim', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="perusahaan" class="form-label">{{ __('Perusahaan') }}</label>
            <input type="text" name="perusahaan" class="form-control @error('perusahaan') is-invalid @enderror" value="{{ old('perusahaan', $pekerjaan?->perusahaan) }}" id="perusahaan" placeholder="Perusahaan">
            {!! $errors->first('perusahaan', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nama_pekerjaan" class="form-label">{{ __('Nama Pekerjaan') }}</label>
            <input type="text" name="nama_pekerjaan" class="form-control @error('nama_pekerjaan') is-invalid @enderror" value="{{ old('nama_pekerjaan', $pekerjaan?->nama_pekerjaan) }}" id="nama_pekerjaan" placeholder="Nama Pekerjaan">
            {!! $errors->first('nama_pekerjaan', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="alamat_perusahaan" class="form-label">{{ __('Alamat Perusahaan') }}</label>
            <input type="text" name="alamat_perusahaan" class="form-control @error('alamat_perusahaan') is-invalid @enderror" value="{{ old('alamat_perusahaan', $pekerjaan?->alamat_perusahaan) }}" id="alamat_perusahaan" placeholder="Alamat Perusahaan">
            {!! $errors->first('alamat_perusahaan', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="deskripsi_pekerjaan" class="form-label">{{ __('Deskripsi Pekerjaan') }}</label>
            <input type="text" name="deskripsi_pekerjaan" class="form-control @error('deskripsi_pekerjaan') is-invalid @enderror" value="{{ old('deskripsi_pekerjaan', $pekerjaan?->deskripsi_pekerjaan) }}" id="deskripsi_pekerjaan" placeholder="Deskripsi Pekerjaan">
            {!! $errors->first('deskripsi_pekerjaan', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mulai_bekerja" class="form-label">{{ __('Mulai Bekerja') }}</label>
            <input type="text" name="mulai_bekerja" class="form-control @error('mulai_bekerja') is-invalid @enderror" value="{{ old('mulai_bekerja', $pekerjaan?->mulai_bekerja) }}" id="mulai_bekerja" placeholder="Mulai Bekerja">
            {!! $errors->first('mulai_bekerja', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="selesai_bekeja" class="form-label">{{ __('Selesai Bekeja') }}</label>
            <input type="text" name="selesai_bekeja" class="form-control @error('selesai_bekeja') is-invalid @enderror" value="{{ old('selesai_bekeja', $pekerjaan?->selesai_bekeja) }}" id="selesai_bekeja" placeholder="Selesai Bekeja">
            {!! $errors->first('selesai_bekeja', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>