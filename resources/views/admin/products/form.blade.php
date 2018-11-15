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
  <label for="category">Категория</label>
  <select class="form-control @if (count($errors) > 0) is-invalid @endif" name="category" id="category">
    @foreach ($categories as $category)
      <option value="{{ $category->id }}"
        @isset($product->category_id)
            @if ($category->id === $product->category_id)
                selected="selected"
            @endif
        @endisset
        >{{ $category->name }}</option>
    @endforeach
  </select>
  @if ($errors->has('category'))
  <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('category') }}</strong>
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
<div class="form-group">
  <label for="image">Изображение</label>
  <?php if (isset($product->image) && (!empty($product->image))) : ?>
    <img src="{{ asset('storage') . '/' . $product->image }}" class="img-thumbnail" alt="Не удалось отобразить изображение">
    <? $image_message = 'Изменить изображение' ?>
  <?php else : ?>
    <? $image_message = 'Прикрепите изображение (необязательно)' ?>
  <?php endif ?>
  <input type="file" class="form-control-file @if (count($errors) > 0) is-invalid @endif" name="image" id="image" aria-describedby="fileHelpId" value="{{ $product->image ?? old('image') }}">
  <small id="fileHelpId" class="form-text text-muted">{{ $image_message }}</small>
  @if ($errors->has('image'))
  <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('image') }}</strong>
  </span>
  @endif
</div>
<input type="hidden" name="redirects_to" id="redirects_to" value="{{ URL::previous() }}">
<button type="submit" class="btn btn-success">Сохранить</button>
