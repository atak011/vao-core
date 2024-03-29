<?php

namespace Atak011\VaoCore\Components\Inputs;

use Illuminate\View\Component;

class Checkbox1 extends Component
{
    public $name;
    public $checked;
    public $value;
    public $label;
    public $lg;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$checked = null ,$value = null,$label = null,$lg = null)
    {
        $this->name = $name;
        $this->checked = $checked;
        $this->value = $value;
        $this->lg = $lg;
        $this->label = $label;
    }

    public function render()
    {
        return view('vao-core::components.checkbox-1');
    }
}
