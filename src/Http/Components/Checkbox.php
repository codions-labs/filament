<?php

namespace Filament\Http\Components;

use Illuminate\View\Component;

class Checkbox extends Component
{
    /**
     * Input type.
     *
     * @var string
     */
    public $type;

    /**
     * Input name.
     *
     * @var string
     */
    public $name;

    /**
     * Input label.
     *
     * @var string
     */
    public $label;

    /**
     * Input value.
     *
     * @var string
     */
    public $value;

    /**
     * Input model.
     *
     * @var string
     */
    public $model;

    /**
     * Input is disabled?
     *
     * @var string
     */
    public $disabled;

    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $name
     * @param  string  $label
     * @param  string  $value
     * @param  string  $model
     * @return void
     */
    public function __construct($type = 'checkbox', $name, $label = null, $value, $model = null, $disabled = false)
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label ?? $name;
        $this->value = $value;
        $this->model = $model;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('filament::components.checkbox');
    }
}