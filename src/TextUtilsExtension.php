<?php

/*
 * This file is part of the Twig Utils Package.
 *
 * (c) Daniele Sarnari <daniele.sarnari@palazzetti.it>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Utils\Templating;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class TextUtilsExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('ucfirst', 'Twig\\Utils\\Templating\\twig_text_ucfirst', ['is_safe' => ['all']]),
            new TwigFilter('lcfirst', 'Twig\\Utils\\Templating\\twig_text_lcfirst', ['is_safe' => ['all']])
        ];
    }
}

function twig_text_ucfirst(string $text): string
{
    return ucfirst($text);
}

function twig_text_lcfirst(string $text): string
{
    return lcfirst($text);
}
