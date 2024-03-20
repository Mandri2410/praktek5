@extends('layout.main')
@section('content')
<!-- Product page -->
<div class="w-full px-6 py-6 mx-auto">
  <!-- Product details -->
  <div class="flex flex-wrap -mx-3">
    <!-- Product image -->
    <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
      <img src="./assets/img/product.jpg" alt="Product Image" class="object-cover w-full h-auto rounded-lg shadow-lg" />
    </div>
    <!-- Product description -->
    <div class="w-full px-3 md:w-1/2">
      <h2 class="mb-4 text-2xl font-bold text-slate-900">Product Title</h2>
      <p class="mb-6 text-base leading-relaxed text-slate-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempor purus ac urna hendrerit, eu sollicitudin odio placerat.</p>
      <p class="mb-6 text-base leading-relaxed text-slate-600">Price: $XX.XX</p>
      <button class="px-6 py-3 mb-6 text-sm font-bold text-center text-white uppercase transition-all bg-blue-500 border border-transparent rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 active:bg-blue-700">Add to Cart</button>
    </div>
  </div>
  <!-- Product details end -->

  <!-- Product features -->
  <div class="px-3 mt-12">
    <h3 class="mb-4 text-xl font-bold text-slate-900">Product Features</h3>
    <ul class="mb-6 text-base leading-relaxed text-slate-600">
      <li class="mb-2"><i class="mr-2 fas fa-check text-green-500"></i>Feature 1</li>
      <li class="mb-2"><i class="mr-2 fas fa-check text-green-500"></i>Feature 2</li>
      <li class="mb-2"><i class="mr-2 fas fa-check text-green-500"></i>Feature 3</li>
      <li class="mb-2"><i class="mr-2 fas fa-check text-green-500"></i>Feature 4</li>
    </ul>
  </div>
  <!-- Product features end -->

  <!-- Product reviews -->
  <div class="px-3 mt-12">
    <h3 class="mb-4 text-xl font-bold text-slate-900">Customer Reviews</h3>
    <div class="flex items-center mb-4">
      <span class="text-sm font-semibold text-yellow-500">★★★★★</span>
      <span class="ml-2 text-sm text-slate-600">5.0 (Based on 10 reviews)</span>
    </div>
    <!-- Customer reviews loop -->
    <div class="mb-4">
      <div class="flex items-center mb-2">
        <h4 class="mr-2 text-sm font-semibold text-slate-800">John Doe</h4>
        <span class="text-sm text-slate-600">- 2 days ago</span>
      </div>
      <p class="text-base leading-relaxed text-slate-600">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquam felis ligula."</p>
    </div>
    <!-- Customer reviews loop end -->
    <a href="#" class="text-sm font-semibold text-blue-500 hover:text-blue-600">See all reviews</a>
  </div>
  <!-- Product reviews end -->
</div>
<!-- Product page end -->
@endsection
