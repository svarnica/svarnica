<h1>Izmeni dobavljaca</h1>

<form method="POST" action="{{ route('products.update', $product) }}">
    @csrf
    @method('PUT')
    <label>Naziv: <input type="text" name="naziv" value="{{ $product->naziv }}" required></label><br>
    <label>Opis: <textarea name="opis">{{ $suppliers->opis }}</textarea></label><br>
    <label>Slika (URL): <input type="text" name="slika" value="{{ $product->slika }}"></label><br>
    <label>Istaknuto: <input type="checkbox" name="istaknuto" value="1" {{ $product->istaknuto ? 'checked' : '' }}></label><br>
    <button type="submit">Ažuriraj</button>
</form>