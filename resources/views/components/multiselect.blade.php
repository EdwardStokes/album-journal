@props(['name', 'options', 'selected' => null])

<select name="{{ $name }}" id="{{ $name }}" multiple>
        @foreach($options as $option)
            <option value="{{ $option->id }}">{{ $option->name }}</option>
        @endforeach
</select>
