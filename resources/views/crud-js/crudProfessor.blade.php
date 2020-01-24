<script>
let Crud = function (){
    const DATA = ['id','Nome']
    this.list = function(){
        ajax({
            url : '{{ url("api/professor") }}',
            method : 'GET',
            action: function(professores){
                let tabela = ''
                for(professor of professores){
                    const id = professor['id']
                    tabela +=   '<tr>'
                                +'<td>'+professor['Nome']+'</td>'
                                +'<td>'+'<button onclick = crud.show('+id+')>Mostrar</button>'+'</td>'
                                +'<td>'+'<button onclick = crud.edit('+id+')>Alterar</button>'+'</td>'
                                +'</tr>'
                }
                // tabela += '</table>'
                document.getElementById('lista').innerHTML = tabela

            },
            erro : function(erro){
                console.log(erro)
            }
        })
    }
    this.show = function(id){
        ajax({
            url : '{{ url("api/professor")}}'+'/'+id,
            method : 'GET',
            action: function(professor){
                let tabela = ''
                    tabela +=   '<tr>'
                                +'<td>'
                                +professor['Nome']
                                +'</td>'
                                +'</tr>'


                // tabela += '</table>'
                document.getElementById('areaNome').innerHTML = professor['Nome']
                document.getElementById('areaId').innerHTML = professor['id']
            }
        })
    }
    this.edit = function(id){
        ajax({
            url : '{{ url("api/professor")}}'+'/'+id,
            method : 'GET',
            action: function(professor){
                let tabela = ''
                    tabela +=   '<tr>'
                                +'<td>'
                                +professor['Nome']
                                +'</td>'
                                +'</tr>'


                // tabela += '</table>'
                // console.log(professor['id'])
                document.getElementById('areaNome').innerHTML = '<input id="Nome" value="'+professor['Nome']+'"/>'
                document.getElementById('areaId').innerHTML = '<input id="id" value="'+professor['id']+'"/>'
                document.getElementById('areaBotoes').innerHTML = '<button onclick=crud.update('+id+')>Confirmar</button>'

            },
            erro : function(erro){console.log(erro)}
        })
    }
    this.update = function(id){
        let data = new FormData()
        data.append('_token','{{ csrf_token() }}')
        data.append('_method', 'PUT')
        ajax({
            url    : '{{ url("api/professor")}}'+'/'+id,
            method : 'POST',
            data   : data, 
            action: function(response){
                alert(response['mensagem'])
            },
            erro : function(erro){
                console.log(erro)
            }
        })
    }
}


let crud = new Crud()
crud.list()
</script>