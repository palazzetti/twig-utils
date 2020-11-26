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

class ArrayUtilsExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('unique', 'Twig\\Utils\\Templating\\twig_array_unique', ['is_safe' => ['all']]),
        ];
    }
}

function twig_array_unique(array $items, string $sorting_method): array
{
    if ($sorting_method === "SORT_REGULAR")
        return array_unique($items, SORT_REGULAR);
    if ($sorting_method === "SORT_NUMERIC")
        return array_unique($items, SORT_NUMERIC);
    if ($sorting_method === "SORT_STRING")
        return array_unique($items, SORT_STRING);
    if ($sorting_method === "SORT_LOCALE_STRING")
        return array_unique($items, SORT_LOCALE_STRING);

    return array_unique($items);
}
