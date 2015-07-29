<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\DataElement;

interface LoginContract extends ElementContract, DataElement {

	const VARIABLES = 'title|heading|logo|favicon|fieldLoginName|fieldPasswordName|webURL|form=[]|showError=false';
	
	public function __construct(array $data = []);

}