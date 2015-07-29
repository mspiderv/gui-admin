<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\DataElement;
use Vitlabs\GUICore\Contracts\Components\ContainerElement;

interface WindowContract extends ElementContract, DataElement, ContainerElement {

	const VARIABLES = 'breadcrumbs=[]|title|logo_text|mini_logo_text=$logo_text|logo_href|heading|heading_small';

	const POSITIONS = 'content|footer';

	public function __construct(array $data = []);

	public function addBreadcrumb($title, $url = null);

}