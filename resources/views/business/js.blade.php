<script>

let departamentoChoices;
let provinciaChoices;
let distritoChoices;

function load_ubigeo() {
    fetch("{{ route('admin.load_ubigeo') }}", {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        }
    })
    .then(res => res.json())
    .then(r => {
        let selDepartamento   = document.querySelector('select[name="departamento"]'),
            selProvincia        = document.querySelector('select[name="provincia"]'),
            selDistrito         = document.querySelector('select[name="distrito"]');

        let wrapProvincia     = document.getElementById('wrapper_province'),
            wrapDistrito        = document.getElementById('wrapper_district');

        let htmlDepartment      = '',
            htmlProvince        = '',
            htmlDistrict        = '';

            if(r.ubigeo !== null) {
                wrapProvincia.classList.remove('d-none');
                wrapDistrito.classList.remove('d-none');

                r.departments.forEach(dep => {
                    htmlDepartment += `<option value="${dep.codigo}" ${dep.codigo === r.department.codigo ? 'selected' : '' }>${dep.departamento}</option>`;
                });

                r.provinces.forEach(prov => {
                    htmlProvince += `<option value="${prov.codigo}" ${prov.codigo === r.province.codigo ? 'selected' : ''}>${prov.provincia}</option>`;
                });

                r.districts.forEach(dist => {
                    htmlDistrict += `<option value="${dist.codigo}" ${dist.codigo === r.district.codigo ? 'selected' : ''}>${dist.distrito}</option>`;
                });

                selProvincia.innerHTML  = htmlProvince;
                selDistrito.innerHTML   = htmlDistrict;
            }
            else {
                htmlDepartment += `<option value="">[SELECCIONE]</option>`;
                r.departments.forEach(dep => {
                    htmlDepartment += `
                        <option value="${dep.codigo}">
                            ${dep.departamento}
                        </option>`;
                });

                wrapProvincia.classList.add('d-none');
                wrapDistrito.classList.add('d-none');
            }

            selDepartamento.innerHTML = htmlDepartment;

            if (departamentoChoices) departamentoChoices.destroy();
            departamentoChoices = new Choices(selDepartamento, {
                placeholder: true,
                placeholderValue: '[SELECCIONE]',
                itemSelectText: ''
            });

            if (provinciaChoices) provinciaChoices.destroy();
            provinciaChoices = new Choices(selProvincia, {
                itemSelectText: ''
            });

            if (distritoChoices) distritoChoices.destroy();
            distritoChoices = new Choices(selDistrito, {
                itemSelectText: ''
            });
    })
    .catch(err => console.error(err));
}

let selectDeparment = document.querySelector('select[name="departamento"]');
selectDeparment.addEventListener('change', function() {
    let value = this.value;
    fetch("{{ route('admin.load_provinces') }}", {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({
            codigo: value
        })
    })
    .then(res => res.json())
    .then(r => {
        let htmlProvince        = '',
            selProvincia        = document.querySelector('select[name="provincia"]');

        console.log(r.provinces);
        r.provinces.forEach(prov => {
            htmlProvince += `<option value="${prov.codigo}">${prov.provincia}</option>`;
        });

        selProvincia.innerHTML = htmlProvince;
        if (provinciaChoices) provinciaChoices.destroy();
        provinciaChoices = new Choices(selProvincia, {
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