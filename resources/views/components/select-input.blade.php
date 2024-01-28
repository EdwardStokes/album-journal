@props(['name', 'options', 'selected' => null])

<select id="{{ $name }}" name="{{ $name }}" {{ $attributes }}>
    @foreach($options as $option)
        <option value="{{ $option[0] }}" {{ $value == $selected ? 'selected' : '' }}>{{ $option[1] }}</option>
    @endforeach
</select>
