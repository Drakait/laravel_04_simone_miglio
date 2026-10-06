<div class="carousel-item {{ $isFirst ? 'active' : '' }}">
    <a href="{{ route('dettaglio', ['id' => $articleId]) }}">
        <img src="https://picsum.photos/800/400?random={{ $articleNumber }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="{{ $articleTitle }}">
    </a>
    <div class="carousel-caption">
        <div class="d-inline-block bg-dark bg-opacity-75 text-white rounded-3 p-3">
            <h5 class="text-primary mb-0 mb-md-2">{{ $articleTitle }}</h5>
            <h6 class="d-none d-md-block">{{ $articleCategory }}</h6>
            <p class="d-none d-md-block mb-0">{{ $articleSummary }}</p>
        </div>
    </div>
</div>