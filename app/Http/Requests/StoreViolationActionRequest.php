<?php

namespace App\Http\Requests;

use App\Models\ViolationAction;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreViolationActionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'violation_id' => 'required',
            'record_date' => 'required|date|',
            'action_date' => 'required|date',
            'action_taken' => 'required|min:2',
            'other_remarks' => 'nullable|min:2',
        ];
    }

    public function commit(): ViolationAction
    {
        return ViolationAction::updateOrCreate(
            ['violation_id' => $this->violation_id],
            $this->validated(),
        );
    }
}
