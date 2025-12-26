<script>
let departamentoChoices;
let provinciaChoices;
let distritoChoices;

let selDepartamento = document.querySelector('select[name="departamento"]'),
    selProvincia   = document.querySelector('select[name="provincia"]'),
    selDistrito    = document.querySelector('select[name="distrito"]');

function load_ubigeo() {
    fetch("{{ route('admin.load_ubigeo') }}", {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({ }) // enviar body vacío para Laravel
    })
    .then(res => res.json())
    .then(r => {

        let wrapProvincia = document.getElementById('wrapper_province'),
            wrapDistrito  = document.getElementById('wrapper_district');

        // Reset HTML
        selDepartamento.innerHTML = '';
        selProvincia.innerHTML   = '';
        selDistrito.innerHTML    = '';

        let htmlDepartment = `<option value="">[SELECCIONE]</option>`;
        let htmlProvince   = `<option value="">[SELECCIONE]</option>`;
        let htmlDistrict   = `<option value="">[SELECCIONE]</option>`;

        if (r.ubigeo !== null) {
            wrapProvincia.classList.remove('d-none');
            wrapDistrito.classList.remove('d-none');

            r.departments.forEach(dep => {
                htmlDepartment += `<option value="${dep.codigo}"
                    ${dep.codigo == r.department.codigo ? 'selected' : '' }>
                    ${dep.departamento}
                </option>`;
            });

            r.provinces.forEach(prov => {
                htmlProvince += `<option value="${prov.codigo}"
                    ${prov.codigo == r.province.codigo ? 'selected' : '' }>
                    ${prov.provincia}
                </option>`;
            });

            r.districts.forEach(dist => {
                htmlDistrict += `<option value="${dist.codigo}"
                    ${dist.codigo == r.district.codigo ? 'selected' : '' }>
                    ${dist.distrito}
                </option>`;
            });
        }
        else {
            // Solo departamentos
            r.departments.forEach(dep => {
                htmlDepartment += `<option value="${dep.codigo}">
                    ${dep.departamento}
                </option>`;
            });

            wrapProvincia.classList.add('d-none');
            wrapDistrito.classList.add('d-none');
        }

        // Insert HTML
        selDepartamento.innerHTML = htmlDepartment;
        selProvincia.innerHTML   = htmlProvince;
        selDistrito.innerHTML    = htmlDistrict;

        // Inicializar Choices
        if (departamentoChoices) departamentoChoices.destroy();
        departamentoChoices = new Choices(selDepartamento, {
            placeholder: true,
            placeholderValue: '[SELECCIONE]',
            itemSelectText: ''
        });

        if (provinciaChoices) provinciaChoices.destroy();
        provinciaChoices = new Choices(selProvincia, {
            placeholder: true,
            placeholderValue: '[SELECCIONE]',
            itemSelectText: ''
        });

        if (distritoChoices) distritoChoices.destroy();
        distritoChoices = new Choices(selDistrito, {
            placeholder: true,
            placeholderValue: '[SELECCIONE]',
            itemSelectText: ''
        });
    })
    .catch(err => console.error(err));
}

selDepartamento.addEventListener('change', function() {
    let value = this.value;

    fetch("{{ route('admin.load_provinces') }}", {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({ codigo: value })
    })
    .then(res => res.json())
    .then(r => {
        selProvincia.innerHTML = `<option value="">[SELECCIONE]</option>`;
        selDistrito.innerHTML  = `<option value="">[SELECCIONE]</option>`;

        r.provinces.forEach(prov => {
            selProvincia.innerHTML += `
                <option value="${prov.codigo}">
                    ${prov.provincia}
                </option>`;
        });

        if (provinciaChoices) provinciaChoices.destroy();
        provinciaChoices = new Choices(selProvincia, {
            placeholder: true,
            placeholderValue: '[SELECCIONE]',
            itemSelectText: ''
        });

        // Limpia distrito
        if (distritoChoices) distritoChoices.destroy();
        distritoChoices = new Choices(selDistrito, {
            placeholder: true,
            placeholderValue: '[SELECCIONE]',
            itemSelectText: ''
        });
    })
    .catch(err => console.log(err))
});

document.addEventListener('DOMContentLoaded', function() {
    load_ubigeo();
});
</script>
