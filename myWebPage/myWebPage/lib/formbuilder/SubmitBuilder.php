<?php

class SubmitBuilder extends Builder
{
    public function __construct()
    {
        $this->addProperty('label');
        $this->addProperty('name', 'submit');
    }

    public function build()
    {
        $result = '<div class="form-group">';
        $result .= '    <label class="col-md-2 control-label" for="textinput">&nbsp;</label>';
        $result .= '    <div class="col-md-4">';
        $result .= "        <input style='background-color: darkred; outline-color: darkred;' name=\"{$this->name}\" type=\"submit\" class=\"btn btn-primary\" value=\"{$this->label}\">";
        $result .= '    </div>';
        $result .= '</div>';

        return $result;
    }
}
