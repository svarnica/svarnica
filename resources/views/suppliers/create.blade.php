<h1>Dodaj dobavljaca</h1>

<form method="POST" action="{{ route('suppliers.store') }}">
    @csrf
    <label>Naziv: <input type="text" name="naziv" required></label><br>
    <label>Opis: <textarea name="opis"></textarea></label><br>
    <label>Slika (URL): <input type="text" name="slika"></label><br>
    <label>Istaknuto: <input type="checkbox" name="istaknuto" value="1"></label><br>
    <button type="submit">Snimi</button>
</form>