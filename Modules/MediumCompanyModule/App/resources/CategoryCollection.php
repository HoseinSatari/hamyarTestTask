<?php

namespace Modules\MediumCompanyModule\App\resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoryCollection extends ResourceCollection
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
                $result['title'] = $item->title;
                $result['description'] = $item->description;
                $result['questions'] = new QuestionsCollection($item->questions);

                return $result;
            })->toArray();

    }
}
