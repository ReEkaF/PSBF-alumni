<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_sosmed" class="form-label">{{ __('Id Sosmed') }}</label>
            <input type="text" name="id_sosmed" class="form-control @error('id_sosmed') is-invalid @enderror" value="{{ old('id_sosmed', $sosialMedia?->id_sosmed) }}" id="id_sosmed" placeholder="Id Sosmed">
            {!! $errors->first('id_sosmed', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nim" class="form-label">{{ __('Nim') }}</label>
            <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim', $sosialMedia?->nim) }}" id="nim" placeholder="Nim">
            {!! $errors->first('nim', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nama_akun_sosmed" class="form-label">{{ __('Nama Akun Sosmed') }}</label>
            <input type="text" name="nama_akun_sosmed" class="form-control @error('nama_akun_sosmed') is-invalid @enderror" value="{{ old('nama_akun_sosmed', $sosialMedia?->nama_akun_sosmed) }}" id="nama_akun_sosmed" placeholder="Nama Akun Sosmed">
            {!! $errors->first('nama_akun_sosmed', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="jenis_sosmed" class="form-label">{{ __('Jenis Sosmed') }}</label>
            <input type="text" name="jenis_sosmed" class="form-control @error('jenis_sosmed') is-invalid @enderror" value="{{ old('jenis_sosmed', $sosialMedia?->jenis_sosmed) }}" id="jenis_sosmed" placeholder="Jenis Sosmed">
            {!! $errors->first('jenis_sosmed', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>