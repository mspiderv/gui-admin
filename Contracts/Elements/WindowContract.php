<?php

namespace Vitlabs\GUIAdmin\Contracts\Elements;

use Vitlabs\GUICore\Contracts\Elements\ElementContract;
use Vitlabs\GUICore\Contracts\Components\DataElement;
use Vitlabs\GUICore\Contracts\Components\ContainerElement;

interface WindowContract extends ElementContract, DataElement, ContainerElement {

	const VARIABLES = 'breadcrumbs=[]|title|logo_text|mini_logo_text=$logo_text|logo_href|heading|heading_small|webURL|logoutURL';

	const POSITIONS = 'content|footer';

	function __construct(array $data = []);

	function addBreadcrumb($title, $url = null);

    function getSidebarMenu();

    function getNavbarMenu();
}