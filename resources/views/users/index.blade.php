<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h3>Lorem50</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid amet, assumenda autem
                    corporis dolore dolorem ducimus enim et eveniet, expedita fugiat illum laborum minima
                    necessitatibus numquam possimus quod quos repellat repudiandae saepe sint vitae! Ab amet dolorem
                    ea, est et minima. Aspernatur autem consequuntur cupiditate illum, impedit obcaecati possimus.
                    </p>
            </div>
        </div>
    </div>


    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col py-12">
        <div class="{{---my-2 overflow-x-auto sm:-mx-6 lg:-mx-8--}} max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 sm:rounded-lg shadow-xl">

                    <a href="{{ route('users.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800
                    border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest
                    hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900
                    focus:shadow-outline-gray transition ease-in-out duration-150">Add User</a>

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Id
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Books
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Roles
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                        @foreach($users as $user)
                        <tr>
                            <td class="px-6 py-3">{{ $user->id }}</td>
                            <td class="px-6 py-3">{{ $user->name }}</td>
                            <td class="px-6 py-3">{{ $user->email }}</td><td class="px-6 py-3">amount borrowed</td><td
                                class="px-6 py-3">{{ $user->roles}}</td>
                            <td>
                                <a href="{{ route('users.show', $user->id) }}" class="text-indigo-600
                                hover:text-indigo-900 mb-2 mr-2">Display</a>
                                <a href="{{ route('users.edit', $user->id) }}" class="text-green-600
                                hover:text-green-900 mb-2 mr-2">Edit</a>
                                <form class="inline-block" action="{{ route('users.destroy', $user->id) }}"
                                      method="POST" onsubmit="return confirm('Are you sure you want to delete {{
                                      $user->name }} from the list?');">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="text-red-600 bg-transparent hover:text-red-900
                                    mb-2 mr-2"
                                           value="Delete">
                                </form>
                            </td>
                        </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
