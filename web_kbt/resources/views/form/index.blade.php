<x-layouts.app>
  <body class="bg-gray-50 text-gray-800">
    <div class="max-w-7xl mx-auto p-6">
    <div class="lg:col-span-2 space-y-8">
      <div class="justify-items-center"><h1 class="font-bold text-[80px] justify-center">RENTAL MOBIL RENGO</h1></div>
      <section>
        <h2 class="section-title">Alamat Email </h2>
        <input type="email" placeholder=" Masukkan Alamat Email " class="input-field" />
        <h2 class="section-title mt-2">No Telphone </h2>
        <input type="nohp" placeholder=" Masukkan No Telphone " class="input-field" />
      </section>
      <section>
        <h2 class="section-title">Identitas</h2>
           <input type="text" placeholder="Masukkan Nama Lengkap" class="input-field" />
           <input type="date" placeholder="Masukkan Tanggal Lahir" class="input-field mt-2" />
           <input type="text" placeholder="Alamat Lengkap" class="input-field mt-2" />
        <h2 class="section-title mt-3">Waktu Booking</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2">
                <input type="date" placeholder="Waktu Mulai" class="input-field" />
            </div>
            <div class="flex items-start">
                <label><input class="h-5 w-5 m-5 text-purple-600 border-black-500 rounded" type="checkbox" name="12jam" value="12 Jam"> 12 Jam</label>
                <label><input class="h-5 w-5 m-5 text-purple-600 border-black-500 rounded" type="checkbox" name="1hari" value="1 Hari"> 1 Hari</label>
                <label><input class="h-5 w-5 m-5 text-purple-600 border-black-500 rounded" type="checkbox" name="2hari" value="2 Hari"> 2 Hari</label>
                <label><input class="h-5 w-5 m-5 text-purple-600 border-black-500 rounded" type="checkbox" name="2hari" value="3 Hari"> 3 Hari</label>
                <label><input class="h-5 w-5 m-5 text-purple-600 border-black-500 rounded" type="checkbox" name="2hari" value="4 Hari"> 4 Hari</label>
                <label><input class="h-5 w-5 m-5 text-purple-600 border-black-500 rounded" type="checkbox" name="2hari" value="5 Hari"> 5 Hari</label>
                <label><input class="h-5 w-5 m-5 text-purple-600 border-black-500 rounded" type="checkbox" name="2hari" value="6 Hari"> 6 Hari</label>
                <label><input class="h-5 w-5 m-5 text-purple-600 border-black-500 rounded" type="checkbox" name="2hari" value="1 Minggu"> 1 Minggu</label>
            </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2">
          <input type="text" placeholder="State/Province" class="input-field" />
          <input type="text" placeholder="Postal code" class="input-field" />
        </div>
        <input type="text" placeholder="Phone" class="input-field mt-2" />
      </section>

      <!-- Delivery Method -->
      <section>
        <h2 class="section-title">Delivery Method</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div class="delivery-card active">
            <p class="font-medium">Standard</p>
            <p class="text-sm text-gray-500">4–10 business days</p>
            <p class="mt-2 font-semibold">$5.00</p>
          </div>
          <div class="delivery-card">
            <p class="font-medium">Express</p>
            <p class="text-sm text-gray-500">2–5 business days</p>
            <p class="mt-2 font-semibold">$16.00</p>
          </div>
        </div>
      </section>
    </div>

    <!-- Right Column -->
    <aside class="order-summary">
      <h2 class="text-lg font-semibold mb-4">Order Summary</h2>

      <div class="space-y-4 border-b border-gray-200 pb-4">
        <div class="product-item">
          <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-product-01.jpg" class="product-image" />
          <div>
            <p class="text-sm font-medium">Basic Tee</p>
            <p class="text-sm text-gray-500">Black, Large</p>
          </div>
          <p>$32.00</p>
        </div>
        <div class="product-item">
          <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-product-02.jpg" class="product-image" />
          <div>
            <p class="text-sm font-medium">Basic Tee</p>
            <p class="text-sm text-gray-500">Sienna, Large</p>
          </div>
          <p>$32.00</p>
        </div>
      </div>

      <div class="text-sm space-y-2 mt-4">
        <div class="flex justify-between"><span>Subtotal</span><span>$64.00</span></div>
        <div class="flex justify-between"><span>Shipping</span><span>$5.00</span></div>
        <div class="flex justify-between"><span>Taxes</span><span>$5.52</span></div>
        <div class="flex justify-between font-semibold border-t pt-2">
          <span>Total</span><span>$75.52</span>
        </div>
      </div>

      <button class="confirm-btn mt-6">Confirm Order</button>
    </aside>
  </div>
  </body>
</x-layouts.app>
