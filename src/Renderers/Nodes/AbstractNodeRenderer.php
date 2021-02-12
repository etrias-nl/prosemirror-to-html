<?php


namespace ProseMirrorToHtml\Renderers\Nodes;

use ProseMirrorToHtml\Renderer;
use ReflectionClass;
use ProseMirrorToHtml\Helpers\StringHelper;

abstract class AbstractNodeRenderer implements NodeRendererInterface
{
    /**
     * @inheritDoc
     */
    public static function supportedType()
    {
        return StringHelper::toCamelCase((new ReflectionClass(static::class))->getShortName());
    }

    /**
     * @inheritDoc
     */
    public function isSelfClosing()
    {
        return false;
    }

    public function getHtml($node, Renderer $renderer): ?string
    {
        return null;
    }


    public function getText($node)
    {
        return null;
    }
}
