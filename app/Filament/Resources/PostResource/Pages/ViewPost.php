<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Filament\Widgets\PostOverview;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPost extends ViewRecord
{
    protected static string $resource = PostResource::class;

    protected function getActions(): Array {
        return [
            Actions\EditAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array {
        return [
            PostOverview::class
        ];
    }
}
