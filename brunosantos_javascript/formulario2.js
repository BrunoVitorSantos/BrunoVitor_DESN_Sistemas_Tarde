// Função para aplicar uma máscara a um campo de entrada
function aplicarMascara(input, funcaoMascara) {
    input.addEventListener('input', () => {
        input.value = funcaoMascara(input.value);
    });
}

// Máscara para CPF
function mascaraCPF(valor) {
    valor = valor.replace(/\D/g, ""); // Remove caracteres não numéricos
    valor = valor.replace(/(\d{3})(\d)/, "$1.$2"); // Adiciona o primeiro ponto
    valor = valor.replace(/(\d{3})(\d)/, "$1.$2"); // Adiciona o segundo ponto
    valor = valor.replace(/(\d{3})(\d{1,2})$/, "$1-$2"); // Adiciona o hífen
    return valor;
}

// Máscara para RG
function mascaraRG(valor) {
    return valor.replace(/\D/g, ""); // Remove caracteres não numéricos
}

// Máscara para CEP
function mascaraCEP(valor) {
    valor = valor.replace(/\D/g, ""); // Remove caracteres não numéricos
    valor = valor.replace(/(\d{5})(\d)/, "$1-$2"); // Adiciona o hífen
    return valor;
}

// Máscara para telefone
function mascaraTelefone(valor) {
    valor = valor.replace(/\D/g, ""); // Remove caracteres não numéricos
    valor = valor.replace(/^(\d{2})(\d)/, "($1) $2"); // Adiciona parênteses
    valor = valor.replace(/(\d{4})(\d)/, "$1-$2"); // Adiciona o hífen
    return valor;
}

// Máscara para Rua
function mascaraRua(valor) {
    return valor.replace(/[^a-zA-ZÀ-ÿ\s'-]/g, ""); // Remove caracteres que não sejam letras, espaços, hífens ou acentos
}

// Máscara para Número
function mascaraNumero(valor) {
    return valor.replace(/\D/g, ""); // Remove caracteres que não sejam números
}

// Validação para permitir apenas letras
function permitirSomenteLetras(input) {
    input.addEventListener('input', () => {
        input.value = input.value.replace(/[^a-zA-ZÀ-ÿ\s]/g, ""); // Remove caracteres que não sejam letras ou espaços
    });
}

// Validação para permitir apenas números
function permitirSomenteNumeros(input) {
    input.addEventListener('input', () => {
        input.value = input.value.replace(/\D/g, ""); // Remove caracteres que não sejam números
    });
}

// Adicionar máscaras e validações aos campos de entrada
document.addEventListener('DOMContentLoaded', () => {
    // Máscaras
    const campoCPF = document.querySelector('input[name="cpf"]');
    const campoRG = document.querySelector('input[name="rg"]');
    const campoCEP = document.querySelector('input[name="cep"]');
    const campoTelefone = document.querySelector('input[name="telefone"]');
    const campoRua = document.querySelector('input[name="rua"]');
    const campoNumero = document.querySelector('input[name="numero"]');

    if (campoCPF) aplicarMascara(campoCPF, mascaraCPF);
    if (campoRG) aplicarMascara(campoRG, mascaraRG);
    if (campoCEP) aplicarMascara(campoCEP, mascaraCEP);
    if (campoTelefone) aplicarMascara(campoTelefone, mascaraTelefone);
    if (campoRua) aplicarMascara(campoRua, mascaraRua); // Aplica máscara para Rua
    if (campoNumero) aplicarMascara(campoNumero, mascaraNumero); // Aplica máscara para Número

    // Validações
    const camposTexto = document.querySelectorAll('input[type="text"]:not([name="cpf"]):not([name="rg"]):not([name="cep"]):not([name="rua"]):not([name="numero"]):not([name="email"])');
    const camposNumeros = document.querySelectorAll('input[name="numero"]');

    camposTexto.forEach(input => permitirSomenteLetras(input));
    camposNumeros.forEach(input => permitirSomenteNumeros(input));
});