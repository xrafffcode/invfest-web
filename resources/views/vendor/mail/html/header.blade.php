@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="{{ asset(getWebConfiguration()->nav_logo) }}" class="logo" alt="Logo">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
