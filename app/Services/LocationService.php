<?php

namespace App\Services;

use App\Models\SavedLocation;
use Illuminate\Database\Eloquent\Collection;

class LocationService
{
    public function getUserSavedLocationsWithCurrentForecast(int $user_id): string
    {
        $savedLocations = $this->getUserSavedLocations($user_id);

        foreach ($savedLocations as $savedLocation) {
            if (empty($savedLocation->currentForecast)) {
                $this->updateCurrentForecast($savedLocation);
            }
        }
    }

    public function getUserSavedLocations(int $user_id): Collection
    {
        return SavedLocation::query()
            ->where('user_id', $user_id)
            ->with('currentForecast')
            ->get();
    }
}
