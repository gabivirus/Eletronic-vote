var voteRow = [];

function atualizaNumeros() 
{
    var numInput = document.getElementById("number").value;
    document.getElementById("display1").value = numInput.slice(0);
    document.getElementById("display2").value = numInput.slice(1);
    document.getElementById("display3").value = numInput.slice(2);
    document.getElementById("display4").value = numInput.slice(3);
    document.getElementById("display5").value = numInput.slice(4);
}

function digita(num)
{
    var numInput = document.getElementById("number").value;
    document.getElementById("number").value = numInput + num;
    atualizaNumeros;
}

function corrige()
{
    document.getElementById("number").value = null;
}

function branco()
{

}

