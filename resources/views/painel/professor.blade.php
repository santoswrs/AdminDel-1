    @include('cabecalho-master')
    @include('menu-login')
    @include('menu-lateral')
<div class="listArea">
    <table id="lista">
    
    </table>
    
</div>
<div id="modal" class="modal">
    <table id="crud">
    <tr>
        <td>Nome:</td><td id="areaNome"></td>
    </tr>
    <tr>
        <td>Id:</td><td id="areaId"></td>
    </tr>
    <tr>
        <td id="areaBotoes"></td>
    </tr>
    </table>
</div>
    <script src = '{{ url("js/utilitario.js") }}' > </script>
    @include('crud-js.crudProfessor')
    @include('footer')