<div class="form-group">
    {{ Form::label($label, null, ['class' => 'control-label']) }}
    {{ Form::email($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
</div>