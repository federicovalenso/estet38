<div class="form-group">
    <label for="name">Наименование</label>
    <input type="text" class="form-control @if (count($errors) > 0) is-invalid @endif"
    name="name" id="name" placeholder="Невероятная эстетическая процедура" value="{{ $product->name ?? old('name') }}" required>
    @if ($errors->has('name'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
    @endif
</div>
<div class="form-group">
    <label for="description">Описание</label>
    <textarea class="form-control @if (count($errors) > 0) is-invalid @endif" name="description" id="description" rows="3">{{ $product->description ?? old('description') }}</textarea>
    @if ($errors->has('description'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('description') }}</strong>
    </span>
    @endif
</div>
<div class="form-group">
    <label for="price">Цена</label>
    <input type="number" class="form-control @if (count($errors) > 0) is-invalid @endif"
    name="price" id="price" placeholder="123,45" minstep="0.01" min="0" value="{{ $product->price ?? old('price') }}" required>
    @if ($errors->has('price'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('price') }}</strong>
    </span>
    @endif
</div>
<input type="hidden" name="redirects_to" id="redirects_to" value="{{ URL::previous() }}">
<button type="submit" class="btn btn-success">Сохранить</button>
