<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  @if (session('success'))
    <div class="bg-green-500 text-white p-2 rounded mb-4">
      {{ session('success') }}
    </div>
  @endif

  <form method="POST" action="/team">
    @csrf

    <div x-data="{ open: true }">
      <div @click="open = !open" class="cursor-pointer bg-gray-200 p-2 rounded w-1/2">
        <h2 class="font-bold text-xl">Informasi Pribadi</h2>
      </div>
      <div x-show="open" class="mt-4">
        <div class="mt-4">
          <x-input-label for="name" :value="__('Name')" />
          <x-text-input id="name"
            class="shadow appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
          <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="mt-4">
          <x-input-label for="age" :value="__('Usia')" />
          <x-text-input id="age"
            class="shadow appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            type="text" name="age" :value="old('age')" required autofocus autocomplete="age" />
          <x-input-error :messages="$errors->get('age')" class="mt-2" />
        </div>
        
        <div class="mt-4">
          <x-input-label for="belt" :value="__('Sabuk')" />
          <select id="belt" name="belt" class=" py-2 px-3 items-center block mt-1 w-max h-9" required autofocus>
            <option value="Putih" {{ old('belt') == 'Putih' ? 'selected' : '' }}>Putih</option>
            <option value="Kuning" {{ old('belt') == 'Kuning' ? 'selected' : '' }}>Kuning</option>
            <option value="Orange" {{ old('belt') == 'Orange' ? 'selected' : '' }}>Orange</option>
            <option value="Hijau" {{ old('belt') == 'Hijau' ? 'selected' : '' }}>Hijau</option>
            <option value="Biru" {{ old('belt') == 'Biru' ? 'selected' : '' }}>Biru</option>
            <option value="Coklat" {{ old('belt') == 'Coklat' ? 'selected' : '' }}>Coklat</option>
            <option value="Hitam" {{ old('belt') == 'Hitam' ? 'selected' : '' }}>Hitam</option>
          </select>
          <x-input-error :messages="$errors->get('belt')" class="mt-2" />
        </div>

        <div class="mt-4">
          <x-input-label for="dojo" :value="__('Dojo')" />
          <select id="dojo" name="dojo" class=" py-2 px-3 items-center block mt-1 w-max h-9" required autofocus>
            <option value="Meriam Bosok" {{ old('belt') == 'Meriam Bosok' ? 'selected' : '' }}>Meriam Bosok</option>
            <option value="Meriam Bosok" {{ old('belt') == 'Meriam Bosok' ? 'selected' : '' }}>Meriam Tempur</option>
          </select>
          <x-input-error :messages="$errors->get('dojo')" class="mt-2" />
        </div>

        <div class="mt-4">
          <x-input-label for="sex" :value="__('Jenis Kelamin')" />
          <select id="sex" name="sex" class="py-2 px-3 *:block mt-1 w-max h-9" required autofocus>
            <option value="Laki-Laki" {{ old('sex') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
            <option value="Perempuan" {{ old('sex') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
          </select>
          <x-input-error :messages="$errors->get('sex')" class="mt-2" />
        </div>
        <button type="submit"
          class="mt-4 bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
          Submit
        </button>
      </div>
    </div>
  </form>
</x-layout>
