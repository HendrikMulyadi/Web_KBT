<x-layouts.app>
    <div class="grid grid-cols-3 pt-20 pb-30">
       <div class="m-10 col-start-2 justify-items-center">
           <div class="bg-white p-8 justify-items-center rounded-lg shadow-lg border w-full max-w-md">
              <h2 class="text-3xl font-bold text-blue-600 mb-1">RenGo</h2>
              <p class="text-xl justify-items-start font-semibold text-gray-800 mb-6">Login</p>

        <form>
           <input type="email" placeholder="Email address" class="w-full p-3 mb-4 border border-gray-300 rounded" />
           <input type="password" placeholder="Password" class="w-full p-3 mb-4 border border-gray-300 rounded" />

             <div class="flex items-center justify-between mb-6">
             <label class="flex items-center text-sm text-gray-600">
               <input type="checkbox" class="mr-2" /> Remember me
             </label>
             <a href="#" class="text-sm text-blue-600 hover:underline">Forgot Password</a>
             </div>
            <div class="grid grid-cols-3 ">
                <div class="col-start-1 "><button type="batal" class=" w-full  bg-gray-800 hover:bg-blue-600 text-white py-3 rounded">Batal</button></div>
                <div class="col-start-3 "><button type="login" class="w-full  bg-gray-800 hover:bg-blue-600 text-white py-3 rounded">Masuk</button></div>
            </div>


            <p class="mt-4 text-center text-sm text-gray-600">
                  Don’t have an Account? <a href={} class="text-blue-600 hover:underline">Sign Up</a>
            </p>
         </form>
     </div>
    </div>
    </div>

</x-layouts.app>
