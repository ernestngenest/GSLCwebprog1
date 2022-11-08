@props(['tagsCSV'])
{{-- props digunakan untuk passing data lewat component  --}}

@php
    //sekarang kan data di tags itu di data base itu bentukan nya kek ada koma koma gitu {laravel,api,backend} nah kita harus pisahin 
    //datanya pake explode() dan abis itu masukin ke variable temp 

    $tags =  explode(',' , $tagsCSV);
@endphp

<ul class="flex">
    @foreach ($tags as $tag)    
        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            {{-- karena tag nya mau kita click dan  kita bisa filter makanya kita harus kasi query param di href --}}
            <a href="/?tag={{ $tag }}">{{ $tag }}</a>
    {{-- setting param ^ trus  dia bakal scan tag --}}
    {{-- /?tag berguna untuk menampung sebuah tag(value) nanti pas request di url  --}}
        </li>
    @endforeach
</ul>