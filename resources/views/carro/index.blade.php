<!DOCTYPE>
<html>
    <body>
        <form method="POST" action="/carro">
            @csrf
            <div>
                <label for="marca"> Marca: </label>
                <input type="text" id="marca" name="marca" value="{{ $carro->marca }}"/>
            </div>
            <div>
                <label for="modelo_veiculo"> Modelo do Veiculo: </label>
                <input type="text" id="modelo_veiculo" name="modelo_veiculo"  value="{{ $carro->modelo_veiculo }}"/>
            </div>
            <div>
                <label for="placa"> Placa: </label>
                <input type="text" id="placa" name="placa"  value="{{ $carro->placa }}"/>
            </div>
            <div>
                <label for="cor"> Cor: </label>
                <input type="text" id="cor" name="cor"  value="{{ $carro->Cor }}"/>
            </div>
            <div>
                <label for="ano_fabricacao"> Data de Fabricação: </label>
                <input type="date" id="ano_fabricacao" name="ano_fabricacao"  value="{{ $carro->ano_fabricacao }}"/>
            </div>
            <div>
                <a href="/carro">Novo</a>
                <input type="hidden" id="id" name="id" value="{{ $carro->id}}" />
                <button type="submit"> SALVAR </button>
            </div>
        </form>

            <br/>
        
        <table border="1">
            <thead>
                <tr>
                    <td>Marca</td>
                    <td>Modelo do Veiculo</td>
                    <td>Placa</td>
                    <td>Cor</td>
                    <td>Ano Fabricação</td>
                    <td>Edit</td>
                    <td>Del</td>
                </tr>
            </thead> 
            <tbody>
                @foreach ($carros as $carro)
                    <tr>
                        <td>{{ $carro->marca }}</td>
                        <td>{{ $carro->modelo_veiculo }}</td>
                        <td>{{ $carro->placa }}</td>
                        <td>{{ $carro->cor }}</td>
                        <td>{{ $carro->ano_fabricacao }}</td>
                        <td>
                            <a href="/carro/{{ $carro->id}}/edit">Edit</a>
                        </td>
                        <td>
                            <form action="/carro/{{ $carro->id }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE"/>
                                <button type="submit" onclick="return confirm('Tem certeza?');">Del</button>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody> 

        </table>
    </body>
</html>