<h1 style="font-family: special" class="text-center text-6xl">
    @if(session()->has('success'))
        Bedankt!
    @else
        Stuur ons een bericht
    @endif
</h1>
<p class="w-1/3 mx-auto mb-12 text-center">
    @if(session()->has('success'))
        Bedankt voor uw bericht!
    @else
        Hier kunt u een berichtje en/of felicitatie voor ons achter laten.
    @endif
</p>

@if(!session()->has('success'))
<form class="w-1/3 mx-auto" action="/form" method="POST">
    @csrf
    <label for="name" class="w-full block mb-2 leading-5 font-medium text-gray-700">Naam*</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}" required="required" class="form-input bg-white w-full py-2 px-4 border border-gray-400 rounded-md shadow-sm">

    <label for="message" class="w-full block mt-6 mb-2 leading-5 font-medium text-gray-700">Bericht*</label>
    <textarea name="message" id="message" rows="6" required="required" class="form-input bg-white w-full py-2 px-4 border border-gray-400 rounded-md shadow-sm">{{ old('message') }}</textarea> 

    <button type="submit" class="mt-2 rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline transition ease-in-out duration-150 sm:text-sm sm:leading-5">
      Verstuur
    </button>
</form>
@endif