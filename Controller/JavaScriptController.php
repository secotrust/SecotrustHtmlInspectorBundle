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

namespace Secotrust\Bundle\HtmlInspectorBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Templating\EngineInterface;

/**
 * Class JavaScriptController
 */
class JavaScriptController
{
    /**
     * @var EngineInterface
     */
    private $templating;

    /**
     * @var array
     */
    private $parameters;

    /**
     * @param EngineInterface $templating
     * @param array $parameters
     */
    public function __construct(EngineInterface $templating, array $parameters)
    {
        $this->templating = $templating;
        $this->parameters = $parameters;
    }

    /**
     * @return Response
     */
    public function indexAction()
    {
        $parameters = $this->parameters;
        $content = $this->templating->render('SecotrustHtmlInspectorBundle:JavaScript:index.js.twig', $parameters);
        $headers = array('Content-Type', 'application/x-javascript; charset=UTF-8');
        $response = new Response($content, 200, $headers);

        return $response;
    }
}
