const grid = new Muuri('.grid', {
    layout: {
        rounding: false,
    },
});
window.addEventListener('load', () => {
    grid.refreshItems().layout();
    document.getElementById('grid').classList.add('imagenes-cargadas');

    //llamamos listeners de los enlaces  para filtrar por categoria
    const enlaces = document.querySelectorAll('#categorias a');
    enlaces.forEach((elemento) => {
        elemento.addEventListener('click', (evento) => {
            evento.preventDefault();
            enlaces.forEach((enlaces) => enlaces.classList.remove('activo'));
            evento.target.classList.add('activo');

            const categoria = evento.target.innerHTML.toLowerCase();
            categoria === 'todos' ? grid.filter('[data-categoria]') : grid.filter(`[data-categoria="${categoria}"]`);
        })
    })

    // listener barra de busqueda

    document.querySelector('#barra-busqueda').addEventListener('input', (evento) => {
        const busqueda = evento.target.value;
        grid.filter((item) => item.getElement().dataset.etiquetas.includes(busqueda))
    })

    //Listener overlay imagenes de
    const overlay = document.getElementById('overlay');
    document.querySelectorAll('.grid .item img').forEach((elemento) => {
        const ruta = elemento.getAttribute('src');
        const description = elemento.parentNode.parentNode.dataset.description;

        elemento.addEventListener('click', () => {
            overlay.classList.add('activo');
            document.querySelector('#overlay img').src = ruta;
            document.querySelector('#overlay .description').innerHTML = description;
        })
    });


    //event listener btn-closeup

    document.querySelector('#btn-close-popup').addEventListener('click', () => {
        overlay.classList.remove('activo');
    });

    //close overlay image
    overlay.addEventListener('click', (evento) => {
        evento.target.id === 'overlay' ? overlay.classList.remove('activo') : '';
    });


})