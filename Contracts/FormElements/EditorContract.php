<?php

namespace Vitlabs\GUIAdmin\Contracts\FormElements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;

interface EditorContract extends ElementContract, FormElementContract {

    function __construct($implementation = null);

}