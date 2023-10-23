<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    <div class="w-4/5 mx-auto">
        <div class="text-center ">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Add new post
            </h2>
            <hr class="border border-1 border-gray-300 mt-10">
        </div>

        <div class="m-auto ">
            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf
                {{-- <label for="is_published" class="text-gray-500 text-2xl">
                    Is Published
                </label>
                <input type="checkbox" class="text-gray-500 text-2xl"
                    name="is_published">



                <input type="text" name="title" placeholder="Title..."
                    class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

                <input type="text" name="excerpt" placeholder="Excerpt..."
                    class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

                <input type="number" name="min_to_read" placeholder="Minutes to read..."
                    class="bg-transparent block border-b-2 w-full h-20 text-2xl outline-none">

                <textarea name="body" placeholder="Body..."
                    class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

                <div class="bg-grey-lighter py-10">
                    <label
                        class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                        <span class="mt-2 text-base leading-normal">
                            Select a file
                        </span>
                        <input type="file" name="image" class="hidden">
                    </label>
                </div>

                <button type="submit"
                    class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                    Submit Post
                </button> --}}


                <section class="bg-white dark:bg-gray-900">
                    <div class="py-8 lg:py-16 px-4 mx-auto ">

                            <div>
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                                    Title</label>
                                <input type="title" name="title"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                                    placeholder="Title" required>
                            </div>
                            <div>
                                <label for="excerpt"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Excerpt</label>
                                <input type="text" name="excerpt"
                                    class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                                    placeholder="Let us know how we can help you" required>
                            </div>
                            <div class="sm:col-span-2 pb-5">
                                <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your
                                    Body</label>
                                <textarea name="body" rows="6"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Leave a comment..."></textarea>
                            </div>
                            <button type="submit"
                                class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send
                                message</button>

                    </div>
                </section>
            </form>
        </div>



    </body>

</html>
