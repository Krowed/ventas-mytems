<script>
// Usamos nombres de variables claros para jQuery
let $selDepartamento = $('select[name="departamento"]'),
    $selProvincia    = $('select[name="provincia"]'),
    $selDistrito     = $('select[name="distrito"]');


function initSelect2() {
    const config = {
        theme: "tailwindcss-4", 
        width: '100%',
        placeholder: "[SELECCIONE]",
        //allowClear: true,
        selectionCssClass: 'py-1',
        // ESTO ES LO QUE HACE QUE FUNCIONE COMO EL EJEMPLO:
        dropdownParent: $(document.body) 
    };

    $('select[name="departamento"], select[name="provincia"], select[name="distrito"]').select2(config);
}

function load_ubigeo() {
    fetch("{{ route('admin.load_ubigeo') }}", {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({ })
    })
    .then(res => res.json())
    .then(r => {
        let wrapProvincia = document.getElementById('wrapper_province'),
            wrapDistrito  = document.getElementById('wrapper_district');

        // 1. Destruir instancias previas
        if ($selDepartamento.data('select2')) {
            $selDepartamento.select2('destroy');
            $selProvincia.select2('destroy');
            $selDistrito.select2('destroy');
        }

        let htmlDepartment = ``;
        let htmlProvince   = ``;
        let htmlDistrict   = ``;

        if (r.ubigeo !== null) {
            wrapProvincia.classList.remove('d-none');
            wrapDistrito.classList.remove('d-none');

            r.departments.forEach(dep => {
                let selected = (dep.codigo == r.department.codigo) ? 'selected' : '';
                htmlDepartment += `<option value="${dep.codigo}" ${selected}>${dep.departamento}</option>`;
            });

            r.provinces.forEach(prov => {
                let selected = (prov.codigo == r.province.codigo) ? 'selected' : '';
                htmlProvince += `<option value="${prov.codigo}" ${selected}>${prov.provincia}</option>`;
            });

            r.districts.forEach(dist => {
                let selected = (dist.codigo == r.district.codigo) ? 'selected' : '';
                htmlDistrict += `<option value="${dist.codigo}" ${selected}>${dist.distrito}</option>`;
            });
        } else {
            htmlDepartment = `<option value="">[SELECCIONE]</option>`;
            r.departments.forEach(dep => {
                htmlDepartment += `<option value="${dep.codigo}">${dep.departamento}</option>`;
            });
            wrapProvincia.classList.add('d-none');
            wrapDistrito.classList.add('d-none');
        }

        // Insertar HTML y re-inicializar
        $selDepartamento.html(htmlDepartment);
        $selProvincia.html(htmlProvince);
        $selDistrito.html(htmlDistrict);

        initSelect2();
    })
    .catch(err => console.error("Error en load_ubigeo:", err));
}

// Eventos
$selDepartamento.on('change', function() {
    let value = $(this).val();
    if (!value) return;

    fetch("{{ route('admin.load_provinces') }}", {
        method: "POST",
        headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': csrfToken },
        body: JSON.stringify({ codigo: value })
    })
    .then(res => res.json())
    .then(r => {
        $selProvincia.empty().append('<option value="">[SELECCIONE]</option>');
        $selDistrito.empty();
        
        r.provinces.forEach(prov => {
            $selProvincia.append(`<option value="${prov.codigo}">${prov.provincia}</option>`);
        });

        initSelect2();
    });
});

$(document).ready(function() {
    load_ubigeo();

    
});


</script>