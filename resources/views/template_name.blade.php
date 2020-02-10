<li>{{ $category['name'] }}</li>
@if ($category['children']->count() > 0)
    <ul>
        @foreach($category['children'] as $category)
            @include('template_name', $category)
        @endforeach
    </ul>
@endif
