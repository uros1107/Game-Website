@foreach($monsters as $monster)
<label class="dropdown-option">
    <input type="checkbox" name="monster[]" class="monster" value="{{ $monster->id }}">
    <span>{{ $monster->name }}</span>
</label>
@endforeach