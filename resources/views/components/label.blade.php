@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
    <!-- NULL合体演算子 一つ目の値がNULLでなければ実行 -->
</label>
