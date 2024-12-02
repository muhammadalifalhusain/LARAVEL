<x-layout>
<x-slot:title>{{$title}}</x-slot:title>

@foreach ($posts as $post)

  <article class="py-8 max-w-screen-md border-gray-200">
    <a href="/posts/{{$post ['slug']}}" class = "hover:underline">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-800">{{$post ['title']}}</h2>
    </a>
    <div class=" text-base text-gray-500 ">
      <a class ="hover:underline" href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> |
      <a href="/categories/{{$post->category->slug}}" class="hover:underline text-base text-gray-500">{{$post->category->name}}</a> |
      <span>{{ \Carbon\Carbon::parse($post['created_at'])->format('j F Y') }}</span> 
    </div>
      <p class="my-4 font-light">
        {{ Str::limit($post ['body'],150)}}
      </p>
      <a href="/posts/{{$post ['slug']}}" class="font-medium text-blue-500 hover:underline">ReadMore &raquo;</a>
 
  </article>
  @endforeach
</x-layout>