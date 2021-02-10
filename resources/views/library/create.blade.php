<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a book to the library') }}
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
                <form action="{{ route('books.store') }}" method="post">
                    @csrf
                    @method('POST')

                    <label for="title">Title</label>
                    <input type="text" name="title">

                    <label for="author">Author</label>
                    <input type="text" name="author">

                    <label for="genre">Genre</label>
                    <input type="text" name="genre">

                    <label for="quantity">Quantity</label>
                    <input type="text" name="quantity">

                    <input type="submit" value="Create">


                </form>
                {{--<a href="{{ route('books.create')}}">Add book</a>

                <table>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Genre</th>
                        <th>Quantity</th>
                        <th>Display</th>
                        <th>Edit</th>
                    </tr>
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->genre }}</td>
                            <td>{{ $book->quantity }}</td>
                            <td><a href="{{ route('books.show', $book->id) }}">Display</a></td>
                            <td><a href="{{ route('books.edit', $book->id) }}">Edit</a></td>
                        </tr>
                    @endforeach
                </table>--}}
            </div>
        </div>
    </div>
</x-app-layout>
