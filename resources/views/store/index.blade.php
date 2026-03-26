@extends('layouts.store')

@section('content')
<section class="hero-slider">
    <div class="container">
        <div class="promo-banner">
            <div class="promo-grid">
                <div class="promo-content animate-fade-in">
                    <span class="promo-badge">Innovación Odontológica</span>
                    <h1 class="promo-title">Excelencia en Cada <span>Detalle</span></h1>
                    <p class="promo-description">Especialistas en suministro de alta precisión para clínicas que buscan resultados de clase mundial.</p>
                    
                    <div class="hero-categories delay-1">
                        <a href="#catalogo" class="hero-cat-pill">Insumos</a>
                        <a href="#catalogo" class="hero-cat-pill">Equipos</a>
                        <a href="#catalogo" class="hero-cat-pill">Bioseguridad</a>
                        <a href="#catalogo" class="hero-cat-pill">Ortodoncia</a>
                    </div>

                    <div class="hero-buttons delay-2">
                        <a href="#catalogo" class="hero-btn hero-btn-primary">Explorar Todo</a>
                        <a href="/admin" class="hero-btn hero-btn-glass">Portal Admin</a>
                    </div>
                </div>
            </div>
            <div class="promo-image animate-float">
                <img src="https://img.freepik.com/free-photo/stomatological-dentist-equipment-blue-background_23-2148214150.jpg" alt="Watermark Background">
            </div>
        </div>
    </div>
</section>

<section class="trust-badges">
    <div class="container badges-container">
        <div class="badge-item">
            <span class="badge-icon">🚚</span>
            <div class="badge-text">
                <h4>Envío Nacional</h4>
                <p>Llegamos a todo el país</p>
            </div>
        </div>
        <div class="badge-item">
            <span class="badge-icon">🛡️</span>
            <div class="badge-text">
                <h4>Calidad Garantizada</h4>
                <p>Solo marcas premium</p>
            </div>
        </div>
        <div class="badge-item">
            <span class="badge-icon">💳</span>
            <div class="badge-text">
                <h4>Pago Seguro</h4>
                <p>Múltiples medios de pago</p>
            </div>
        </div>
        <div class="badge-item">
            <span class="badge-icon">💬</span>
            <div class="badge-text">
                <h4>Soporte Experto</h4>
                <p>Asesoría personalizada</p>
            </div>
        </div>
    </div>
</section>

<section id="catalogo" class="products-section">
    <div class="container">
        <div class="section-header">
            <h2>Instrumental y Equipos <span>Destacados</span></h2>
            <p>Selección premium para especialistas exigentes</p>
        </div>

        @if($products->count() > 0)
            <div class="product-grid" id="productGrid">
                @foreach($products as $product)
                <div class="product-card">
                    <div class="product-image">
                        @if($product->main_image)
                            <img src="{{ Storage::url($product->main_image) }}" alt="{{ $product->name }}">
                        @else
                            <div class="image-placeholder">🦷</div>
                        @endif
                    </div>
                    <div class="product-info">
                        <span class="product-brand">{{ $product->brand->name ?? 'Premium' }}</span>
                        <h3 class="product-name" title="{{ $product->name }}">{{ Str::limit($product->name, 50) }}</h3>
                        
                        <div class="product-footer">
                            <div>
                                <span class="product-price">${{ number_format($product->price, 0, ',', '.') }}</span>
                            </div>
                            <a href="#" class="btn-card">Ver Detalles</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="empty-state" id="emptyState">
                <div class="empty-icon">🦷</div>
                <h3>Aún no hay productos en el catálogo</h3>
                <p>Ingresa al portal administrativo para empezar a registrar equipos, marcas y categorías.</p>
                <a href="/admin" class="btn btn-primary">Ir al Administrador</a>
            </div>
        @endif
    </div>
</section>
@endsection
