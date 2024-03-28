<?php

declare(strict_types=1);

namespace App\Helpers;

use App\Models\DocumentationPage;
use Illuminate\Support\Str;

class DocumentationHelper
{
    public static function generateNavArray(): array
    {
        $navLinks = [];
        $documentationPages = DocumentationPage::all();
        $groups = DocumentationPage::select(['group'])
            ->orderBy('group')
            ->get()
            ->unique('group')
            ->pluck('group')
            ->toArray();
        foreach ($groups as $group) {
            $groupSlug = Str::slug($group);
            $groupDocumentationPages = $documentationPages->where('group', $group);
            foreach ($groupDocumentationPages as $groupDocumentationPage) {
                $navLinks[$group][] = sprintf('/docs/%s/', $groupSlug) . $groupDocumentationPage->slug;
            }
        }

        return $navLinks;
    }
}
