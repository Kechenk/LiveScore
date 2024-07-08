<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  {{-- <div class="mt-4">
    <a href="team"
      class="block max-w-sm p-6 bg-transparent border rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
      <h5 class="text-center mb-2 text-2xl font-bold tracking-tighter text-gray-900 dark:text-white">
        sianjing
      </h5>
    </a>
  </div>

  <div class="mt-4">
    <a href="team"
      class="block max-w-sm p-6 bg-transparent border rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
      <h5 class="text-center mb-2 text-2xl font-bold tracking-tighter text-gray-900 dark:text-white">
        sianjing
      </h5>
    </a>
  </div> --}}

  <div class="relative ">
    <div class="flex flex-col grow px-9 pt-11 pb-16 mx-auto w-1/2 bg-white rounded-md max-md:px-5 max-md:mt-6">
      <div class="flex gap-5 justify-between">
        <div class="flex flex-col text-lg font-medium">
          <div class="text-slate-800">Live Matches</div>
          <div class="flex gap-5 justify-center items-center mx-auto mt-10 text-gray-400 max-md:mt-10">
            <img loading="lazy"
              srcset="https://upload.wikimedia.org/wikipedia/commons/7/75/Logo_Japan_Karate_Association.png"
              class="mx-auto h-20" />
            <div class="mx-auto">3 : 2</div>
            <img loading="lazy"
              srcset="https://upload.wikimedia.org/wikipedia/commons/7/75/Logo_Japan_Karate_Association.png"
              class="mx-auto h-20" />
          </div>
        </div>
        <div class="flex flex-col">
          <div class="flex gap-1 self-end">
            <img loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/078bba4851e4970ce9d6e7dfb357d122bde79a06bfcf7e2e7e9124f413892c67?"
              class="shrink-0 w-full aspect-square" />
            <img loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/2e5620c9e070a20df41d5ec8852efb0deb1a113add4246d228af9a9315905d7b?"
              class="shrink-0 w-full aspect-square" />
          </div>
        </div>
      </div>
      <div class="mt-14 text-lg font-medium text-slate-800 max-md:mt-10">Teams</div>
      <div class="flex gap-5 justify-between mt-10">
        <div class="flex gap-4 text-lg text-gray-400">
          <img loading="lazy" srcset="..."
            class="shrink-0 rounded-full border border-gray-100 border-solid aspect-square w-[45px]" />
          <div class="my-auto">Tigers VI</div>
        </div>
        <div class="flex gap-2 my-auto text-sm text-green-500">
          <div class="grow">See Profile</div>
          <img loading="lazy"
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/77eb4046fa205febe4327b0a31b921f967aabc3bc3f6c9a37f51eeb40be2ae1c?"
            class="shrink-0 aspect-square w-[13px]" />
        </div>
      </div>
      <div class="flex gap-5 justify-between mt-6">
        <div class="flex flex-col text-lg text-gray-400">
          <div class="flex gap-4">
            <img loading="lazy" srcset="..."
              class="shrink-0 rounded-full border border-gray-100 border-solid aspect-square w-[45px]" />
            <div class="my-auto">Roger II</div>
          </div>
          <div class="flex gap-4 mt-6">
            <img loading="lazy" srcset="..."
              class="shrink-0 rounded-full border border-gray-100 border-solid aspect-square w-[45px]" />
            <div class="my-auto">Eagles NY</div>
          </div>
          <div class="flex gap-4 mt-6">
            <img loading="lazy" srcset="..."
              class="shrink-0 rounded-full border border-gray-100 border-solid aspect-square w-[45px]" />
            <div class="my-auto">NJ Super</div>
          </div>
          <div class="flex gap-4 mt-6">
            <img loading="lazy" srcset="..."
              class="shrink-0 rounded-full border border-gray-100 border-solid aspect-square w-[45px]" />
            <div class="my-auto">Tigers VI</div>
          </div>
          <div class="mt-12 text-lg font-medium text-slate-800 max-md:mt-10">
            Best Players
          </div>
          <div class="flex gap-4 mt-9">
            <img loading="lazy" srcset="..."
              class="shrink-0 rounded-full border border-gray-100 border-solid aspect-square w-[45px]" />
            <div class="my-auto">John Smith</div>
          </div>
          <div class="flex gap-4 mt-6 whitespace-nowrap">
            <img loading="lazy" srcset="..."
              class="shrink-0 rounded-full border border-gray-100 border-solid aspect-square w-[45px]" />
            <div class="my-auto">Bannet</div>
          </div>
          <div class="flex gap-4 mt-6 whitespace-nowrap">
            <img loading="lazy" srcset="..."
              class="shrink-0 rounded-full border border-gray-100 border-solid aspect-square w-[45px]" />
            <div class="my-auto">Trevor</div>
          </div>
        </div>
        <div class="flex flex-col my-auto max-md:hidden">
          <div class="flex flex-col items-start pl-5">
            <img loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/5dcf154c82f794a8ec687e06c7477b9efcdb25dbae327cf9325c39353959d9da?"
              class="w-5 aspect-square" />
            <img loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/6b11f350fd955107774817ba4d54b5690c075641f5f2477a25b606cf24ba3647?"
              class="mt-12 w-5 aspect-square max-md:mt-10" />
            <img loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/e2a88504f2834d3c9be7166c2bded110c9f01b46c1c5b5ccb499e9741a45d493?"
              class="mt-12 w-5 aspect-square max-md:mt-10" />
            <img loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/5dcf154c82f794a8ec687e06c7477b9efcdb25dbae327cf9325c39353959d9da?"
              class="mt-12 w-5 aspect-square max-md:mt-10" />
          </div>
          <div class="flex gap-2.5 mt-32 text-xs text-gray-400 whitespace-nowrap max-md:mt-10">
            <div>18</div>
            <img loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/b3ebb86151a74e8b88ec3ed78ba6165b07871e1de9dfc8ca12a7aa27c2d8bd7a?"
              class="shrink-0 w-3 aspect-square" />
          </div>
          <div class="flex gap-2.5 mt-14 text-xs text-gray-400 whitespace-nowrap max-md:mt-10">
            <div>15</div>
            <img loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/9a1e821d64624ef86793d07a6649d4e1aca4397b88556cda8fd571be934bc0bc?"
              class="shrink-0 w-3 aspect-square" />
          </div>
          <div class="flex gap-2.5 mt-14 text-xs text-gray-400 whitespace-nowrap max-md:mt-10">
            <div>13</div>
            <img loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/e4a1987dc34062d91ae66ef31d2dc4d9e1e551750fb995c3a5f88af00d619be6?"
              class="shrink-0 w-3 aspect-square" />
          </div>
        </div>
      </div>
    </div>


    <div class="overflow-hidden max-md:pl-5 max-md:max-w-full">
      <div class="flex gap-5 max-md:flex-col max-md:gap-0">
        <div class="flex flex-col w-[37%] max-md:ml-0 max-md:w-full">
          <div class="flex flex-col self-stretch my-auto text-white max-md:mt-10">
            <div class="text-4xl font-black">
              Weekly Football
              <br />
              Challenge
            </div>
            <div class="flex gap-3.5 mt-6 text-sm whitespace-nowrap max-md:pr-5">
              <img loading="lazy" srcset="..." class="shrink-0 rounded-full aspect-square w-[43px]" />
              <div class="my-auto">VS</div>
              <img loading="lazy" srcset="..." class="shrink-0 rounded-full aspect-square w-[43px]" />
            </div>
            <div class="flex gap-5 mt-5 text-lg font-medium">
              <div class="flex flex-col flex-1">
                <div class="flex gap-3">
                  <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/15d09842d77ffc917ac6be6627f0a40b3982fefb62b2de34d367243ef67f2f5f?"
                    class="shrink-0 w-6 aspect-square" />
                  <div class="my-auto">5:00 PM</div>
                </div>
                <img loading="lazy" srcset="..."
                  class="mt-4 rounded-full border border-white border-solid aspect-[2.86] w-[78px]" />
              </div>
              <div class="flex flex-1 gap-3 self-start whitespace-nowrap">
                <img loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/fb90ec83b05848351d015d39fffd85ef094402bc9dc27feab189cc42db75a82e?"
                  class="shrink-0 w-6 aspect-square" />
                <div class="my-auto">London</div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-col ml-5 w-[63%] max-md:ml-0 max-md:w-full">
          <div
            class="flex flex-col grow items-end px-16 pt-20 pb-8 mx-auto w-full text-lg font-medium text-green-800 bg-green-700 rounded-[1000px_5px_5px_0px] max-md:px-5 max-md:mt-10">
            <div class="flex gap-2 px-9 py-3 mt-44 bg-white rounded-[100px] max-md:px-5 max-md:mt-10">
              <div class="grow my-auto">Join Now</div>
              <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/abdbc197133d59a6db409e8b14129695b82c9837d86432bc70a2b319da4a8ef2?"
                class="shrink-0 w-6 aspect-square" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>



  {{-- <div class="mt-8">
    <a href="#"
      class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
      <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
        DAFTAR PESERTA
      </h5>
      <p class="font-normal text-gray-700 dark:text-gray-400"></p>
    </a>
  </div>
  <div class="mt-8">
    <a href="#"
      class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
      <h5 class="text-center mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
        DAFTAR PESERTA
      </h5>
      <p class="font-normal text-gray-700 dark:text-gray-400"></p>
    </a>
  </div> --}}
</x-layout>
