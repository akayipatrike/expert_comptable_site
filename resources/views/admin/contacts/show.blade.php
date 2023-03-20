<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="" enctype="multipart/form-data">

                      <div class="sm:col-span-6">
                        <label for="title" class="px-6 py-4 text-sm font-medium text-gray whitespace-nowrap dark:text-white"> Titre: </label>
                        <div class="px-6 py-4 text-sm font-medium text-gray whitespace-nowrap dark:text-white">
                          {{$contact->name}}
                        </div>
                        <label for="title" class="px-6 py-4 text-sm font-medium text-gray whitespace-nowrap dark:text-white"> Email: </label>
                        <div class="px-6 py-4 text-sm font-medium text-gray whitespace-nowrap dark:text-white">
                          {{$contact->email}}
                        </div>
                        <label for="title" class="px-6 py-4 text-sm font-medium text-gray whitespace-nowrap dark:text-white"> Telephone: </label>
                        <div class="px-6 py-4 text-sm font-medium text-gray whitespace-nowrap dark:text-white">
                          {{$contact->number}}
                        </div>
                        <label for="title" class="px-6 py-4 text-sm font-medium text-gray whitespace-nowrap dark:text-white"> Description: </label>
                        <div class="mt-1 px-6 text-sm text-gray font-medium  dark:text-white ">
                          {{$contact->description}}
                        </div>
                      </div>

                      </div>

                    </form>
                  </div>
            </div>

</x-admin-layout>

