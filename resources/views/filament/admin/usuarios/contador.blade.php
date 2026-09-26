<div data-contador-resultado="{{ $campo }}" style="font-size:12px;font-weight:600;margin-top:4px"></div>

<script>
if (!window.contadorInicializado) {
    window.contadorInicializado = true;

    document.addEventListener('input', function (evento) {
        var campo = evento.target.dataset.contadorCampo;
        if (!campo) return;

        var resultado = document.querySelector('[data-contador-resultado="' + campo + '"]');
        if (!resultado) return;

        var max = parseInt(evento.target.dataset.contador, 10);
        var largo = evento.target.value.length;

        var color = '#16a34a';
        if (largo >= max) {
            color = '#dc2626';
        } else if (largo / max >= 0.8) {
            color = '#d97706';
        }

        resultado.style.color = color;
        resultado.textContent = largo + '/' + max;
    });
}
</script>