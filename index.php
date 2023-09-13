<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<style>
    .row {
        margin: 5px;
    }
    label {
        width: 100px;
        text-align: right;
        display: inline-block;
        padding-right: 5px;
    }
    fieldset {
        margin: 10px;
        border-radius: 10px;
        border-color: cadetblue;
    }
    legend {
        font-weight: bold;
    }
</style>
<body>
    <h1>Formulário de cadastro</h1>
    <form action="conexao.php" method="get">
        <fieldset>
            <legend>Dados Pessoais</legend>
            <div class="row">
                <label>Nome:</label><input type="text" name="nome">
                <label>E-mail:</label><input type="text" name="email">
            </div>
        </fieldset>
        
        <fieldset>
            <legend>Dados Profissionais</legend>
            <div class="row">
                <label>Profissão:</label><input type="text" name="profissao">
                <label>Empresa:</label><input type="text" name="empresa">
            </div>
        </fieldset>
        
        <fieldset>
            <legend>Endereço</legend>
            <div class="row">
                <label>Rua:</label><input type="text" name="rua">
            </div>
            <div class="row">
                <label>Número:</label><input type="text" style="width: 80px;" name="numero">
            </div>

            <div class="row">
                <label>Bairro:</label><input type="text" name="bairro">
            </div>

            <div class="row">
                <label>Cidade:</label><input type="text" name="cidade">
                <label>UF:</label>
                <select  style="width: 100px;" name="uf">
                    <option value="">Selecione...</option>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="BA">BA</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RS">RS</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                    <option value="SE">SE</option>
                    <option value="TO">TO</option>    
                </select>
            </div>
        </fieldset>
        
        <fieldset>
            <legend>Informações para contato</legend>
            <div class="row">
                <label>Celular:</label><input type="text" name="celular">
                <label>WhatsApp:</label><input type="text" name="whatsapp">
            </div>

            <div class="row">
                <label>Linkedin:</label><input type="text" name="linkedin">
                <label>GitHub:</label><input type="text" name="github">
            </div>
        </fieldset>

        <div class="row">
            <button type="reset">Limpar</button>
            <button type="submit">Enviar formulário</button>
        </div>
    </form>
</body>
</html>