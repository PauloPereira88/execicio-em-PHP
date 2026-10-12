document.addEventListener('DOMContentLoaded', () => {
    inicializarMascara();
});

function inicializarMascara() {
    const telefoneInput = document.getElementById('telefone');

    if (telefoneInput) {
        telefoneInput.addEventListener('input', (e) => {
            let value = e.target.value.replace(/\D/g, '');
            value = value.slice(0, 11);

            if (value.length > 2 && value.length <= 6) {
                value = value.replace(/^(\d{2})(\d+)/, '($1) $2');

            } else if (value.length > 6 && value.length <= 10) {
                value = value.replace(/^(\d{2})(\d{4})(\d+)/, '($1) $2-$3');
                
            } else if (value.length === 11) {
                value = value.replace(/^(\d{2})(\d{5})(\d+)/, '($1) $2-$3');
            }
            e.target.value = value;
        
        });
    }
}