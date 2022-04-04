<div class="mb-3">
    <label for="name" class="form-label">Company name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $company->name }}">
    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
</div>
<div class="mb-3">
    <label for="address" class="form-label">Company address</label>
    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') ?? $company->address}}">
    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
</div>
<div class="mb-3">
    <label for="phone" class="form-label">Company phone</label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') ?? $company->phone}}">
</div>