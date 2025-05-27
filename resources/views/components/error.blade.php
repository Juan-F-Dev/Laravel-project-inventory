{{-- Mostrar errores generales --}}

@csrf
@if ($errors->any())
    <div id="auto-dismiss-alerts" class="absolute bottom-5 sm:bottom-5 right-0">
        <ul class="space-y-2">
            @foreach ($errors->all() as $error)
                <li class="py-3 rounded bg-red-100 px-10 text-red-700">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

@if (isset($product) && $product->exists)
    @method('PUT')
@endif

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const alerts = document.getElementById('auto-dismiss-alerts');

        if (alerts) {
            setTimeout(() => {
                alerts.style.transition = 'opacity 1s ease';
                alerts.style.opacity = '0';

                // Eliminar completamente después de la animación
                setTimeout(() => alerts.remove(), 1000);
            }, 3000); // 5 segundos
        }
    });
</script>