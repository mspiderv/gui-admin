<?php

namespace Vitlabs\GUIAdmin\Contracts\FormElements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;

interface FormElementContract extends ElementContract {

    // Constructor
	function __construct();

    // Get or set
    function label($label);
    function name($name);
    function value($value);
    function help($help);
    function id($id);
    function disabled($disabled = null);

    // Getters
    function getEscapedValue();
    function getWrapClasses();

    // Set "disabled" to true
    function disable();

    // Set "disabled" to false
    function enable();

    // Stauts
    function hasSuccess();
    function hasWarning();
    function hasError();
    function status($status);
    function getStatusClasses();

    // Render methods
    function renderLabel();
    function renderHelp();
    function renderField();

}