@if (session()->has('error'))
<div class="bg-red-300 border border-red-700 p-4 mb-4 text-sm text-red-900 rounded-lg  mx-4" role="alert">
  <span class="font-semibold">{{ session('error') }}</span>
</div>
@endif

@if (session()->has('success'))
<div class="bg-green-400 border border-green-700 p-4 mb-4 text-sm text-green-900 rounded-lg mx-4" role="alert">
  <span class="font-semibold">{{ session('success') }}</span>
</div>
@endif