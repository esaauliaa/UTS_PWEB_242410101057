@extends('layouts.app')

@section('content')

<div class="management-container">
    <h1 class="management-title">Bouquet Catalog</h1>
    <div class="management-line"></div>
    <p class="management-subtitle">Find your favorite bouquet here.</p>

    <div class="bouquet-grid">
        @foreach ($bouquets as $bouquet)
            <div class="bouquet-card">
                <div class="bouquet-image">
                    <img src="{{ asset('images/' . $bouquet['gambar']) }}" alt="{{ $bouquet['nama'] }}">

                    <button type="button"
                            class="zoom-btn"
                            onclick="openImageModal('{{ asset('images/' . $bouquet['gambar']) }}')">
                        <i class="bi bi-arrows-fullscreen"></i>
                    </button>
                </div>

                <div class="bouquet-info">
                    <div class="bouquet-top">
                        <h3>{{ $bouquet['nama'] }}</h3>
                    </div>

                    <p class="bouquet-desc">{{ $bouquet['deskripsi'] }}</p>

                    <div class="bouquet-bottom">
                        <span class="bouquet-price">{{ $bouquet['harga'] }}</span>

                        <span class="status {{ Str::slug($bouquet['status']) }}">
                            {{ $bouquet['status'] }}
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div id="imageModal" class="image-modal" onclick="closeImageModal()">
    <div class="image-modal-box" onclick="event.stopPropagation()">
        <button type="button" class="close-modal" onclick="closeImageModal()">×</button>
        <img id="modalImage" src="" alt="Preview Bouquet">
    </div>
</div>

<script>
function openImageModal(imageSrc) {
    document.getElementById('modalImage').src = imageSrc;
    document.getElementById('imageModal').style.display = 'flex';
}

function closeImageModal() {
    document.getElementById('imageModal').style.display = 'none';
}
</script>

@endsection
