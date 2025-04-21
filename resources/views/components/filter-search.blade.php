<div class="flex flex-col bg-white p-4 lg:p-5 shadow-md gap-2 lg:gap-5 w-full border-1 rounded-2xl">

    <form id="form-search" method="GET" action="{{ route('filter-space') }}"
        class="flex flex-col md:flex-row justify-center items-start md:items-center gap-4">
        {{-- Title --}}
        <div class="w-full md:w-1/2">
            <h1 class="font-bold text-custom-primary">Commercial Asets Finder</h1>
            <p>Find information in just a few clicks!</p>
        </div>

        <!-- City -->
        <div class="w-full md:w-1/2">
            <label for="area" class="block font-semibold">City</label>
            <input type="text" name="city" id="area" class="border p-2 w-full border-gray-300 rounded-lg"
                placeholder="eg. jakarta pusat" value="{{ request('city') }}">
        </div>

        <!-- Type -->
        <div class="w-full md:w-1/2">
            <label for="size" class="block font-semibold">Type</label>
            <select name="type" id="type" class="w-full border p-2 border-gray-300 rounded-lg">
                <option value="" selected>All Type</option>
                <option value="ruangan" {{ request('type') == 'ruangan' ? 'selected' : '' }}>Ruangan</option>
                <option value="lot indoor" {{ request('type') == 'lot indoor' ? 'selected' : '' }}>Lot Indoor</option>
                <option value="lot outdoor" {{ request('type') == 'lot outdoor' ? 'selected' : '' }}>Lot Outdoor</option>
                <option value="atm" {{ request('type') == 'atm' ? 'selected' : '' }}>ATM</option>
                <option value="lahan parkir" {{ request('type') == 'lahan parkir' ? 'selected' : '' }}>Lahan Parkir
                </option>
                <option value="selasar indoor" {{ request('type') == 'selasar indoor' ? 'selected' : '' }}>Selasar Indoor
                </option>
                <option value="selasar outdoor" {{ request('type') == 'selasar outdoor' ? 'selected' : '' }}>Selasar
                    Outdoor</option>
            </select>
        </div>

        <!-- Submit Button -->
        <div class="w-full md:w-[70px] flex text-center lg:items-end">
            <button type="submit" class="bg-custom-primary flex justify-center text-white px-4 py-2 rounded-lg w-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M9.5 3A6.5 6.5 0 0 1 16 9.5c0 1.61-.59 3.09-1.56 4.23l.27.27h.79l5 5l-1.5 1.5l-5-5v-.79l-.27-.27A6.52 6.52 0 0 1 9.5 16A6.5 6.5 0 0 1 3 9.5A6.5 6.5 0 0 1 9.5 3m0 2C7 5 5 7 5 9.5S7 14 9.5 14S14 12 14 9.5S12 5 9.5 5" />
                </svg>
            </button>
        </div>
    </form>
</div>