
<div class="form-group">
    <label for="name">Наименование</label>
    <input type="text" class="form-control @if (count($errors) > 0) is-invalid @endif"
    name="name" id="name" placeholder="Категория услуг" value="{{ $productcategory->name ?? old('name') }}" required>
    @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
    <input type="hidden" name="redirects_to" id="redirects_to" value="{{ URL::previous() }}">
</div>
<button type="submit" class="btn btn-success">Сохранить</button>
