
<div class="flex flex-wrap  w-full content-center justify-center bg-gray-200 py-10">

    <div class="flex shadow-md">


      <div class="grid overflow-hidden sm grid-cols-2 gap-4 bg-white">
        <div class="box p-4">

          <h2 class="text-xl font-semibold">Usuario | {{$actionForm}}</h2>

          <!-- Form -->
          <form wire:submit.prevent="store"  class="p-8 pb-4">

            <div class="mb-3">
                <label class="mb-2 block text-xs font-semibold">Nombres</label>
                <input wire:model="name"
                type="text" placeholder="Enter your name" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
            </div>

            <div class="mb-3">
                <label class="mb-2 block text-xs font-semibold">Apellidos</label>
                <input  wire:model="lastName"
                type="text" placeholder="Enter your lastname" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
            </div>

            <div class="mb-3">
              <label class="mb-2 block text-xs font-semibold">Email</label>
              <input  wire:model="email"
              type="email" placeholder="Enter your email" class="block w-full rounded-md border border-gray-300 focus:border-purple-700 focus:outline-none focus:ring-1 focus:ring-purple-700 py-1 px-1.5 text-gray-500" />
            </div>


            <div class="mb-3">
                <button wire:click.prevent="store()"
                class="mb-1.5 block w-full text-center text-white bg-purple-700 hover:bg-purple-900 px-2 py-1.5 rounded-md">
                @if($actionForm == "Creando...")
                    Crear
                @else
                    Actualizar
                @endif
            </button>
            </div>
          </form>
        </div>

        <div class="box">
            <div class="flex flex-wrap content-center justify-center rounded-r-md">
                <img class="bg-center bg-no-repeat bg-cover rounded-r-md"
                    src="https://img-free.b-cdn.net/assets/person/business-woman-001.png">
            </div>
        </div>
      </div>

    </div>

  </div>
