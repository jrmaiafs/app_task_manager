<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Task Manager')
<img src="https://media.graphcms.com/output=format:jpg/jYGIz310RKuP9KpXjkMV" class="logo" alt="Task Maneger">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
