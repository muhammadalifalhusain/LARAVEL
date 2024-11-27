<x-layout>
<x-slot:title>{{$title}}</x-slot:title>



  <article class="py-8 max-w-screen-md border-gray-200">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-800">{{$post ['title']}}</h2>
    </a>
    <div class=" text-base text-gray-500">
      <a href="#">{{$post ['author']}}</a> | 
      <span>{{ \Carbon\Carbon::parse($post['created_at'])->format('j F Y') }}</span> 
    </div>
      <p class="my-4 font-light">
        {{ $post ['body']}}
      </p>
      <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo;Kembali ke Blog </a>
 
  </article>
  
</x-layout>