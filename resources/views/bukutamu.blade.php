@extends('layout.main')
@section('content')
<!-- Guest Book Page -->
<div class="w-full px-6 py-6 mx-auto">
  <div class="max-w-xl mx-auto">
    <h2 class="mb-8 text-2xl font-bold text-slate-900">Guest Book</h2>
    <!-- Guest Book Form -->
    <form action="#" method="POST">
      @csrf
      <div class="mb-4">
        <label for="name" class="block mb-2 text-lg font-semibold text-slate-800">Name:</label>
        <input type="text" id="name" name="name" class="w-full px-4 py-2 text-base text-slate-600 border border-gray-300 rounded-lg focus:outline-none focus:border-fuchsia-300" placeholder="Enter your name" required>
      </div>
      <div class="mb-4">
        <label for="email" class="block mb-2 text-lg font-semibold text-slate-800">Email:</label>
        <input type="email" id="email" name="email" class="w-full px-4 py-2 text-base text-slate-600 border border-gray-300 rounded-lg focus:outline-none focus:border-fuchsia-300" placeholder="Enter your email" required>
      </div>
      <div class="mb-4">
        <label for="message" class="block mb-2 text-lg font-semibold text-slate-800">Message:</label>
        <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 text-base text-slate-600 border border-gray-300 rounded-lg focus:outline-none focus:border-fuchsia-300" placeholder="Write your message" required></textarea>
      </div>
      <div class="mt-6">
        <button type="submit" class="px-6 py-3 text-lg font-semibold text-white bg-fuchsia-500 rounded-lg hover:bg-fuchsia-600 focus:outline-none focus:bg-fuchsia-600">Submit</button>
      </div>
    </form>
  </div>
</div>
<!-- Guest Book Page End -->
@endsection
