<x-layout>
<x-slot:title>{{$title}}</x-slot:title>

@foreach ($posts as $post)

  <article class="py-8 max-w-screen-md border-gray-200">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-800">{{$post ['title']}}</h2>
    <div class=" text-base text-gray-500">
      <a href="#">{{$post ['author']}}</a> | 21 November 2024
    </div>
      <p class="my-4 font-light">
        {{$post ['body']}}
      </p>
      <a href="#" class="font-medium text-blue-500 hover:underline">ReadMore &raquo;</a>
 
  </article>
  @endforeach
</x-layout>