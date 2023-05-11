<option value="">Select time</option>
@foreach ($schedules as $schedule)
<option value="{{ \Carbon\Carbon::parse($schedule)->format('h:i a') }}">{{ \Carbon\Carbon::parse($schedule)->format('h:i a') }}</option>    
@endforeach