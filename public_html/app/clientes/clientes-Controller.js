$(document).ready(function(){

    $('#listClientes').DataTable({
        "ajax":{
            type: 'get',
            url: "http://lavanderiasos.com/api/v1/clientes",
            dataSrc: 'data',
            cache: true
        },
        columns: [
            {
                "targets": 0,
                "render": function ( data, type, row ) {
                    return row.created_at;
                }
            },
            { data: 'dni' },
            { data: 'nombre' },
            /*
            {
                "targets": 3,
                "render": function ( data, type, row ) {
                    if (row.categoria)
                    {
                        return row.categoria.nombre;
                    }
                    else 
                    {
                        return "";
                    }
                }
            },
            */
            { data: 'celular' },
            { data: 'correo' },
            { data: 'direccion'},
            {
                "targets": 6,
                "render": function ( data, data, row ) {
                    return "<a href='#'>Editar</a> | <a href='#'>Eliminar</a>"
                }
            }
        ]
    });

});