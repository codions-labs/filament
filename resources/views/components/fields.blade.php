<div class="mb-4 grid grid-cols-4 gap-4">
    @foreach ($fields as $field)
        {{ $field->render() }}
    @endforeach
</div>
