<div class="container">
    <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">&larr; Nazad na Dashboard</a>
</div>

<h1>Lista dobavljaca</h1>
<a href="{{ route('suppliers.create') }}">Dodaj novog dobavljaca</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Naziv</th>
            <th>Opis</th>
            <th>Slika</th>
            <th>Istaknuto</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->naziv }}</td>
            <td>{{ $product->opis }}</td>
            <td><img src="{{ $suppliers->slika }}" width="50"></td>
            <td>{{ $product->istaknuto ? 'Da' : 'Ne' }}</td>
            <td>
                <a href="{{ route('suppliers.edit', $product) }}">Izmeni</a>
                <form action="{{ route('supplierss.destroy', $product) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Obriši</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>