<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel {

    protected function attachedRelation($request, $relation) {
        return $this->{$relation}()->attach($request->input($relation));
    }

    protected function syncRelation($request, $relation) {
        return $this->{$relation}()->sync($request->input($relation));
    }

    protected function detachRelation() {
        return $this->{$relation}()->detach($request->input($relation));
    }

    public function getCount($model) {
        return $model->count();
    }

    public function getCreatedAt() {
        return $this->created_at->format('d/m/y');
    }

}
