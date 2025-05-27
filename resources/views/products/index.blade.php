<div class="container">
    <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">&larr; Nazad na Dashboard</a>
</div>

<h1>Lista proizvoda</h1>
<a href="{{ route('products.create') }}">Dodaj novi proizvod</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Naziv</th>
            <th>Opis</th>
            <th>Slika</th>
            <th>Istaknuto</th>
            <th>Akcije</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->naziv }}</td>
            <td>{{ $product->opis }}</td>
            <td><img src="{{ $product->slika }}" width="50"></td>
            <td>{{ $product->istaknuto ? 'Da' : 'Ne' }}</td>
            <td>
                <a href="{{ route('products.edit', $product) }}">Izmeni</a>
                <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Obriši</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>