//executar marcaras
//define o objeto e chama a funcao
function mascara(o, f){
    objeto=o
    funcao=f
    setTimeout("executaMascara()",1)
}

function executaMascara(){
    objeto.value=funcao(objeto.value)
}

// MASCARAS

// MASCARA PARA TELEFONE

function telefone(variavel){
    variavel=variavel.replace(/\D/g,"") //Remove tudo o que não é dígito

    //A LINHA ABAIXO É RESPONSAVEL DE ADICIONAR PARENTESES EM VOLTA DOS DOIS PRIMEIROS DIGITOS
    variavel=variavel.replace(/^(\d\d)(\d)/g,"($1) $2")
    
    //A LINHA ABAIXO É RESPONSAVEL DE ADICIONAR O HÍFEN ENTRE O QUARTO E O QUINTO DIGITO
    variavel=variavel.replace(/(\d{4})(\d)/,"$1-$2")
    
    return variavel
}

function RGeCPF (variavel){
    variavel=variavel.replace(/\D/g,"") //Remove tudo o que não é dígito

    //COLOCA PONTO ENTRE O TERCEIRO E O QUARTO DIGITO
    variavel=variavel.replace(/(\d{3})(\d)/,"$1.$2")

    variavel=variavel.replace(/(\d{3})(\d)/,"$1.$2")

    //COLOCA PONTO ENTRE O SEXTO E O SETIMO DIGITO
    variavel=variavel.replace(/(\d{3})(\d)/,"$1-$2")

    return variavel
}

function cep(variavel){
    variavel=variavel.replace(/\D/g,"") //Remove tudo o que não é dígito

    variavel=variavel.replace(/(\d{3})(\d{1,2})$/,"$1-$2")

    return variavel
}

function data(variavel){
    variavel=variavel.replace(/\D/g,"") //Remove tudo o que não é dígito
    variavel=variavel.replace(/(\d{2})(\d)/,"$1/$2")
    variavel=variavel.replace(/(\d{2})(\d)/,"$1/$2")
    return variavel
}

function CartaoSus(variavel){
    variavel=variavel.replace(/\D/g,"") //Remove tudo o que não é dígito
    variavel=variavel.replace(/(\d{3})(\d)/,"$1 $2")
    variavel=variavel.replace(/(\d{4})(\d)/,"$1 $2")
    variavel=variavel.replace(/(\d{4})(\d)/,"$1 $2")
    return variavel
}