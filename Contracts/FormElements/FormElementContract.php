<?php

namespace Vitlabs\GUIAdmin\Contracts\FormElements;

use Vitlabs\GUICore\Contracts\Components\FieldContract;

interface FormElementContract extends FieldContract {

    // Get or set
    function label($label);
    function help($help);

    // Getters
    function getWrapClasses();

    // Stauts
    function hasSuccess();
    function hasWarning();
    function hasError();
    function status($status);
    function getStatusClasses();

    // Render methods
    function renderLabel();
    function renderHelp();

}