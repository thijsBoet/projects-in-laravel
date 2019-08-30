<div class="form-group">
    {{ Form::label($name, null, ['class' => 'control-label']) }}
    {{ Form::textsarea($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
</div>