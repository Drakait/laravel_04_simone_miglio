<x-layout>
    
    <div class="container-fluid header p-5"> 
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h1 class="text-primary display-5 fw-bold text-color"> I nostri articoli </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        @foreach ($articoli as $item)
                        <button type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="{{ $loop->index }}"
                        class="{{ $loop->first ? 'active' : '' }}"
                        @if ($loop->first) aria-current="true" @endif
                        aria-label="Slide {{ $loop->iteration }}"></button>
                        @endforeach
                    </div>
                    
                    <div class="carousel-inner">
                        @foreach ($articoli as $item)
                        <x-carousel-item
                        :articleTitle="$item['titolo']"
                        :articleCategory="$item['categoria']"
                        :articleSummary="$item['sommario']"
                        :articleId="$loop->index"
                        :articleNumber="$loop->iteration"
                        :isFirst="$loop->first"
                        />
                        @endforeach
                    </div>
                    
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    
</x-layout>
