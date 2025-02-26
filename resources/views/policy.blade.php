<x-guest-layout>
    <div class="pt-4 bg-green-100">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-authentication-card-logo />
            </div>

            <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose text-green-800">
                {!! $policy !!}
            </div>
        </div>
    </div>
</x-guest-layout>

