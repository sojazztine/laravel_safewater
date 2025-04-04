@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{asset('img/restore-logo.png')}}" class="logo" alt="Restore Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
