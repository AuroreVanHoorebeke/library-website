<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit book info (#{{ $book->id }})
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h3>Lorem50</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid amet, assumenda autem
                    corporis dolore dolorem ducimus enim et eveniet, expedita fugiat illum laborum minima necessitatibus
                    numquam possimus quod quos repellat repudiandae saepe sint vitae! Ab amet dolorem ea, est et minima.
                    Aspernatur autem consequuntur cupiditate illum, impedit obcaecati possimus.</p>
            </div>
        </div>
    </div>
    {{--<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('books.update', $book->id) }}" method="post">

                    @csrf
                    @method('POST')

                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{ $book->title }}">

                    <label for="author">Author</label>
                    <input type="text" name="author" value="{{ $book->author }}">

                    <label for="genre">Genre</label>
                    <input type="text" name="genre" value="{{ $book->genre }}">

                    <label for="quantity">Quantity</label>
                    <input type="text" name="quantity" value="{{ $book->quantity }}">

                    <input type="submit" value="Save Changes">

                </form>

            </div>
        </div>
    </div>--}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('books.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border
                border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest
                hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900
                focus:shadow-outline-gray transition ease-in-out duration-150">Back to Library</a>

                <form action="{{ route('books.store') }}" method="post">
                    @csrf
                    @method('POST')

                    <section class="text-gray-700 body-font">
                        <div class="container px-8 pt-24 pb-24 mx-auto lg:px-4">

                            <div
                                class="flex flex-col w-full p-8 mx-auto mt-10 border rounded-lg lg:w-2/6 md:w-1/2 md:ml-auto md:mt-0">
                                <div class="relative ">
                                    <label for="title" class="text-sm leading-7 text-gray-600">Title</label>
                                    <input type="text" id="title" name="title"
                                           class="w-full px-4 py-2 mb-4 mr-4 text-base text-blue-700 bg-gray-100
                                           border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:ring-0"
                                           value="{{ $book->title }}">
                                </div>

                                <div class="relative ">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Author</label>
                                    <input type="text" id="author" name="author"
                                           class="w-full px-4 py-2 mb-4 mr-4 text-base text-blue-700 bg-gray-100
                                           border-transparent rounded-lg focus:border-gray-500 focus:bg-white
                                           focus:ring-0" value="{{ $book->author }}">
                                </div>

                                <div class="relative ">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Genre</label>
                                    <input type="text" id="genre" name="genre"
                                           class="w-full px-4 py-2 mb-4 mr-4 text-base text-blue-700 bg-gray-100
                                           border-transparent rounded-lg focus:border-gray-500 focus:bg-white
                                           focus:ring-0" value="{{ $book->genre }}">
                                </div>

                                <div class="relative ">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Quantity</label>
                                    <input type="text" id="quantity" name="quantity" class="w-full px-4 py-2 mb-4 mr-4 text-base
                    text-blue-700 bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white
                    focus:ring-0" value="{{ $book->quantity }}">
                                </div>

                                <input type="submit" class="px-8 py-2 font-semibold text-white transition duration-500 ease-in-out
                transform
                rounded-lg shadow-xl bg-gradient-to-r from-blue-700 hover:from-blue-600 to-blue-600 hover:to-blue-700
                 focus:ring focus:outline-none" value="Save Change">
                            </div>
                        </div>
                </form>
                </section>

            </div>
        </div>
    </div>

</x-app-layout>
