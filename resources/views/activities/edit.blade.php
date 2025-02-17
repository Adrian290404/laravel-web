<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit activity</title>
    <link rel="stylesheet" href="{{ asset('css/createAndShow.css') }}">
</head>
<body>
    <div class="container">
        <h1>Edit activity (ID: {{ $activity->id }})</h1>
        <form action="{{ route('activities.update', $activity->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" id="type">
                    <option value="">Select type of activity</option>
                    <option value="surf" {{ old('type', $activity->type) == 'surf' ? 'selected' : '' }}>Surf</option>
                    <option value="windsurf" {{ old('type', $activity->type) == 'windsurf' ? 'selected' : '' }}>Windsurf</option>
                    <option value="kayak" {{ old('type', $activity->type) == 'kayak' ? 'selected' : '' }}>Kayak</option>
                    <option value="atv" {{ old('type', $activity->type) == 'atv' ? 'selected' : '' }}>ATV</option>
                    <option value="hot air balloon" {{ old('type', $activity->type) == 'hot air balloon' ? 'selected' : '' }}>Hot Air Balloon</option>
                </select>
                @error('type')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="user_id">User ID</label>
                <input type="number" name="user_id" id="user_id" value="{{ old('user_id', $activity->user_id) }}">
                @error('user_id')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="datetime">Date</label>
                <input type="datetime-local" name="datetime" id="datetime" 
                       value="{{ old('datetime', \Carbon\Carbon::parse($activity->datetime)->format('Y-m-d\TH:i')) }}">
                @error('datetime')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="paid">Paid</label>
                <select name="paid" id="paid">
                    <option value="">Select option</option>
                    <option value="1" {{ old('paid', $activity->paid) == 1 ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ old('paid', $activity->paid) == 0 ? 'selected' : '' }}>No</option>
                </select>
                @error('paid')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="notes">Notes</label>
                <textarea name="notes" id="notes" rows="4">{{ old('notes', $activity->notes) }}</textarea>
                @error('notes')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="satisfaction">Satisfaction</label>
                <input type="range" name="satisfaction" id="satisfaction" min="1" max="10" 
                       value="{{ old('satisfaction', $activity->satisfaction ?? 5) }}" 
                       oninput="document.getElementById('satisfactionValue').textContent = this.value">
                <span id="satisfactionValue">{{ old('satisfaction', $activity->satisfaction ?? 5) }}</span>
                @error('satisfaction')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>            

            <button type="submit">Update activity</button>
        </form>
    </div>
</body>
</html>