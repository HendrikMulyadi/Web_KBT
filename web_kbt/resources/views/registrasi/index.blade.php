
<x-layouts.app>

<div class="grid grid-cols-3 pt-20 pb-30">
       <div class="m-10 col-start-2 justify-items-center">
           <div class="bg-white p-8 justify-items-center rounded-lg shadow-lg border w-full max-w-md">
              <h2 class="text-3xl font-bold text-blue-600 mb-1">RenGo</h2>
              <p class="text-xl justify-items-start font-semibold text-gray-800 mb-6">Registrasi</p>
    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
        <strong class="font-bold">Ada kesalahan!</strong>
        <ul class="mt-2 list-disc list-inside text-sm">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{route('registrasi.store')}}" method="POST">
        @csrf
        @error('name')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
           <input type="text" name="name" placeholder="Username" value="{{old('name')}}"  class="w-full p-3 mb-4 border border-gray-300 rounded" />
        @error('email')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
           <input type="text" name="email" placeholder="Email address" value="{{old('email')}}" class="w-full p-3 mb-4 border border-gray-300 rounded" />
        @error('password')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
           <input type="password" name="password" placeholder="Password" value="{{old('password')}}"  class="w-full p-3 mb-4 border border-gray-300 rounded" />

      <div class="grid grid-cols-3 ">
         <div class="col-start-1 "><button type="batal" class=" w-full  bg-gray-800 hover:bg-blue-600 text-white py-3 rounded">Batal</button></div>
         <div class="col-start-3 "><button type="submit" class="w-full  bg-gray-800 hover:bg-blue-600 text-white py-3 rounded">Registrasi</button></div>
     </div>

      <p class="mt-4 text-center text-sm text-gray-600">
        Already have an Account? <a href="login.html" class="text-blue-600 hover:underline">Login</a>
      </p>
    </form>
  </div>
</div>
</div>
</x-layouts.app>
