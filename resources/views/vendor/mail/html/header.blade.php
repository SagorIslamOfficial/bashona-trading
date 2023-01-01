@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === '')
<img src="{{ asset('frontEnd/img/bashona.png') }}" class="logo" alt="Bashona Trading Ltd">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
