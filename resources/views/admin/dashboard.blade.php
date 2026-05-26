<div class="bg-white rounded-2xl shadow p-6">

    <h2 class="text-2xl font-bold mb-6">
        Latest Services
    </h2>

    <div class="space-y-4">

        @foreach($latestServices as $service)

            <div class="flex items-center justify-between border-b pb-4">

                <div>

                    <h3 class="font-semibold">
                        {{ $service->title }}
                    </h3>

                    <p class="text-gray-500 text-sm">
                        {{ $service->created_at->diffForHumans() }}
                    </p>

                </div>

                <span class="font-bold">
                    ${{ $service->price ?? 'N/A' }}
                </span>

            </div>

        @endforeach

    </div>

</div>
