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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid amet, assumenda autem corporis dolore dolorem ducimus enim et eveniet, expedita fugiat illum laborum minima necessitatibus numquam possimus quod quos repellat repudiandae saepe sint vitae! Ab amet dolorem ea, est et minima. Aspernatur autem consequuntur cupiditate illum, impedit obcaecati possimus.</p>
            </div>
        </div>
    </div>
    <div class="py-12">
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
    </div>

</x-app-layout>
