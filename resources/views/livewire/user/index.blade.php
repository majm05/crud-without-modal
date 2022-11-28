<div class="max-w-7xl mx-auto p-6 shadow-2xl rounded-lg mt-4">

    <div class="justify-center my-4 select-none flex">
        <button wire:click.prevent="add()"
            class="py-2 px-4 shadow-md no-underline rounded-full bg-green-500 text-white font-sans font-semibold text-sm border-blue btn-primary hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2">Nuevo Usuario</button>
    </div>

    <table class="w-full">
        <thead>
            <tr class="bg-gradient-to-r from-indigo-600 to-purple-600">
            <th class="px-16 py-2">
                <span class="text-gray-100 font-semibold">Name</span>
            </th>
            <th class="px-16 py-2">
                <span class="text-gray-100 font-semibold">Last Name</span>
            </th>

            <th class="px-16 py-2">
                <span class="text-gray-100 font-semibold">Email</span>
            </th>

            <th class="px-16 py-2">
                <span class="text-gray-100 font-semibold">Date</span>
            </th>

            <th class="px-16 py-2">
                <span class="text-gray-100 font-semibold">Edit</span>
            </th>
            </tr>
        </thead>

        <tbody class="bg-gray-200">

            @forelse ($response as $value)
                <tr class="bg-white border-b-2 border-gray-200">
                    <td>
                        <span class="text-center ml-2 font-semibold">{{$value->name}}</span>
                    </td>

                    <td class="px-16 py-2">
                        <span>{{$value->last_name}}</span>
                    </td>

                    <td class="px-16 py-2">
                        <span>{{$value->email}}</span>
                    </td>

                    <td class="px-16 py-2">
                        <span>05/06/2020</span>
                    </td>

                    <td class="px-16 py-2">
                        <button wire:click.prevent="edit({{ $value->id }})"
                        class="py-2 px-4 shadow-md no-underline rounded-full bg-blue-400 text-white font-sans font-semibold text-sm border-blue btn-primary hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2">edit</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">
                        <div class="flex items-center justify-center py-10">
                            <span class="text-xl text-gray-400">{{$message}} not Found</span>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt2 h-20 mx-auto ">&nbsp;

    {{ $response->links() }}

    </div>
  </div>
