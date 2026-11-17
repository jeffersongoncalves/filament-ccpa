<x-filament-panels::page>
    @php
        $label = \JeffersonGoncalves\Filament\Ccpa\Pages\PersonalDataInventory::label(...);
    @endphp

    @forelse ($this->getInventory() as $model => $rows)
        <x-filament::section :heading="class_basename($model)" :description="$rows[0]['table']">
            <div style="overflow-x: auto;">
                <table style="width: 100%; font-size: 0.875rem; border-collapse: collapse; text-align: left;">
                    <thead>
                        <tr style="opacity: 0.7;">
                            @foreach (['column', 'category', 'pi_category', 'purpose', 'sold_shared', 'retention', 'anonymize'] as $heading)
                                <th style="padding: 0.5rem; font-weight: 600;">{{ __("filament-ccpa::filament-ccpa.fields.{$heading}") }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $row)
                            <tr style="border-top: 1px solid rgba(127, 127, 127, 0.2);">
                                <td style="padding: 0.5rem; font-family: monospace;">{{ $row['column'] }}</td>
                                <td style="padding: 0.5rem;">
                                    <x-filament::badge :color="$row['category'] !== 'personal' ? 'danger' : 'gray'" style="display: inline-flex;">
                                        {{ $label('category', $row['category']) }}
                                    </x-filament::badge>
                                </td>
                                <td style="padding: 0.5rem;">
                                    @if ($row['pi_category'])
                                        {{ $label('pi_category', $row['pi_category']) }}
                                    @else
                                        <span style="color: rgb(220, 38, 38);">{{ __('filament-ccpa::filament-ccpa.missing') }}</span>
                                    @endif
                                </td>
                                <td style="padding: 0.5rem;">{{ $row['purpose'] ?? '-' }}</td>
                                <td style="padding: 0.5rem;">
                                    @if ($row['sold'])
                                        <x-filament::badge color="warning" style="display: inline-flex;">{{ __('filament-ccpa::filament-ccpa.sold') }}</x-filament::badge>
                                    @endif
                                    @if ($row['shared'])
                                        <x-filament::badge color="warning" style="display: inline-flex;">{{ __('filament-ccpa::filament-ccpa.shared') }}</x-filament::badge>
                                    @endif
                                    @if (! $row['sold'] && ! $row['shared'])
                                        -
                                    @endif
                                </td>
                                <td style="padding: 0.5rem;">{{ $row['retention'] ?? '-' }}</td>
                                <td style="padding: 0.5rem;">{{ $label('anonymize', $row['anonymize']) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </x-filament::section>
    @empty
        <x-filament::section>
            {{ __('filament-ccpa::filament-ccpa.empty') }}
        </x-filament::section>
    @endforelse
</x-filament-panels::page>
