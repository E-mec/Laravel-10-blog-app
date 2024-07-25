<?php
/**        @var $posts \illuminate\Pagination\LengthAwarePaginator */
?>


<x-app-layout :meta-title="'Exxon Blog - Posts by category ' . $category->title" meta-description="By Category Description">
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        @foreach ($posts as $post )
            <x-post-item :post="$post"></x-post-item>
        @endforeach


        {{ $posts->onEachSide(1)->links() }}
        <!-- Pagination -->


    </section>

    <x-sidebar/>

</x-app-layout>


