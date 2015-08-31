<?php

namespace Vitlabs\GUIAdmin\Contracts\FormElements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;

interface CheckboxContract extends ElementContract, FormElementContract {

	function check();

    function uncheck();

}