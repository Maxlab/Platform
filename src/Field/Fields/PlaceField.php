<?php

namespace Orchid\Field\Fields;

use Orchid\Field\Field;

class PlaceField extends Field
{
    /**
     * @var string
     */
    public $view = 'dashboard::fields.place';

    /**
     * Create Object.
     *
     * @param null $attributes
     * @param null $data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create($attributes, $data = null)
    {
        if (is_array($this->type)) {
            $this->type = 'text';
        }

        if (is_null($data)) {
            $data = collect();
        }

        $attributes->put('data', $data);

        return view($this->view, $attributes);
    }
}
