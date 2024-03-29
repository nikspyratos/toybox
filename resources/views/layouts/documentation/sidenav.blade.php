@php
    use App\Helpers\DocumentationHelper;
    use Illuminate\Support\Facades\Cache;
    $navLinks = Cache::get('doc-nav-links') ?? DocumentationHelper::generateNavArray();
@endphp

<div class="ml-4 w-1/5">
    <p><a href="{{ $navLinks['index']['url'] }}">{{ $navLinks['index']['title'] }}</a></p>
@foreach($navLinks['groups'] as $section => $group)
    <p class="text-lg">{{ $section }}</p>
    <ul class="list-none">
        @foreach($group as $link)
            <li><a href="{{ $link['url'] }}">{{ $link['title'] }}</a></li>
        @endforeach
    </ul>
@endforeach
</div>
