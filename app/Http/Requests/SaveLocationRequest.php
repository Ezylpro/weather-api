<?php

namespace App\Http\Requests;

use App\Models\SavedLocation;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;

class SaveLocationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user = request()->user();

        $savedLocations = SavedLocation::query()
            ->where('user_id', $user->id);

        return $savedLocations->count() < config('settings.saved_locations_limit');
    }

    protected function failedAuthorization()
    {
        throw new AuthorizationException(__('validation.locations_limit', ['limit' => config('settings.saved_locations_limit')]));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
}
