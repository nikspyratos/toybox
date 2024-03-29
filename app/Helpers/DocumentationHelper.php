<?php

declare(strict_types=1);

namespace App\Helpers;

use App\Models\DocumentationPage;

class DocumentationHelper
{
    public static function generateNavArray(): array
    {
        $navLinks = [
            'index' => [
                'title' => 'Introduction',
                'url' => route('docs.index'),
            ],
        ];
        $documentationPages = DocumentationPage::all();
        $groups = DocumentationPage::select(['group'])
            ->whereNotNull('group')
            ->orderBy('group')
            ->get()
            ->unique('group')
            ->pluck('group')
            ->toArray();
        foreach ($groups as $group) {
            $groupDocumentationPages = $documentationPages->where('group', $group);
            foreach ($groupDocumentationPages as $groupDocumentationPage) {
                $navLinks['groups'][$group][] = [
                    'title' => $groupDocumentationPage->title,
                    'url' => '/docs/' . $groupDocumentationPage->slug,
                ];
            }
        }

        return $navLinks;
    }
}
