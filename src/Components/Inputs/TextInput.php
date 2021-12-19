<?php

namespace Atak011\VaoCore\Components\Inputs;

use Illuminate\View\Component;

class TextInput extends Component
{
    public $required;
    public $name;
    public $label;
    public $model;
    public $placeholder;
    public $hidden;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$label = null ,$model=null,$placeholder = null,$required = false,$hidden = false,$value = null)
    {
        $this->required = $required;
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->model = $model;
        $this->hidden = $hidden;
        $this->value = $value;
    }

    public function render()
    {
        return view('vao-core::components.text-input');
    }
}
