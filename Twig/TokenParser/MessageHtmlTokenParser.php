<?php

namespace Hautzi\SystemMailBundle\Twig\TokenParser;

use Hautzi\SystemMailBundle\Twig\Node\MessageHtmlNode;

/**
 * MessageHtmlTokenParser
 *
 * @author Christoph Nißle <derstoffel@posteo.de>
 */
class MessageHtmlTokenParser extends AbstractTokenParser
{
    /**
     * Parses a token and returns a node.
     *
     * @param \Twig_Token $token A Twig_Token instance
     *
     * @return MessageHtmlNode
     *
     * @throws \Twig_Error_Syntax
     */
    public function parse(\Twig_Token $token)
    {
        $properties = $this->parseProperties($token);
        $this->parser->getStream()->expect(\Twig_Token::BLOCK_END_TYPE);

        $body = $this->parseBody();

        return new MessageHtmlNode($properties, $body, $token->getLine(), $this->getTag());
    }

    /**
     * Gets the tag name associated with this token parser.
     *
     * @return string The tag name
     */
    public function getTag()
    {
        return 'messageHtml';
    }
}
 