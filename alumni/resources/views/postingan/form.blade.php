<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_postingan" class="form-label">{{ __('Id Postingan') }}</label>
            <input type="text" name="id_postingan" class="form-control @error('id_postingan') is-invalid @enderror" value="{{ old('id_postingan', $postingan?->id_postingan) }}" id="id_postingan" placeholder="Id Postingan">
            {!! $errors->first('id_postingan', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nim" class="form-label">{{ __('Nim') }}</label>
            <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim', $postingan?->nim) }}" id="nim" placeholder="Nim">
            {!! $errors->first('nim', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="judul" class="form-label">{{ __('Judul') }}</label>
            <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul', $postingan?->judul) }}" id="judul" placeholder="Judul">
            {!! $errors->first('judul', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tanggal_posting" class="form-label">{{ __('Tanggal Posting') }}</label>
            <input type="text" name="tanggal_posting" class="form-control @error('tanggal_posting') is-invalid @enderror" value="{{ old('tanggal_posting', $postingan?->tanggal_posting) }}" id="tanggal_posting" placeholder="Tanggal Posting">
            {!! $errors->first('tanggal_posting', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="gambar" class="form-label">{{ __('Gambar') }}</label>
            <input type="text" name="gambar" class="form-control @error('gambar') is-invalid @enderror" value="{{ old('gambar', $postingan?->gambar) }}" id="gambar" placeholder="Gambar">
            {!! $errors->first('gambar', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="deskripsi" class="form-label">{{ __('Deskripsi') }}</label>
            <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ old('deskripsi', $postingan?->deskripsi) }}" id="deskripsi" placeholder="Deskripsi">
            {!! $errors->first('deskripsi', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>