<!-- Menu -->
  <div class="col-md-3 mb-3">
    <div class="card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
      @if ($menu->image)
      
        <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->category->name }}" class="card-img-top img-fluid" />
    
      @else
      <img src="assets/images/produk/1.webp" class="card-img-top" />
          
      @endif
      <div class="card-body">
        <p class="card-text mb-0 text-center fw-bold fs-3">{{ $menu->name }}</p>
        <p class="card-text text-center">Rp.{{ $menu->price }}</p>
      </div>
    </div>
  </div>
<!-- Akhir Menu -->

{{-- @if ($menu->category->name == 'makanan')
        @include('frontend.partials.menu',array('menus'=>'menu'))
        @endif --}}