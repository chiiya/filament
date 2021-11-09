@php
    $action = $getAction();
    $url = $getUrl();
@endphp

<x-tables::button
    :tag="((! $action) && $url) ? 'a' : 'button'"
    :wire:click="$action"
    :href="$url"
    :target="$shouldOpenUrlInNewTab() ? '_blank' : null"
    :color="$getColor()"
    :icon="$getIcon()"
    :icon-position="$getIconPosition()"
>
    {{ $getLabel() }}
</x-tables::button>