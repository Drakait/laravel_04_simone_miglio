<x-layout>


<div class="container-fluid bg-dark p-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <img src="https://picsum.photos/900/400?random={{ $id + 1 }}"
                 class="img-fluid rounded mb-4 w-100" style="height: 350px; object-fit: cover;" alt="{{ $articolo['titolo'] }}">
            <span class="badge bg-primary mb-2">{{ $articolo['categoria'] }}</span>
            <h1 class="text-primary fw-bold">{{ $articolo['titolo'] }}</h1>
            <p class="text-secondary">di {{ $articolo['autore'] }} · {{ $articolo['data'] }}</p>
            <p class="text-white fs-5">{{ $articolo['testo'] }}</p>
            <a href="{{ route('servizi') }}" class="btn btn-outline-primary mt-3">← Torna agli articoli</a>
        </div>
    </div>
</div>

</x-layout>