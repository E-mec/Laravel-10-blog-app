<?php
/**        @var $posts \illuminate\Pagination\LengthAwarePaginator */
?>


<x-app-layout >
    <section class="w-full md:w-2/3 px-3">


        <div class="flex flex-col">
            @foreach ($posts as $post )
                <div class="">
                    <a href="{{ route('view', $post) }}">
                        <h2 class="text-blue-500 font-bold text-lg sm:text-xl mb-2">
                            {!! str_replace(request()->get('q'), '<span class="bg-yellow-400">' . request()->get('q'). '</span>', $post->title) !!}
                        </h2>
                    </a>

                    <div class="">
                        {{ $post->shortBody() }}
                    </div>
                </div>

                <hr class="my-4">
            @endforeach
        </div>


        {{ $posts->onEachSide(1)->links() }}
        <!-- Pagination -->


    </section>

    <x-sidebar/>

</x-app-layout>


