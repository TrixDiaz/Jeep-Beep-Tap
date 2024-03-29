<?php

namespace App\Filament\Resources\JeepResource\Pages;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Filament\Resources\JeepResource;
use Filament\Notifications\Notification;
use Filament\Notifications\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateJeep extends CreateRecord
{
    protected static string $resource = JeepResource::class;

    public function getTitle(): string
    {
        return __('Assign Jeep'); // Update the heading here
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Jeep Created';
    }

    protected function getCreatedNotification(): ?Notification
    {
        $card = $this->record;

        $auth = Auth::user();
        // Get a list of users with roles "admin" and "moderator"
        $usersWithRoles = User::whereHas('roles', function ($query) {
            $query->whereIn('id', [1, 2]);
        })->get();

        // Send the notification to each user
        foreach ($usersWithRoles as $user) {
            $notification = Notification::make()
                ->success()
                ->icon('heroicon-o-truck')
                ->title('Jeep Resource Created')
                ->body("New Jeep {$card->jnumber} Generated by {$auth->name}!")
                ->actions([Action::make('View')->url(JeepResource::getUrl('edit', ['record' => $card]))])
                ->sendToDatabase($user)->broadcast($user);
        }

        return $notification; // or return a notification if needed
    }
}
