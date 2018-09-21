



$('#botao').on("click", function(){

	var dados = $('#form-cadastro').serialize();

	$.ajax({
		url: 'curl.php',
		dataType: 'json',
		method: 'post',
		data: dados,
		complete:function(response){
			$('#resposta').html(response);
		}
	});

});














//FORMA GAMBIARRADA PARA PEGAR OS DADOS DO CARTÃO E GERAR UM TOKEN DE PAGAMENTO

// Iugu.setAccountID("49DD8EF63D6D477CA6376F5AAC59861D");
// Iugu.setTestMode(true);

// cc = Iugu.CreditCard("4111111111111111", 
//          "12", "2017", "Nome", 
//          "Sobrenome", "123");

// $('#botao').on("click", function(){

// 	var data = $('input[name="data_vencimento"]').val();

// 	data = data.split('/');

// 	var nome = $('input[name="nome"]').val();

// 	nome = nome.split(' ');

// 	var cc = Iugu.CreditCard(
// 			$('input[name="numero_cartao"]').val(),
// 			data[0],
// 			data[1],			
// 			nome[0],
// 			nome[1],
// 			$('input[name="numero_seguranca"]').val()
// 			);
// 	Iugu.createPaymentToken(cc, function(response) {
// 		if (response.errors) {
// 			alert("Erro salvando cartão");
// 		} else {
// 			console.log("Token criado:" + response.id);
// 		}
// 	});
// });