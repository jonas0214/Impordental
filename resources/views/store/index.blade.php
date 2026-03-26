@extends('layouts.store')

@section('content')
<section class="hero-slider">
    <div class="container">
        <div class="promo-banner">
            <div class="promo-content">
                <span class="promo-badge">Oferta de la Semana</span>
                <h1 class="promo-title">Equipamiento Dental con <span>Garantía Premium</span></h1>
                <p class="promo-description">Descubre nuestra nueva línea de unidades odontológicas de alta tecnología. Financiación disponible hasta 12 meses.</p>
                <div class="hero-buttons" style="justify-content: flex-start;">
                    <a href="#catalogo" class="btn btn-action">Ver Catálogo</a>
                    <a href="#" class="btn btn-secondary">Más Información</a>
                </div>
            </div>
            <div class="promo-image">
                <img src="https://img.freepik.com/free-photo/stomatological-dentist-equipment-blue-background_23-2148214150.jpg" alt="Equipamiento Dental" style="border-radius: 12px; object-fit: cover;">
            </div>
            <div class="promo-bg-elements">
                <div class="bg-circle" style="width: 400px; height: 400px; top: -100px; right: -100px;"></div>
                <div class="bg-circle" style="width: 200px; height: 200px; bottom: 50px; left: 100px;"></div>
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
                        <span class="product-category">{{ $product->category->name ?? 'Insumos' }}</span>
                    </div>
                    <div class="product-info">
                        <span class="product-brand">{{ $product->brand->name ?? 'Premium' }}</span>
                        <h3 class="product-name" title="{{ $product->name }}">{{ Str::limit($product->name, 45) }}</h3>
                        
                        <div class="product-price-row">
                            <span class="product-price">${{ number_format($product->price, 0, ',', '.') }}</span>
                            @if($product->stock > 0)
                                <span class="badge in-stock">Disponible</span>
                            @else
                                <span class="badge out-of-stock">Agotado</span>
                            @endif
                        </div>
                        <div style="margin-top: 1.5rem;">
                            <a href="#" class="btn btn-primary" style="width: 100%; border-radius: 6px;">Ver Detalles</a>
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
