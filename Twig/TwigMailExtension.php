<?php

namespace Hautzi\SystemMailBundle\Twig;

/**
 * TwigMailExtension
 *
 * @author Christoph Nißle <derstoffel@posteo.de>
 */
class TwigMailExtension extends \Twig_Extension
{
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'system_mail_extension';
    }
}
 