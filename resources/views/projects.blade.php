<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="mt-8">
    <h2 class="font-bold text-xl">Daftar Karateka</h2>
    <table class="min-w-full bg-white">
      <thead class="bg-gray-200">
        <tr>
          <th class="py-2 px-4">Name</th>
          <th class="py-2 px-4">Age</th>
          <th class="py-2 px-4">Belt</th>
          <th class="py-2 px-4">Sex</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($karatekas as $karateka)
          <tr>
            <td class="border py-2 px-4">{{ $karateka->name }}</td>
            <td class="border py-2 px-4">{{ $karateka->age }}</td>
            <td class="border py-2 px-4">{{ $karateka->belt }}</td>
            <td class="border py-2 px-4">{{ $karateka->sex }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</x-layout>
