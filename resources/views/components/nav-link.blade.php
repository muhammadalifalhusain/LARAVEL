@props(['href'])

<a href="{{ $href }}" 
   @class([
       'rounded-md px-3 py-2 text-sm font-medium',
       'bg-gray-900 text-white' => request()->is(ltrim($href, '/')),
       'text-gray-300 hover:bg-gray-700 hover:text-white' => !request()->is(ltrim($href, '/'))
   ])>
   {{ $slot }}
</a>
