<?php

namespace Vitlabs\GUIAdmin\Contracts\FormElements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;

interface RadioContract extends ElementContract, FormElementContract {

	function check();

    function uncheck();

}