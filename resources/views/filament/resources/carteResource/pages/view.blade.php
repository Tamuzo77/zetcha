<x-filament::page>
    {!! QrCode::size(200)->generate($record->codeQR) !!}
</x-filament::page>
