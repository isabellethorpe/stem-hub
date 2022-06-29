<!-- Comma seperated value list -->
@props(['tagsCsv'])

@php
// turning comma seperated value list into array into variable
    $tags = explode(',', $tagsCsv);
@endphp

<!-- pass in query param tag and set to tag -->
<ul class="flex">
    @foreach($tags as $tag)
    <li
        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
        <a href="/?tag={{$tag}}">{{$tag}}</a>
    </li>
    @endforeach
</ul>