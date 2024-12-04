<x-layout>
<x-slot:title>{{$title}}</x-slot:title>



  <!-- <article class="py-8 max-w-screen-md border-gray-200">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-800">{{$post ['title']}}</h2>
    </a>
    <div class=" text-base text-gray-500">
      <a class ="hover:underline" href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> |
      <a href="/categories/{{$post->category->slug}}" class="hover:underline text-base text-gray-500">{{$post->category->name}}</a> |
      <span>{{ \Carbon\Carbon::parse($post['created_at'])->format('j F Y') }}</span> 
    </div>
      <p class="my-4 font-light">
        {{ $post ['body']}}
      </p>
      <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo;Kembali ke Blog </a>
 
  </article>
   -->

      <!-- 
Install the "flowbite-typography" NPM package to apply styles and format the article content: 

URL: https://flowbite.com/docs/components/typography/ 
-->

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
              <address class="flex items-center mb-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                      <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                      <div>
                          <a href="/authors/{{$post->author->username}}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white hover:underline">{{$post->author->name}}</a>
                          <a href="/categories/{{$post->category->slug}}">
                            <p class="text-base text-{{ $post->category->color}}-500 dark:text-gray-400 hover:underline">{{$post->category->name}}</p>
                          </a>
                          <span class="text-sm">{{ \Carbon\Carbon::parse($post['created_at'])->format('j F Y') }}</span>
                      </div>
                  </div>
              </address>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">Best practices for successful prototypes</h1>
          </header>
          
          <p>{{$post->body}}</p>
              <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo;Kembali ke Blog </a>
</article>
</div>
</main>
          </x-layout>
