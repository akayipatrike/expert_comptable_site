<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
               <a href="{{route('admin.posts.create')}}" class="px-2 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Creer Un Post</a>
            </div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Titre
                </th>
                <th scope="col" class="px-6 py-3 ">
                Image
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                Date
                </th>
                <th scope="col" class="relative px-6 py-3">
                    Action
                <span class="sr-only"></span>
                </th>
            </tr>
        </thead>

    <tbody>
        @foreach ($posts as $post )
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 text-sm font-medium text-gray whitespace-nowrap dark:text-white">
                            {{$post->title}}
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img height="300" width="150" src="{{ Storage::url( $post->image )}}" class="w-16 h-16 rounded">
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white text-justify">
                            {{$post->created_at->format('d M Y')}}
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex space-x-2">
                            <a href="{{ route('admin.posts.edit',$post->id)}}" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">
                                <button>
                                    Editer
                                </button>

                            </a>
                                <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                         method="POST"
                                         action="{{ route('admin.posts.destroy',$post->id)}}"
                                         onsubmit="return confirm('Etez-vous sur!!!');">
                                         @csrf
                                         @method('DELETE')

                                            <button type="submit">
                                               Supprimer
                                            </button>
                               </form>
                            </div>
                        </td>

                    </tr>

             @endforeach
    </tbody>
    </table>
    </div>

        </div>
    </div>
</x-admin-layout>
