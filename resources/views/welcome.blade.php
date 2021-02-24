    @extends('layouts.app')

    @section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

        <div class="content">
            <img src="/img/pizza-house.png" alt="">
            <div class="title m-b md">
                The North's Best Pizzas
            </div>
            <p class="mssg">{{ session('mssg') }}</p>
            <a href="/pizzas/create">Order a Pizza</a>
        </div>
    </div>
    @endsection