<div data-fuerza-resultado="password" style="margin-top:4px"></div>

<script>
if (!window.fuerzaInicializada) {
    window.fuerzaInicializada = true;

    document.addEventListener('input', function (evento) {
        var campo = evento.target.dataset.fuerza;
        if (!campo) return;

        var resultado = document.querySelector('[data-fuerza-resultado="' + campo + '"]');
        if (!resultado) return;

        var valor = evento.target.value;

        var reglas = 0;
        if (valor.length >= 8) reglas++;
        if (/[A-Z]/.test(valor)) reglas++;
        if (/\d/.test(valor)) reglas++;
        if (/[^A-Za-z0-9]/.test(valor)) reglas++;

        var etiqueta = '';
        var color = '';
        if (reglas <= 1) {
            etiqueta = 'Débil';
            color = '#dc2626';
        } else if (reglas <= 3) {
            etiqueta = 'Media';
            color = '#d97706';
        } else {
            etiqueta = 'Fuerte';
            color = '#16a34a';
        }

        resultado.innerHTML = '<span style="color:' + color + ';font-weight:600;font-size:12px">' + etiqueta + '</span>';
    });
}
</script>