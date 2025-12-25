<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        $featuredProjects = array_slice($this->portfolioProjects(), 0, 2);

        return view('pages.home', [
            'featuredProjects' => $featuredProjects,
        ]);
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function portfolio(): View
    {
        $projects = $this->portfolioProjects();

        return view('pages.portfolio', [
            'projects' => $projects,
        ]);
    }

    /**
     * @return array<int, array{title:string, description:string, url:string, image:string, tags:array<int, string>}>
     */
    private function portfolioProjects(): array
    {
        return [
            [
                'title' => 'Dimgent',
                'description' => 'A clean, conversion-focused website for a services brand, designed for clarity and confident messaging.',
                'url' => 'https://dimgent.com/',
                'image' => asset('images/portfolio/dimgent.svg'),
                'tags' => ['Website', 'UI/UX', 'Front-end'],
            ],
            [
                'title' => 'Dimgent Belarus',
                'description' => 'A localized companion experience with streamlined structure, fast load times, and consistent visual hierarchy.',
                'url' => 'https://dimgent.by/',
                'image' => asset('images/portfolio/dimgent-by.svg'),
                'tags' => ['Website', 'Localization', 'Performance'],
            ],
        ];
    }
}
