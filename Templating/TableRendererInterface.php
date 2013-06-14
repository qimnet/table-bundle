<?php
/*
 * This file is part of the Qimnet CRUD Bundle.
 *
 * (c) Antoine Guigan <aguigan@qimnet.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Qimnet\TableBundle\Templating;

interface TableRendererInterface
{
    public function addStrategy(TableRendererStrategyInterface $strategy);
    public function render($value, array $options=array());
    public function renderSortLink($label, $classes='', $sortUrl='');
}
