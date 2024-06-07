<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_hasil_kuisioner" class="form-label">{{ __('Id Hasil Kuisioner') }}</label>
            <input type="text" name="id_hasil_kuisioner" class="form-control @error('id_hasil_kuisioner') is-invalid @enderror" value="{{ old('id_hasil_kuisioner', $hasilKuisioner?->id_hasil_kuisioner) }}" id="id_hasil_kuisioner" placeholder="Id Hasil Kuisioner">
            {!! $errors->first('id_hasil_kuisioner', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nim" class="form-label">{{ __('Nim') }}</label>
            <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim', $hasilKuisioner?->nim) }}" id="nim" placeholder="Nim">
            {!! $errors->first('nim', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_kuisioner" class="form-label">{{ __('Id Kuisioner') }}</label>
            <input type="text" name="id_kuisioner" class="form-control @error('id_kuisioner') is-invalid @enderror" value="{{ old('id_kuisioner', $hasilKuisioner?->id_kuisioner) }}" id="id_kuisioner" placeholder="Id Kuisioner">
            {!! $errors->first('id_kuisioner', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hasil_kuisioner1" class="form-label">{{ __('Hasil Kuisioner1') }}</label>
            <input type="text" name="hasil_kuisioner1" class="form-control @error('hasil_kuisioner1') is-invalid @enderror" value="{{ old('hasil_kuisioner1', $hasilKuisioner?->hasil_kuisioner1) }}" id="hasil_kuisioner1" placeholder="Hasil Kuisioner1">
            {!! $errors->first('hasil_kuisioner1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hasil_kuisioner2" class="form-label">{{ __('Hasil Kuisioner2') }}</label>
            <input type="text" name="hasil_kuisioner2" class="form-control @error('hasil_kuisioner2') is-invalid @enderror" value="{{ old('hasil_kuisioner2', $hasilKuisioner?->hasil_kuisioner2) }}" id="hasil_kuisioner2" placeholder="Hasil Kuisioner2">
            {!! $errors->first('hasil_kuisioner2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hasil_kuisioner3" class="form-label">{{ __('Hasil Kuisioner3') }}</label>
            <input type="text" name="hasil_kuisioner3" class="form-control @error('hasil_kuisioner3') is-invalid @enderror" value="{{ old('hasil_kuisioner3', $hasilKuisioner?->hasil_kuisioner3) }}" id="hasil_kuisioner3" placeholder="Hasil Kuisioner3">
            {!! $errors->first('hasil_kuisioner3', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hasil_kuisioner4" class="form-label">{{ __('Hasil Kuisioner4') }}</label>
            <input type="text" name="hasil_kuisioner4" class="form-control @error('hasil_kuisioner4') is-invalid @enderror" value="{{ old('hasil_kuisioner4', $hasilKuisioner?->hasil_kuisioner4) }}" id="hasil_kuisioner4" placeholder="Hasil Kuisioner4">
            {!! $errors->first('hasil_kuisioner4', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hasil_kuisioner5" class="form-label">{{ __('Hasil Kuisioner5') }}</label>
            <input type="text" name="hasil_kuisioner5" class="form-control @error('hasil_kuisioner5') is-invalid @enderror" value="{{ old('hasil_kuisioner5', $hasilKuisioner?->hasil_kuisioner5) }}" id="hasil_kuisioner5" placeholder="Hasil Kuisioner5">
            {!! $errors->first('hasil_kuisioner5', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hasil_kuisioner6" class="form-label">{{ __('Hasil Kuisioner6') }}</label>
            <input type="text" name="hasil_kuisioner6" class="form-control @error('hasil_kuisioner6') is-invalid @enderror" value="{{ old('hasil_kuisioner6', $hasilKuisioner?->hasil_kuisioner6) }}" id="hasil_kuisioner6" placeholder="Hasil Kuisioner6">
            {!! $errors->first('hasil_kuisioner6', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hasil_kuisioner7" class="form-label">{{ __('Hasil Kuisioner7') }}</label>
            <input type="text" name="hasil_kuisioner7" class="form-control @error('hasil_kuisioner7') is-invalid @enderror" value="{{ old('hasil_kuisioner7', $hasilKuisioner?->hasil_kuisioner7) }}" id="hasil_kuisioner7" placeholder="Hasil Kuisioner7">
            {!! $errors->first('hasil_kuisioner7', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hasil_kuisioner8" class="form-label">{{ __('Hasil Kuisioner8') }}</label>
            <input type="text" name="hasil_kuisioner8" class="form-control @error('hasil_kuisioner8') is-invalid @enderror" value="{{ old('hasil_kuisioner8', $hasilKuisioner?->hasil_kuisioner8) }}" id="hasil_kuisioner8" placeholder="Hasil Kuisioner8">
            {!! $errors->first('hasil_kuisioner8', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hasil_kuisioner9" class="form-label">{{ __('Hasil Kuisioner9') }}</label>
            <input type="text" name="hasil_kuisioner9" class="form-control @error('hasil_kuisioner9') is-invalid @enderror" value="{{ old('hasil_kuisioner9', $hasilKuisioner?->hasil_kuisioner9) }}" id="hasil_kuisioner9" placeholder="Hasil Kuisioner9">
            {!! $errors->first('hasil_kuisioner9', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hasil_kuisioner10" class="form-label">{{ __('Hasil Kuisioner10') }}</label>
            <input type="text" name="hasil_kuisioner10" class="form-control @error('hasil_kuisioner10') is-invalid @enderror" value="{{ old('hasil_kuisioner10', $hasilKuisioner?->hasil_kuisioner10) }}" id="hasil_kuisioner10" placeholder="Hasil Kuisioner10">
            {!! $errors->first('hasil_kuisioner10', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>