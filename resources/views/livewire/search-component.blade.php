<div>
    <div class="mb-4">
        <input wire:model.live.debounce.50ms="search" type="text" placeholder="Search products..."
            class="focus:ring-blue-500 w-full rounded-lg border px-4 py-2 focus:outline-none focus:ring-2" />
    </div>

    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 md:grid-cols-2">
        @forelse($searchResults as $result)
            <div class="transform rounded-lg bg-white p-4 shadow transition duration-300 ease-in-out hover:scale-105">
                <h3 class="text-lg font-semibold">{{ $result->name }}</h3>
                <p class="text-gray-600">{{ $result->education }}</p>
                <p class="text-gray-600">{{ $result->country }}</p>
            </div>
        @empty
            <div class="rounded-lg bg-white p-4 text-center shadow">No products found.</div>
        @endforelse
        <!-- Pagination links -->
        <div class="mt-3">
            {{ $searchResults->links() }}
        </div>
    </div>
</div>
