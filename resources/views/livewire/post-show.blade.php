<section>
  <!--Title-->
  <div class="text-center pt-16 md:pt-32">
    <h1 class="font-bold break-normal text-3xl md:text-5xl text-blue-300">{{ $post->title }}</h1>
    <p class="text-sm md:text-base text-green-500 font-bold">{{ $post->created_at }} <span class="text-gray-900">/</span> Created</p>
  </div>
  <!--image-->
  <img class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded" src="{{ asset('storage/photos/'. $post->image) }}" />
  <!--Container-->
  <div class="container max-w-5xl mx-auto mt-8">
    <div class="mx-0 sm:mx-6">
      <div class="bg-white dark:bg-gray-600 rounded-lg dark:text-gray-200 w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal" style="font-family:Georgia,serif;">
        <!--Post Content-->
        {{ $post->body }}
        <!--/ Post Content-->
      </div>
    </div>
  </div>
</section>
