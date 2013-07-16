<?php

/*
 * This file is part of the SecotrustHtmlInspectorBundle package.
 *
 * (c) Henrik Westphal <henrik.westphal@gmail.com>
 * (c) secotrust IT GmbH & Co. KG - http://www.secotrust.de
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Secotrust\Bundle\HtmlInspectorBundle\DataCollector;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\DataCollectorInterface;

/**
 * Class HtmlInspectorDataCollector
 */
class HtmlInspectorDataCollector implements DataCollectorInterface
{
    /**
     * @inheritdoc
     */
    public function collect(Request $request, Response $response, \Exception $exception = null)
    {
        // nothing to do here...
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'html_inspector';
    }
}
