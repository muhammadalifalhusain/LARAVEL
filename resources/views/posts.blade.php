<x-layout>
<x-slot:title>{{$title}}</x-slot:title>

@foreach ($posts as $post)

  <article class="py-8 max-w-screen-md border-gray-200">
    <a href="/posts/{{$post ['id']}}" class = "hover:underline">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-800">{{$post ['title']}}</h2>
    </a>
    <div class=" text-base text-gray-500">
      <a href="#">{{$post ['author']}}</a> | 21 November 2024
    </div>
      <p class="my-4 font-light">
        {{ Str::limit($post ['body'],100)}}
      </p>
      <a href="/posts/{{$post ['id']}}" class="font-medium text-blue-500 hover:underline">ReadMore &raquo;</a>
 
  </article>
  @endforeach
</x-layout>