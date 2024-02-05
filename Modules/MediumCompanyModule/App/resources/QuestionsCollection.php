<?php

namespace Modules\MediumCompanyModule\App\resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class QuestionsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     */
    public function toArray($request): array
    {
        return
            $this->collection->transform(function ($item) {
                $result = [];
                $result['id'] = $item->id;
                $result['question'] = $item->question;
                return $result;
            })->toArray();

    }
}
