<x-app-layout>
  <x-slot name="header">
    <h2 class="font-black uppercase text-3xl text-gray-800 leading-tight pt-10">
      Products
    </h2>
    @if (Auth::user()->isAdmin())
      <a href="{{ route('products.create') }}"
        class="my-2 inline-block rounded border border-gray-300 px-4 py-1 font-black transition-all duration-200 hover:bg-primary  hover:text-white">
        Create Product
      </a>
    @endif
  </x-slot>

  <div>
    <div class="max-w-7xl mx-auto p-6 sm:px-6 lg:px-8">
      <div class=" overflow-hidden shadow-md sm:rounded-lg sm:mx-auto">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-white uppercase bg-gray-600">
              <tr class="*:font-bold">
                <th scope="col" class="px-6 py-3">Code</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Ammount</th>
                <th scope="col" class="px-6 py-3">Unit</th>
                <th scope="col" class="px-6 py-3">Price</th>
                @if (Auth::user()->isAdmin())
                  <th scope="col" class="px-6 py-3">Actions</th>
                @endif
              </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 ">
              @foreach ($products as $product)
                <tr class="text-gray-800 border border-gray-200">
                  <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-gray-900 ">
                    {{ $product->code }}
                  </td>
                  <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-gray-900 ">
                    {{ $product->name }}
                  </td>
                  <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-gray-900 ">
                    {{ $product->ammount }}
                  </td>
                  <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-gray-900 ">
                    {{ $product->unit }}
                  </td>
                  <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-gray-900 ">
                    {{ $product->price }}
                  </td>
                  @if (Auth::user()->isAdmin())
                    <th class="flex justify-center items-center gap-1 py-2">
                      <a href="{{ route('products.edit', $product) }}"
                        class="rounded-lg bg-blue-500 py-1.5 pr-1 pl-1.5 inline-block hover:scale-125 hover:mr-1">
                        <svg class="h-[20px] w-[20px] text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                          width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                          <path fill-rule="evenodd"
                            d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z"
                            clip-rule="evenodd" />
                          <path fill-rule="evenodd"
                            d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
                            clip-rule="evenodd" />
                        </svg>
                      </a>
                      <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="rounded-lg bg-red-800 px-2 py-1.5  hover:scale-125 hover:ml-1"
                          onclick="return confirm('¿Estás seguro de eliminar este producto?')">
                          <svg class="h-[20px] w-[20px]  text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                              d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                              clip-rule="evenodd" />
                          </svg>
                        </button>
                      </form>
                    </th>
                  @endif
                </tr>
              @endforeach
            </tbody>

          </table>
        </div>
      </div>
      <div class="py-5">
        {{ $products->links() }}
      </div>
    </div>
  </div>
</x-app-layout>
