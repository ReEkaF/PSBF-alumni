<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nim" class="form-label">{{ __('Nim') }}</label>
            <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim', $lulusan?->nim) }}" id="nim" placeholder="Nim">
            {!! $errors->first('nim', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nama" class="form-label">{{ __('Nama') }}</label>
            <input type="text" name="Nama" class="form-control @error('Nama') is-invalid @enderror" value="{{ old('Nama', $lulusan?->Nama) }}" id="nama" placeholder="Nama">
            {!! $errors->first('Nama', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tanggal_lahir" class="form-label">{{ __('Tanggal Lahir') }}</label>
            <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir', $lulusan?->tanggal_lahir) }}" id="tanggal_lahir" placeholder="Tanggal Lahir">
            {!! $errors->first('tanggal_lahir', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="alamat" class="form-label">{{ __('Alamat') }}</label>
            <input type="text" name="Alamat" class="form-control @error('Alamat') is-invalid @enderror" value="{{ old('Alamat', $lulusan?->Alamat) }}" id="alamat" placeholder="Alamat">
            {!! $errors->first('Alamat', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="jenis_kelamin" class="form-label">{{ __('Jenis Kelamin') }}</label>
            <input type="text" name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" value="{{ old('jenis_kelamin', $lulusan?->jenis_kelamin) }}" id="jenis_kelamin" placeholder="Jenis Kelamin">
            {!! $errors->first('jenis_kelamin', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ipk" class="form-label">{{ __('Ipk') }}</label>
            <input type="text" name="ipk" class="form-control @error('ipk') is-invalid @enderror" value="{{ old('ipk', $lulusan?->ipk) }}" id="ipk" placeholder="Ipk">
            {!! $errors->first('ipk', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tahun_masuk" class="form-label">{{ __('Tahun Masuk') }}</label>
            <input type="text" name="tahun_masuk" class="form-control @error('tahun_masuk') is-invalid @enderror" value="{{ old('tahun_masuk', $lulusan?->tahun_masuk) }}" id="tahun_masuk" placeholder="Tahun Masuk">
            {!! $errors->first('tahun_masuk', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tahun_lulus" class="form-label">{{ __('Tahun Lulus') }}</label>
            <input type="text" name="tahun_lulus" class="form-control @error('tahun_lulus') is-invalid @enderror" value="{{ old('tahun_lulus', $lulusan?->tahun_lulus) }}" id="tahun_lulus" placeholder="Tahun Lulus">
            {!! $errors->first('tahun_lulus', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="prodi" class="form-label">{{ __('Prodi') }}</label>
            <input type="text" name="prodi" class="form-control @error('prodi') is-invalid @enderror" value="{{ old('prodi', $lulusan?->prodi) }}" id="prodi" placeholder="Prodi">
            {!! $errors->first('prodi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="no_hp" class="form-label">{{ __('No Hp') }}</label>
            <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp', $lulusan?->no_hp) }}" id="no_hp" placeholder="No Hp">
            {!! $errors->first('no_hp', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $lulusan?->email) }}" id="email" placeholder="Email">
            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="prestasi" class="form-label">{{ __('Prestasi') }}</label>
            <input type="text" name="prestasi" class="form-control @error('prestasi') is-invalid @enderror" value="{{ old('prestasi', $lulusan?->prestasi) }}" id="prestasi" placeholder="Prestasi">
            {!! $errors->first('prestasi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pengalaman" class="form-label">{{ __('Pengalaman') }}</label>
            <input type="text" name="pengalaman" class="form-control @error('pengalaman') is-invalid @enderror" value="{{ old('pengalaman', $lulusan?->pengalaman) }}" id="pengalaman" placeholder="Pengalaman">
            {!! $errors->first('pengalaman', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>