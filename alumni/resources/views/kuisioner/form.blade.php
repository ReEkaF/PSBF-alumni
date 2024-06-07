<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_kuisioner" class="form-label">{{ __('Id Kuisioner') }}</label>
            <input type="text" name="id_kuisioner" class="form-control @error('id_kuisioner') is-invalid @enderror" value="{{ old('id_kuisioner', $kuisioner?->id_kuisioner) }}" id="id_kuisioner" placeholder="Id Kuisioner">
            {!! $errors->first('id_kuisioner', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="kuisioner1" class="form-label">{{ __('Kuisioner1') }}</label>
            <input type="text" name="kuisioner1" class="form-control @error('kuisioner1') is-invalid @enderror" value="{{ old('kuisioner1', $kuisioner?->kuisioner1) }}" id="kuisioner1" placeholder="Kuisioner1">
            {!! $errors->first('kuisioner1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="kuisioner2" class="form-label">{{ __('Kuisioner2') }}</label>
            <input type="text" name="kuisioner2" class="form-control @error('kuisioner2') is-invalid @enderror" value="{{ old('kuisioner2', $kuisioner?->kuisioner2) }}" id="kuisioner2" placeholder="Kuisioner2">
            {!! $errors->first('kuisioner2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="kuisioner3" class="form-label">{{ __('Kuisioner3') }}</label>
            <input type="text" name="kuisioner3" class="form-control @error('kuisioner3') is-invalid @enderror" value="{{ old('kuisioner3', $kuisioner?->kuisioner3) }}" id="kuisioner3" placeholder="Kuisioner3">
            {!! $errors->first('kuisioner3', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="kuisioner4" class="form-label">{{ __('Kuisioner4') }}</label>
            <input type="text" name="kuisioner4" class="form-control @error('kuisioner4') is-invalid @enderror" value="{{ old('kuisioner4', $kuisioner?->kuisioner4) }}" id="kuisioner4" placeholder="Kuisioner4">
            {!! $errors->first('kuisioner4', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="kuisioner5" class="form-label">{{ __('Kuisioner5') }}</label>
            <input type="text" name="kuisioner5" class="form-control @error('kuisioner5') is-invalid @enderror" value="{{ old('kuisioner5', $kuisioner?->kuisioner5) }}" id="kuisioner5" placeholder="Kuisioner5">
            {!! $errors->first('kuisioner5', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="kuisioner6" class="form-label">{{ __('Kuisioner6') }}</label>
            <input type="text" name="kuisioner6" class="form-control @error('kuisioner6') is-invalid @enderror" value="{{ old('kuisioner6', $kuisioner?->kuisioner6) }}" id="kuisioner6" placeholder="Kuisioner6">
            {!! $errors->first('kuisioner6', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="kuisioner7" class="form-label">{{ __('Kuisioner7') }}</label>
            <input type="text" name="kuisioner7" class="form-control @error('kuisioner7') is-invalid @enderror" value="{{ old('kuisioner7', $kuisioner?->kuisioner7) }}" id="kuisioner7" placeholder="Kuisioner7">
            {!! $errors->first('kuisioner7', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="kuisioner8" class="form-label">{{ __('Kuisioner8') }}</label>
            <input type="text" name="kuisioner8" class="form-control @error('kuisioner8') is-invalid @enderror" value="{{ old('kuisioner8', $kuisioner?->kuisioner8) }}" id="kuisioner8" placeholder="Kuisioner8">
            {!! $errors->first('kuisioner8', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="kuisioner9" class="form-label">{{ __('Kuisioner9') }}</label>
            <input type="text" name="kuisioner9" class="form-control @error('kuisioner9') is-invalid @enderror" value="{{ old('kuisioner9', $kuisioner?->kuisioner9) }}" id="kuisioner9" placeholder="Kuisioner9">
            {!! $errors->first('kuisioner9', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="kuisioner10" class="form-label">{{ __('Kuisioner10') }}</label>
            <input type="text" name="kuisioner10" class="form-control @error('kuisioner10') is-invalid @enderror" value="{{ old('kuisioner10', $kuisioner?->kuisioner10) }}" id="kuisioner10" placeholder="Kuisioner10">
            {!! $errors->first('kuisioner10', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>